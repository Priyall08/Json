<?php

require_once "../core/Model.php";

class User extends Model {

    public function signup($email, $password) {

        $password = password_hash($password, PASSWORD_DEFAULT);
        return $this->conn->query(
            "INSERT INTO users (email, password) VALUES ('$email', '$password')"
        );
    }

    public function getUser($email) {

        $result = $this->conn->query(
            "SELECT * FROM users WHERE email='$email'"
        );
        return $result->fetch_assoc();
    }
}




http://localhost/json-pratical/public/index.php?action=loginForm