<?php
class User {

    const NAME = "Hasan Mashfiq Khan Dip";

    public function display() {
        echo "Full name is : " . User::NAME;
    }
}
$userData = new User();
$userData->display();
?>