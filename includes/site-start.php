<?php
$pageTitle = $pageTitle ?? '1xbetPromoHub';
$pageDescription = $pageDescription ?? 'Latest 1xbet promo codes, verified bonuses, offers, and guides.';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle); ?></title>
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="<?= htmlspecialchars($pageDescription); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        display: ['Michroma', 'Arial', 'sans-serif'],
                        sans: ['Inter', 'Arial', 'sans-serif']
                    },
                    colors: {
                        night: '#031225',
                        ink: '#061a33',
                        electric: '#087cff',
                        skyfire: '#11b9ff'
                    },
                    boxShadow: {
                        glow: '0 0 30px rgba(8, 124, 255, .35)',
                        card: 'inset 0 1px 0 rgba(255,255,255,.08), 0 20px 50px rgba(0,0,0,.22)'
                    }
                }
            }
        };
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Michroma&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body class="font-sans text-white antialiased">
    <div class="stadium"></div>

    <header class="absolute inset-x-0 top-0 z-30">
        <nav class="mx-auto flex max-w-[1920px] items-center justify-between gap-4 px-4 py-2.5 sm:px-5 sm:py-3 lg:px-8">
            <a href="index.php" class="flex min-w-0 items-center" aria-label="1xbetPromoHub home">
                <img src="assets/images/logo.png" alt="1xbetPromoHub" class="h-11 w-auto object-contain sm:h-16 lg:h-20">
            </a>

            <button id="menuBtn" class="relative z-50 inline-flex h-10 w-10 flex-none items-center justify-center rounded border border-blue-400/30 bg-blue-950/40 text-blue-100 transition hover:border-skyfire sm:h-11 sm:w-11 min-[750px]:hidden" aria-label="Open menu" aria-expanded="false">
                <i data-lucide="menu" class="h-5 w-5"></i>
            </button>

            <div id="navBackdrop" class="mobile-backdrop min-[750px]:hidden" aria-hidden="true"></div>

            <div id="navMenu" class="mobile-nav fixed right-0 top-0 z-40 flex h-dvh w-[min(88vw,22rem)] flex-col border-l border-blue-400/25 bg-[#041327]/95 px-5 pb-8 pt-24 shadow-card backdrop-blur-xl sm:px-6 min-[750px]:static min-[750px]:h-auto min-[750px]:w-auto min-[750px]:flex-row min-[750px]:items-center min-[750px]:gap-8 min-[750px]:border-0 min-[750px]:bg-transparent min-[750px]:p-0 min-[750px]:shadow-none min-[750px]:backdrop-blur-0">
                <div class="flex flex-col gap-5 min-[750px]:flex-row min-[750px]:items-center min-[750px]:gap-8">
                    <?php foreach ($navItems as $item): ?>
                        <?php $isActive = $currentPage === $item['href']; ?>
                        <a href="<?= htmlspecialchars($item['href']); ?>" class="text-base font-bold uppercase tracking-normal transition hover:text-skyfire min-[750px]:text-sm <?= $isActive ? 'text-electric' : 'text-white'; ?>">
                            <?= htmlspecialchars($item['label']); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                <a href="https://t.me/" class="mt-8 inline-flex items-center justify-center gap-2 rounded-md bg-electric px-5 py-3 text-sm font-bold uppercase shadow-glow transition hover:bg-skyfire min-[750px]:mt-0">
                    <i data-lucide="send" class="h-4 w-4"></i>
                    Join Telegram
                </a>
            </div>
        </nav>
    </header>

    <main class="relative z-10">
