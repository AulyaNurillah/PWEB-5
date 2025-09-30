<?php
require_once 'db.php';

class User {

    public static function signup($username, $email, $password) {
        global $conn;
        $check = $conn->prepare("SELECT id FROM users WHERE email=?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();
        if($check->num_rows > 0) return false;

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $passwordHash);
        return $stmt->execute();
    }

    public static function login($email, $password) {
        global $conn;
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $res = $stmt->get_result();
        if($res->num_rows == 1){
            $row = $res->fetch_assoc();
            if(password_verify($password, $row['password'])){
                return $row;
            }
        }
        return false;
    }
}
?>