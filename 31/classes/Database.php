<?php

abstract class Database {
    public function connect();
    public function query();
    public function insertId();

    public function setHost($host){
        //
    }
    public function setDB($db){
        //
    }
    public function setUser($user){
        //
    }
    public function setPass($pass){
        //
    }
}