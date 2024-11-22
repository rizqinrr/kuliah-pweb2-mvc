<?php
// app/controllers/UserController.php
require_once '../app/models/WorkoutClass.php';

class WorkoutClassController {
    private $userModel;
    private $trainersModel;

    public function __construct() {
        $this->userModel = new WorkoutClass();
        $this->trainersModel = new Trainers();
    }

    public function index() {
        $classes = $this->userModel->getAllClasses();
        require_once '../app/views/WorkoutClass/index.php';

    }

    public function create() {
        $pelatih = $this->userModel->getAllTrainers();
        require_once '../app/views/WorkoutClass/create.php';
    }

    public function store() {
        $nama_kelas = $_POST['nama_kelas'];
        $waktu = $_POST['waktu'];
        $id_pelatih = $_POST['id_pelatih'];
        $kuota = $_POST['kuota'];
        $this->userModel->add($nama_kelas, $waktu, $id_pelatih, $kuota);
        header('Location: /WorkoutClass/index');
    }
    // Show the edit form with the user data
    public function edit($id_kelas) {
        $user = $this->userModel->find($id_kelas); // Assume find() gets user by ID
        $pelatih = $this->userModel->getAllTrainers();
        require_once __DIR__ . '/../views/WorkoutClass/edit.php';
    }

    // Process the update request
    public function update($id_kelas, $data) {
        $updated = $this->userModel->update($id_kelas, $data);
        if ($updated) {
            header("Location: /WorkoutClass/index"); // Redirect to user list
        } else {
            echo "Failed to update user.";
        }
    }

    // Process delete request
    public function delete($id_kelas) {
        $deleted = $this->userModel->delete($id_kelas);
        if ($deleted) {
            header("Location: /WorkoutClass/index"); // Redirect to user list
        } else {
            echo "Failed to delete user.";
        }
    }
}
