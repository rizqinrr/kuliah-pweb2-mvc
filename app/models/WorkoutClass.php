<?php
// app/models/User.php
require_once '../config/database.php';

class WorkoutClass {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllClasses() {
        $query = $this->db->query("SELECT * FROM  workout_classes");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getAllTrainers() {
        $query = $this->db->query("SELECT id_pelatih, nama_pelatih FROM trainers");
         return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_kelas) {
        $query = $this->db->prepare("SELECT * FROM workout_classes WHERE id_kelas = :id_kelas");
        $query->bindParam(':id_kelas', $id_kelas, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_kelas, $waktu, $id_pelatih, $kuota) {
        $query = "INSERT INTO workout_classes (nama_kelas, waktu, id_pelatih, kuota) VALUES ( :nama_kelas, :waktu, :id_pelatih, :kuota)";
        $stmt= $this->db->prepare($query);
        $stmt->bindParam(':nama_kelas', $nama_kelas, PDO::PARAM_STR) ;
        $stmt->bindParam(':waktu', $waktu, PDO::PARAM_STR);
        $stmt->bindParam(':id_pelatih', $id_pelatih, PDO::PARAM_STR); 
        $stmt->bindParam(':kuota', $kuota, PDO::PARAM_STR);
        return $stmt->execute();
    }

    // Update user data by ID
    public function update($id_kelas, $data) {
        $query = "UPDATE workout_classes SET nama_kelas = :nama_kelas, waktu =:waktu, id_pelatih = :id_pelatih, kuota =:kuota WHERE id_kelas = :id_kelas";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_kelas', $data['nama_kelas'], PDO::PARAM_STR);
        $stmt->bindParam(':waktu', $data['waktu'], PDO::PARAM_STR);
        $stmt->bindParam(':id_pelatih', $data['id_pelatih'], PDO::PARAM_STR);
        $stmt->bindParam(':kuota', $data['kuota'], PDO::PARAM_STR);
        $stmt->bindParam(':id_kelas', $id_kelas, PDO::PARAM_STR);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id_kelas) {
        $query = "DELETE FROM workout_classes WHERE id_kelas = :id_kelas";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_kelas', $id_kelas);
        return $stmt->execute();
    }
}
