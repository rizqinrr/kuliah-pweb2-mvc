<?php
// app/controllers/AttendanceController.php
require_once '../app/models/Attendance.php';

class AttendanceController {
    private $attendanceModel;

    public function __construct() {
        $this->attendanceModel = new Attendance();
    }

    public function index() {
        $attendance = $this->attendanceModel->getAllAttendance();
        require_once '../app/views/attendance/index.php';
    }

    public function create() {
        require_once '../app/views/attendance/create.php';
    }

    public function store() {
        $anggota_yang_hadir = $_POST['anggota_yang_hadir'];
        $tanggal = $_POST['tanggal'];
        $id_kelas = $_POST['id_kelas'];
        $this->attendanceModel->add($anggota_yang_hadir, $tanggal, $id_kelas);
        header('Location: /attendance/index');
    }
    // Show the edit form with the attendance data
    public function edit($id_attendance) {
        $attendance = $this->attendanceModel->find($id_attendance); // Assume find() gets attendance by ID
        require_once __DIR__ . '/../views/attendance/edit.php';
    }

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
