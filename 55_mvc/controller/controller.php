<?php

include 'model/model.php';
class Controller {
    public $model;
    public function __construct() {
        $this->model = new Model();
    }
    public function home() {
        $user = $this->model->getStudentData();
        include 'view/home.php';
    }
}
?>