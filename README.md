# MindCare - Landing Page para Bem-Estar Corporativo

![Banner do MindCare](https://i.imgur.com/your-banner-image.png) 
## 📑 Sobre o Projeto

**MindCare** é uma landing page moderna e interativa, desenvolvida como parte do projeto **Empreenda Senac**. A página apresenta uma solução de SaaS (Software as a Service) focada em combater o burnout e promover o bem-estar no ambiente corporativo. O design é elegante, responsivo e repleto de micro-interações que criam uma experiência de usuário memorável e engajante.

O objetivo é demonstrar como uma apresentação digital bem-executada pode comunicar valor, destacar os problemas que a solução resolve (como queda de produtividade e aumento de turnover) e converter visitantes em clientes potenciais através de uma interface clara e atraente.

---

## ✨ Funcionalidades Principais

A landing page foi construída com uma série de funcionalidades modernas para garantir uma experiência de ponta:

* 🎨 **Design Responsivo:** Totalmente adaptável para uma visualização perfeita em desktops, tablets e smartphones.
* 🌗 **Tema Claro e Escuro (Light/Dark Mode):** Interface com paleta de cores cuidadosamente definida para ambos os modos, configurada via Tailwind CSS.
* 🖱️ **Cursor Interativo Personalizado:** Um cursor customizado que reage a elementos interativos, aumentando o engajamento visual.
* 🚀 **Animações de Entrada Dinâmicas:** Elementos da página surgem com animações suaves ao serem rolados para a visão, utilizando **Anime.js** e **Intersection Observer API**.
* 📜 **Scroll Suave (Smooth Scrolling):** Navegação fluida e agradável implementada com a biblioteca **Lenis.js**.
* 🧩 **Componentes Interativos:**
    * **Menu Mobile:** Menu off-canvas para navegação intuitiva em telas menores.
    * **Acordeão de FAQ:** Seção de perguntas frequentes funcional e elegante.
* 📰 **Formulário de Newsletter com Backend:**
    * Interface de inscrição para newsletter no rodapé.
    * Backend em **PHP** que valida e salva os e-mails em um arquivo de texto (`subscribers.txt`).
    * Feedback assíncrono para o usuário (sucesso/erro) sem recarregar a página, usando `fetch` API.

---

## 🛠️ Tecnologias Utilizadas

Este projeto combina tecnologias de front-end e back-end para criar uma experiência completa.

### **Front-End:**
* **HTML5**
* **CSS3**
* **JavaScript (ES6+)**
* **[Tailwind CSS](https://tailwindcss.com/):** Framework CSS para estilização rápida e responsiva.
* **[Anime.js](https://animejs.com/):** Biblioteca de animação para criar efeitos visuais complexos.
* **[Lenis.js](https://github.com/studio-freight/lenis):** Para uma experiência de scroll suave e natural.
* **[Font Awesome](https://fontawesome.com/):** Para ícones vetoriais.
* **[Google Fonts](https://fonts.google.com/):** Para as fontes `Lexend` (títulos) e `Poppins` (corpo).

### **Back-End:**
* **PHP:** Para processar o formulário de inscrição da newsletter.

---

## ⚙️ Instalação e Execução

Para rodar este projeto localmente, você precisará de um ambiente de servidor que suporte PHP (como XAMPP, MAMP, WAMP ou o servidor embutido do PHP).

1.  **Clone o repositório:**
    ```bash
    git clone [https://github.com/seu-usuario/seu-repositorio.git](https://github.com/seu-usuario/seu-repositorio.git)
    ```

2.  **Navegue até o diretório do projeto:**
    ```bash
    cd seu-repositorio
    ```

3.  **Configuração do Backend (Newsletter):**
    * O script `newsletter.php` tenta escrever os e-mails inscritos no arquivo `subscribers.txt`.
    * Certifique-se de que o servidor PHP tenha permissão de escrita no diretório do projeto para que ele possa criar e modificar o arquivo `subscribers.txt`.

4.  **Inicie o servidor local:**
    * Se você tiver o PHP instalado globalmente, pode usar o servidor embutido:
      ```bash
      php -S localhost:8000
      ```
    * Caso contrário, mova os arquivos do projeto para o diretório `htdocs` (no XAMPP) ou `www` (no WAMP/MAMP) e inicie o seu servidor Apache.

5.  **Acesse o projeto:**
    * Abra seu navegador e acesse `http://localhost:8000` (ou o endereço correspondente do seu servidor local).

---

## 📂 Estrutura de Arquivos

/
├── index.php             \# Arquivo principal da landing page
├── newsletter.php        \# Script PHP para o formulário de newsletter
├── script.js             \# JavaScript para interatividade e animações
├── style.css             \# Estilos CSS personalizados complementares
├── tailwind.config.js    \# Configurações customizadas do Tailwind CSS
└── subscribers.txt       \# Arquivo de texto onde os e-mails são salvos (criado pelo PHP)

---

## 🏆 Contexto do Projeto - Empreenda Senac

Este projeto foi concebido e desenvolvido como parte da iniciativa **Empreenda Senac**, que visa fomentar o espírito empreendedor e a aplicação prática de habilidades técnicas em um contexto de negócios. A MindCare representa a criação de um produto digital viável, desde a sua concepção e design de identidade visual até a implementação de uma landing page funcional e persuasiva.
