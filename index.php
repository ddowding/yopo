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

    $db = new MyPDO($settingsFile);
?>
<div id="container">
    <div id="content">
        <!-- content -->
    </div>
</div>
<?php
require_once( "resources/includes/footer.php");
?>