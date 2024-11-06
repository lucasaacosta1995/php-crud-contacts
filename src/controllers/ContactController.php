<?php
require_once '../config/Database.php';
require_once '../models/Contact.php';

/**
 * Controlador para la gestión de contactos.
 */
class ContactController {
    private PDO $db;
    private Contact $contact;

    /**
     * Constructor de ContactController.
     */
    public function __construct() {
        $this->db = (new Database())->getConnection();
        $this->contact = new Contact($this->db);
    }

    /**
     * Crea un nuevo contacto en el sistema.
     *
     * @param string $name Nombre del contacto.
     * @param string $phone Teléfono del contacto.
     * @param string $email Email del contacto.
     * @param string $notes Notas adicionales sobre el contacto.
     * @return string JSON con el mensaje de éxito o error.
     */
    public function createContact(string $name, string $phone, string $email, string $notes): string {
        $this->contact->name = $name;
        $this->contact->phone = $phone;
        $this->contact->email = $email;
        $this->contact->notes = $notes;

        if ($this->contact->create()) {
            return json_encode(['message' => 'Contact created successfully']);
        } else {
            return json_encode(['message' => 'Failed to create contact']);
        }
    }

    /**
     * Lista todos los contactos.
     *
     * @return string JSON con todos los contactos.
     */
    public function listContacts(): string {
        $contacts = $this->contact->readAll();
        return json_encode($contacts);
    }
}
