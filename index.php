<?php
require_once 'php/functions.php';
require_once 'db/db_query.php';

$db = getDbConnection();
$paragraphs = addAboutMe($db);
$paragraphResult = addParagraphs($paragraphs);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Richard Rabulan | Web Developer</title>
    <link rel= "stylesheet" type="text/css" href= "normalize.css">
    <link rel= "stylesheet" type="text/css" href= "style.css">
</head>
<body>
    <a name="top"></a>
    <header class="navBar featureImage">
        <div class="container">
                <ul>
<!--                    <li><a href="#top" class="navDefault">HOME</a></li>-->
                    <li><a href="#about">ABOUT ME</a></li>
                    <li><a href="#feature">PORTFOLIO</a></li>
                    <li><a href="#footer">CONTACT</a></li>
<!--                    <li><a href="#top" class="navHidden">HOME</a></li>-->
                </ul>
            <h1>RICHARD RABULAN</h1>
            <p>Web Developer</p>
            <a href="#feature" class="more">MORE</a>
        </div>
    </header>
    <section class="portfolio">
        <a id="feature" name="feature"></a>
        <div>
            <h3>MAIN PROJECTS</h3>
            <div class="projectBox project1">
                <h4>PROJECT 1</h4>
                <p>APTITUDE TEST</p>
                <a class="codeLink" href="http://bit.ly/MaydenAptitudeTest" target="_blank">CODE</a>
                <a class="codeLink" href="https://dev.maydenacademy.co.uk/projects/2017/aptitude-test/app/" target="_blank">DEMO</a>
            </div>
            <div class="projectBox project2">
                <h4>PROJECT 2</h4>
                <p>SOLAR SYSTEM</p>
                <a class="codeLink" href="http://bit.ly/solarRR" target="_blank">CODE</a>
                <a class="codeLink" href="http://bit.ly/solarSystemCodePen" target="_blank">DEMO</a>
            </div>
            <div class="projectBox project3">
                <h4>PROJECT 3</h4>
                <p>CMS BUILD</p>
                <a class="codeLink" href="http://bit.ly/cmsPortfolio" target="_blank">CODE</a>
            </div>
            <div class="projectBox project4">
                <h4>PROJECT 4</h4>
                <p>SPEED TYPE GAME</p>
                <a class="codeLink" href="http://bit.ly/speedTypeGameGit" target="_blank">CODE</a>
            </div>
            <div class="projectBox project5">
                <h4>PROJECT 5</h4>
                <p>TOP DOG APP</p>
                <a class="codeLink" href="http://bit.ly/topDogAppGit" target="_blank">CODE</a>
                <a class="codeLink" href="http://bit.ly/topDogApp" target="_blank">DEMO</a>
            </div>
            <div class="projectBox project6">
                <h4>PROJECT 6</h4>
                <p>PAINTMASTER 3000</p>
                <a class="codeLink" href="http://bit.ly/paintAppGit" target="_blank">CODE</a>
                <a class="codeLink" href="https://dev.maydenacademy.co.uk/projects/2019Feb/2019-paint-app/" target="_blank">DEMO</a>
            </div>

        </div>
    </section>
    <section class="boxes">
        <h3>PRACTICE PROJECTS</h3>
        <div class="container">
            <div class="box">
                <a href="http://bit.ly/pilotshop" target="_blank"><img src="images/pilot.svg" alt="creditToFreePik"></a>
                <a href="https://codepen.io/rrrichard/pen/gJMJwJ" target="_blank"><h4>PILOT SHOP</h4></a>
                <p>HTML & CSS</p>
            </div>
            <div class="box">
                <a href="http://bit.ly/pilotshop" target="_blank"><img src="images/to-do.svg" alt="creditToSmashicons"></a>
                <h4>To Do List</h4>
                <p>PHP with SLIM Framework</p>
            </div>
            <div class="box">
                <a href="http://bit.ly/JSFormValidator" target="_blank"><img src="images/form.svg" alt="creditToFreePik"></a>
                <a href="https://codepen.io/rrrichard/pen/vwKMpd" target="_blank"><h4>Javascript Form Validator</h4></a>
                <p>HTML, CSS & Javascript</p>
            </div>
            <div class="box">
                <a href="https://github.com/rrrichard/post-railsChallenge/tree/master" target="_blank"><img src="images/fence.svg" alt="creditToFreePik"></a>
                <a href="https://github.com/rrrichard/post-railsChallenge/tree/master" target="_blank"><h4>Post and Rails</h4></a>
                <p>PHP</p>
            </div>
            <div class="box">
                <a href="http://bit.ly/top3SG" target="_blank"><img src="images/podium.svg" alt="creditToFreePik"></a>
                <a href="https://codepen.io/rrrichard/pen/zQBXmo" target="_blank"><h4>Top 3 Github Users</h4></a>
                <p>API Call with Javascript</p>
            </div>
            <div class="box">
                <a href="http://bit.ly/JSDotGame" target="_blank"><img src="images/dots.svg" alt="creditToFreePik"></a>
                <a href="https://codepen.io/rrrichard/pen/VOjNMM" target="_blank"><h4>Dots Game</h4></a>
                <p>Javascript Event Listeners</p>
            </div>
        </div>
    </section>
    <section class="aboutMe container">
        <a name="about"></a>
        <div>
            <h2>ABOUT ME</h2>
            <?php echo $paragraphResult; ?>
        </div>
    </section>
    <footer class="footer">
        <a name="footer"></a>
        <section class="contact">
                <h2>CONTACT ME</h2>
                <p><a href="tel:07708021930">Phone</a>
                </p>
                <p><a href="mailto:richard.rabulan@hotmail.co.uk">Email</a></p>
        </section>
        <div>
            <a href="#top" class="backUp">Back to Top</a>
        </div>

        <div class="container">
            <div class="logoContainer">
                <a href="https://github.com/rrrichard" target="_blank">
                    <img src="images/github.svg" alt="github logo">
                </a>
                <a href="https://uk.linkedin.com/in/richard-mc-rabulan-ba7a94170" target="_blank">
                    <img src="images/linkedin.svg" alt="linkedin logo">
                </a>
                <a href="https://www.codewars.com/users/richarduuu" target="_blank">
                    <img src="images/codewars.svg" alt="codewars logo">
                </a>
                <a href="https://www.instagram.com/totallynotrichard/" target="_blank">
                    <img src="images/instagram.svg" alt="instagram logo">
                </a>
                <a href="php/admin_page.php" target="_blank">
                    <img src="images/admin.svg" alt="admin logo">
                </a>
            </div>
        </div>
        <div class="container">
            <p class="copyright">
                &copy; 2019 Richard Rabulan, All rights reserved.
            </p>
        </div>
    </footer>
</body>
</html>