<?php

class Skype implements Observer {
    public function message() {
        echo "Message from Skype <br>";
    }
}