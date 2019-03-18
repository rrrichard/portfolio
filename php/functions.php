<?php


/**
 * this function selects the paragraphs in the database and fetches all the data
 *
 * @param $db is the variable that connects the php to mysql and allows it 
 *
 * @return mixed
 */
function addAboutMe($db)
{
    $query = $db->prepare("SELECT `paragraph` FROM `about_me`");
    $query->execute();
    return $query->fetchAll();
}

function addParagraphs(array $paragraphs) :string {
    if (is_array($paragraphs)) {

        $paragraphPlaceholder = '';
        foreach ($paragraphs as $paragraph) {
            $paragraphPlaceholder .= '<p>' . $paragraph['paragraph'] . '</p>';
        }
        return $paragraphPlaceholder;
    } else return 'You must enter an array';

}