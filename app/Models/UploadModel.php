<?php 

namespace App\Models;

use CodeIgniter\Model;

class UploadModel extends Model{
    protected $table = 'upload';
    protected $useTimestamp = true;
    protected $allowedFields = ['judul','slug','detail','link','sampul','created_at','updated_at'];

    public function getUpload($slug = false){
        if($slug == false){
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }


    public function search($keyword){
        // $builder = $this->table('upload');
        // $builder->like('judul', $keyword);
        // return $builder;
        return $this->table('upload')->like('judul', $keyword)->orLike('detail', $keyword);
    }
}
