<?php
include 'DB.php';
class Model {
    public function getStudentData() {
        $sql  = 'SELECT * FROM tbl_student';
        $stmt = DB::prepareOwn($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>