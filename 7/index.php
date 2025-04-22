<?php
class User {

    const NAME         = "Hasan Mashfiq Khan Dip";
    public static $age = "30";

    public static function display() {
        echo "Full name is : " . User::NAME . "<br/>";
        echo "Age is : " . self::$age;
    }
}
$userData = new User();
User::display();
?>