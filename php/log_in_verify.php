<?php
session_start();
require_once 'functions.php';
require_once '../db/db_query.php';

$db = getDbConnection();

if (isset($_POST['username'])){
    $postUsername = $_POST['username'];
}

if (isset($_POST['password'])){
    $postPassword = $_POST['password'];
}

if (isset($_POST['username'])){
    $postUsername = $_POST['username'];
    $test = usernameVerify($db, $postUsername, $postPassword);
    if ($test == true || $_SESSION == true){
        $_SESSION['valid'] = true;
        header('Location: admin_page.php');
    } else {
        header('Location: log_in.php');
    }
}





