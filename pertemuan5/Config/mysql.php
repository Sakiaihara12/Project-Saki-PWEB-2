<?php
class Koneksi{
    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "","bukutamu");
        if(!$this->conn) {
            die("Connection Failed" . mysqli_connect_error());
        }
    }
    public function db(){
        return $this->conn;
    }
}
$Data = new Koneksi();
$conn = $Data->db();
?>