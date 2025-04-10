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
        $stmt = $this->pdo->query("SELECT * FROM prodi");
        return $stmt->fetchAll();
    }

    public function show($id)
    {
        
    }

    public function create($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO prodi (kode,nama,kaprodi) VALUES (?,?,?)");
        return $stmt->execute([$data['kode'],$data['nama'],$data['kaprodi']]);
    }

    public function update($id, $data)
    {
        $stmt = $this->pdo->prepare("UPDATE prodi SET kode = ?, nama = ?, kaprodi= ? WHERE id= ?");
        return $stmt->execute([$data['kode'],$data['nama'],$data['kaprodi'], $id]);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM prodi WHERE id = ?");
        return $stmt->execute([$id]);
    }
}

$prodi = new Prodi($pdo);
