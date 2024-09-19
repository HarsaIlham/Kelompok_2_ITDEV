<?php
require_once __DIR__ . '/../core/connection.php';

class Product extends Connection
{
    public function all()
    {
        $query = "SELECT * FROM products";
        $result = mysqli_query($this->conn(), $query);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $result;
    }

    public function find($id)
    {
        $query = "SELECT * FROM products WHERE ID = {$id}";
        $result = mysqli_query($this->conn(), $query);
        $result = mysqli_fetch_assoc($result);

        return $result;
    }

    public function limit($limit)
    {
        $query = "SELECT * FROM products LIMIT {$limit}";
        $result = mysqli_query($this->conn(), $query);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $result;
    }

    public function store($columns, $values)
    {
        $columns = implode(", ", $columns);
        $valueArray = [];

        foreach ($values as $value) {
            // Check if the value is a string or a number
            if (is_numeric($value)) {
                $valueArray[] = $value; // No quotes for numbers
            } else {
                $valueArray[] = "'" . $this->conn()->real_escape_string($value) . "'"; // Add quotes for strings
            }
        }

        $valueString = implode(', ', $valueArray);

        $query = "INSERT INTO products ({$columns}) VALUES ({$valueString})";

        $result = mysqli_query($this->conn(), $query);
    }
}