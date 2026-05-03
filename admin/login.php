<?php
require_once __DIR__ . '/includes/auth.php';

if (admin_is_logged_in()) {
    header('Location: index.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim((string)($_POST['username'] ?? ''));
    $password = trim((string)($_POST['password'] ?? ''));
    if (admin_login($username, $password)) {
        header('Location: index.php');
        exit;
    }
    $error = 'Invalid username or password.';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-950 text-slate-100">
    <main class="mx-auto flex min-h-screen max-w-md items-center px-4">
        <div class="w-full rounded-xl border border-slate-800 bg-slate-900/70 p-6">
            <h1 class="text-xl font-bold text-sky-400">Admin Login</h1>
            <p class="mt-2 text-sm text-slate-400">Use your admin credentials to access dashboard.</p>
            <?php if ($error !== ''): ?>
                <p class="mt-4 rounded-md border border-red-400/40 bg-red-500/20 px-3 py-2 text-sm text-red-200"><?= htmlspecialchars($error); ?></p>
            <?php endif; ?>
            <form method="post" class="mt-5 space-y-4">
                <label class="block text-sm">
                    <span class="mb-1 block text-slate-300">Username</span>
                    <input name="username" required class="w-full rounded-md border border-slate-700 bg-slate-950 px-3 py-2 outline-none focus:border-sky-500" />
                </label>
                <label class="block text-sm">
                    <span class="mb-1 block text-slate-300">Password</span>
                    <input name="password" type="password" required class="w-full rounded-md border border-slate-700 bg-slate-950 px-3 py-2 outline-none focus:border-sky-500" />
                </label>
                <button class="w-full rounded-md bg-sky-600 px-4 py-2 text-sm font-semibold uppercase tracking-wide transition hover:bg-sky-500">Login</button>
            </form>
            <p class="mt-4 text-xs text-slate-500">Default: admin / admin123</p>
        </div>
    </main>
</body>
</html>
