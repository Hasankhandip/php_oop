<?php

class Database {
    private static $instance;
    public function __construct() {
        if (! self::$instance) {
            self::$instance = $this;
            echo "Created New One <br>";
            return self::$instance;
        } else {
            echo "Old Instance <br>";
            return self::$instance;
        }
    }
}