<?php


$paragraphs = addAboutMe($db);
$paragraphResult = addParagraphs($paragraphs);


function addAboutMe($db)
{
    $query = $db->prepare("SELECT `paragraph` FROM `about_me`");
    $query->execute();
    return $query->fetchAll();
}

function addParagraphs($paragraphs){
    $paragraphPlaceholder = '';
    foreach ($paragraphs as $paragraph){
        $paragraphPlaceholder .= '<p>' . $paragraph['paragraph'] . '</p>';
    }
    return $paragraphPlaceholder;
}