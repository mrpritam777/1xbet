<?php
require_once __DIR__ . '/includes/bootstrap.php';
require_once __DIR__ . '/includes/data-store.php';

$pageTitle = '1xbetPromoHub - Home';
$pageDescription = 'Latest 1xbet promo codes, bonuses, guides, reviews, and contact updates.';

$features = [
    ['icon' => 'badge-percent', 'title' => 'Exclusive Promo Codes', 'text' => 'Get verified and working promo codes daily.'],
    ['icon' => 'gift', 'title' => 'Amazing Bonuses', 'text' => 'Access the best bonuses and promotions.'],
    ['icon' => 'shield-check', 'title' => 'Trusted & Verified', 'text' => 'All codes and offers are tested and verified.'],
    ['icon' => 'headphones', 'title' => '24/7 Support', 'text' => 'We are here to help you anytime, anywhere.'],
];

$promoCodes = load_promo_codes();

$steps = [
    ['icon' => 'clipboard-list', 'title' => 'Choose a Code', 'text' => 'Select a promo code from our list.'],
    ['icon' => 'copy', 'title' => 'Copy the Code', 'text' => 'Click on the code to copy it.'],
    ['icon' => 'user-plus', 'title' => 'Register / Login', 'text' => 'Go to 1xbet and create an account or log in.'],
    ['icon' => 'gift', 'title' => 'Apply the Code', 'text' => 'Enter the code in the promo code field and claim your bonus.'],
];

$stats = [
    ['icon' => 'badge-percent', 'number' => '500+', 'label' => 'Promo Codes Available'],
    ['icon' => 'shield-check', 'number' => '100%', 'label' => 'Verified & Working'],
    ['icon' => 'users', 'number' => '50K+', 'label' => 'Happy Users'],
    ['icon' => 'headphones', 'number' => '24/7', 'label' => 'Support Available'],
];

$categories = [
    ['icon' => 'sparkles', 'title' => 'Welcome Bonus', 'text' => 'First deposit bonuses'],
    ['icon' => 'wallet-cards', 'title' => 'Reload Bonus', 'text' => 'Add more, earn more'],
    ['icon' => 'badge-percent', 'title' => 'Free Bets', 'text' => 'Bet without risk'],
    ['icon' => 'badge-dollar-sign', 'title' => 'Cashback', 'text' => 'Get money back'],
    ['icon' => 'medal', 'title' => 'VIP Program', 'text' => 'Exclusive VIP rewards'],
    ['icon' => 'trophy', 'title' => 'Drops & Rewards', 'text' => 'Regular offers & drops'],
];

$updates = [
    ['title' => 'New IPL Bundle', 'text' => 'Weekend sports promo updated for new users.'],
    ['title' => 'Casino Cashback', 'text' => 'Weekly cashback campaign now active.'],
    ['title' => 'Telegram Alerts', 'text' => 'Real-time code notifications enabled.'],
];

$guideVideos = [
    ['title' => 'How To Create 1xbet Account', 'id' => 'ysz5S6PUM-U', 'duration' => '04:12'],
    ['title' => 'How To Use Promo Code Properly', 'id' => 'ScMzIvxBSi4', 'duration' => '05:21'],
    ['title' => 'Bonus Claim Step By Step', 'id' => 'aqz-KE-bpKQ', 'duration' => '03:46'],
];

