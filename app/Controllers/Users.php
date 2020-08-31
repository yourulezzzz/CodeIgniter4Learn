<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login | Dev'
        ];

        echo view('templates/header', $data);
        echo view('users/index');
    }

    public function register()
    {
        $data = [
            'title' => 'Register | Dev'
        ];

        echo view('templates/header', $data);
        echo view('users/register');
    }

    //--------------------------------------------------------------------

}
