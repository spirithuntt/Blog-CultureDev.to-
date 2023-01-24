<?php
include(__DIR__.'/../models/db.php');
class crud extends Database
{
    // table is the name of the table to insert into
    // $data, an associative array containing the data to be inserted
    public function create($table, $data)
    {
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
        $sql = "UPDATE $table SET name = '$data' WHERE id = $id";
        $stmt = $this->connect()->prepare($sql);
        $stmtExec = $stmt->execute();
        if ($stmtExec) {
            header('Location: dashboard.php');
        } else {
            return false;
        }
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id = $id";
        $stmt = $this->connect()->prepare($sql);
        $stmtExec = $stmt->execute();
        if ($stmtExec) {
        //header location to dashboard.php
        header('Location: dashboard.php');
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
    public function readArticle()
    {
        $sql = "SELECT * FROM article INNER JOIN category ON article.category_id = category.id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }
    public function updateArticle($table, $id, $title, $category, $summary, $blog)
    {
        $sql = "UPDATE $table SET title = '$title', category_id = '$category', description = '$summary', blog = '$blog' WHERE id = $id";
        $stmt = $this->connect()->prepare($sql);
        $stmtExec = $stmt->execute();
        if ($stmtExec) {
            header('Location: dashboard.php');
        } else {
            return false;
        }
    }
    public function statistics($table)
    {
        $sql = "SELECT COUNT(*) FROM $table";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchColumn();
        return $results;
    }
}