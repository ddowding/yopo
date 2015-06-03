<?php
/**
 * Created by PhpStorm.
 * User: dominicdowding
 * Date: 03/06/15
 * Time: 22:06
 */

class Navigation {
    private $navElements = array();
    private $navString = "";

    public function __construct($navElementsArray) {
        $this->navElements = $navElementsArray;
        $this->navString = $this->generateNavString($navElementsArray);
    }

    private function getNavElements() {
        $db = new dbPDO();

        $sql = $db->query("SELECT * FROM nav WHERE active = 1");

        $result = $sql->fetch();

        foreach ($result as $row) {

        }
    }

    private function generateNavString($elements) {
        if(!$elements) {
            $elements = $this->getNavElements();
        }
        $nav = '<ul class="nav navbar-nav">';

        $nav .= '</ul>';

        return $nav;
    }
}