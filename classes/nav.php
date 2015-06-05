<?php
/**
 * Created by PhpStorm.
 * User: dominicdowding
 * Date: 03/06/15
 * Time: 22:06
 */

/**
 * Class Navigation used for nav a the top of the page
 */
class Navigation {
    private $navElements = array();
    private $navString = "";

    /**
     * @param $navElementsArray list of elements to appear in the nav
     */
    public function __construct($navElementsArray) {
        $this->navElements = $navElementsArray;
        $this->navString = $this->generateNavString($navElementsArray);
    }

    private function getNavElements() {
        $db = new dbPDO();
        $sql = $db->query("SELECT * FROM nav WHERE active = 1");
        $result = $sql->fetchAll();
        $navElements = array();
        foreach ($result as $row) {
            $navElement = new NavElement($row[id],$row[name],$row[href],$row[jump_id]);
            array_push($navElements,$navElement);
        }

        return $navElements;
    }

    public function getNavString() {
        return $this->navString;
    }

    /**
     * @param $elements array of nav elements if false generates from db
     * @return string
     */
    public function generateNavString($elements) {
        if($elements == false) {
            $elements = $this->getNavElements();
        }
        $nav = '<ul class="nav navbar-nav">';
        foreach ($elements as $element) {
            $singleElement = $element->getElementString();
            $nav .= $singleElement;
        }
        $nav .= '</ul>';

        return $nav;
    }
}