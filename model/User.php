<?php

require_once ('C:\xampp\htdocs\oop\Db.php');

class User extends Db {

    function __construct()
    {
        $this->table = 'users';
    }
}

$user = new User();

$user->find(2);
?>