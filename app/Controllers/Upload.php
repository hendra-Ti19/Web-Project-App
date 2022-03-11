<?php

namespace App\Controllers;

use App\Models\UploadModel;

class Upload extends BaseController
{
    protected $UploadModel;

    public function __construct()
    {
        $this->UploadModel = new UploadModel();
    }

    public function index()
    {
        //pagination
        $currentPage = $this->request->getVar('page_upload') ? $this->request->getVar('page_upload') : 1;
        //searhcing   
        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $this->UploadModel->search($keyword);
        }else{
            $upload = $this->UploadModel;
        }

        $data = [
            'title' => 'Kodeku - Project Manger',
            //'upload' => $this->UploadModel->getUpload(),

            //membuat pagination
            'upload' => $this->UploadModel->paginate(5, 'upload'),
            'pager' => $this->UploadModel->pager,
            'currentPage' => $currentPage,
        ];

        // $KodekuModel = new \App\Models\KodekuModel();

        return view('/upload/index', $data);
    }

    public function detail($slug)
    {
        $upload = $this->UploadModel->getUpload($slug);
        $data = [
            'title' => 'Kodeku - Detail Project',
            'upload' => $upload,
        ];

        //jika tidak ada data
        if (empty($data['upload'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException(
                ' ' . $slug . ' Page Not Found'
            );
        }
        return view('/upload/detail', $data);
    }

    public function create()
    {
        // session();

        $data = [
            'title' => 'Kodeku - Upload Project',
            'validation' => \Config\Services::validation(),
        ];

        return view('/upload/create', $data);
    }


    public function save()
    {
        //validasi input
        if (
            !$this->validate([
                'judul' => [
                    'rules' => 'required|is_unique[upload.judul]',
                    'errors' => [
                        'required' => '{field} projek harus diisi.',
                        'is_unique' => '{field} projek sudah ada.',
                    ]
                ],
                'detail' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} projek harus diisi.',
                    ]
                ],
                'link' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} download harus disediakan.',
                    ]
                ],
                'sampul' => [
                    'rules' => 'max_size[sampul,2024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png,image/webp,image/svg],image/PNG,image/JPEG,image/JPG',
                    'errors' => [
                        'max_size' => 'Minimal file berukuran 2MB.',
                        'is_image' => 'Yang anda pilih bukan gambar.',
                        'mime_in' => 'Yang anda pilih bukan gambar.',
                    ]
                ],
            ])
        ) {
            // $validation = \Config\Services::validation();
            return redirect()->to('/upload/create')->withInput();
        }

        //ambil gambar 
        $fileSampul = $this->request->getFile('sampul');
        //apakah tidak ada gambar yang diupload
        if($fileSampul->getError() == 4){
            $namaSampul = 'sampul.jpg';
        }else{
            //generate nama random
            $namaSampul = $fileSampul->getRandomName();
            //pindahkan ke folder image
            $fileSampul->move('img', $namaSampul);

            // //ambil nama file 
            // $namaSampul = $fileSampul->getName();
        }


        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->UploadModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'detail' => $this->request->getVar('detail'),
            'link' => $this->request->getVar('link'),
            'sampul' => $namaSampul,
        ]);
        session()->setFlashdata('pesan', 'Upload Project Telah Berhasil !!!');
        return redirect()->to('/upload');
    }




    public function delete($id){

        //cari gambar berdasarkan id
        $upload = $this->UploadModel->find($id);
        //cek jika file gambar sampul.jpg
        if($upload['sampul'] != 'sampul.jpg'){

            //hapus gambar 
            unlink('img/' . $upload['sampul']);
        } 

        
        $this->UploadModel->delete($id);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus !!!');
        return redirect()->to('/upload');
    }





    public function edit($slug){
        
        $data = [
            'title' => 'Kodeku - Ubah Project',
            'validation' => \Config\Services::validation(),
            'upload' => $this->UploadModel->getUpload($slug)
        ];
        return view('/upload/edit', $data);
    }





    public function update($id){
        //cek judul
        $uploadLama = $this->UploadModel->getUpload($this->request->getVar('slug'));
        if($uploadLama['judul'] == $this->request->getVar('judul')){
            $rule_judul = 'required';
        }else{
            $rule_judul = 'required|is_unique[upload.judul]';
        }
                //validasi input
                if (!$this->validate([
                        'judul' => [
                            'rules' => $rule_judul,
                            'errors' => [
                                'required' => '{field} projek harus diisi.',
                                'is_unique' => '{field} projek sudah ada.'
                            ]
                        ],
                        'detail' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => '{field} projek harus diisi.'
                            ]
                        ],
                        'link' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => '{field} download harus disediakan'
                            ]
                        ],
                        'sampul' => [
                            'rules' => 'max_size[sampul,2024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png,image/webp,image/svg,image/SVG,image/PNG,image/JPEG,image/JPG]',
                            'errors' => [
                                'max_size' => 'Minimal file berukuran 2MB.',
                                'is_image' => 'Yang anda pilih bukan gambar.',
                                'mime_in' => 'Yang anda pilih bukan gambar.',
                            ]
                        ],
                    ])){
                return redirect()->to('/upload/edit/'. $this->request->getVar('slug'))->withInput();
            }
        
        $fileSampul = $this->request->getFile('sampul');
        //cek gambar apakah gambar lama
        if($fileSampul->getError() == 4){
            $namaSampul = $this->request->getVar('sampulLama');
        }else{
            //generate nama file random
            $namaSampul = $fileSampul->getRandomName();
            //pindahkan gambar 
            $fileSampul->move('img', $namaSampul);
            //hapus file lama 
            unlink('img/' . $this->request->getVar('sampulLama'));
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->UploadModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'detail' => $this->request->getVar('detail'),
            'link' => $this->request->getVar('link'),
            'sampul' => $namaSampul,
        ]);

        session()->setFlashdata('pesan', 'Project Telah Berhasil Diubah !!!');

        return redirect()->to('/upload');
    }
}
