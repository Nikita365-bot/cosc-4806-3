<?php

class Login extends Controller
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $db = db_connect();
            $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindValue(':username', $username);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // Plain-text password check
            if ($row && password_verify($password, $row['password'])) {
                $_SESSION['auth'] = 1;
                $_SESSION['username'] = $row['username'];
                header('Location: /home');
                exit;
            } else {
                echo "Invalid username or password";
            }
        }

        // Show the login form view
        $this->view('login/index');
    }
}
