<?php
// include captcha class
require('php-captcha.inc.php');

// define fonts
$aFonts = array('fonts/VeraMoBd.ttf','fonts/Dekadens.ttf','fonts/SwatchIt.ttf');

// create new image
$oPhpCaptcha = new PhpCaptcha($aFonts, 200, 60);
$oPhpCaptcha->UseColour(true);
$oPhpCaptcha->Create();
?>






