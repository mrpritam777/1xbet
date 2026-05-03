<?php
require_once __DIR__ . '/includes/bootstrap.php';
$pageTitle = '1xbetPromoHub - Contact';
$pageDescription = 'Reach support, submit reports, ask questions, and join community channels.';

$channels = [
    ['icon' => 'send', 'title' => 'Telegram Support', 'text' => 'Fastest way to get promo and account help.'],
    ['icon' => 'mail', 'title' => 'Email Desk', 'text' => 'For formal requests and campaign clarifications.'],
    ['icon' => 'message-circle', 'title' => 'Live Chat', 'text' => 'Quick answers for common user issues.'],
    ['icon' => 'phone-call', 'title' => 'Callback Request', 'text' => 'Request contact for high-priority cases.'],
];

$faq = [
    ['q' => 'How quickly do you update expired codes?', 'a' => 'Usually within the same day after validation.'],
    ['q' => 'Can I request region-specific codes?', 'a' => 'Yes, send your region and preferred bonus category.'],
    ['q' => 'Where to report a broken link?', 'a' => 'Use the contact form below with the page URL and issue.'],
    ['q' => 'Do you share private account data?', 'a' => 'No, all requests are processed with privacy-first policy.'],
];

$officeHours = [
    ['day' => 'Monday - Friday', 'time' => '09:00 - 23:00'],
    ['day' => 'Saturday', 'time' => '10:00 - 22:00'],
    ['day' => 'Sunday', 'time' => '10:00 - 20:00'],
];

$contactStatus = $_GET['status'] ?? '';

require __DIR__ . '/includes/site-start.php';
?>
        <section class="hero-bg pb-12 sm:pb-14 lg:pb-20">
            <div class="hero-inner mx-auto max-w-[1920px] px-4 pt-24 sm:px-5 sm:pt-28 lg:px-8 lg:pt-32">
                <h1 class="font-display text-[clamp(1.55rem,5.6vw,3rem)] font-extrabold uppercase">Get In <span class="text-electric">Touch</span></h1>
                <p class="mt-5 max-w-3xl text-sm leading-7 text-blue-100/90 sm:text-base">Reach our team for code issues, bonus guidance, and review feedback.</p>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Support Channels</h2>
            <div class="mt-7 grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <?php foreach ($channels as $channel): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5 transition duration-300 hover:-translate-y-1 hover:border-skyfire/70">
                        <i data-lucide="<?= htmlspecialchars($channel['icon']); ?>" class="h-10 w-10 text-skyfire"></i>
                        <h3 class="mt-4 font-display text-sm font-bold uppercase sm:text-base"><?= htmlspecialchars($channel['title']); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-blue-100/80"><?= htmlspecialchars($channel['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Send A Message</h2>
            <?php if ($contactStatus === 'ok'): ?>
                <p class="mt-5 rounded-md border border-emerald-300/40 bg-emerald-500/15 px-4 py-3 text-sm text-emerald-100">Message sent successfully. Our team will contact you soon.</p>
            <?php elseif ($contactStatus === 'error'): ?>
                <p class="mt-5 rounded-md border border-red-300/40 bg-red-500/15 px-4 py-3 text-sm text-red-100">Could not submit your message. Please try again.</p>
            <?php endif; ?>
            <form method="post" action="submit-contact.php" class="mt-7 grid gap-4 rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5 sm:grid-cols-2">
                <label class="text-sm">
                    <span class="mb-2 block text-blue-100/80">Name</span>
                    <input name="name" type="text" required class="w-full rounded-md border border-blue-400/30 bg-blue-950/40 px-3 py-2 text-white outline-none focus:border-skyfire" placeholder="Your name">
                </label>
                <label class="text-sm">
                    <span class="mb-2 block text-blue-100/80">Email</span>
                    <input name="email" type="email" required class="w-full rounded-md border border-blue-400/30 bg-blue-950/40 px-3 py-2 text-white outline-none focus:border-skyfire" placeholder="you@example.com">
                </label>
                <label class="text-sm sm:col-span-2">
                    <span class="mb-2 block text-blue-100/80">Message</span>
                    <textarea name="message" rows="5" required class="w-full rounded-md border border-blue-400/30 bg-blue-950/40 px-3 py-2 text-white outline-none focus:border-skyfire" placeholder="Describe your request..."></textarea>
                </label>
                <button type="submit" class="inline-flex items-center justify-center gap-2 rounded-md bg-electric px-5 py-3 text-xs font-bold uppercase shadow-glow transition hover:bg-skyfire sm:w-max">
                    <i data-lucide="send" class="h-4 w-4"></i>
                    Submit Request
                </button>
            </form>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Frequently Asked Questions</h2>
            <div class="mt-7 grid gap-4 lg:grid-cols-2">
                <?php foreach ($faq as $item): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5">
                        <h3 class="font-display text-sm font-bold uppercase sm:text-base"><?= htmlspecialchars($item['q']); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-blue-100/80"><?= htmlspecialchars($item['a']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Office Hours</h2>
            <div class="mt-7 grid gap-4 md:grid-cols-3">
                <?php foreach ($officeHours as $slot): ?>
                    <article class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-5 text-center">
                        <h3 class="font-display text-sm font-bold uppercase sm:text-base"><?= htmlspecialchars($slot['day']); ?></h3>
                        <p class="mt-3 text-sm leading-7 text-blue-100/80"><?= htmlspecialchars($slot['time']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mx-auto max-w-[1920px] border-t border-blue-400/25 px-4 py-9 sm:px-5 sm:py-10 lg:px-8">
            <div class="rounded-lg border border-[rgba(31,135,255,.3)] bg-[linear-gradient(145deg,rgba(8,35,69,.88),rgba(3,18,37,.78))] p-6 sm:p-8">
                <h2 class="font-display text-[clamp(.95rem,3vw,1.3rem)] font-bold uppercase">Join Community Updates</h2>
                <p class="mt-3 max-w-3xl text-sm leading-7 text-blue-100/85">Get instant alerts for fresh promo codes, payout news, and support updates on Telegram.</p>
                <a href="https://t.me/" class="mt-5 inline-flex items-center justify-center gap-2 rounded-md bg-electric px-5 py-3 text-xs font-bold uppercase shadow-glow transition hover:bg-skyfire sm:text-sm">
                    <i data-lucide="send" class="h-4 w-4"></i>
                    Join Telegram
                </a>
            </div>
        </section>
<?php require __DIR__ . '/includes/site-end.php'; ?>
