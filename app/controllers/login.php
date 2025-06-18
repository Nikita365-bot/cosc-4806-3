<?php
class Login extends Controller {

    public function index() {
        $this->view('login/index');
    }

    public function verify() {

        require_once 'app/models/User.php';

        $user = new User();

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($user->verify($username, $password)) {
            $_SESSION['auth'] = 1;
            $_SESSION['username'] = $username;
            header("Location: /home");
            exit;
        } else {
            echo "<script>alert('Invalid username or password');</script>";
            $this->view('login/index');
        }
    }
}
