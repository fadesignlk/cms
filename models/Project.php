<?php
class Project {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllProjects() {
        $stmt = $this->db->query("SELECT * FROM Projects");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addProject($client_id, $name, $location, $start_date, $end_date, $budget, $description, $created_by) {
        $stmt = $this->db->prepare("INSERT INTO Projects (client_id, name, location, start_date, end_date, budget, description, created_by) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$client_id, $name, $location, $start_date, $end_date, $budget, $description, $created_by]);
        return $this->db->lastInsertId();
    }

    public function getProjectById($id) {
        $stmt = $this->db->prepare("SELECT * FROM Projects WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateProject($id, $client_id, $name, $location, $start_date, $end_date, $budget, $description) {
        $stmt = $this->db->prepare("UPDATE Projects SET client_id = ?, name = ?, location = ?, start_date = ?, end_date = ?, budget = ?, description = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?");
        $stmt->execute([$client_id, $name, $location, $start_date, $end_date, $budget, $description, $id]);
    }

    public function deleteProject($id) {
        $stmt = $this->db->prepare("DELETE FROM Projects WHERE id = ?");
        $stmt->execute([$id]);
    }

    // ... other methods
}
?>