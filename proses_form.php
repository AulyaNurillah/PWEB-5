<?php
session_start();
require_once 'user.php';
header('Content-Type: application/json');

$action = $_POST['action'] ?? '';

if($action === 'signup') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(User::signup($username, $email, $password)){
        echo json_encode(['success'=>true, 'message'=>'Signup berhasil! Silakan login.']);
    } else {
        echo json_encode(['success'=>false, 'message'=>'Email sudah terdaftar.']);
    }

} elseif($action === 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = User::login($email, $password);
    if($user){
        $_SESSION['user'] = $user;
        echo json_encode(['success'=>true, 'message'=>"Halo, {$user['username']}"]);
    } else {
        echo json_encode(['success'=>false, 'message'=>'Email atau password salah']);
    }

} elseif($action === 'logout') {
    session_destroy();
    echo json_encode(['success'=>true]);
}
?>