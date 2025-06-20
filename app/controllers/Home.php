<?php

class Home extends Controller {
    public function index() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== 1) {
            header('Location: /login');
            exit;
        }

        $this->view('home/index', [
            'username' => $_SESSION['username']
        ]);
    }
}
