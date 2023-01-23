<?php
include(__DIR__.'/../models/db.php');
class crud extends Database
{
    // table is the name of the table to insert into
    // $data, an associative array containing the data to be inserted
    public function create($table, $data)
    {
        $data = array(
            'name' => $data
        );
        //array keys returns an array containing all the keys of an input array.
        //implode join the elements of an array into a single string.
        $keys = implode(',', array_keys($data));
        $values = implode("','", array_values($data));
        $sql = "INSERT INTO $table ($keys) VALUES ('$values')";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
    }
    public function read($table)
    {
        $sql = "SELECT * FROM $table";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }
    public function update($table, $data, $id)
    {
        $sql = "UPDATE $table SET ";
        $sql .= "name = '$data' ";
        $sql .= "WHERE id = $id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id = $id";
        $stmt = $this->connect()->prepare($sql);
        $stmtExec = $stmt->execute();
        if ($stmtExec) {
            return true;
        } else {
            return false;
        }
    }
    public function readOne($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id = $id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;

    }
}