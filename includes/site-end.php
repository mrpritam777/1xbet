    </main>

    <footer id="contact" class="relative z-10 mt-8 border-t border-blue-400/25">
        <div class="mx-auto grid max-w-[1920px] gap-9 px-4 py-10 sm:grid-cols-2 sm:px-5 sm:py-12 lg:grid-cols-4 lg:px-8">
            <div>
                <a href="index.php" class="flex items-center">
                    <img src="logo.png" alt="1xbetPromoHub" class="h-12 w-auto object-contain sm:h-16">
                </a>
                <p class="mt-5 max-w-xs text-sm leading-7 text-blue-100/80">Your trusted source for the latest 1xbet promo codes, bonuses, and exclusive offers. Join our community and maximize your winnings.</p>
                <div class="mt-6 flex gap-3">
                    <?php foreach ($socialLinks as $social): ?>
                        <a href="#" class="social-icon flex h-10 w-10 items-center justify-center rounded-full border border-blue-400/30 bg-blue-950/40 text-blue-100 transition hover:border-skyfire hover:text-skyfire" aria-label="<?= htmlspecialchars($social['name']); ?>">
                            <i data-lucide="<?= htmlspecialchars($social['icon']); ?>" class="h-[1.15rem] w-[1.15rem]"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div>
                <h3 class="font-display text-base font-bold uppercase sm:text-lg">Quick Links</h3>
                <ul class="mt-5 space-y-3 text-blue-100/80">
                    <?php foreach ($navItems as $item): ?>
                        <li><a class="transition hover:text-skyfire" href="<?= htmlspecialchars($item['href']); ?>"><?= htmlspecialchars($item['label']); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div>
                <h3 class="font-display text-base font-bold uppercase sm:text-lg">Useful Links</h3>
                <ul class="mt-5 space-y-3 text-blue-100/80">
                    <?php foreach (['How to Use', 'About Us', 'Terms & Conditions', 'Privacy Policy', 'Affiliate Program'] as $link): ?>
                        <li><a class="transition hover:text-skyfire" href="#"><?= htmlspecialchars($link); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div>
                <h3 class="font-display text-base font-bold uppercase sm:text-lg">Join Our Telegram</h3>
                <p class="mt-5 text-sm leading-7 text-blue-100/80">Get the latest promo codes and exclusive offers directly on Telegram!</p>
                <a href="https://t.me/" class="mt-7 inline-flex w-full items-center justify-center gap-2 rounded-md bg-electric px-4 py-3 text-xs font-bold uppercase shadow-glow transition hover:bg-skyfire sm:w-auto sm:px-7 sm:py-4 sm:text-sm">
                    <i data-lucide="send" class="h-5 w-5"></i>
                    Join Telegram
                </a>
            </div>
        </div>

        <div class="border-t border-blue-400/20 px-5 py-6 text-center text-sm text-blue-100/75">
            &copy; <?= date('Y'); ?> 1xbetPromoHub. All rights reserved.
        </div>
    </footer>

    <button id="topBtn" class="fixed bottom-5 right-5 z-30 hidden h-12 w-12 items-center justify-center rounded-full bg-electric text-white shadow-glow transition hover:bg-skyfire" aria-label="Back to top">
        <i data-lucide="arrow-up" class="h-6 w-6"></i>
    </button>

    <div id="toast" class="fixed bottom-5 left-1/2 z-40 hidden -translate-x-1/2 rounded-md border border-emerald-300/50 bg-emerald-500/20 px-5 py-3 text-sm font-semibold text-emerald-50 shadow-card backdrop-blur">
        Promo code copied
    </div>

    <script defer src="https://cdn.jsdelivr.net/npm/lucide@0.475.0/dist/umd/lucide.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script defer src="assets/js/app.js"></script>
</body>
</html>
