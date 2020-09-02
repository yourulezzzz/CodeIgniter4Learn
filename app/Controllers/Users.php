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
            'title' => 'Register | Dev',
            'validation' => \Config\Services::validation()
        ];

        echo view('templates/auth_header', $data);
        echo view('users/register');
        echo view('templates/auth_footer');
    }

    public function regis()
    {
        //Validasi Input
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Full Name Harus diisi.'
                ]
            ],
            'user_email' => [
                'rules' => 'required|valid_email|valid_emails|is_unique[t_users.user_email]',
                'errors' => [
                    'required' => 'Email Harus diisi.',
                    'is_unique' => 'Email sudah terdaftar.',
                    'valid_email' => 'Email tidak Valid.',
                    'valid_emails' => 'Email tidak Valid.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password Harus diisi.'
                ]
            ],
            'password2' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Password Repeat Harus diisi.',
                    'matches' => 'Password Repeat Harus sama dengan Password'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/users/register')->withInput()->with('validation', $validation);
        }
        $model = new UsersModel();
        $data = array(
            'name' => $this->request->getVar('name'),
            'user_email' => $this->request->getVar('user_email'),
            'password' => md5($this->request->getVar('password')),
            'password2' => md5($this->request->getVar('password2'))
        );

        session()->setFlashdata('pesan', 'Success Create Account.');

        $model->saveRegis($data);
        return redirect()->to('/users/register');
    }

    //--------------------------------------------------------------------

}
