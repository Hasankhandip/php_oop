<?php
class UserData {
    public $user;
    public $userId;

    public function __construct($userName, $userId) {
        $this->user   = $userName;
        $this->userId = $userId;
    }

    public function display() {
        echo "Username is {$this->user} and User Id is {$this->userId}";
    }

}
class Admin extends UserData {
    public $level;
    public function display() {
        echo "Username is {$this->user} and User Id is {$this->userId} and User level is {$this->level}";
    }
}

$user = "Dip";
$id   = "20";
$ur   = new UserData($user, $id);
$ur->display();
echo "<br/>";

$user         = "Admin";
$id           = "1";
$admin        = new Admin($user, $id);
$admin->level = "Administration";
$admin->display();
echo "<br/>";
if ($admin instanceof UserData) {
    echo "inherited";
}
?>