<?php
// app/controllers/AttendanceController.php
require_once '../app/models/Attendance.php';
require_once '../app/models/WorkoutClass.php'; // Pastikan sudah ada model untuk workout_classes

class AttendanceController {
    private $attendanceModel;
    private $workoutClassModel;

    public function __construct() {
        $this->attendanceModel = new Attendance();
        $this->workoutClassModel = new WorkoutClass(); // Inisialisasi model workout class
    }


    public function index() {
        $attendance = $this->attendanceModel->getAllAttendance();
        require_once '../app/views/attendance/index.php';
    }

    // Menampilkan form untuk menambahkan attendance
    public function create() {
        // Ambil semua kelas dari tabel workout_classes
        $workout_classes = $this->workoutClassModel->getAllClasses();

        // Kirim data kelas ke view
        require_once '../app/views/attendance/create.php';
    }


    public function store() {
        $anggota_yang_hadir = $_POST['anggota_yang_hadir'];
        $tanggal = $_POST['tanggal'];
        $id_kelas = $_POST['id_kelas'];
        // Panggil method add() dari model Attendance untuk menyimpan data
        $this->attendanceModel->add($anggota_yang_hadir, $tanggal, $id_kelas);
        // Redirect ke halaman daftar attendance
        header('Location: /attendance/index');
    }

    // Menampilkan form untuk mengedit data attendance
    public function edit($id_attendance) {
        $attendance = $this->attendanceModel->find($id_attendance); // Mengambil data attendance berdasarkan ID
        $classes = $this->workoutClassModel->getAllClasses(); // Ambil daftar kelas
        require_once '../app/views/attendance/edit.php'; // Kirim data ke view
    }
    

    // Memproses permintaan update attendance
      // Process the update request
    public function update($id_attendance, $data) {
        $updated = $this->attendanceModel->update($id_attendance, $data);
        if ($updated) {
            header("Location: /attendance/index"); // Redirect to user list
        } else {
            echo "Failed to update attendance.";
        }
    }


    // Process delete request
    public function delete($id_attendance) {
        $deleted = $this->attendanceModel->delete($id_attendance);
        if ($deleted) {
            header("Location: /attendance/index"); // Redirect to user list
        } else {
            echo "Failed to delete attendance.";
        }
    }
}
