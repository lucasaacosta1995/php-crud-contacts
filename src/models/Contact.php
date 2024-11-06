<?php

/**
 * Clase Contact que representa un contacto en el sistema.
 */
class Contact {
    private PDO $conn;
    private string $table_name = "contacts";

    public int $id;
    public string $name;
    public string $phone;
    public string $email;
    public string $notes;

    /**
     * Constructor de Contact.
     *
     * @param PDO $db Conexión a la base de datos.
     */
    public function __construct(PDO $db) {
        $this->conn = $db;
    }

    /**
     * Crea un nuevo contacto en la base de datos.
     *
     * @return bool Retorna true si la operación fue exitosa, de lo contrario false.
     */
    public function create(): bool {
        $query = "INSERT INTO {$this->table_name} (name, phone, email, notes) VALUES (:name, :phone, :email, :notes)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':phone', $this->phone);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':notes', $this->notes);

        return $stmt->execute();
    }

    /**
     * Obtiene todos los contactos de la base de datos.
     *
     * @return array Retorna un array con todos los contactos.
     */
    public function readAll(): array {
        $query = "SELECT * FROM {$this->table_name}";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
