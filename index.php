<?php
/**
 * Created by PhpStorm.
 * User: dominicdowding
 * Date: 15/03/15
 * Time: 15:48
 */
    require_once("settings.php");
    $settingsFile = "settings.ini.php";
    require_once("resources/includes/header.php");

    $db = new dbPDO($settingsFile);
    require_once("resources/scripts/promoPage.php");
    require_once("resources/scripts/landingPage.php");
    require_once("resources/scripts/imageBlock.php");
    require_once("resources/scripts/galleryBlock.php");
    require_once("resources/scripts/textBlock.php");
    require_once("resources/scripts/sliderBlock.php");
 //   require_once("resources/scripts/newsletterBlock");
?>
<?php
require_once( "resources/includes/footer.php");
require_once( "resources/includes/javascriptFiles.php");
?>
</body>
</html>
