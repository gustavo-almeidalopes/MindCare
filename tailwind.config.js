// tailwind.config.js
tailwind.config = {
  darkMode: 'class', // Mantém o suporte para alternância de tema
  theme: {
    extend: {
      colors: {
        // Paleta Primária (Fundos, Textos, Bordas)
        'primary-bg-light': '#F8F9FA',      // Um branco quase puro, limpo
        'primary-text-light': '#1A202C',    // Um preto suave para texto
        'primary-border-light': '#E2E8F0',  // Borda cinza clara e sutil

        'primary-bg-dark': '#131821',       // Um azul-escuro profundo e elegante
        'primary-text-dark': '#E2E8F0',     // Um cinza muito claro para texto
        'primary-border-dark': '#2A3342',   // Borda sutil para o modo escuro

        // Paleta da Marca (Cores principais da identidade)
        'brand-blue-light': '#3A82F6',      // Azul vibrante para ações primárias
        'brand-blue-dark': '#4A90E2',       // Azul um pouco mais claro para se destacar no fundo escuro
        'brand-green-light': '#48BB78',     // Verde para sucesso e ações positivas
        'brand-green-dark': '#58C78B',      // Verde equivalente para o modo escuro

        // Paleta de Destaque (Accents)
        'accent-cyan': '#00B5D8',           // Ciano para efeitos de hover e destaques especiais
        'accent-peach-light': '#FF8A65',    // Pêssego/Laranja suave para estatísticas e alertas
        'accent-peach-dark': '#FFAB91',     // Tom de pêssego mais claro para o modo escuro
      },
      fontFamily: {
        'heading': ['Lexend', 'sans-serif'],
        'body': ['Poppins', 'sans-serif'],
      },
      boxShadow: {
        // Sombras mais refinadas para ambos os modos
        'subtle-light': '0 4px 12px 0 rgba(26, 32, 44, 0.06)',
        'subtle-dark': '0 4px 14px 0 rgba(0, 0, 0, 0.2)',
      }
    },
  },
  plugins: [],
}