<?php
/**
 * Created by PhpStorm.
 * User: cserrao
 * Date: 27/04/2018
 * Time: 18:53
 */

session_start();

unset($_SESSION['loggedin']);
session_destroy();

header("Location: index.php");
