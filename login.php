<?php
/**
 * Created by PhpStorm.
 * User: cserrao
 * Date: 20/04/2018
 * Time: 19:06
 */
session_start();

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$db = mysqli_connect("127.0.0.1", "root", "teste123", "ligepl2018") or die("Erro na ligação à BD!!!");

$sql = "SELECT * FROM users WHERE username='".$email."' AND password='".sha1($password)."'";

if(mysqli_query($db, $sql)) {
    if(mysqli_affected_rows($db) == 1) {
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $email;
        header("Location: app.php");
    } else {
        header("Location: index.php?status=-2");
    }
} else {
    header("Location: index.php?status=-3");
}
