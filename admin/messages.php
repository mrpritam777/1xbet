<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/../includes/data-store.php';
require_admin();

$messages = array_reverse(load_messages());

$adminPageTitle = 'Admin - Messages';
$adminCurrent = 'messages';
require __DIR__ . '/includes/layout-start.php';
?>
            <header class="mb-8">
                <h1 class="text-2xl font-bold">Contact Messages</h1>
                <p class="mt-2 text-sm text-slate-400">User messages submitted from the Contact page.</p>
            </header>

            <section class="rounded-lg border border-slate-800 bg-slate-900/70 p-5">
                <?php if (!count($messages)): ?>
                    <p class="text-sm text-slate-400">No messages yet.</p>
                <?php else: ?>
                    <div class="space-y-4">
                        <?php foreach ($messages as $message): ?>
                            <article class="rounded-md border border-slate-700 bg-slate-950/60 p-4">
                                <div class="flex flex-wrap items-center justify-between gap-2">
                                    <h2 class="text-sm font-semibold text-sky-300"><?= htmlspecialchars($message['name']); ?></h2>
                                    <span class="text-xs text-slate-500"><?= htmlspecialchars(date('Y-m-d H:i', strtotime($message['created_at'] ?? 'now'))); ?></span>
                                </div>
                                <p class="mt-1 text-xs text-slate-400"><?= htmlspecialchars($message['email']); ?></p>
                                <p class="mt-3 text-sm leading-7 text-slate-200"><?= nl2br(htmlspecialchars($message['message'])); ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>
<?php require __DIR__ . '/includes/layout-end.php'; ?>
