<?php
/**
 * Created by PhpStorm.
 * User: cserrao
 * Date: 20/04/2018
 * Time: 19:06
 */

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$db = mysqli_connect("127.0.0.1", "root", "lige2018", "ligepl") or die("Erro na ligação à BD!!!");

$sql = "SELECT * FROM users WHERE email='".$email."' AND password='".sha1($password)."'";

if(mysqli_query($db, $sql)) {
    if(mysqli_affected_rows($db) == 1) {
        header("Location: index.php?status=0");
    } else {
        header("Location: index.php?status=-2");
    }
} else {
    header("Location: index.php?status=-3");
}
