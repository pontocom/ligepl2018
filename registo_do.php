<?php
/**
 * Created by PhpStorm.
 * User: cserrao
 * Date: 20/04/2018
 * Time: 19:18
 */

$db = mysqli_connect("127.0.0.1", "root", "teste123", "ligepl2018") or die("Erro na ligação à BD!!!");

$sql = "INSERT INTO users VALUES ('".$_REQUEST['email']."', '".sha1($_REQUEST['password'])."')";
//echo $sql;

if(mysqli_query($db, $sql)) {
    header("Location: index.php?status=0");
} else {
    header("Location: index.php?status=-1");
}

