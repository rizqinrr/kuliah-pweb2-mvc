<?php
// app/controllers/MembersController.php
require_once '../app/models/Members.php';

class MembersController {
    private $membersModel;

    public function __construct() {
        $this->membersModel = new Members();
    }

    public function index() {
        $members = $this->membersModel->getAllMembers();
        require_once '../app/views/members/index.php';

    }

    public function create() {
        require_once '../app/views/members/create.php';
    }

    public function store() {
        $nama_member = $_POST['nama_member'];
        $usia = $_POST['usia'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $paket_langganan = $_POST['paket_langganan'];
        $this->membersModel->add($nama_member, $usia, $jenis_kelamin, $paket_langganan);
        header('Location: /members/index');
    }
    // Show the edit form with the members data
    public function edit($id_member) {
        $member = $this->membersModel->find($id_member); // Assume find() gets members by ID
        require_once __DIR__ . '/../views/members/edit.php';
    }

    // Process the update request
    public function update($id_member, $data) {
        $updated = $this->membersModel->update($id_member, $data);
        if ($updated) {
            header("Location: /members/index"); // Redirect to members list
        } else {
            echo "Failed to update user.";
        }
    }

    // Process delete request
    public function delete($id_member) {
        $deleted = $this->membersModel->delete($id_member);
        if ($deleted) {
            header("Location: /members/index"); // Redirect to members list
        } else {
            echo "Failed to delete user.";
        }
    }
}
