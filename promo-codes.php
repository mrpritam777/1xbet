<?php
require_once __DIR__ . '/includes/bootstrap.php';
require_once __DIR__ . '/includes/data-store.php';
$pageTitle = '1xbetPromoHub - Promo Codes';
$pageDescription = 'Verified promo codes, usage guides, FAQs, and latest offers for 1xbet users.';

$promoCodes = load_promo_codes();

$codeGroups = [
    ['icon' => 'ticket', 'title' => 'Sportsbook Codes', 'text' => 'Best match-day codes and reload rewards.'],
    ['icon' => 'dice-5', 'title' => 'Casino Codes', 'text' => 'Slots and live-casino welcome boosts.'],
    ['icon' => 'swords', 'title' => 'Esports Codes', 'text' => 'Tournament-focused high-value offers.'],
    ['icon' => 'wallet-cards', 'title' => 'Deposit Codes', 'text' => 'Extra rewards on payment top-ups.'],
];

$steps = [
    ['icon' => 'copy', 'title' => 'Copy Code', 'text' => 'Tap copy button from any promo card.'],
    ['icon' => 'user-plus', 'title' => 'Login / Signup', 'text' => 'Open your account dashboard in 1xbet.'],
    ['icon' => 'badge-dollar-sign', 'title' => 'Add Deposit', 'text' => 'Choose payment method and amount.'],
    ['icon' => 'sparkles', 'title' => 'Apply & Claim', 'text' => 'Paste code and confirm to activate bonus.'],
];

$faq = [
    ['q' => 'How long does a promo code stay active?', 'a' => 'Most codes remain active for limited campaigns and can expire any day.'],
    ['q' => 'Can I use more than one code?', 'a' => 'Usually one welcome code and one reload code are accepted in separate campaigns.'],
    ['q' => 'Why a code may not work?', 'a' => 'Expired code, region lock, invalid deposit amount, or account restriction.'],
    ['q' => 'Do I need KYC before claiming?', 'a' => 'For higher bonuses or withdrawals, verification may be required by platform policy.'],
];

require __DIR__ . '/includes/site-start.php';
?>
        <section class="hero-bg pb-12 sm:pb-14 lg:pb-20">
            <div class="hero-inner mx-auto max-w-[1920px] px-4 pt-24 sm:px-5 sm:pt-28 lg:px-8 lg:pt-32">
                <h1 class="font-display text-[clamp(1.55rem,5.6vw,3rem)] font-extrabold uppercase">All <span class="text-electric">Promo Codes</span></h1>
                <p class="mt-5 max-w-3xl text-sm leading-7 text-blue-100/90 sm:text-base">Browse verified 1xbet promo codes with real usage trends and claim flow.</p>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Featured Codes</h2>
            <div class="mt-7 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <?php foreach ($promoCodes as $promo): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5 shadow-[inset_0_1px_0_rgba(255,255,255,.06),0_20px_45px_rgba(0,0,0,.18)] backdrop-blur-[14px] transition duration-300 hover:-translate-y-1 hover:border-skyfire/70">
                        <span class="inline-flex rounded-md bg-gradient-to-r <?= htmlspecialchars($promo['tagColor']); ?> px-3 py-1 text-xs font-bold uppercase"><?= htmlspecialchars($promo['tag']); ?></span>
                        <h3 class="promo-code-title mt-6 font-display text-[clamp(1.05rem,3.2vw,1.35rem)] font-bold uppercase"><?= htmlspecialchars($promo['code']); ?></h3>
                        <p class="mt-5 text-sm font-semibold uppercase leading-6 text-white/95 sm:text-base"><?= htmlspecialchars($promo['bonus']); ?><br><span class="text-blue-100/90"><?= htmlspecialchars($promo['amount']); ?></span></p>
                        <button class="copy-btn mt-6 inline-flex w-full items-center justify-center gap-2 rounded-md border border-blue-300/50 bg-blue-700/45 px-3 py-3 text-xs font-bold uppercase transition hover:bg-blue-600/65 sm:text-sm" data-code="<?= htmlspecialchars($promo['code']); ?>">
                            <span>Copy Code</span>
                            <i data-lucide="copy" class="h-5 w-5"></i>
                        </button>
                        <p class="mt-5 flex items-center gap-2 text-sm text-blue-100/70"><i data-lucide="users" class="h-4 w-4"></i>Used <?= htmlspecialchars($promo['used']); ?> times</p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Code Categories</h2>
            <div class="mt-7 grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                <?php foreach ($codeGroups as $group): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5 transition duration-300 hover:-translate-y-1 hover:border-skyfire/70">
                        <i data-lucide="<?= htmlspecialchars($group['icon']); ?>" class="h-10 w-10 text-skyfire"></i>
                        <h3 class="mt-4 font-display text-sm font-bold uppercase sm:text-base"><?= htmlspecialchars($group['title']); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-blue-100/80"><?= htmlspecialchars($group['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">How To Redeem</h2>
            <div class="mt-7 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <?php foreach ($steps as $step): ?>
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

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">FAQ</h2>
            <div class="mt-7 grid gap-4 lg:grid-cols-2">
                <?php foreach ($faq as $item): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5">
                        <h3 class="font-display text-sm font-bold uppercase sm:text-base"><?= htmlspecialchars($item['q']); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-blue-100/80"><?= htmlspecialchars($item['a']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
<?php require __DIR__ . '/includes/site-end.php'; ?>
