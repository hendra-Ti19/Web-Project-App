<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin extends BaseController
{
    protected $db,$builder;
    protected $UsersModel;

    public function __construct(){
        $this->UsersModel = new UsersModel();
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }


    public function index()
    {
        //pagination
        $currentPage = $this->request->getVar('page_users') ? $this->request->getVar('page_users') : 1;
        //searhcing   
        $keyword = $this->request->getVar('keyword');
            if($keyword){
                $this->UsersModel->search($keyword);
            }else{
                $users = $this->UsersModel;
            }

        //
        $data = [
            'title' => 'Kodeku - User List',

            'users' => $this->UsersModel->paginate(5, 'users'),
            'pager' => $this->UsersModel->pager,
            'currentPage' => $currentPage,
        ];
        //// $users = new \Myth\Auth\Models\UserModel();
        //// $data['users'] = $users->findAll();
////////////////////////////////
        $this->builder->select('users.id as userid, username, email, name  ');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();
//////////////////////////////////
        // $data['users'] = $query->getResult();
        $role['users'] = $query->getResult();

        return view('admin/index', $data, $role);
    }


    public function detail($id = 0)
    {
        $data['title'] = 'Kodeku - My Profile';
        
        $this->builder->select('users.id as userid, username, email, fullname, user_image, name, password_hash  ');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if(empty($data['user'])){
            return redirect()->back();
        }

        return view('admin/detail', $data);
    }



}
