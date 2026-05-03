<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/../includes/data-store.php';
require_admin();

$promoCodes = load_promo_codes();
$messages = load_messages();

$adminPageTitle = 'Admin Dashboard';
$adminCurrent = 'dashboard';
require __DIR__ . '/includes/layout-start.php';
?>
            <header class="mb-8">
                <h1 class="text-2xl font-bold">Dashboard</h1>
                <p class="mt-2 text-sm text-slate-400">Quick summary of website content and incoming requests.</p>
            </header>

            <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <article class="rounded-lg border border-slate-800 bg-slate-900/70 p-5">
                    <p class="text-xs uppercase tracking-widest text-slate-400">Promo Codes</p>
                    <p class="mt-3 text-3xl font-bold text-sky-300"><?= count($promoCodes); ?></p>
                </article>
                <article class="rounded-lg border border-slate-800 bg-slate-900/70 p-5">
                    <p class="text-xs uppercase tracking-widest text-slate-400">Messages</p>
                    <p class="mt-3 text-3xl font-bold text-sky-300"><?= count($messages); ?></p>
                </article>
                <article class="rounded-lg border border-slate-800 bg-slate-900/70 p-5">
                    <p class="text-xs uppercase tracking-widest text-slate-400">Last Message</p>
                    <p class="mt-3 text-sm text-slate-200"><?= count($messages) ? htmlspecialchars($messages[count($messages) - 1]['name']) : 'No message yet'; ?></p>
                </article>
                <article class="rounded-lg border border-slate-800 bg-slate-900/70 p-5">
                    <p class="text-xs uppercase tracking-widest text-slate-400">Manage</p>
                    <a href="promo-codes.php" class="mt-3 inline-flex rounded-md bg-sky-600 px-3 py-2 text-sm font-semibold transition hover:bg-sky-500">Open Promo Manager</a>
                </article>
            </section>

            <section class="mt-8 grid gap-5 lg:grid-cols-2">
                <article class="rounded-lg border border-slate-800 bg-slate-900/70 p-5">
                    <h2 class="text-lg font-semibold">Recent Promo Codes</h2>
                    <div class="mt-4 space-y-3">
                        <?php foreach (array_slice($promoCodes, 0, 5) as $code): ?>
                            <div class="rounded-md border border-slate-700 bg-slate-950/60 p-3">
                                <p class="text-sm font-semibold text-sky-300"><?= htmlspecialchars($code['code']); ?></p>
                                <p class="text-xs text-slate-400"><?= htmlspecialchars($code['bonus']); ?> - <?= htmlspecialchars($code['amount']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </article>

                <article class="rounded-lg border border-slate-800 bg-slate-900/70 p-5">
                    <h2 class="text-lg font-semibold">Recent Messages</h2>
                    <div class="mt-4 space-y-3">
                        <?php foreach (array_slice(array_reverse($messages), 0, 5) as $message): ?>
                            <div class="rounded-md border border-slate-700 bg-slate-950/60 p-3">
                                <p class="text-sm font-semibold text-sky-300"><?= htmlspecialchars($message['name']); ?> <span class="text-slate-400">- <?= htmlspecialchars($message['email']); ?></span></p>
                                <p class="mt-1 text-xs text-slate-300"><?= htmlspecialchars($message['message']); ?></p>
                            </div>
                        <?php endforeach; ?>
                        <?php if (!count($messages)): ?>
                            <p class="text-sm text-slate-400">No messages yet.</p>
                        <?php endif; ?>
                    </div>
                </article>
            </section>
<?php require __DIR__ . '/includes/layout-end.php'; ?>
