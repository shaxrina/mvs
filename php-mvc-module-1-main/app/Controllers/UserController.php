<?php

require_once '../app/Models/User.php';
require_once '../core/Controller.php';

class UserController extends Controller
{
    private $userModel;

    public function __construct()
    {
        session_start();
        $this->userModel = new User();
    }

    public function registerForm()
    {
        $this->view('users/register');
    }
    public function loginForm()
    {
        $this->view('users/login');
    }
    public function register(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->userModel->register($name, $email, $password);
        header('Location: /');
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->userModel->findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header('Location: /posts/index');
        } else {
            $_SESSION['error'] = 'Login yoki parol noto‘g‘ri!';
            header('Location: /');
        }
    }
    public function logout()
    {
        session_destroy();
        header('Location: /');
    }
}
