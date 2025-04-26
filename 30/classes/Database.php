<?php

class Database {
    public $driver;
    public $link;

    public function setDriver($driver) {
        $this->driver = $driver;
    }

    public function connect() {
        if ($this->driver == 'mysql') {
            $mngmysql = new ManageMysql();
            $mngmysql->setHost($host);
            $mngmysql->setDB($db);
            $mngmysql->setUser($user);
            $mngmysql->setPass($pass);
            $this->link = $mngmysql->connect();
        } elseif ($this->driver == "sqlite") {
            $mngmsqlite = new ManageSqlite();
            $mngmsqlite->setHost($host);
            $mngmsqlite->setDB($db);
            $mngmsqlite->setUser($user);
            $mngmsqlite->setPass($pass);
            $this->link = $mngmsqlite->connect();
        }
    }
}