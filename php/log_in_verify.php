<?php
session_start();
require_once 'functions.php';
require_once '../db/db_query.php';

$db = getDbConnection();

if (isset($_POST['username']) && isset($_POST['password'])){
    $postUsername = $_POST['username'];
    $postPassword = $_POST['password'];
    $test = usernameVerify($db, $postUsername, $postPassword);
    if ($test == true){
        $_SESSION['valid'] = true;
        header('Location: admin_page.php');
    } else {
        header('Location: log_in.php');
    }
}





