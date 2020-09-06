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
                'rules' => 'required|alpha_space|min_length[5]',
                'errors' => [
                    'required' => 'Full Name Harus diisi.',
                    'alpha_space' => 'Full Name Hanya berisi Karakter Huruf.',
                    'min_length' => 'Full Name minimal 5 Karakter.'
                ]
            ],
            'username' => [
                'rules' => 'required|min_length[6]|alpha_dash',
                'errors' => [
                    'required' => 'Username Harus diisi.',
                    'min_length' => 'Username minimal 6 Karakter.',
                    'alpha_dash' => 'Username belum sesuai.'
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
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password Harus diisi.',
                    'min_length' => 'Masukkan Password minimal 8 Karakter.'
                ]
            ],
            'password2' => [
                'rules' => 'required|matches[password]|min_length[8]',
                'errors' => [
                    'required' => 'Password Repeat Harus diisi.',
                    'matches' => 'Password Repeat Harus sama dengan Password',
                    'min_length' => 'Masukkan Password minimal 8 Karakter.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/users/register')->withInput()->with('validation', $validation);
        }
        $model = new UsersModel();
        $data = array(
            'name' => $this->request->getVar('name'),
            'username' => $this->request->getVar('username'),
            'user_email' => $this->request->getVar('user_email'),
            'password' => md5($this->request->getVar('password')),
            'password2' => md5($this->request->getVar('password2')),
            'id_role' => '2',
            'is_active' => '1'
        );

        session()->setFlashdata('pesan', 'Success! Your Account has been Created.');

        $model->saveRegis($data);
        return redirect()->to('/users/register');
    }

    //--------------------------------------------------------------------

}
