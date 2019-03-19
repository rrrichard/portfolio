<?php
require_once 'functions.php';
require_once '../db/db_query.php';
//require_once 'admin_edit.php';
//$editParagraphs = editDropdown($db);
$db = getDbConnection();
$editChoice = $_POST['editSelect'];
$paragraphs = addAboutMe($db);
$editDropdownResults = editParagraphDropdown($paragraphs);

$getEdit = getEdit($db, $editChoice);
$pasteEdit = pasteEdit($getEdit);
var_dump($editChoice);
var_dump($getEdit);


//if (isset($editChoice)){
//    $query = $db->prepare("SELECT `paragraph` FROM `about_me` WHERE `id` = :choiceId");
//    $query->bindParam(':choiceId',$editDropdownResults);
//    $query->execute();
//    return $query->fetchAll();
//}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secured Page Access</title>
    <link rel= "stylesheet" type="text/css" href= "../normalize.css">
    <link rel= "stylesheet" type="text/css" href= "../admin_style.css">
</head>
<body>
    <div class="mainText">
        <div class="container">
            <h4>Welcome</h4>
            <h2>RICHARD</h2>
            <h3>'ABOUT ME'</h3>
        </div>
    </div>

    <div class="forms container">
        <div class="formSize">
            <p>Add additional paragraphs</p>
            <form method="post" action="admin_add.php" class="formAdd">
                <textarea rows="6" cols="80" name="add_form" required></textarea>
                <input type="submit" name="addSubmit">
            </form>
        </div>
        <div class="formSize">
            <p>Edit paragraph</p>
            <form method="post" action="admin_page.php">
                <textarea rows="6" cols="80" name="edit_form"><?php echo $pasteEdit; ?></textarea>

                <h4>Choose which paragraph to edit</h4>
                <select name="editSelect">
                    <?php echo $editDropdownResults; ?>
                </select>
                <div class="submit_buttons">
                    <input type="submit" name="textEdit" value="Edit Text">
                    <input type="submit" name="textSubmit" value="Submit New Text">
                </div>
            </form>
        </div>
        <div class="formSize">
            <p>Delete paragraph</p>
            <form>
                <h4>Choose which paragraph to delete</h4>
                <select name="deleteSelect">
                    <option>paragraph 1</option>
                    <option>paragraph 2</option>
                    <option>paragraph 3</option>
                </select>
                <div class="submit_buttons">
                    <input type="submit" name="paragraphSelect" value="Select Paragraph">
                    <input type="submit" name="paragraphDelete" value="Delete Paragraph">
                </div>
            </form>
        </div>
    </div>

</body>
</html>
