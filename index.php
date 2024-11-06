<?php
require_once 'src/controllers/ContactController.php';

$contactController = new ContactController();

// Rutas de ejemplo
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'create') {
    echo $contactController->createContact($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['notes']);
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['action'] === 'list') {
    echo $contactController->listContacts();
}
