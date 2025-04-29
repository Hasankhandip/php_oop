<?php

include "DB.php";

abstract class Main {
    protected $table;
    abstract public function insert();
    abstract public function update($id);

    public function delete($id) {
        $sql  = "DELETE FROM $this->table WHERE id=:id";
        $stmt = DB::prepareOwn($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function readByID($id) {
        $sql  = "select * from $this->table where id=:id";
        $stmt = DB::prepareOwn($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function readAll() {
        $sql  = "select * from $this->table";
        $stmt = DB::prepareOwn($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>