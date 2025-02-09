<?php
require_once 'models/Client.php';

class ClientController {
    private $clientModel;
    private $db;

    public function __construct($db) {
        $this->db = $db;
        $this->clientModel = new Client($this->db); // Pass db to the model
        $this->checkAuthentication();
    }

    private function checkAuthentication() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?controller=auth&action=login');
            exit();
        }
    }

    public function list() {
        $clients = $this->clientModel->getAllClients();
        include 'views/clients/list.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $contactInfo = $_POST['contact_info'];
            $address = $_POST['address'];
            $created_by = $_SESSION['user_id']; // Use the authenticated user ID
            $this->clientModel->addClient($name, $contactInfo, $address, $created_by);
            header('Location: ' . BASE_URL . '?controller=client&action=list'); // Use BASE_URL
            exit();
        }
        include 'views/clients/add.php';
    }

    public function edit() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($id === null) {
            echo "Invalid client ID.";
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $contactInfo = $_POST['contact_info'];
            $address = $_POST['address'];
            $this->clientModel->updateClient($id, $name, $contactInfo, $address);
            header('Location: index.php?controller=client&action=list');
        } else {
            $client = $this->clientModel->getClientById($id);
            require 'views/clients/edit.php';
        }
    }

    public function delete() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($id === null) {
            echo "Invalid client ID.";
            return;
        }

        $this->clientModel->deleteClient($id);
        header('Location: index.php?controller=client&action=list');
    }

    public function bulkAction() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_POST['action'];
            $clientIds = $_POST['client_ids'];

            if ($action === 'edit') {
                // Handle bulk edit
                foreach ($clientIds as $clientId) {
                    // Redirect to edit page for each client
                    header('Location: index.php?controller=client&action=edit&id=' . $clientId);
                    exit();
                }
            } elseif ($action === 'delete') {
                // Handle bulk delete
                foreach ($clientIds as $clientId) {
                    $this->clientModel->deleteClient($clientId);
                }
                header('Location: index.php?controller=client&action=list');
                exit();
            }
        }
    }
}
?>