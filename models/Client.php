<?php
class Client {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllClients() {
        $stmt = $this->db->query("SELECT * FROM Clients");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addClient($name, $contactInfo, $address, $created_by) {
        $stmt = $this->db->prepare("INSERT INTO Clients (name, contact_info, address, created_by) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $contactInfo, $address, $created_by]);
        return $this->db->lastInsertId();
    }

    public function getClientById($id) {
        $stmt = $this->db->prepare("SELECT * FROM Clients WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateClient($id, $name, $contactInfo, $address) {
        $stmt = $this->db->prepare("UPDATE Clients SET name = ?, contact_info = ?, address = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?");
        $stmt->execute([$name, $contactInfo, $address, $id]);
    }

    public function deleteClient($id) {
        $stmt = $this->db->prepare("DELETE FROM Clients WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>