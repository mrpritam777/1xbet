document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.querySelector('#menuBtn');
    const navMenu = document.querySelector('#navMenu');
    const navBackdrop = document.querySelector('#navBackdrop');
    const topBtn = document.querySelector('#topBtn');
    const toast = document.querySelector('#toast');

    function refreshIcons() {
        if (window.lucide) {
            window.lucide.createIcons();
        }
    }

    function showToast(message) {
        toast.textContent = message;
        toast.classList.remove('hidden');
        clearTimeout(showToast.timer);
        showToast.timer = setTimeout(() => toast.classList.add('hidden'), 1800);
    }

    function setMenuOpen(isOpen) {
        navMenu.classList.toggle('is-open', isOpen);
        navBackdrop.classList.toggle('is-open', isOpen);
        document.body.classList.toggle('overflow-hidden', isOpen && window.innerWidth < 750);
        menuBtn.setAttribute('aria-expanded', String(isOpen));
        menuBtn.innerHTML = isOpen ? '<i data-lucide="x" class="h-5 w-5"></i>' : '<i data-lucide="menu" class="h-5 w-5"></i>';
        refreshIcons();
    }

    menuBtn.addEventListener('click', () => {
        setMenuOpen(!navMenu.classList.contains('is-open'));
    });

    navBackdrop.addEventListener('click', () => {
        setMenuOpen(false);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            setMenuOpen(false);
        }
    });

    navMenu.querySelectorAll('a[href]').forEach((link) => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 750) {
                setMenuOpen(false);
            }
        });
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 750) {
            setMenuOpen(false);
        }
    });

    document.querySelectorAll('.copy-btn').forEach((button) => {
        button.addEventListener('click', async () => {
            const code = button.dataset.code;
            try {
                await navigator.clipboard.writeText(code);
            } catch (error) {
                const input = document.createElement('input');
                input.value = code;
                document.body.appendChild(input);
                input.select();
                document.execCommand('copy');
                input.remove();
            }

            const label = button.querySelector('span');
            label.textContent = 'Copied';
            button.classList.add('copy-done');
            showToast(`${code} copied`);

            setTimeout(() => {
                label.textContent = 'Copy Code';
                button.classList.remove('copy-done');
            }, 1700);
        });
    });

    window.addEventListener('scroll', () => {
        topBtn.classList.toggle('hidden', window.scrollY < 500);
        topBtn.classList.toggle('flex', window.scrollY >= 500);
    }, { passive: true });

    topBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    function initBonusesSwiper() {
        if (typeof window.Swiper === 'undefined') return;
        const slider = document.querySelector('.bonuses-swiper');
        if (!slider) return;

        new window.Swiper(slider, {
            loop: true,
            speed: 650,
            spaceBetween: 12,
            slidesPerView: 1,
            autoplay: {
                delay: 2200,
                disableOnInteraction: false,
                pauseOnMouseEnter: false
            },
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                },
                1280: {
                    slidesPerView: 4
                },
                1536: {
                    slidesPerView: 6
                }
            }
        });
    }

    initBonusesSwiper();
    refreshIcons();
});
