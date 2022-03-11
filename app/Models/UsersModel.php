<?php 

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model{
    protected $table = 'users';
    protected $useTimestamp = true;
    protected $allowedFields = ['email','username','fullname','user_image','password_hash','reset_hash'];

    public function getUsers($id = false){
        if($id == false){
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }


    public function search($keyword){
        // $builder = $this->table('upload');
        // $builder->like('judul', $keyword);
        // return $builder;
        return $this->table('users')->like('username', $keyword)->orLike('fullname', $keyword)->orLike('email', $keyword);
    }
}
