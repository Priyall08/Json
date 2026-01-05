<?php
require_once "../core/Controller.php";
require_once "../app/models/User.php";

class AuthController extends Controller {

    public function signup() {
        header("Content-Type: application/json");

        $user = new User();
        $result = $user->signup($_POST['email'], $_POST['password']);

        if ($result) {
            echo json_encode([
                "status" => "success",
                "message" => "Signup successful"
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Signup failed"
            ]);
        }
    }

    public function login() {
        header("Content-Type: application/json");

        $user = new User();
        $data = $user->getUser($_POST['email']);

        if ($data && password_verify($_POST['password'], $data['password'])) {
            echo json_encode([
                "status" => "success",
                "message" => "Login successful"
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Invalid email or password"
            ]);
        }
    }

    // pages
    public function showLogin() {
        $this->view("login");
    }

    public function showSignup() {
        $this->view("signup");
    }
}
