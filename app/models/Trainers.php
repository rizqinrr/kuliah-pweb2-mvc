<?php
// app/models/Trainers.php
require_once '../config/database.php';

class Trainers {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllTrainers() {
        $query = $this->db->query("SELECT * FROM trainers");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_pelatih) {
        $query = $this->db->prepare("SELECT * FROM trainers WHERE id_pelatih = :id_pelatih");
        $query->bindParam(':id_pelatih', $id_pelatih, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_pelatih, $spesialis, $jadwal) {
        $query = $this->db->prepare("INSERT INTO trainers (nama_pelatih, spesialis, jadwal) VALUES (:nama_pelatih, :spesialis, :jadwal)");
        $query->bindParam(':nama_pelatih', $nama_pelatih);
        $query->bindParam(':spesialis', $spesialis);
        $query->bindParam(':jadwal', $jadwal);
        return $query->execute();
    }

    // Update trainers data by ID
    public function update($id_pelatih, $data) {
        $query = "UPDATE trainers SET nama_pelatih = :nama_pelatih, spesialis = :spesialis, jadwal = :jadwal WHERE id_pelatih = :id_pelatih";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_pelatih', $data['nama_pelatih']);
        $stmt->bindParam(':spesialis', $data['spesialis']);
        $stmt->bindParam(':jadwal', $data['jadwal']);
        $stmt->bindParam(':id_pelatih', $id_pelatih);
        return $stmt->execute();
    }

    // Delete trainers by ID
    public function delete($id_pelatih) {
        $query = "DELETE FROM trainers WHERE id_pelatih = :id_pelatih";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_pelatih', $id_pelatih, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function checkIfTrainersInWorkoutClass($id_pelatih) {
        $query = "SELECT COUNT(*) FROM workout_classes WHERE id_pelatih = :id_pelatih";

        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_pelatih', $id_pelatih, PDO::PARAM_INT);
        $stmt->execute();

        //ambil hasilnya
        $count = $stmt->fetchColumn();

        if($count > 0){
            return 1;
        }else{
            return 0;

    }
    }
   
}
