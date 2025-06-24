document.addEventListener('DOMContentLoaded', () => {

    // --- Theme Toggle Module (REMOVIDO) ---
    // A função initThemeToggle foi removida pois o design agora é exclusivamente dark.

    // --- Mobile Menu Module ---
    const initMobileMenu = () => {
        const menuButton = document.getElementById('mobile-menu-button');
        const closeButton = document.getElementById('mobile-menu-close-button');
        const menuPanel = document.getElementById('mobile-menu');
        const navLinks = menuPanel.querySelectorAll('.mobile-nav-link');

        const openMenu = () => menuPanel.classList.remove('translate-x-full');
        const closeMenu = () => menuPanel.classList.add('translate-x-full');

        menuButton.addEventListener('click', openMenu);
        closeButton.addEventListener('click', closeMenu);
        navLinks.forEach(link => link.addEventListener('click', closeMenu));
    };

    // --- Interactive Cursor Module ---
    const initInteractiveCursor = () => {
        if (!window.matchMedia("(pointer: fine)").matches) return;

        const cursorDot = document.querySelector('.cursor-dot');
        const cursorOutline = document.querySelector('.cursor-outline');
        const interactiveElements = document.querySelectorAll('.cursor-target');

        const mousePos = { x: 0, y: 0 };
        const outlinePos = { x: 0, y: 0 };
        const lerp = (start, end, amount) => (1 - amount) * start + amount * end;

        window.addEventListener('mousemove', e => {
            mousePos.x = e.clientX;
            mousePos.y = e.clientY;
        });

        const animateCursor = () => {
            cursorDot.style.transform = `translate(${mousePos.x}px, ${mousePos.y}px)`;
            outlinePos.x = lerp(outlinePos.x, mousePos.x, 0.1);
            outlinePos.y = lerp(outlinePos.y, mousePos.y, 0.1);
            cursorOutline.style.transform = `translate(${outlinePos.x}px, ${outlinePos.y}px)`;
            requestAnimationFrame(animateCursor);
        };
        requestAnimationFrame(animateCursor);

        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => cursorOutline.classList.add('hovered'));
            el.addEventListener('mouseleave', () => cursorOutline.classList.remove('hovered'));
        });

        window.addEventListener('mousedown', () => cursorOutline.classList.add('clicked'));
        window.addEventListener('mouseup', () => cursorOutline.classList.remove('clicked'));
    };

    // --- Smooth Scroll with Lenis Module ---
    const initLenisScroll = () => {
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);
        return lenis;
    };

    // --- Scroll to Anchor Links Module ---
    const initSmoothScrollToAnchor = (lenis) => {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const targetId = this.getAttribute('href');
                if (document.querySelector(targetId)) {
                    e.preventDefault();
                    lenis.scrollTo(targetId, { offset: -80 }); // Mantém o offset para o header
                }
            });
        });
    };

    // --- Entrance Animations with Anime.js Module ---
    const initEntranceAnimations = () => {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    
                    if (target.id === 'solucao') {
                        const heroTimeline = anime.timeline({ easing: 'easeOutExpo', duration: 1000 });
                        heroTimeline
                            .add({ targets: '.hero-title > span', translateY: [80, 0], opacity: [0, 1], delay: anime.stagger(100) })
                            .add({ targets: '#solucao p', translateY: [40, 0], opacity: [0, 1] }, '-=600')
                            .add({ targets: '#dashboard-mockup', translateY: [50, 0], opacity: [0, 1] }, '-=700')
                            .add({ targets: '.stat-card', translateY: [20, 0], opacity: [0, 1], delay: anime.stagger(150) }, '-=600')
                            .add({
                                targets: '.dashboard-stat-number',
                                innerHTML: (el) => [0, el.getAttribute('data-final-value')],
                                round: 10,
                                duration: 1500,
                                easing: 'easeOutExpo'
                            }, '-=400')
                            .add({ targets: '#features .feature-card', translateY: [30, 0], opacity: [0, 1], delay: anime.stagger(100) }, '-=800');
                    }

                    if (target.id === 'planos') {
                        anime({ targets: '#planos .plan-card', translateY: [40, 0], opacity: [0, 1], delay: anime.stagger(150), easing: 'easeOutQuad' });
                    }
                    
                    if (target.id === 'depoimentos') {
                        anime({ targets: '#depoimentos .testimonial-card', scale: [0.9, 1], opacity: [0, 1], delay: anime.stagger(150), easing: 'easeOutQuad' });
                    }

                    if (target.id === 'sobre') {
                        anime({ targets: '.about-image', translateX: [-40, 0], opacity: [0, 1], duration: 1000, easing: 'easeOutCubic' });
                        anime({ targets: '.about-text', translateX: [40, 0], opacity: [0, 1], duration: 1000, delay: 200, easing: 'easeOutCubic' });
                    }

                    if (target.id === 'faq') {
                        anime({ targets: '#faq .faq-item', translateX: [-30, 0], opacity: [0, 1], delay: anime.stagger(100), easing: 'easeOutQuad' });
                    }
                    
                    observer.unobserve(target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    };

    // --- FAQ Accordion Module ---
    const initFaqAccordion = () => {
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                // Modificado para permitir que vários fiquem abertos, se desejar. Para fechar os outros, descomente o bloco abaixo.
                /*
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
                */
                item.classList.toggle('active');
            });
        });
    };

    // --- Newsletter Form Module ---
    const initNewsletterForm = () => {
        const form = document.getElementById('newsletter-form');
        if (!form) return;

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitButton = document.getElementById('newsletter-submit');
            const buttonText = submitButton.querySelector('.button-text');
            const buttonLoader = submitButton.querySelector('.button-loader');
            const messageEl = document.getElementById('newsletter-message');
            const formData = new FormData(form);

            submitButton.disabled = true;
            buttonText.classList.add('hidden');
            buttonLoader.classList.remove('hidden');
            messageEl.textContent = '';

            try {
                const response = await fetch('newsletter.php', {
                    method: 'POST',
                    body: formData
                });
                const result = await response.json();

                if (result.status === 'success') {
                    messageEl.style.color = 'var(--tw-color-accent-cyan)'; // Cor de sucesso atualizada
                } else {
                    messageEl.style.color = '#FF6B6B'; // Uma cor de erro genérica
                }
                messageEl.textContent = result.message;
                document.getElementById('newsletter-email').value = (result.status === 'success') ? '' : document.getElementById('newsletter-email').value;

            } catch (error) {
                messageEl.style.color = '#FF6B6B';
                messageEl.textContent = 'Erro de conexão. Tente novamente.';
            } finally {
                submitButton.disabled = false;
                buttonText.classList.remove('hidden');
                buttonLoader.classList.add('hidden');
            }
        });
    };

    // --- Initialize all modules ---
    initMobileMenu();
    initInteractiveCursor();
    const lenis = initLenisScroll();
    initSmoothScrollToAnchor(lenis);
    initEntranceAnimations();
    initFaqAccordion();
    initNewsletterForm();
});