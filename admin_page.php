<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secured Page Access</title>
    <link rel= "stylesheet" type="text/css" href= "normalize.css">
    <link rel= "stylesheet" type="text/css" href= "admin_style.css">
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
            <form class="formAdd">
                <textarea rows="6" cols="80" name="add_form"></textarea>
                <input type="submit">
            </form>
        </div>
        <div class="formSize">
            <p>Edit paragraph</p>
            <form>
                <textarea rows="6" cols="80" name="edit_form"></textarea>
                <h4>Choose which paragraph to edit</h4>
                <select>
                    <option>paragraph 1</option>
                    <option>paragraph 2</option>
                    <option>paragraph 3</option>
                </select>
                <div class="submit_buttons">
                    <input type="submit" value="Edit Text">
                    <input type="submit" value="Submit New Text">
                </div>
            </form>
        </div>
        <div class="formSize">
            <p>Delete paragraph</p>
            <form>
                <h4>Choose which paragraph to delete</h4>
                <select>
                    <option>paragraph 1</option>
                    <option>paragraph 2</option>
                    <option>paragraph 3</option>
                </select>
                <div class="submit_buttons">
                    <input type="submit" value="Select Paragraph">
                    <input type="submit" value="Delete Paragraph">
                </div>
            </form>
        </div>
    </div>

</body>
</html>
