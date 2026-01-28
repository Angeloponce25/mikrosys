<?php
class DashboardController {

    public function __construct() {
        session_start();

        if (!isset($_SESSION['user'])) {
            header("Location: " . BASEURL . "/auth/login");
            exit;
        }
    }

    public function index() {
        require_once '../app/views/dashboard/index.php';
    }
}
