<?php
// app/models/Attendance.php
require_once '../config/database.php';

class Attendance {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    // Mengambil semua data attendance dengan informasi kelas
    public function getAllAttendance() {
        $query = $this->db->query("SELECT attendance.*, workout_classes.nama_kelas as kelas
        FROM attendance
        LEFT JOIN workout_classes ON attendance.id_kelas = workout_classes.id_kelas");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // Mengambil data attendance berdasarkan ID
    public function find($id_attendance) {
        $query = $this->db->prepare("SELECT * FROM attendance WHERE id_attendance = :id_attendance");
        $query->bindParam(':id_attendance', $id_attendance, PDO::PARAM_INT); // Menggunakan PDO::PARAM_INT jika ID adalah integer
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    // Menambahkan data attendance
    public function add($anggota_yang_hadir, $tanggal, $id_kelas) {
        $query = "INSERT INTO attendance (anggota_yang_hadir, tanggal, id_kelas) VALUES (:anggota_yang_hadir, :tanggal, :id_kelas)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':anggota_yang_hadir', $anggota_yang_hadir, PDO::PARAM_INT); // Menggunakan PDO::PARAM_INT untuk jumlah anggota
        $stmt->bindParam(':tanggal', $tanggal, PDO::PARAM_STR); // Menggunakan PDO::PARAM_STR untuk tanggal
        $stmt->bindParam(':id_kelas', $id_kelas, PDO::PARAM_INT); // Menggunakan PDO::PARAM_INT untuk ID kelas
        return $stmt->execute();
    }

    // Update data attendance berdasarkan ID
    public function update($id_attendance, $data) {
        $query = "UPDATE attendance SET anggota_yang_hadir = :anggota_yang_hadir, tanggal = :tanggal, id_kelas = :id_kelas WHERE id_attendance = :id_attendance";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':anggota_yang_hadir', $data['anggota_yang_hadir'], PDO::PARAM_INT); // Menggunakan PDO::PARAM_INT
        $stmt->bindParam(':tanggal', $data['tanggal'], PDO::PARAM_STR);
        $stmt->bindParam(':id_kelas', $data['id_kelas'], PDO::PARAM_INT); // Menggunakan PDO::PARAM_INT
        $stmt->bindParam(':id_attendance', $id_attendance, PDO::PARAM_INT); // Menggunakan PDO::PARAM_INT
        return $stmt->execute();
    }

    // Menghapus data attendance berdasarkan ID
    public function delete($id_attendance) {
        $query = "DELETE FROM attendance WHERE id_attendance = :id_attendance";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_attendance', $id_attendance, PDO::PARAM_INT); // Menggunakan PDO::PARAM_INT
        return $stmt->execute();
    }

    // Menambahkan metode untuk mengambil daftar kelas (untuk combobox)
    public function getAllClasses() {
        // Mengambil semua kelas untuk digunakan pada combobox
        $query = $this->db->query("SELECT id_kelas, nama_kelas FROM workout_classes");
        return $query->fetchAll(PDO::FETCH_ASSOC); // Mengembalikan data dalam bentuk array asosiatif
    }
}
