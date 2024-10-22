<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Polícia Civil - Revoada RJ</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="Imagens/image (1).png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrQ6cuBwj7OmdtY0z5VX2+NVKOkF7LDsZFuA5g7lBttG1L1CbKBeulLDVtyNyEErrxFRGvvW5A9uIr8XoA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>


<body>

  <!-- Barra de navegação lateral -->
  <div class="sidebar">
    <div class="logo-container">
      <a href="index.php"><img src="Imagens/image (1).png" alt="Logo Principal" class="logo-principal"> <!-- Logo Principal --></a>
    </div>
    <h2>Polícia Civil</h2>
    <ul>
      <li>
        <a href="#home">Home</a>
      </li>
      <li>
        <a href="contagem_gem.php">GEM</a>
        <img src="Imagens/GEM_IMPACT_2.png" alt="Logo 2" class="logo-pequena"> <!-- Logo Pequena -->
      </li>
      <li>
        <a href="contagem_saer.php">SAER</a>
        <img src="Imagens/saerpcrj-removebg-preview.png" alt="Logo 3" class="logo-pequena"> <!-- Logo Pequena -->
      </li>
      <li>
        <a href="#contact">CORE</a>
        <img src="Imagens/Core_logo.png" alt="Logo 4" class="logo-pequena"> <!-- Logo Pequena -->
      </li>
    </ul>
  </div>

  <!-- Conteúdo principal -->
  <div class="main-content">
    <!-- Galeria de imagens no topo -->
    <!-- Mensagem dinâmica acima da galeria -->
    <div class="dynamic-message">
      <h2><span id="typed-message"></span></h2>
    </div>
    <!-- Galeria de imagens no topo -->
    <!-- Galeria de imagens no topo -->
    <div class="image-gallery">
      <div class="gallery-container">
        <div class="gallery-item" style="background-image: url('Imagens/Formação1.png');"></div>
        <div class="gallery-item" style="background-image: url('Imagens/Formação2.png');"></div>
        <div class="gallery-item" style="background-image: url('Imagens/Formação3.png');"></div>
        <div class="gallery-item" style="background-image: url('Imagens/Formação4.png');"></div>
        <div class="gallery-item" style="background-image: url('Imagens/Formação5.png');"></div>
        <div class="gallery-item" style="background-image: url('Imagens/Formação6.png');"></div>
        <div class="gallery-item" style="background-image: url('Imagens/Formação7.png');"></div>
        <div class="gallery-item" style="background-image: url('Imagens/Formação8.png');"></div>
      </div>
      <div class="gallery-nav left" onclick="scrollGallery(-1)">&#10094;</div>
      <div class="gallery-nav right" onclick="scrollGallery(1)">&#10095;</div>
    </div>
    <script>
      let currentIndex = 0;
      const galleryContainer = document.querySelector('.gallery-container');
      const galleryItems = document.querySelectorAll('.gallery-item');
      const totalItems = galleryItems.length;

      function scrollGallery(direction) {
        const itemWidth = galleryItems[0].clientWidth; // Largura do item
        currentIndex += direction;

        // Verificar limites
        if (currentIndex < 0) {
          currentIndex = totalItems - 4; // Ajustar para girar em 4 imagens
        } else if (currentIndex > totalItems - 4) {
          currentIndex = 0;
        }

        galleryContainer.style.transform = `translateX(${-currentIndex * itemWidth}px)`;
      }

      // Troca automática das imagens
      function autoScrollGallery() {
        scrollGallery(1); // Avançar uma imagem
      }

      let autoScroll = setInterval(autoScrollGallery, 4000); // Troca a cada 4 segundos

      // Parar a troca automática ao passar o mouse
      galleryContainer.addEventListener('mouseover', () => clearInterval(autoScroll));

      // Retomar a troca automática ao remover o mouse
      galleryContainer.addEventListener('mouseout', () => autoScroll = setInterval(autoScrollGallery, 4000));

    </script>

    <section id="home" class="welcome">
      <h1>Bem-vindo ao Sistema de Contagem de Patrulha</h1>
      <p>Este sistema foi criado com intuito de facilitar e minimizar os esforços ao fazer os relatórios de patrulhas semanais dos grupamentos e guarnições.</p>
    </section>

    <!-- Container principal de cards com fundo estilizado -->
    <!-- Container principal de cards com fundo estilizado -->
    <div class="cards-wrapper">
      <div class="card-container">
        <div class="card">
          <div class="card-background" style="background-image: url('Imagens/GEM_IMPACT_2.png');"></div>
          <div class="card-content">
            <h3>G.E.M</h3>
            <p>Fazer relatório de Contagem de Patrulha Semanal.</p>
            <a href="contagem_gem.php" class="btn">Fazer Contagem</a>
          </div>
        </div>

        <div class="card">
          <div class="card-background" style="background-image: url('Imagens/saerpcrj-removebg-preview.png');"></div>
          <div class="card-content">
            <h3>S.A.E.R</h3>
            <p>Fazer relatório de Contagem de Patrulha Semanal.</p>
            <a href="#" class="btn">Fazer Contagem</a>
          </div>
        </div>

        <div class="card">
          <div class="card-background" style="background-image: url('Imagens/Core_logo.png');"></div>
          <div class="card-content">
            <h3>C.O.R.E</h3>
            <p>Fazer relatório de Contagem de Metas Semanais.</p>
            <a href="#" class="btn">Fazer Contagem</a>
          </div>
        </div>
      </div>
    </div>

  </div>


  <!-- Rodapé -->
  <footer class="footer">
    <div class="footer-content">
      <div class="footer-logo">
        <h2>Polícia Civil Revoada RJ</h2>
      </div>
      <div class="footer-links">
        <a href="#">Sobre Nós</a>
        <a href="#">Contatos</a>
        <a href="#">Política de Privacidade</a>
        <a href="#">Termos de Uso</a>
      </div>
      <div class="footer-socials">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 Polícia Civil Revoada RJ. Todos os direitos reservados.</p>
    </div>
  </footer>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var typed = new Typed("#typed-message", {
        strings: ["Bem-vindo à Polícia Civil de Revoada ", "Protegendo a cidade com honra", "A justiça é nossa missão", "Explore nossos serviços!"],
        typeSpeed: 50, // Velocidade de digitação
        backSpeed: 25, // Velocidade ao apagar
        backDelay: 2000, // Atraso antes de começar a apagar
        loop: true, // Repetir o ciclo de mensagens
        showCursor: true, // Mostrar o cursor piscando
        cursorChar: "|", // Estilo do cursor
        autoInsertCss: true
      });
    });
  </script>

</body>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


</html>