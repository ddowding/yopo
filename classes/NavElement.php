<?php
/**
 * Created by PhpStorm.
 * User: dominicdowding
 * Date: 03/06/15
 * Time: 22:33
 */

/**
 * Class NavElement Returns the nav element within a list
 */
class NavElement {
    private $id;
    private $name;
    private $href;
    private $jumpId;
    private $elementString;

    /**
     * @param $id nav id
     * @param $name The name of the id
     * @param $href link for the a tag
     * @param $jumpId if it's a 1 page will jump to that part
     */
    public function __construct($id,$name,$href,$jumpId) {
        $this->id = $id;
        $this->name = $name;
        $this->href = $href;
        $this->jumpId = $jumpId;
        $this->elementString = "";
    }

    /**
     * sets the element string
     */
    private function generateElementString() {

    }

    /**
     * @return mixed returns the element string
     */
    public function getElementString() {
        $string = '<li><a href="'.$this->jumpId.'">'.$this->name.'</a></li>';
        $this->elementString = $string;
        return $this->elementString;
    }
}