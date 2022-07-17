<?php 

const DB_SERVER = "localhost";
const DB_USER = "root";
// const DB_PASS = "";
const DB_NAME = "curso_php2";

const ROWS_PER_PAGE = 5;

function getConnection() {
    $conn = new mysqli(DB_SERVER, DB_USER, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully";
    return $conn;
}
$conn = getConnection();

