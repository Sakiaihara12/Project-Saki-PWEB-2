<?php
require_once 'Config/DB.php';

class Prodi
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function index()
    {
        
    }

    public function show($id)
    {
        
    }

    public function create($data)
    {
        
    }

    public function update($id, $data)
    {
        
    }

    public function delete($id)
    {
        
    }
}

$prodi = new Prodi($pdo);
