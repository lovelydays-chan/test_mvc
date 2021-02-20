<?php

use Lnw\Core\Controller;
use Lnw\Core\Validator;

class UsersController extends Controller
{
    protected function index()
    {
        $this->returnView('board.login', false);
    }

    protected function register()
    {
        $this->returnView('board.register', false);
    }

    protected function add()
    {
        $data = [
            'name' => $this->request('name'),
            'email' => $this->request('email'),
            'password' => $this->request('password'),
        ];
        $validator = (new Validator())->make(
            $data,
            $rules = [
                'name' => ['required', 'min:3'],
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]
        );
        if ($validator->fails()) {
            $data = [
                'errors' => $validator->errors(),
            ];
            $this->returnView('board.register', $data);
            exit;
        }
        try {
            $user = new UserModel();
            $data['password'] = sha1($this->request('password'));
            $user::insert($data);
            header('Location: /board/users/login');
            exit;
        } catch (\Exception $e) {
            Messages::setMsg('Save Data Error.', 'error');
            $this->returnView('board.register', false);
        }
    }

    protected function login()
    {
        $data = [
            'email' => $this->request('email'),
            'password' => $this->request('password'),
        ];
        $validator = (new Validator())->make(
            $data,
            $rules = [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]
        );
        if ($validator->fails()) {
            $data = [
                'errors' => $validator->errors(),
            ];
            $this->returnView('board.login', $data);
            exit;
        }
        $user = new UserModel();
        $data['password'] = sha1($this->request('password'));
        $result = $user::where($data)->first();
        if ($result) {
            $_SESSION['is_logged_in'] = true;
            $_SESSION['user_data'] = [
                'id' => $result['id'],
                'name' => $result['name'],
                'email' => $result['email'],
            ];
            header('Location: /board');
            exit;
        }
        Messages::setMsg('Login Error.', 'error');
        $this->returnView('board.login', false);
        exit;
    }

    protected function logout()
    {
        unset($_SESSION['is_logged_in'], $_SESSION['user_data']);

        session_destroy();
        // Redirect
        header('Location: /');
    }
}
