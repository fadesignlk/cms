<?php
require_once 'models/User.php';

class AuthController {
    private $userModel;
    private $db;

    public function __construct($db) {
        $this->db = $db;
        $this->userModel = new User($this->db); // Pass db to the model
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = $this->userModel->login($username, $password);

            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                header('Location: index.php');
                exit();
            } else {
                $error = "Invalid username or password.";
            }
        }
        include 'views/auth/login.php';
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->userModel->register($username, $password);
            header('Location: index.php?controller=auth&action=login');
            exit();
        }
        include 'views/auth/register.php';
    }

    public function logout() {
        session_destroy();
        header('Location: index.php?controller=auth&action=login');
        exit();
    }
}
?>