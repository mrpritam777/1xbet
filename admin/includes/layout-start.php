<?php
$adminPageTitle = $adminPageTitle ?? 'Admin Panel';
$adminCurrent = $adminCurrent ?? 'dashboard';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($adminPageTitle); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 font-[Inter]">
    <div class="min-h-screen grid md:grid-cols-[260px_1fr]">
        <aside class="border-r border-slate-800 bg-slate-900/70 p-5">
            <a href="index.php" class="block text-lg font-bold tracking-wide text-sky-400">1xbet Admin</a>
            <p class="mt-2 text-xs text-slate-400">Logged in as <?= htmlspecialchars($_SESSION['admin_username'] ?? 'admin'); ?></p>

            <nav class="mt-8 space-y-2 text-sm">
                <a href="index.php" class="block rounded-md px-3 py-2 transition <?= $adminCurrent === 'dashboard' ? 'bg-sky-600/25 text-sky-300' : 'text-slate-300 hover:bg-slate-800'; ?>">Dashboard</a>
                <a href="promo-codes.php" class="block rounded-md px-3 py-2 transition <?= $adminCurrent === 'promo' ? 'bg-sky-600/25 text-sky-300' : 'text-slate-300 hover:bg-slate-800'; ?>">Promo Codes</a>
                <a href="messages.php" class="block rounded-md px-3 py-2 transition <?= $adminCurrent === 'messages' ? 'bg-sky-600/25 text-sky-300' : 'text-slate-300 hover:bg-slate-800'; ?>">Messages</a>
                <a href="logout.php" class="block rounded-md px-3 py-2 text-red-300 transition hover:bg-red-500/20">Logout</a>
            </nav>
        </aside>

        <section class="p-5 sm:p-8">
