<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    protected $UsersModel;
    public function __construct()

    {
        $this->usersModel = new UsersModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Login | Dev'
        ];

        echo view('templates/auth_header', $data);
        echo view('users/index');
        echo view('templates/auth_footer');
    }

    public function register()
    {

        $data = [
            'title' => 'Register | Dev'
        ];

        echo view('templates/auth_header', $data);
        echo view('users/register');
        echo view('templates/auth_footer');
    }
    //--------------------------------------------------------------------

}
