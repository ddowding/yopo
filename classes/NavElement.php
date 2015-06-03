<?php
/**
 * Created by PhpStorm.
 * User: dominicdowding
 * Date: 03/06/15
 * Time: 22:33
 */

class NavElement {
    private $id;
    private $name;
    private $href;
    private $jumpId;
    private $elementString;

    public function __construct($id,$name,$href,$jumpId) {
        $this->id = $id;
        $this->name = $name;
        $this->href = $href;
        $this->jumpId = $jumpId;

        $this->elementString = $this->generateElementString();
    }

    private function generateElementString() {
        $string = '<li><a></a></li>';
    }
}