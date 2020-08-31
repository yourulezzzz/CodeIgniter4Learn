<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    public function index()
    {
        return view('Users/index');
    }

    public function register()
    {
        return view('Users/register');
    }
}