require __DIR__ . '/includes/site-start.php';
?>
        <section class="hero-bg pb-12 sm:pb-14 lg:pb-20">
            <div class="hero-inner mx-auto max-w-[1920px] px-4 pt-24 sm:px-5 sm:pt-28 lg:px-8 lg:pt-32">
                <div class="grid items-center gap-6 xl:grid-cols-[1fr_1.04fr] xl:gap-10">
                    <div>
                        <h1 class="font-display text-[clamp(1.75rem,7.2vw,4.2rem)] font-extrabold uppercase leading-[1.08] sm:leading-[1.02]">
                            Best <span class="text-electric">1xbet</span><br>Promo Codes
                        </h1>
                        <p class="mt-5 max-w-xl text-sm leading-7 text-blue-100/90 sm:mt-6 sm:text-base sm:leading-7 lg:text-lg">
                            Find the latest 1xbet promo codes, bonuses and exclusive offers. Maximize your winnings!
                        </p>
                        <div class="mt-7 flex flex-col gap-3 sm:mt-8 sm:flex-row sm:gap-4">
                            <a href="promo-codes.php" class="inline-flex w-full items-center justify-center gap-2 rounded-md bg-electric px-4 py-3 text-xs font-bold uppercase shadow-glow transition hover:bg-skyfire sm:w-auto sm:px-6 sm:py-4 sm:text-sm lg:px-7">
                                <i data-lucide="gift" class="h-5 w-5"></i>
                                View Promo Codes
                            </a>
                            <a href="guides.php" class="inline-flex w-full items-center justify-center gap-2 rounded-md border border-blue-400/60 bg-blue-950/25 px-4 py-3 text-xs font-bold uppercase transition hover:bg-blue-500/15 sm:w-auto sm:px-6 sm:py-4 sm:text-sm lg:px-7">
                                <i data-lucide="file-text" class="h-5 w-5"></i>
                                How To Use
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 grid gap-4 sm:mt-12 sm:grid-cols-2 lg:grid-cols-4">
                    <?php foreach ($features as $feature): ?>
                        <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5 text-center shadow-[inset_0_1px_0_rgba(255,255,255,.06),0_20px_45px_rgba(0,0,0,.18)] backdrop-blur-[14px] transition duration-300 hover:-translate-y-1 hover:border-skyfire/70 hover:shadow-[inset_0_1px_0_rgba(255,255,255,.08),0_24px_50px_rgba(6,61,121,.32)] sm:p-7 lg:p-8">
                            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-gradient-to-br from-skyfire to-electric text-white shadow-glow sm:h-16 sm:w-16">
                                <i data-lucide="<?= htmlspecialchars($feature['icon']); ?>" class="h-8 w-8 sm:h-9 sm:w-9"></i>
                            </div>
                            <h2 class="mt-5 font-display text-sm font-bold uppercase sm:mt-6 sm:text-base lg:text-lg"><?= htmlspecialchars($feature['title']); ?></h2>
                            <p class="mt-3 text-xs leading-6 text-blue-100/80 sm:mt-4 sm:text-sm sm:leading-7"><?= htmlspecialchars($feature['text']); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3.1vw,1.35rem)] font-bold uppercase">Latest <span class="text-electric">1xbet</span> Promo Codes</h2>
            <div class="mt-7 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <?php foreach ($promoCodes as $promo): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5 shadow-[inset_0_1px_0_rgba(255,255,255,.06),0_20px_45px_rgba(0,0,0,.18)] backdrop-blur-[14px] transition duration-300 hover:-translate-y-1 hover:border-skyfire/70 hover:shadow-[inset_0_1px_0_rgba(255,255,255,.08),0_24px_50px_rgba(6,61,121,.32)]">
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

        <section class="mx-auto grid max-w-[1920px] gap-9 border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:grid-cols-[1.03fr_.97fr] lg:px-8">
            <div>
                <h2 class="font-display text-[clamp(.95rem,3.1vw,1.35rem)] font-bold uppercase">How To Use <span class="text-electric">1xbet</span> Promo Codes</h2>
                <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <?php foreach ($steps as $index => $step): ?>
                        <article class="relative text-center">
                            <?php if ($index < count($steps) - 1): ?>
                                <div class="absolute left-[calc(50%+2.1rem)] top-9 hidden h-px w-[calc(100%-4.2rem)] bg-electric lg:block">
                                    <span class="absolute -right-1 -top-1.5 block h-3 w-3 rotate-45 border-r-2 border-t-2 border-electric"></span>
                                </div>
                            <?php endif; ?>
                            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br from-skyfire to-blue-700 shadow-glow sm:h-20 sm:w-20">
                                <i data-lucide="<?= htmlspecialchars($step['icon']); ?>" class="h-8 w-8 sm:h-9 sm:w-9"></i>
                            </div>
                            <span class="mx-auto mt-3 flex h-8 w-8 items-center justify-center rounded-full bg-blue-900 text-sm font-bold text-blue-100 sm:h-9 sm:w-9"><?= $index + 1; ?></span>
                            <h3 class="mt-5 font-display text-sm font-bold uppercase sm:text-base"><?= htmlspecialchars($step['title']); ?></h3>
                            <p class="mt-3 text-sm leading-6 text-blue-100/80"><?= htmlspecialchars($step['text']); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="border-blue-400/30 lg:border-l lg:pl-8">
                <h2 class="font-display text-[clamp(.95rem,3.1vw,1.35rem)] font-bold uppercase">Why Choose <span class="text-electric">1xbetPromoHub?</span></h2>
                <div class="mt-8 grid grid-cols-1 gap-4 min-[420px]:grid-cols-2 xl:grid-cols-4">
                    <?php foreach ($stats as $stat): ?>
                        <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5 text-center shadow-[inset_0_1px_0_rgba(255,255,255,.06),0_20px_45px_rgba(0,0,0,.18)] backdrop-blur-[14px] transition duration-300 hover:-translate-y-1 hover:border-skyfire/70 hover:shadow-[inset_0_1px_0_rgba(255,255,255,.08),0_24px_50px_rgba(6,61,121,.32)]">
                            <i data-lucide="<?= htmlspecialchars($stat['icon']); ?>" class="mx-auto h-12 w-12 text-skyfire sm:h-14 sm:w-14"></i>
                            <strong class="mt-6 block text-2xl font-extrabold sm:mt-7 sm:text-3xl"><?= htmlspecialchars($stat['number']); ?></strong>
                            <span class="mt-3 block text-xs font-semibold uppercase leading-5 text-blue-100 sm:text-sm"><?= htmlspecialchars($stat['label']); ?></span>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3.1vw,1.35rem)] font-bold uppercase">Explore <span class="text-electric">1xbet</span> Bonus Categories</h2>
            <div class="swiper bonuses-swiper mt-8">
                <div class="swiper-wrapper">
                    <?php foreach ($categories as $category): ?>
                        <div class="swiper-slide">
                            <article class="flex h-full min-h-32 items-center gap-4 rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-4 shadow-[inset_0_1px_0_rgba(255,255,255,.06),0_20px_45px_rgba(0,0,0,.18)] backdrop-blur-[14px] transition duration-300 hover:-translate-y-1 hover:border-skyfire/70 hover:shadow-[inset_0_1px_0_rgba(255,255,255,.08),0_24px_50px_rgba(6,61,121,.32)] sm:p-5">
                                <i data-lucide="<?= htmlspecialchars($category['icon']); ?>" class="h-9 w-9 flex-none text-skyfire sm:h-10 sm:w-10"></i>
                                <div>
                                    <h3 class="font-display text-sm font-bold uppercase sm:text-base"><?= htmlspecialchars($category['title']); ?></h3>
                                    <p class="mt-1 text-sm text-blue-100/75"><?= htmlspecialchars($category['text']); ?></p>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3.1vw,1.35rem)] font-bold uppercase">Platform <span class="text-electric">Updates</span></h2>
            <div class="mt-8 grid gap-4 md:grid-cols-3">
                <?php foreach ($updates as $update): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5 shadow-[inset_0_1px_0_rgba(255,255,255,.06),0_20px_45px_rgba(0,0,0,.18)] backdrop-blur-[14px] transition duration-300 hover:-translate-y-1 hover:border-skyfire/70 hover:shadow-[inset_0_1px_0_rgba(255,255,255,.08),0_24px_50px_rgba(6,61,121,.32)]">
                        <h3 class="font-display text-sm font-bold uppercase sm:text-base"><?= htmlspecialchars($update['title']); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-blue-100/80"><?= htmlspecialchars($update['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3.1vw,1.35rem)] font-bold uppercase">Guide <span class="text-electric">Videos</span></h2>
            <div class="mt-8 grid gap-4 md:grid-cols-3">
                <?php foreach ($guideVideos as $video): ?>
                    <a href="https://www.youtube.com/watch?v=<?= urlencode($video['id']); ?>" target="_blank" rel="noopener noreferrer" class="group rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-3 shadow-[inset_0_1px_0_rgba(255,255,255,.06),0_20px_45px_rgba(0,0,0,.18)] transition duration-300 hover:-translate-y-1 hover:border-skyfire/70">
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
<?php require __DIR__ . '/includes/site-end.php'; ?>
