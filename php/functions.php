<?php


/**
 * this function selects the paragraphs in the database and fetches all the data
 *
 * @param $db string is the variable that connects the php to mysql and allows it to be called in functions
 *
 * @return mixed returns all the data in order of their id
 */
function addAboutMe($db)
{
    $query = $db->prepare("SELECT `paragraph` FROM `about_me`");
    $query->execute();
    return $query->fetchAll();
}

//
///**
// * this function enables the data to be returned as a <p> string in the website
// *
// * @param array $paragraphs calls in the method that contains all the arrays of the paragraphs
// *
// * @return string returns each paragraph in the database as a <p> string and enables it to be output in the website
// */
//function addParagraphs(array $paragraphs) :string {
//    if (is_array($paragraphs)) {
//
//        $paragraphPlaceholder = '';
//        foreach ($paragraphs as $paragraph) {
//            $paragraphPlaceholder .= '<p>' . $paragraph['paragraph'] . '</p>';
//        }
//        return $paragraphPlaceholder;
//    } else return 'You must enter an array';
//
//}

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
?>

