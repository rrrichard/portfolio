<?php
require_once 'functions.php';
require_once '../db/db_query.php';
$db = getDbConnection();
$editChoice = $_POST['editSelect'];
$newParagraph = $_POST['edit_form'];
$paragraphs = addAboutMe($db);
$editDropdownResults = editParagraphDropdown($paragraphs);
$getEdit = getEdit($db, $editChoice);

if ($_POST['submit'] == 'Edit'){
    $pasteEdit = pasteEdit($getEdit);
}
if ($_POST['submit'] == 'Submit'){
    $editChoice = $_POST['editId'];
    editParagraph($db, $editChoice, $newParagraph);
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
                <h4>Choose which paragraph to edit</h4>
                <select name="editSelect">
                    <option selected="selected" value="choose">Choose Paragraph</option>
                    <?php echo $editDropdownResults; ?>
                </select>
                <div class="submit_buttons">
                    <input type="submit" name="submit" value="Edit">
                </div>
            </form>

            <form method="post" action="admin_page.php">
                <textarea rows="6" cols="80" name="edit_form"><?php echo $pasteEdit; ?></textarea>
                <?php if (isset($editChoice)){
                    echo '<input type="hidden" name="editId" value=' . $editChoice . ' />';
                }?>
                <div class="submit_buttons">
                    <input type="submit" name="submit" value="Submit">
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
