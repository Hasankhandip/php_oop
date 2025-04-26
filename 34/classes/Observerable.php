<?php

class Observerable {
    private $observers = [];

    public function register($object) {
        if ($object instanceof Observer) {
            $this->observers[] = $object;
        } else {
            echo "Object should be implements observer interface";
        }
    }

    public function stateChange() {
        foreach ($this->observers as $overver) {
            $overver->message();
        }
    }
}