<?php
class AuthController extends Controller {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $this->model('User')->login($_POST);
            if ($user) {
                $_SESSION['user'] = $user;
                header("Location: /projects/app_oop_modular/post/index");
                exit;
            }
        }
        $this->view('auth/login');
    }

    public function logout() {
        session_destroy();
        header("Location: /projects/app_oop_modular/");
        exit;
    }
}
