<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindCare - Bem-estar Extraordinário</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100..1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind.config.js"></script>

    <link rel="stylesheet" href="style.css"> </head>
<body class="bg-primary-bg-light text-primary-text-light dark:bg-primary-bg-dark dark:text-primary-text-dark font-body antialiased">

    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>
    <div class="aurora-background"></div>

    <header class="sticky top-0 z-50 py-4 bg-primary-bg-light/80 dark:bg-primary-bg-dark/80 backdrop-blur-lg border-b border-primary-border-light/50 dark:border-primary-border-dark/50">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <div class="logo cursor-target font-heading text-2xl font-bold">MindCare ✨</div>
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#solucao" class="nav-link cursor-target">A Solução</a>
                <a href="#depoimentos" class="nav-link cursor-target">Depoimentos</a>
                <a href="#sobre" class="nav-link cursor-target">Sobre Nós</a>
                <a href="#faq" class="nav-link cursor-target">FAQ</a>
            </nav>
            <div class="flex items-center space-x-4">
                <a href="#planos" class="cursor-target hidden sm:block px-6 py-2 rounded-full font-bold text-primary-text-light bg-brand-green-light dark:bg-brand-green-dark dark:text-primary-bg-dark hover:scale-105 active:scale-100 transition-transform">Ver Planos</a>
                <a href="/login.php" class="cursor-target hidden sm:block px-6 py-2 rounded-full font-bold border-2 border-primary-text-light/50 dark:border-primary-text-dark/80 hover:bg-primary-text-light/10 dark:hover:bg-primary-text-dark/10 transition-colors">Entrar</a>
                <button id="theme-toggle" class="cursor-target w-10 h-10 rounded-full flex items-center justify-center bg-brand-blue-light/50 dark:bg-primary-text-light/50">
                    <span class="text-xl block dark:hidden">🌙</span>
                    <span class="text-xl hidden dark:block">☀️</span>
                </button>
                <button id="mobile-menu-button" class="md:hidden cursor-target w-10 h-10 rounded-full flex items-center justify-center">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <div id="mobile-menu" class="fixed top-0 right-0 h-full w-full max-w-xs bg-primary-bg-light dark:bg-primary-bg-dark z-[60] shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out">
        <div class="flex justify-end p-6">
            <button id="mobile-menu-close-button" class="cursor-target w-10 h-10 flex items-center justify-center">
                <i class="fa-solid fa-times text-2xl"></i>
            </button>
        </div>
        <nav class="flex flex-col items-center space-y-6 mt-8 px-6">
            <a href="#solucao" class="nav-link mobile-nav-link cursor-target text-xl">A Solução</a>
            <a href="#planos" class="nav-link mobile-nav-link cursor-target text-xl">Planos</a>
            <a href="#depoimentos" class="nav-link mobile-nav-link cursor-target text-xl">Depoimentos</a>
            <a href="#sobre" class="nav-link mobile-nav-link cursor-target text-xl">Sobre Nós</a>
            <a href="#faq" class="nav-link mobile-nav-link cursor-target text-xl">FAQ</a>
            <div class="pt-6 border-t border-primary-border-light/50 dark:border-primary-border-dark/50 w-full flex flex-col items-center space-y-4">
            <a href="#planos" class="cursor-target w-full text-center px-6 py-3 rounded-full font-bold text-primary-text-light bg-brand-green-light dark:bg-brand-green-dark dark:text-primary-bg-dark hover:scale-105 active:scale-100 transition-transform">Ver Planos</a>
            <a href="/login.php" class="cursor-target w-full text-center px-6 py-3 rounded-full font-bold border-2 border-primary-text-light/50 dark:border-primary-text-dark/80 hover:bg-primary-text-light/10 dark:hover:bg-primary-text-dark/10 transition-colors">Entrar</a>
            </div>
        </nav>
    </div>

    <main>
        <section id="solucao" class="pt-28 pb-20 overflow-hidden">
            <div class="container mx-auto px-6 text-center">
                <h1 class="hero-title font-heading text-4xl md:text-6xl lg:text-7xl font-extrabold mb-6 leading-tight">
                    <span class="inline-block">Bem-estar</span>
                    <span class="inline-block">que</span>
                    <span class="inline-block">realmente</span>
                    <span class="inline-block">funciona.</span>
                </h1>
                <p class="max-w-2xl mx-auto text-lg md:text-xl mb-16">O burnout não é apenas um problema de bem-estar. É um problema de negócios. Veja o custo da inação.</p>
                
                <div id="dashboard-mockup" class="relative mx-auto max-w-5xl h-auto p-4 md:p-6 rounded-2xl bg-primary-bg-light/50 dark:bg-primary-text-light/20 backdrop-blur-xl border border-primary-bg-light/30 dark:border-primary-border-dark/30">
                    <div class="flex items-center space-x-1.5 mb-4"><div class="w-3 h-3 rounded-full bg-accent-peach-light"></div><div class="w-3 h-3 rounded-full bg-brand-green-light"></div><div class="w-3 h-3 rounded-full bg-brand-blue-light"></div></div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-left">
                        
                        <div class="stat-card bg-primary-bg-light/70 dark:bg-primary-bg-dark/50 p-6 rounded-lg shadow-md">
                            <div class="flex items-center text-accent-peach-light dark:text-accent-peach-dark mb-3">
                                <i class="fa-solid fa-arrow-trend-down text-2xl mr-3"></i>
                                <p class="font-bold">Produtividade</p>
                            </div>
                            <p class="font-extrabold text-4xl mb-1">
                                <span class="dashboard-stat-number" data-final-value="-21">0</span>%
                            </p>
                            <p class="text-sm opacity-80">É a queda média na performance de funcionários com sinais de burnout.</p>
                        </div>
                        
                        <div class="stat-card bg-primary-bg-light/70 dark:bg-primary-bg-dark/50 p-6 rounded-lg shadow-md">
                            <div class="flex items-center text-accent-peach-light dark:text-accent-peach-dark mb-3">
                                <i class="fa-solid fa-users-slash text-2xl mr-3"></i>
                                <p class="font-bold">Turnover</p>
                            </div>
                            <p class="font-extrabold text-4xl mb-1">
                                <span class="dashboard-stat-number" data-final-value="2.6">0</span>x
                            </p>
                            <p class="text-sm opacity-80">É a maior probabilidade de um funcionário esgotado procurar ativamente outro emprego.</p>
                        </div>

                        <div class="stat-card bg-primary-bg-light/70 dark:bg-primary-bg-dark/50 p-6 rounded-lg shadow-md">
                           <div class="flex items-center text-accent-peach-light dark:text-accent-peach-dark mb-3">
                                <i class="fa-solid fa-briefcase-medical text-2xl mr-3"></i>
                                <p class="font-bold">Custos com Saúde</p>
                            </div>
                            <p class="font-extrabold text-4xl mb-1">
                                +<span class="dashboard-stat-number" data-final-value="50">0</span>%
                            </p>
                             <p class="text-sm opacity-80">É o aumento estimado dos gastos anuais com saúde por funcionário esgotado.</p>
                        </div>

                    </div>
                </div>

                <div id="features" class="grid md:grid-cols-3 gap-8 mt-24 text-left">
                    <div class="feature-card"><h3 class="font-heading text-xl font-bold mb-2">Check-ins Emocionais Inteligentes</h3><p class="opacity-80">Monitore o bem-estar da sua equipe com check-ins rápidos e anônimos, capturando insights valiosos em tempo real.</p></div>
                    <div class="feature-card"><h3 class="font-heading text-xl font-bold mb-2">Insights Preditivos com IA</h3><p class="opacity-80">Identifique proativamente riscos de burnout e tendências de engajamento com análises inteligentes e dashboards intuitivos.</p></div>
                    <div class="feature-card"><h3 class="font-heading text-xl font-bold mb-2">Conteúdo de Bem-Estar Personalizado</h3><p class="opacity-80">Ofereça recursos sob demanda, desde meditações guiadas até artigos sobre resiliência, adaptados às necessidades de cada membro da equipe.</p></div>
                </div>
            </div>
        </section>

        <section id="planos" class="py-20">
            <div class="container mx-auto px-6 text-center">
                <h2 class="font-heading text-3xl font-bold mb-12">Encontre o plano perfeito para o seu time</h2>
                <div class="grid lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="plan-card bg-primary-bg-light/50 dark:bg-primary-text-light/20 backdrop-blur-md p-8 rounded-2xl border border-primary-border-light/20 flex flex-col"><h3 class="font-heading text-2xl font-bold mb-2">Essencial 🌱</h3><p class="mb-6">Para quem busca o básico para começar a cuidar do time.</p><ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start"><i class="fa-solid fa-check text-brand-green-light dark:text-brand-green-dark mt-1 mr-3"></i><span>Check-ins de Humor</span></li>
                        <li class="flex items-start"><i class="fa-solid fa-check text-brand-green-light dark:text-brand-green-dark mt-1 mr-3"></i><span>Acesso à Biblioteca de Conteúdo Inicial</span></li>
                        <li class="flex items-start"><i class="fa-solid fa-check text-brand-green-light dark:text-brand-green-dark mt-1 mr-3"></i><span>Relatório Mensal de Bem-Estar</span></li>
                    </ul><a href="#" class="cursor-target mt-auto w-full py-3 rounded-full font-bold bg-primary-border-light dark:bg-primary-text-light/80 hover:bg-brand-green-light dark:hover:bg-brand-green-dark active:scale-95 transition-all">Começar Agora</a></div>
                    <div class="plan-card bg-primary-bg-light/50 dark:bg-primary-text-light/20 backdrop-blur-md p-8 rounded-2xl border-2 border-brand-green-light dark:border-brand-green-dark flex flex-col relative scale-105 shadow-2xl"><div class="absolute top-0 -translate-y-1/2 left-1/2 -translate-x-1/2 bg-brand-green-light dark:bg-brand-green-dark text-primary-text-light dark:text-primary-bg-dark px-4 py-1 rounded-full text-sm font-bold">MAIS POPULAR</div><h3 class="font-heading text-2xl font-bold mb-2">Avançado 🚀</h3><p class="mb-6">Para uma visão 360º do bem-estar e insights acionáveis.</p><ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start"><i class="fa-solid fa-arrow-up text-brand-green-light dark:text-brand-green-dark mt-1 mr-3"></i><span>Tudo do plano Essencial +</span></li>
                        <li class="flex items-start"><i class="fa-solid fa-star text-brand-green-light dark:text-brand-green-dark mt-1 mr-3"></i><span>Dashboards de RH Detalhados</span></li>
                        <li class="flex items-start"><i class="fa-solid fa-star text-brand-green-light dark:text-brand-green-dark mt-1 mr-3"></i><span>Alertas Inteligentes de Risco</span></li>
                    </ul><a href="#" class="cursor-target mt-auto w-full py-3 rounded-full font-bold text-primary-text-light bg-brand-green-light dark:bg-brand-green-dark dark:text-primary-bg-dark hover:scale-110 active:scale-105 transition-transform">Escolher Plano</a></div>
                    <div class="plan-card bg-primary-bg-light/50 dark:bg-primary-text-light/20 backdrop-blur-md p-8 rounded-2xl border border-primary-border-light/20 flex flex-col"><h3 class="font-heading text-2xl font-bold mb-2">Premium 🌟</h3><p class="mb-6">A solução completa para promover uma cultura de bem-estar excepcional.</p><ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start"><i class="fa-solid fa-arrow-up text-brand-green-light dark:text-brand-green-dark mt-1 mr-3"></i><span>Tudo do plano Avançado +</span></li>
                        <li class="flex items-start"><i class="fa-solid fa-crown text-brand-green-light dark:text-brand-green-dark mt-1 mr-3"></i><span>Suporte Personalizado Dedicado</span></li>
                        <li class="flex items-start"><i class="fa-solid fa-crown text-brand-green-light dark:text-brand-green-dark mt-1 mr-3"></i><span>Workshops e Treinamentos Exclusivos</span></li>
                    </ul><a href="#" class="cursor-target mt-auto w-full py-3 rounded-full font-bold bg-primary-border-light dark:bg-primary-text-light/80 hover:bg-brand-green-light dark:hover:bg-brand-green-dark active:scale-95 transition-all">Fale Conosco</a></div>
                </div>
            </div>
        </section>

        <section id="depoimentos" class="py-20">
            <div class="container mx-auto px-6">
                <h2 class="font-heading text-3xl font-bold text-center mb-12">O que dizem sobre nós</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="testimonial-card bg-primary-bg-light/50 dark:bg-primary-text-light/20 backdrop-blur-md p-6 rounded-xl border border-primary-border-light/20"><p class="mb-4 opacity-90">"A MindCare simplificou a forma como cuidamos do bem-estar da nossa equipe. Os insights são valiosos e a plataforma é intuitiva."</p><div class="flex items-center"><img src="https://i.pravatar.cc/40?u=d" alt="Avatar" class="w-10 h-10 rounded-full mr-4"><div><p class="font-bold">Ana Souza</p><p class="text-sm opacity-80">Gerente de RH, TechForward</p></div></div></div>
                    <div class="testimonial-card bg-primary-bg-light/50 dark:bg-primary-text-light/20 backdrop-blur-md p-6 rounded-xl border border-primary-border-light/20"><p class="mb-4 opacity-90">"Estamos vendo um impacto positivo no engajamento da equipe since que implementamos a MindCare. Recomendo fortemente!"</p><div class="flex items-center"><img src="https://i.pravatar.cc/40?u=e" alt="Avatar" class="w-10 h-10 rounded-full mr-4"><div><p class="font-bold">Carlos Oliveira</p><p class="text-sm opacity-80">Líder de Equipe, InovaSolutions</p></div></div></div>
                    <div class="testimonial-card bg-primary-bg-light/50 dark:bg-primary-text-light/20 backdrop-blur-md p-6 rounded-xl border border-primary-border-light/20 md:col-span-2 lg:col-span-1"><p class="mb-4 opacity-90">"O suporte da MindCare é excepcional. Sempre prontos para ajudar e a plataforma está em constante evolução com base no feedback dos usuários."</p><div class="flex items-center"><img src="https://i.pravatar.cc/40?u=f" alt="Avatar" class="w-10 h-10 rounded-full mr-4"><div><p class="font-bold">Mariana Costa</p><p class="text-sm opacity-80">Analista de Gente e Gestão, ConnectPlus</p></div></div></div>
                </div>
            </div>
        </section>

        <section id="sobre" class="py-20 overflow-hidden">
            <div class="container mx-auto px-6">
                 <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="about-image relative"><img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071&auto=format&fit=crop" alt="Nossa Equipe" class="rounded-2xl shadow-2xl"></div>
                    <div class="about-text">
                        <h2 class="font-heading text-3xl font-bold mb-4">Construindo um futuro com mais bem-estar.</h2>
                        <p class="mb-4 opacity-90">Somos uma equipe multidisciplinar apaixonada por criar soluções que realmente fazem a diferença na vida das pessoas e nas organizações. Acreditamos que o bem-estar não é um custo, mas um investimento essencial para o sucesso a longo prazo.</p>
                        <p class="opacity-90">Nossa jornada começou com a visão de um ambiente de trabalho mais saudável e feliz, onde cada indivíduo possa prosperar.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq" class="py-20">
            <div class="container mx-auto px-6 max-w-3xl">
                <h2 class="font-heading text-3xl font-bold text-center mb-12">Perguntas Frequentes</h2>
                <div class="space-y-4">
                    <div class="faq-item bg-primary-bg-light/50 dark:bg-primary-text-light/20 backdrop-blur-md border border-primary-border-light/20 rounded-lg"><button class="faq-question cursor-target w-full flex justify-between items-center text-left p-6"><span class="font-heading font-bold text-lg">Como a MindCare garante a privacidade dos dados?</span><i class="faq-icon fa-solid fa-plus text-xl transition-transform duration-300 ease-in-out"></i></button><div class="faq-answer px-6 pb-6"><p>A privacidade e a segurança dos dados são fundamentais para nós. Utilizamos criptografia avançada e seguimos rigorosas políticas de proteção de dados para garantir a confidencialidade das informações da sua equipe.</p></div></div>
                    <div class="faq-item bg-primary-bg-light/50 dark:bg-primary-text-light/20 backdrop-blur-md border border-primary-border-light/20 rounded-lg"><button class="faq-question cursor-target w-full flex justify-between items-center text-left p-6"><span class="font-heading font-bold text-lg">É possível personalizar a plataforma para as necessidades da minha empresa?</span><i class="faq-icon fa-solid fa-plus text-xl transition-transform duration-300 ease-in-out"></i></button><div class="faq-answer px-6 pb-6"><p>Sim! Oferecemos diferentes níveis de personalização para adaptar a MindCare à cultura e às necessidades específicas da sua organização. Entre em contato conosco para discutir as opções.</p></div></div>
                    <div class="faq-item bg-primary-bg-light/50 dark:bg-primary-text-light/20 backdrop-blur-md border border-primary-border-light/20 rounded-lg"><button class="faq-question cursor-target w-full flex justify-between items-center text-left p-6"><span class="font-heading font-bold text-lg">Qual o tempo de resposta do suporte técnico?</span><i class="faq-icon fa-solid fa-plus text-xl transition-transform duration-300 ease-in-out"></i></button><div class="faq-answer px-6 pb-6"><p>Nossa equipe de suporte se dedica a oferecer assistência rápida e eficaz. Nosso tempo de resposta médio é de poucas horas durante o horário comercial.</p></div></div>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-20 bg-primary-border-light dark:bg-primary-border-dark">
        <div class="container mx-auto px-6 text-center">
            <h3 class="font-heading text-2xl font-bold mb-4">Receba insights sobre bem-estar corporativo</h3>
            <p class="mb-8 max-w-md mx-auto opacity-80">Junte-se à nossa newsletter e fique por dentro das melhores práticas e novidades.</p>
            
            <form id="newsletter-form" class="max-w-md mx-auto mb-12">
                <div class="flex items-center bg-primary-bg-light dark:bg-primary-bg-dark rounded-full p-2 shadow-inner">
                    <input type="email" name="email" id="newsletter-email" placeholder="Seu melhor e-mail" class="w-full bg-transparent text-primary-text-light dark:text-primary-text-dark px-4 py-2 focus:outline-none" required>
                    <button type="submit" id="newsletter-submit" class="cursor-target w-auto px-6 py-2 rounded-full font-bold text-primary-text-light bg-brand-green-light dark:bg-brand-green-dark dark:text-primary-bg-dark hover:scale-105 active:scale-100 transition-transform">
                        <span class="button-text">Inscrever</span>
                        <i class="fas fa-spinner fa-spin button-loader hidden"></i>
                    </button>
                </div>
                <p id="newsletter-message" class="text-sm mt-3 h-4"></p>
            </form>

            <div class="flex justify-center space-x-6 mb-8">
                <a href="#" class="cursor-target social-icon text-2xl text-primary-text-light/70 dark:text-primary-text-dark/70 hover:!text-brand-green-light dark:hover:!text-brand-green-dark transition-colors"><i class="fab fa-instagram"></i></a>
                <a href="#" class="cursor-target social-icon text-2xl text-primary-text-light/70 dark:text-primary-text-dark/70 hover:!text-brand-green-light dark:hover:!text-brand-green-dark transition-colors"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="cursor-target social-icon text-2xl text-primary-text-light/70 dark:text-primary-text-dark/70 hover:!text-brand-green-light dark:hover:!text-brand-green-dark transition-colors"><i class="fab fa-tiktok"></i></a>
            </div>
            <p class="text-sm opacity-70">© 2025 MindCare. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
    <script src="script.js"></script>
</body>
</html>