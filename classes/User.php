<?php
/**
 * Created by PhpStorm.
 * User: dominicdowding
 * Date: 03/06/15
 * Time: 09:11
 */

/**
 * Class User For user logins in the database
 */
class User {
    private $id;
    private $username;
    private $email;

    /**
     * @param $id
     * @param $username
     * @param $email
     */
    public function __construct($id,$username,$email) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function changeEmail($newEmail) {
        $this->email = $newEmail;
    }

}