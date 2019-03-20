<?php
require_once 'functions.php';
require_once '../db/db_query.php';

$db = getDbConnection();
$newParagraph = $_POST['edit_form'];
$addSubmit = $_POST['add_form'];
$paragraphs = addAboutMe($db);
$editDropdownResults = editParagraphDropdown($paragraphs);


if (isset($_POST['edit'])){
    $editChoice = $_POST['editSelect'];
    $getEdit = getEdit($db, $editChoice);
    $pasteEdit = pasteEdit($getEdit);
}


if (isset($_POST['submit'])){
    $submitChoice = $_POST['editId'];
    editParagraph($db, $submitChoice, $newParagraph);
    header('Location: admin_page.php');
}
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
    <div class="mainText container">
            <h4>Welcome</h4>
            <h2>RICHARD</h2>
            <h3>'ABOUT ME'</h3>
    </div>
    <div class="forms container">
        <div class="formSize">
            <p>Add additional paragraphs</p>
            <form method="post" action="admin_add.php" class="formAdd editParaRight">
                <textarea name="add_form"  required></textarea>
                <div>
                <input type="submit" name="addSubmit">
                </div>
            </form>
        </div>
        <div class="formSize">
            <p>Edit paragraph</p>
            <form method="post" class="formText" action="admin_page.php">
                <h4>Choose which paragraph to edit</h4>
                <select name="editSelect">
                    <option selected="selected" value="choose">Choose Paragraph</option>
                    <?php if(isset($editDropdownResults)){
                        echo $editDropdownResults;
                    } ?>
                </select>
                <div class="edit_button">
                    <input type="submit" name="edit" value="Edit">
                </div>
            </form>
            <form method="post" class="formText editParaRight" action="admin_page.php">
                <textarea class="edit_submit" name="edit_form" required><?php
                    if(isset($pasteEdit)){
                        echo $pasteEdit;
                    } ?></textarea>
                <?php if (isset($editChoice)){
                    echo '<input type="hidden" name="editId" value=' . $editChoice . ' />';
                }
                ?>
                <div class="submit_buttons">
                    <?php $submitButton = submitButton(); ?>
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
<!--                    <input type="submit" name="paragraphSelect" value="Select Paragraph">-->
                    <input type="submit" name="paragraphDelete" value="Delete Paragraph">
                </div>
            </form>
        </div>
    </div>

</body>
</html>
