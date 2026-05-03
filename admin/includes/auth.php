<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

const ADMIN_USERNAME = 'admin';
const ADMIN_PASSWORD = 'admin123';

function admin_is_logged_in(): bool
{
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

function admin_login(string $username, string $password): bool
{
    if ($username === ADMIN_USERNAME && $password === ADMIN_PASSWORD) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        return true;
    }
    return false;
}

function admin_logout(): void
{
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }
    session_destroy();
}

function require_admin(): void
{
    if (!admin_is_logged_in()) {
        header('Location: login.php');
        exit;
    }
}
