<?php

class MyPDO extends PDO {

    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;

    public function __construct($settings = "settings.ini.php"){
        $ini_array = parse_ini_file($settings);
        $this->engine = $ini_array['engine'];
        $this->host = $ini_array['host'];
        $this->database = $ini_array['database'];
        $this->user = $ini_array['username'];
        $this->pass = $ini_array['password'];
        $dns = $this->engine.':host='.$this->host.';dbname=' . $this->database;
        parent::__construct($dns, $this->user, $this->pass);
    }
}