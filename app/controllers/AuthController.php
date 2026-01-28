<?php

class AuthController {

    public function login() {
        require_once '../app/views/layouts/auth_header.php';
        require_once '../app/views/auth/login.php';
        require_once '../app/views/layouts/auth_footer.php';
    }

    public function doLogin() {

        session_start();

        $user = $_POST['username'] ?? '';
        $pass = $_POST['password'] ?? '';

        if ($user === 'admin' && $pass === '1234') {
            $_SESSION['user'] = $user;
            header("Location: " . BASEURL . "/dashboard");
            exit;
        }

        header("Location: " . BASEURL . "/auth/login?error=1");
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASEURL . "/auth/login");
    }
}
