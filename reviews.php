<?php
require_once __DIR__ . '/includes/bootstrap.php';
$pageTitle = '1xbetPromoHub - Reviews';
$pageDescription = 'Read structured reviews, user sentiment, comparisons, and editorial scoring methodology.';

$scoreCards = [
    ['title' => 'Bonus Value', 'score' => '9.1/10', 'icon' => 'badge-percent'],
    ['title' => 'Payment Speed', 'score' => '8.6/10', 'icon' => 'banknote'],
    ['title' => 'Live Betting UX', 'score' => '8.8/10', 'icon' => 'monitor-smartphone'],
    ['title' => 'Support Quality', 'score' => '8.9/10', 'icon' => 'headphones'],
];

$userVoices = [
    ['name' => 'Rahul P.', 'text' => 'Promo tracking is clean and codes are regularly updated.'],
    ['name' => 'Sajib M.', 'text' => 'Useful side-by-side review notes before joining campaigns.'],
    ['name' => 'Tania R.', 'text' => 'Guides helped me avoid common rollover mistakes.'],
    ['name' => 'Imran K.', 'text' => 'I like the quick status tags and validity details.'],
];

$compare = [
    ['metric' => 'Code Accuracy', 'ours' => 'High', 'typical' => 'Medium'],
    ['metric' => 'Update Frequency', 'ours' => 'Daily', 'typical' => 'Weekly'],
    ['metric' => 'Bonus Explanations', 'ours' => 'Detailed', 'typical' => 'Basic'],
    ['metric' => 'Support Response', 'ours' => 'Fast', 'typical' => 'Mixed'],
];

$policy = [
    'Every listed code is manually reviewed before publishing.',
    'User reports are verified before score adjustments.',
    'Expired campaigns are archived with timeline notes.',
    'Review updates include change logs for transparency.',
];

require __DIR__ . '/includes/site-start.php';
?>
        <section class="hero-bg pb-12 sm:pb-14 lg:pb-20">
            <div class="hero-inner mx-auto max-w-[1920px] px-4 pt-24 sm:px-5 sm:pt-28 lg:px-8 lg:pt-32">
                <h1 class="font-display text-[clamp(1.55rem,5.6vw,3rem)] font-extrabold uppercase">Platform <span class="text-electric">Reviews</span></h1>
                <p class="mt-5 max-w-3xl text-sm leading-7 text-blue-100/90 sm:text-base">Independent scoring model focused on promo usability and trust.</p>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Review Scorecards</h2>
            <div class="mt-7 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <?php foreach ($scoreCards as $card): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5 text-center transition duration-300 hover:-translate-y-1 hover:border-skyfire/70">
                        <i data-lucide="<?= htmlspecialchars($card['icon']); ?>" class="mx-auto h-10 w-10 text-skyfire"></i>
                        <h3 class="mt-4 font-display text-sm font-bold uppercase sm:text-base"><?= htmlspecialchars($card['title']); ?></h3>
                        <p class="mt-3 text-xl font-extrabold text-white"><?= htmlspecialchars($card['score']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">User Feedback</h2>
            <div class="mt-7 grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                <?php foreach ($userVoices as $voice): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5">
                        <p class="text-sm leading-7 text-blue-100/85">"<?= htmlspecialchars($voice['text']); ?>"</p>
                        <p class="mt-4 text-xs font-semibold uppercase text-skyfire"><?= htmlspecialchars($voice['name']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Comparison Snapshot</h2>
            <div class="mt-7 overflow-x-auto rounded-lg border border-[rgba(31,135,255,.3)]">
                <table class="min-w-full text-left text-sm">
                    <thead class="bg-blue-900/40 text-xs uppercase text-blue-100">
                        <tr>
                            <th class="px-4 py-3">Metric</th>
                            <th class="px-4 py-3">1xbetPromoHub</th>
                            <th class="px-4 py-3">Typical Listing Site</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($compare as $row): ?>
                            <tr class="border-t border-blue-400/20">
                                <td class="px-4 py-3"><?= htmlspecialchars($row['metric']); ?></td>
                                <td class="px-4 py-3 text-skyfire"><?= htmlspecialchars($row['ours']); ?></td>
                                <td class="px-4 py-3 text-blue-100/75"><?= htmlspecialchars($row['typical']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Editorial Policy</h2>
            <div class="mt-7 grid gap-4 lg:grid-cols-2">
                <?php foreach ($policy as $line): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5">
                        <p class="text-sm leading-7 text-blue-100/85"><i data-lucide="shield-check" class="mr-2 inline h-4 w-4 text-skyfire"></i><?= htmlspecialchars($line); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <div class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-6 sm:p-8">
                <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Submit Your Experience</h2>
                <p class="mt-3 max-w-3xl text-sm leading-7 text-blue-100/85">Share payout, bonus, and support experiences so our review score stays current and fair.</p>
                <a href="contact.php" class="mt-5 inline-flex items-center justify-center gap-2 rounded-md bg-electric px-5 py-3 text-xs font-bold uppercase shadow-glow transition hover:bg-skyfire sm:text-sm">
                    <i data-lucide="pen-line" class="h-4 w-4"></i>
                    Send Review Feedback
                </a>
            </div>
        </section>
<?php require __DIR__ . '/includes/site-end.php'; ?>
