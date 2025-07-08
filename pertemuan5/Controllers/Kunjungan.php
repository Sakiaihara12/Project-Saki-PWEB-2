<?php
require_once 'Config/MySQL.php';

class Kunjungan
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function index()
    {
        $query = "SELECT kunjungan.*, jenis_kunjungan.name as jenis FROM kunjungan INNER JOIN jenis_kunjungan ON kunjungan.jenis_kunjungan_id = jenis_kunjungan.id";
        $result = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $row;
    }

    public function create($data)
    {
        $query = "INSERT INTO kunjungan (fullname, email, jenis_kunjungan_id, timestamp) VALUES (?, ?, ?, NOW())";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, "ssi", $data['fullname'], $data['email'], $data['jenis_kunjungan_id']);
        return mysqli_stmt_execute($stmt);
    }

    public function update($id, $data)
    {
        $query = "UPDATE kunjungan SET fullname = ?, email = ?, jenis_kunjungan_id = ? WHERE id = ?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, "ssii", $data['fullname'], $data['email'], $data['jenis_kunjungan_id'], $id);
        return mysqli_stmt_execute($stmt);
    }

    public function delete($id)
    {
        $query = "DELETE FROM kunjungan WHERE id = ?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $id);
        return mysqli_stmt_execute($stmt);
    }
}

$kunjungan = new Kunjungan($conn);