<?php
require_once __DIR__ . '/includes/bootstrap.php';
$pageTitle = '1xbetPromoHub - Guides';
$pageDescription = 'Step-by-step practical guides for onboarding, betting workflows, and safer bankroll habits.';

$beginnerGuides = [
    ['icon' => 'user-plus', 'title' => 'Account Setup', 'text' => 'Create account and verify essentials in minutes.'],
    ['icon' => 'wallet', 'title' => 'First Deposit', 'text' => 'Pick secure methods and apply right promo code.'],
    ['icon' => 'chart-column', 'title' => 'Basic Betting', 'text' => 'Read odds and place clean single bets.'],
    ['icon' => 'badge-help', 'title' => 'Support Usage', 'text' => 'Use live help for bonus and payment issues.'],
];

$advancedGuides = [
    ['title' => 'Market Selection Strategy', 'text' => 'Focus on niche markets with better value spread.'],
    ['title' => 'Rollover Optimization', 'text' => 'Use medium-risk picks to finish wagering faster.'],
    ['title' => 'Session Risk Caps', 'text' => 'Set hard stop-loss and daily stake limits.'],
    ['title' => 'Offer Timing', 'text' => 'Claim campaign codes during high-value windows.'],
];

$mistakes = [
    'Using expired codes from random groups.',
    'Skipping terms before placing qualifying bets.',
    'Depositing below minimum campaign threshold.',
    'Over-leveraging bankroll on one market.',
];

$checklist = [
    ['icon' => 'check', 'text' => 'Promo code copied correctly'],
    ['icon' => 'check', 'text' => 'Deposit amount matches offer terms'],
    ['icon' => 'check', 'text' => 'Minimum odds requirement reviewed'],
    ['icon' => 'check', 'text' => 'Rollover tracking started'],
];

$guideVideos = [
    ['title' => 'Register & Verify Account', 'id' => 'ysz5S6PUM-U', 'duration' => '04:12'],
    ['title' => 'Deposit & Promo Activation', 'id' => 'ScMzIvxBSi4', 'duration' => '05:21'],
    ['title' => 'Wagering Rules Explained', 'id' => 'aqz-KE-bpKQ', 'duration' => '03:46'],
];

require __DIR__ . '/includes/site-start.php';
?>
        <section class="hero-bg pb-12 sm:pb-14 lg:pb-20">
            <div class="hero-inner mx-auto max-w-[1920px] px-4 pt-24 sm:px-5 sm:pt-28 lg:px-8 lg:pt-32">
                <h1 class="font-display text-[clamp(1.55rem,5.6vw,3rem)] font-extrabold uppercase"><span class="text-electric">Guides</span> & Tutorials</h1>
                <p class="mt-5 max-w-3xl text-sm leading-7 text-blue-100/90 sm:text-base">Clear, practical and fast guides for new and experienced users.</p>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Beginner Guides</h2>
            <div class="mt-7 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <?php foreach ($beginnerGuides as $guide): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5 transition duration-300 hover:-translate-y-1 hover:border-skyfire/70">
                        <i data-lucide="<?= htmlspecialchars($guide['icon']); ?>" class="h-10 w-10 text-skyfire"></i>
                        <h3 class="mt-4 font-display text-sm font-bold uppercase sm:text-base"><?= htmlspecialchars($guide['title']); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-blue-100/80"><?= htmlspecialchars($guide['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Advanced Playbook</h2>
            <div class="mt-7 grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                <?php foreach ($advancedGuides as $guide): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5">
                        <h3 class="font-display text-sm font-bold uppercase sm:text-base"><?= htmlspecialchars($guide['title']); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-blue-100/80"><?= htmlspecialchars($guide['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Common Mistakes</h2>
            <div class="mt-7 grid gap-4 lg:grid-cols-2">
                <?php foreach ($mistakes as $mistake): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5">
                        <p class="text-sm leading-7 text-blue-100/85"><i data-lucide="x-circle" class="mr-2 inline h-4 w-4 text-red-300"></i><?= htmlspecialchars($mistake); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Before You Bet Checklist</h2>
            <div class="mt-7 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <?php foreach ($checklist as $item): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5">
                        <p class="text-sm leading-7 text-blue-100/85"><i data-lucide="<?= htmlspecialchars($item['icon']); ?>" class="mr-2 inline h-4 w-4 text-emerald-300"></i><?= htmlspecialchars($item['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Video Guides</h2>
            <div class="mt-7 grid gap-4 md:grid-cols-3">
                <?php foreach ($guideVideos as $video): ?>
                    <a href="https://www.youtube.com/watch?v=<?= urlencode($video['id']); ?>" target="_blank" rel="noopener noreferrer" class="group rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-3 transition duration-300 hover:-translate-y-1 hover:border-skyfire/70">
                        <div class="relative overflow-hidden rounded-md">
                            <img src="https://img.youtube.com/vi/<?= urlencode($video['id']); ?>/hqdefault.jpg" alt="<?= htmlspecialchars($video['title']); ?>" class="h-40 w-full object-cover transition duration-300 group-hover:scale-[1.03]">
                            <span class="absolute left-3 top-3 rounded bg-black/55 px-2 py-1 text-[10px] font-semibold uppercase tracking-wide text-white"><?= htmlspecialchars($video['duration']); ?></span>
                            <span class="absolute inset-0 flex items-center justify-center">
                                <span class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-electric/85 text-white shadow-glow">
                                    <i data-lucide="play" class="h-6 w-6"></i>
                                </span>
                            </span>
                        </div>
                        <h3 class="mt-4 font-display text-sm font-bold uppercase sm:text-base"><?= htmlspecialchars($video['title']); ?></h3>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <div class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-6 sm:p-8">
                <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Need A Custom Guide?</h2>
                <p class="mt-3 max-w-3xl text-sm leading-7 text-blue-100/85">Tell us your bankroll style and preferred market. We will publish focused guide updates for that workflow.</p>
                <a href="contact.php" class="mt-5 inline-flex items-center justify-center gap-2 rounded-md bg-electric px-5 py-3 text-xs font-bold uppercase shadow-glow transition hover:bg-skyfire sm:text-sm">
                    <i data-lucide="message-square" class="h-4 w-4"></i>
                    Contact Team
                </a>
            </div>
        </section>
<?php require __DIR__ . '/includes/site-end.php'; ?>
