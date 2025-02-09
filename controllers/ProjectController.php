<?php
require_once 'models/Project.php';
require_once 'models/Client.php';

class ProjectController {
    private $projectModel;
    private $clientModel;
    private $db;

    public function __construct($db) {
        $this->db = $db;
        $this->projectModel = new Project($this->db); // Pass db to the model
        $this->clientModel = new Client($this->db); // Pass db to the model
    }

    public function list() {
        $projects = $this->projectModel->getAllProjects();
        include 'views/projects/list.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $client_id = $_POST['client_id'];
            $name = $_POST['name'];
            $location = $_POST['location'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $budget = $_POST['budget'];
            $description = $_POST['description'];
            $created_by = $_SESSION['user_id']; // Use the authenticated user ID
            $this->projectModel->addProject($client_id, $name, $location, $start_date, $end_date, $budget, $description, $created_by);
            header('Location: ' . BASE_URL . '?controller=project&action=list'); // Use BASE_URL
            exit();
        }
        $clients = $this->clientModel->getAllClients();
        include 'views/projects/add.php';
    }

    public function edit() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($id === null) {
            echo "Invalid project ID.";
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $client_id = $_POST['client_id'];
            $name = $_POST['name'];
            $location = $_POST['location'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $budget = $_POST['budget'];
            $description = $_POST['description'];
            $this->projectModel->updateProject($id, $client_id, $name, $location, $start_date, $end_date, $budget, $description);
            header('Location: index.php?controller=project&action=list');
        } else {
            $project = $this->projectModel->getProjectById($id);
            $clients = $this->clientModel->getAllClients();
            require 'views/projects/edit.php';
        }
    }

    public function delete() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($id === null) {
            echo "Invalid project ID.";
            return;
        }

        $this->projectModel->deleteProject($id);
        header('Location: index.php?controller=project&action=list');
    }
}
?>