<?php
require_once __DIR__ . '/includes/bootstrap.php';
$pageTitle = '1xbetPromoHub - Bonuses';
$pageDescription = 'Explore welcome, reload, cashback, and VIP bonus structures with practical claim tips.';

$highlights = [
    ['icon' => 'sparkles', 'title' => 'Welcome Pack', 'text' => 'Start with a high-value first deposit bundle.'],
    ['icon' => 'repeat', 'title' => 'Reload Boost', 'text' => 'Weekly and weekend reload benefits.'],
    ['icon' => 'rotate-ccw', 'title' => 'Cashback', 'text' => 'Partial returns on qualifying losses.'],
    ['icon' => 'crown', 'title' => 'VIP Rewards', 'text' => 'Tier upgrades with premium perks.'],
];

$bonusTypes = [
    ['name' => 'Sports Welcome', 'rate' => '100%', 'cap' => 'Rs10,000'],
    ['name' => 'Casino Welcome', 'rate' => '150%', 'cap' => 'Rs20,000'],
    ['name' => 'Live Casino', 'rate' => '120%', 'cap' => 'Rs15,000'],
    ['name' => 'Esports Weekend', 'rate' => '75%', 'cap' => 'Rs8,000'],
];

$wageringTips = [
    'Check minimum odds requirements before betting.',
    'Use bankroll split instead of single large stake.',
    'Track wager progress after each placed bet.',
    'Avoid early cashout when rollover is active.',
];

$claimFlow = [
    ['icon' => 'clipboard-check', 'title' => 'Select Offer', 'text' => 'Pick the bonus campaign you need.'],
    ['icon' => 'wallet', 'title' => 'Deposit', 'text' => 'Use accepted method with valid amount.'],
    ['icon' => 'badge-check', 'title' => 'Activate', 'text' => 'Apply code or choose promotion in account.'],
    ['icon' => 'line-chart', 'title' => 'Complete Rollover', 'text' => 'Meet terms to unlock withdrawals.'],
];

require __DIR__ . '/includes/site-start.php';
?>
        <section class="hero-bg pb-12 sm:pb-14 lg:pb-20">
            <div class="hero-inner mx-auto max-w-[1920px] px-4 pt-24 sm:px-5 sm:pt-28 lg:px-8 lg:pt-32">
                <h1 class="font-display text-[clamp(1.55rem,5.6vw,3rem)] font-extrabold uppercase">Bonus <span class="text-electric">Center</span></h1>
                <p class="mt-5 max-w-3xl text-sm leading-7 text-blue-100/90 sm:text-base">Complete breakdown of all bonus types and usage conditions.</p>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Bonus Highlights</h2>
            <div class="mt-7 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <?php foreach ($highlights as $item): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5 transition duration-300 hover:-translate-y-1 hover:border-skyfire/70">
                        <i data-lucide="<?= htmlspecialchars($item['icon']); ?>" class="h-10 w-10 text-skyfire"></i>
                        <h3 class="mt-4 font-display text-sm font-bold uppercase sm:text-base"><?= htmlspecialchars($item['title']); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-blue-100/80"><?= htmlspecialchars($item['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Bonus Types</h2>
            <div class="mt-7 grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                <?php foreach ($bonusTypes as $type): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5">
                        <h3 class="font-display text-sm font-bold uppercase sm:text-base"><?= htmlspecialchars($type['name']); ?></h3>
                        <p class="mt-3 text-sm uppercase text-blue-100/80">Rate: <span class="text-white"><?= htmlspecialchars($type['rate']); ?></span></p>
                        <p class="mt-1 text-sm uppercase text-blue-100/80">Cap: <span class="text-white"><?= htmlspecialchars($type['cap']); ?></span></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Wagering Tips</h2>
            <div class="mt-7 grid gap-4 lg:grid-cols-2">
                <?php foreach ($wageringTips as $tip): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5">
                        <p class="text-sm leading-7 text-blue-100/85"><i data-lucide="check-circle-2" class="mr-2 inline h-4 w-4 text-skyfire"></i><?= htmlspecialchars($tip); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Claim Process</h2>
            <div class="mt-7 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <?php foreach ($claimFlow as $step): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5 text-center transition duration-300 hover:-translate-y-1 hover:border-skyfire/70">
                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-gradient-to-br from-skyfire to-blue-700 shadow-glow">
                            <i data-lucide="<?= htmlspecialchars($step['icon']); ?>" class="h-7 w-7"></i>
                        </div>
                        <h3 class="mt-4 font-display text-sm font-bold uppercase sm:text-base"><?= htmlspecialchars($step['title']); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-blue-100/80"><?= htmlspecialchars($step['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
<?php require __DIR__ . '/includes/site-end.php'; ?>
