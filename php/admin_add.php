<?php

require_once 'functions.php';
require_once '../db/db_query.php';

$addSubmit = $_POST['add_form'];
$db = getDbConnection();
//addParagraphToDb($db, $addSubmit);


if (empty(trim($addSubmit))){
    header('Location: admin_page.php');
} else addParagraphToDb($db, $addSubmit);


?>

Your new paragraph has been successfully added, click <a href="admin_page.php">here</a> if you want to do more.
Or click <a href="../index.php">here</a> to go view the portfolio.
