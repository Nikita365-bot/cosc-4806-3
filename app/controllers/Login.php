<?php
// app/controllers/Login.php

require_once 'app/models/User.php';

class Login extends Controller {

    // Show the login form
    public function index() {
        // No session logic here – view just renders the form
        $this->view('login/index');
    }

    // Handle form submission
    public function verify() {
        // Start the session
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Grab POST data
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Authenticate via the User model
        $user = new User();
        if ($user->authenticate($username, $password)) {
            // On success, redirect to home
            header('Location: /home');
            exit;
        } else {
            // On failure, back to login with JS alert
            echo "<script>alert('Invalid username or password'); window.location = '/login';</script>";
            exit;
        }
    }
}
