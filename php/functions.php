<?php


/**
 * this function selects the paragraphs in the database and fetches all the data
 *
 * @param $db PDO is the variable that connects the php to mysql and allows it to be called in functions
 *
 * @return mixed returns all the data in order of their id
 */
function addAboutMe(PDO $db)
{
    $query = $db->prepare("SELECT `id`, `paragraph` FROM `about_me` WHERE `deleted` = '0';");
    $query->execute();
    return $query->fetchAll();
}


/**
 * this function enables the data to be returned as a <p> string in the website
 *
 * @param array $paragraphs calls in the method that contains all the arrays of the paragraphs
 *
 * @return string returns each paragraph in the database as a <p> string and enables it to be output in the website
 */
function addParagraphs(array $paragraphs) :string {


        $paragraphPlaceholder = '';
        foreach ($paragraphs as $paragraph) {
            if (is_string($paragraph['paragraph']) && array_key_exists('paragraph', $paragraph)) {
                $paragraphPlaceholder .= '<p>' . $paragraph['paragraph'] . '</p>';
            } else {
                $paragraphPlaceholder .= '';
            }
        }
        return $paragraphPlaceholder;

}


/**
 * this function adds the string input in the 'add' form to the database
 *
 * @param $db PDO calls the database from the db_query because this function requires it
 *
 * @param $addSubmit string inserts the string in the text area to the database and pairing it with an `id` and a `deleted` number
 */
function addParagraphToDb (PDO $db, string $addSubmit) : void{
    $query = $db->prepare("INSERT INTO `about_me` (`paragraph`) VALUES (:newParagraph);");
    $query->bindParam(':newParagraph', $addSubmit);
    $query->execute();
}


function editParagraphDropdown ($paragraphs){
    $paragraphList = '';
    $i = 1 ;
    foreach ($paragraphs as $paragraph){
        $charPreview = substr($paragraph['paragraph'], 0, 20);
        $paragraphList .= '<option value=' . $paragraph['id'] . '>paragraph '. $i++ . ' ' . $charPreview . '</option>';
    }
    return $paragraphList;
}




function getEdit($db, $editChoice){
        $query = $db->prepare("SELECT `paragraph` FROM `about_me` WHERE `id` = :choiceId;");
        $query->bindParam(':choiceId',$editChoice);
        $query->execute();
        return $query->fetchAll();
}

//function pasteEdit($getEdit){
//    $editPopulate = '';
//    $editPopulate .= $getEdit[0]['paragraph'];
//    return $editPopulate;
//}

function pasteEdit($getEdit){
    $editPopulate = '';
    foreach ($getEdit as $paragraph){
        $editPopulate .= $paragraph['paragraph'];
    }
    return $editPopulate;
}






