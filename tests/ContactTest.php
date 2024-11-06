<?php

use PHPUnit\Framework\TestCase;

require_once 'src/models/Contact.php';
require_once 'src/config/Database.php';

/**
 * Clase de prueba para el modelo Contact.
 */
class ContactTest extends TestCase {
    private PDO $db;
    private Contact $contact;

    protected function setUp(): void {
        $this->db = (new Database())->getConnection();
        $this->contact = new Contact($this->db);
    }

    /**
     * Prueba de creación de un contacto.
     */
    public function testCreateContact(): void {
        $this->contact->name = 'Test User';
        $this->contact->phone = '123456789';
        $this->contact->email = 'test@example.com';
        $this->contact->notes = 'This is a test note.';

        $result = $this->contact->create();
        $this->assertTrue($result);
    }

    /**
     * Prueba de obtención de todos los contactos.
     */
    public function testReadAllContacts(): void {
        $contacts = $this->contact->readAll();
        $this->assertIsArray($contacts);
    }
}
