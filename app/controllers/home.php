<?php

class Home extends Controller {
    public function index() {

        if (!isset($_SESSION['auth'])) {
            echo "You are not logged in";
            return;
        }

        $username = $_SESSION['username'];
        require_once 'app/views/home/index.php';
    }
}
