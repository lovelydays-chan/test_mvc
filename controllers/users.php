<?php

use Lnw\Core\Controller;
use Lnw\Core\Validator;
use Validate\LoginValidate;
use Validate\AddUserValidate;

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

    protected function add($request)
    {
        $validator = new AddUserValidate($request);
        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        if ($validator->fails()) {
            $data = [
                'errors' => $validator->errors(),
            ];
            $this->redirectTo('/board/users/register', $data);
        }
        try {
            $user = new UserModel();
            $data['password'] = sha1($request['password']);
            $user::insert($data);
            $this->redirectTo('/board/users/login');
        } catch (\Exception $e) {
            $this->redirectTo('/board/users/register');
        }
    }

    protected function login($request)
    {
        $validator = new LoginValidate($request);
        if ($validator->fails()) {
            $data = [
                'errors' => $validator->errors(),
            ];
            $this->redirectTo('/board/users/login', $data);
        }
        $user = new UserModel();
        $data['password'] = sha1($request['password']);
        $result = $user::where($data)->first();
        if ($result) {
            $_SESSION['is_logged_in'] = true;
            $_SESSION['user_data'] = [
                'id' => $result['id'],
                'name' => $result['name'],
                'email' => $result['email'],
            ];
            $this->redirectTo('/board');
        }
        $this->returnView('board.login', false);
    }

    protected function logout()
    {
        unset($_SESSION['is_logged_in'], $_SESSION['user_data']);

        session_destroy();
        // Redirect
        $this->redirectTo('/');
    }
    public function showProfile()
    {
        $data = [
            'full_name' => 'Channarong Phonkhan',
            'email' => 'channaxx@gmail.com',
            'phone' => ' - ',
            'mobile' => '089-xxx-4321',
            'address' => 'Bang Muang,Samut Prakan,Thailand'
        ];
        $this->returnView('profile.index', $data);
    }
}
