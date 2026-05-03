<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/../includes/data-store.php';
require_admin();

$codes = load_promo_codes();
$notice = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'add') {
        $newCode = [
            'tag' => trim((string)($_POST['tag'] ?? '')),
            'tagColor' => trim((string)($_POST['tagColor'] ?? 'from-sky-400 to-blue-500')),
            'code' => strtoupper(trim((string)($_POST['code'] ?? ''))),
            'bonus' => trim((string)($_POST['bonus'] ?? '')),
            'amount' => trim((string)($_POST['amount'] ?? '')),
            'used' => trim((string)($_POST['used'] ?? '0')),
        ];

        if ($newCode['code'] !== '' && $newCode['bonus'] !== '' && $newCode['amount'] !== '') {
            $codes[] = $newCode;
            save_promo_codes($codes);
            $notice = 'Promo code added.';
        } else {
            $notice = 'Please fill required fields.';
        }
    }

    if ($action === 'delete') {
        $index = (int)($_POST['index'] ?? -1);
        if (isset($codes[$index])) {
            unset($codes[$index]);
            $codes = array_values($codes);
            save_promo_codes($codes);
            $notice = 'Promo code removed.';
        }
    }
}

$adminPageTitle = 'Admin - Promo Codes';
$adminCurrent = 'promo';
require __DIR__ . '/includes/layout-start.php';
?>
            <header class="mb-8">
                <h1 class="text-2xl font-bold">Promo Codes Manager</h1>
                <p class="mt-2 text-sm text-slate-400">Add and remove promo codes used across Home and Promo Codes pages.</p>
            </header>

            <?php if ($notice !== ''): ?>
                <p class="mb-5 rounded-md border border-sky-400/40 bg-sky-500/15 px-4 py-3 text-sm text-sky-100"><?= htmlspecialchars($notice); ?></p>
            <?php endif; ?>

            <section class="rounded-lg border border-slate-800 bg-slate-900/70 p-5">
                <h2 class="text-lg font-semibold">Add New Code</h2>
                <form method="post" class="mt-4 grid gap-3 md:grid-cols-3">
                    <input type="hidden" name="action" value="add">
                    <input name="tag" placeholder="Tag (Top Code)" class="rounded-md border border-slate-700 bg-slate-950 px-3 py-2 text-sm outline-none focus:border-sky-500">
                    <input name="tagColor" placeholder="Tag color classes" value="from-emerald-400 to-cyan-400" class="rounded-md border border-slate-700 bg-slate-950 px-3 py-2 text-sm outline-none focus:border-sky-500">
                    <input name="code" required placeholder="Code" class="rounded-md border border-slate-700 bg-slate-950 px-3 py-2 text-sm outline-none focus:border-sky-500">
                    <input name="bonus" required placeholder="Bonus (100% Bonus)" class="rounded-md border border-slate-700 bg-slate-950 px-3 py-2 text-sm outline-none focus:border-sky-500">
                    <input name="amount" required placeholder="Amount (Up to Rs10,000)" class="rounded-md border border-slate-700 bg-slate-950 px-3 py-2 text-sm outline-none focus:border-sky-500">
                    <input name="used" placeholder="Used count" value="0" class="rounded-md border border-slate-700 bg-slate-950 px-3 py-2 text-sm outline-none focus:border-sky-500">
                    <button class="rounded-md bg-sky-600 px-4 py-2 text-sm font-semibold uppercase transition hover:bg-sky-500 md:col-span-3 md:w-max">Add Promo Code</button>
                </form>
            </section>

            <section class="mt-6 rounded-lg border border-slate-800 bg-slate-900/70 p-5">
                <h2 class="text-lg font-semibold">Existing Codes</h2>
                <div class="mt-4 overflow-x-auto">
                    <table class="min-w-full text-left text-sm">
                        <thead class="text-xs uppercase text-slate-400">
                            <tr>
                                <th class="py-2 pr-4">Tag</th>
                                <th class="py-2 pr-4">Code</th>
                                <th class="py-2 pr-4">Bonus</th>
                                <th class="py-2 pr-4">Amount</th>
                                <th class="py-2 pr-4">Used</th>
                                <th class="py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($codes as $index => $code): ?>
                                <tr class="border-t border-slate-800">
                                    <td class="py-3 pr-4"><?= htmlspecialchars($code['tag']); ?></td>
                                    <td class="py-3 pr-4 font-semibold text-sky-300"><?= htmlspecialchars($code['code']); ?></td>
                                    <td class="py-3 pr-4"><?= htmlspecialchars($code['bonus']); ?></td>
                                    <td class="py-3 pr-4"><?= htmlspecialchars($code['amount']); ?></td>
                                    <td class="py-3 pr-4"><?= htmlspecialchars((string)$code['used']); ?></td>
                                    <td class="py-3">
                                        <form method="post" onsubmit="return confirm('Delete this code?');">
                                            <input type="hidden" name="action" value="delete">
                                            <input type="hidden" name="index" value="<?= $index; ?>">
                                            <button class="rounded-md bg-red-600/80 px-3 py-1 text-xs font-semibold uppercase transition hover:bg-red-500">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
<?php require __DIR__ . '/includes/layout-end.php'; ?>
