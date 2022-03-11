<?php

namespace App\Controllers;
use App\Models\UsersModel;

class User extends BaseController
{
    protected $UsersModel;
    

    public function __construct()
    {
        $this->UsersModel = new UsersModel();
    }

    public function index()
    {
        $data['title'] = 'Kodeku - My Profile';
        return view('user/index', $data);
    }

    public function about()
    {
        $data['title'] = 'Kodeku - My Profile';
        return view('user/about', $data);
    }

    public function my_profile()
    {
        $data['title'] = 'Kodeku - My Profile';
        return view('user/my_profile', $data);
    }

    public function edit_profile($username)
    {
        $data = [
            'title' => 'Kodeku - Ubah Profil',
            'validation' => \Config\Services::validation(),
            'users' => $this->UsersModel->getUsers($username),
        ];
        return view('/user/edit_profile', $data);
    }



    public function update_profile($id)
    {
        //username
        $uploadLama = $this->UsersModel->getUsers($this->request->getVar('id'));
        if ($uploadLama['username'] == $this->request->getVar('username')) {
            $rule_username = 'required';
        } else {
            $rule_username = 'required|is_unique[users.username]';
        }
        //validasi input
        if (!$this->validate([
                'username' => [
                    'rules' => $rule_username,
                    'errors' => [
                        'required' => 'Username harus diisi.',
                        'is_unique' => 'Username sudah digunakan.',
                    ]
                ],
                'fullname' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Lengkap harus diisi.',
                    ]
                ],
                'email' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Email harus diisi.',
                    ]
                ],
                'user_image' => [
                    'rules' => 'max_size[user_image,5024]|is_image[user_image]|mime_in[user_image,image/jpg,image/jpeg,image/png,image/webp,image/svg,image/SVG,image/PNG,image/JPEG,image/JPG]',
                    'errors' => [
                        'max_size' => 'Minimal file berukuran 5MB.',
                        'is_image' => 'Yang anda pilih bukan gambar.',
                        'mime_in' => 'Yang anda pilih bukan gambar.',
                    ]
                ],
            ])) {
        return redirect()->to('/user/edit_profile/' . $this->request->getVar('id'))->withInput();
        }

        $fileSampul = $this->request->getFile('user_image');
        //cek gambar apakah gambar lama
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            //generate nama file random
            $namaSampul = $fileSampul->getRandomName();
            //pindahkan gambar
            $fileSampul->move('img', $namaSampul);
            //hapus file lama
            $lama = $this->request->getVar('sampulLama');
            if( $lama != 'default.png'){
                unlink('img/' . $this->request->getVar('sampulLama'));
            }
            
        }

        $id = url_title($this->request->getVar('id'), '-', true);
        $this->UsersModel->save([
            'id' =>$id,
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname'),
            'email' => $this->request->getVar('email'),
            'user_image' => $namaSampul,
        ]);
        session()->setFlashdata('pesan', 'Project Telah Berhasil Diubah !!!');

        return redirect()->to('/user/my_profile');
    }
}
