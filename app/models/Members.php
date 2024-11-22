<?php
// app/models/Members.php
require_once '../config/database.php';

class Members {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllMembers() {
        $query = $this->db->query("SELECT * FROM members");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_member) {
        $query = $this->db->prepare("SELECT * FROM members WHERE id_member = :id_member");
        $query->bindParam(':id_member', $id_member, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_member, $usia, $jenis_kelamin, $paket_langganan) {
        $query = $this->db->prepare("INSERT INTO members (nama_member, usia, jenis_kelamin, paket_langganan) VALUES (:nama_member, :usia, :jenis_kelamin, :paket_langganan)");
        $query->bindParam(':nama_member', $nama_member);
        $query->bindParam(':usia', $usia);
        $query->bindParam(':jenis_kelamin', $jenis_kelamin);
        $query->bindParam(':paket_langganan', $paket_langganan);
        return $query->execute();
    }

    // Update members data by id_member
    public function update($id_member, $data) {
        $query = "UPDATE members SET nama_member = :nama_member, usia = :usia, jenis_kelamin = :jenis_kelamin, paket_langganan = :paket_langganan WHERE id_member = :id_member";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_member', $data['nama_member']);
        $stmt->bindParam(':usia', $data['usia']);
        $stmt->bindParam(':jenis_kelamin', $data['jenis_kelamin']);
        $stmt->bindParam(':paket_langganan', $data['paket_langganan']);
        $stmt->bindParam(':id_member', $id_member);
        return $stmt->execute();
    }

    // Delete Members by id_member
    public function delete($id_member) {
        $query = "DELETE FROM members WHERE id_member = :id_member";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_member', $id_member);
        return $stmt->execute();
    }
}
