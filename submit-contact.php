<?php
require_once __DIR__ . '/includes/data-store.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

if ($name === '' || $email === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: contact.php?status=error');
    exit;
}

$messages = load_messages();
$messages[] = [
    'id' => uniqid('msg_', true),
    'name' => $name,
    'email' => $email,
    'message' => $message,
    'created_at' => date('c'),
];

$ok = save_messages($messages);
header('Location: contact.php?status=' . ($ok ? 'ok' : 'error'));
exit;
