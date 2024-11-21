<?php
// app/controllers/TrainersController.php
require_once '../app/models/Trainers.php';

class TrainersController {
    private $trainersModel;

    public function __construct() {
        $this->trainersModel = new Trainers();
    }

    public function index() {
        $trainers = $this->trainersModel->getAllTrainers();
        require_once '../app/views/trainers/index.php';

    }

    public function create() {
        require_once '../app/views/trainers/create.php';
    }

    public function store() {
        $nama_pelatih = $_POST['nama_pelatih'];
        $spesialis = $_POST['spesialis'];
        $jadwal = $_POST['jadwal'];
        $this->trainersModel->add($nama_pelatih, $spesialis, $jadwal);
        header('Location: /trainers/index');
    }
    // Show the edit form with the trainers data
    public function edit($id_pelatih) {
        $trainers = $this->trainersModel->find($id_pelatih); // Assume find() gets trainers by ID
        require_once __DIR__ . '/../views/trainers/edit.php';
    }

    // Process the update request
    public function update($id_pelatih, $data) {
        $updated = $this->trainersModel->update($id_pelatih, $data);
        if ($updated) {
            header("Location: /trainers/index"); // Redirect to trainers list
        } else {
            echo "Failed to update trainers.";
        }
    }

    // Process delete request
    public function delete($id_pelatih) {
        $deleted = $this->trainersModel->delete($id_pelatih);
        if ($deleted) {
            header("Location: /trainers/index"); // Redirect to trainers list
        } else {
            echo "Failed to delete trainers.";
        }
    }
}
