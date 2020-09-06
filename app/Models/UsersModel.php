<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{

    protected $table = 't_users';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['name', 'user_email', 'password', 'password2'];

    public function index()
    {
        return view('Users/index');
    }



    public function saveRegis($data)
    {
        $query = $this->db->table('t_users')->insert($data);
        return $query;
    }
}
