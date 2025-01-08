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

  <div class="sidebar">
    <div class="logo-container">
      <a href="index.php"><img src="Imagens/image (1).png" alt="Logo Principal" class="logo-principal"></a>
    </div>
    <h2>Polícia Civil</h2>
    <ul>
      <li>
        <a href="#home">Home</a>
      </li>
      <li>
        <a href="https://calculadora-penal.revoadarj.com.br">Calculadora Penal</a>
      </li>
      <li>
        <a href="imortais.html">Imortais da Academia de Letras</a>
      </li>
      <li>
        <a href="#contact">CORE</a>
        <img src="Imagens/Core_logo.png" alt="Logo 4" class="logo-pequena">
      </li>
      <li>
        <a href="cgpc.php">CGPC</a>
        <img src="Imagens/Logo_CGPC" alt="Logo 3" class="logo-pequena">
      </li>
      <li>
        <a href="contagem_saer.php">SAER</a>
        <img src="Imagens/saerpcrj-removebg-preview.png" alt="Logo 3" class="logo-pequena">
      </li>
      <li>
        <a href="contagem_gem.php">GEM</a>
        <img src="Imagens/GEM_IMPACT_2.png" alt="Logo 2" class="logo-pequena">
        < </li>

    </ul>
  </div>


  <div class="main-content">
    <div class="dynamic-message">
      <h2><span id="typed-message"></span></h2>
    </div>
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
        const itemWidth = galleryItems[0].clientWidth;
        currentIndex += direction;


        if (currentIndex < 0) {
          currentIndex = totalItems - 4;
        } else if (currentIndex > totalItems - 4) {
          currentIndex = 0;
        }

        galleryContainer.style.transform = `translateX(${-currentIndex * itemWidth}px)`;
      }


      function autoScrollGallery() {
        scrollGallery(1);
      }

      let autoScroll = setInterval(autoScrollGallery, 4000);


      galleryContainer.addEventListener('mouseover', () => clearInterval(autoScroll));


      galleryContainer.addEventListener('mouseout', () => autoScroll = setInterval(autoScrollGallery, 4000));

    </script>

    <section id="home" class="welcome">
      <h1>Bem-vindo ao Memorial da Polícia Civil do Estado do Rio de Janeiro.</h1>
      <p>Este sistema foi criado com intuito de eternizar e lembrar de todos os políciais que fizeram desta polícia ser o que ela é hoje, seu trabalho jamais será esquecido e está cravado como lembrança em nossas memórias e corações.
      </p>
    </section>
    <section id="delegados" class="delegates-section">
      <h2>Gestão Echo 1</h2>
      <div class="delegate-container">

        <div class="delegate-card general">
          <img src="Imagens/delegado_geral1.jpg" alt="Foto do Delegado Geral" class="delegate-photo">
          <h3>Delegado Geral: Decantas Tenebras (Dede)</h3>
          <p>Breve descrição do Delegado Geral e suas contribuições.</p>
        </div>

        <div class="delegate-card adjunto">
          <img src="Imagens/delegado_adjunto1.jpg" alt="Foto do Delegado Adjunto" class="delegate-photo">
          <h3>Delegado Adjunto: Henry Romanov Tenebras (Karin)</h3>
          <p>Descrição sobre o Delegado Adjunto e sua atuação.</p>
        </div>
        <div class="delegate-card adjunto">
          <img src="Imagens/delegado_adjunto2.jpg" alt="Foto do Delegado Adjunto" class="delegate-photo">
          <h3>Delegado Adjunto: Samara Tenebras (Sammy)</h3>
          <p>Descrição sobre o Delegado Adjunto e sua atuação.</p>
        </div>
      </div>


      <h2>Gestão Echo 2</h2>
      <div class="delegate-container">
        <div class="delegate-card general">
          <img src="Imagens/delegado_geral2.jpg" alt="Foto do Delegado Geral" class="delegate-photo">
          <h3>Delegado Geral: Decantas Tenebras (Dede)</h3>
          <p>Breve descrição do Delegado Geral e suas contribuições.</p>
        </div>
        <div class="delegate-card adjunto">
          <img src="Imagens/delegado_adjunto3.jpg" alt="Foto do Delegado Adjunto" class="delegate-photo">
          <h3>Delegado Adjunto: Henry Romanov Tenebras (Karin)</h3>
          <p>Descrição sobre o Delegado Adjunto e sua atuação.</p>
        </div>
        <div class="delegate-card adjunto">
          <img src="Imagens/delegado_adjunto4.jpg" alt="Foto do Delegado Adjunto" class="delegate-photo">
          <h3>Delegado Adjunto: John Romanov Tenebras (Dark)</h3>
          <p>Descrição sobre o Delegado Adjunto e sua atuação.</p>
        </div>
      </div>


      <h2>Gestão Echo 3</h2>
      <div class="delegate-container">
        <div class="delegate-card general">
          <img src="Imagens/delegado_geral3.jpg" alt="Foto do Delegado Geral" class="delegate-photo">
          <h3>Delegado Geral: Decantas Tenebras (Dede)</h3>
          <p>Breve descrição do Delegado Geral e suas contribuições.</p>
        </div>
        <div class="delegate-card adjunto">
          <img src="Imagens/delegado_adjunto5.jpg" alt="Foto do Delegado Adjunto" class="delegate-photo">
          <h3>Delegado Adjunto: John Romanov Tenebras (Dark)</h3>
          <p>Descrição sobre o Delegado Adjunto e sua atuação.</p>
        </div>
        <div class="delegate-card adjunto">
          <img src="Imagens/delegado_adjunto6.jpg" alt="Foto do Delegado Adjunto" class="delegate-photo">
          <h3>Delegado Adjunto: Marcelo Tenebras (Marcelin)</h3>
          <p>Descrição sobre o Delegado Adjunto e sua atuação.</p>
        </div>
      </div>
    </section>

    <section class="grupamentos">
      <h2 class="text-grup">Memorial dos Grupamentos</h2>
      <div class="grupamento">
        <img src="Imagens/Core_logo.png" alt="CORE">
        <div class="descricao">
          <h3>CORE</h3>
          <p>A Coordenadoria de Recursos Especiais é a unidade de elite da Polícia Civil, especializada em ações táticas de alto risco. Suas missões incluem intervenções em situações críticas, como combate ao terrorismo, resgate de reféns e operações contra organizações criminosas altamente armadas. O CORE é formado por profissionais rigorosamente treinados em diversas áreas, como negociação, explosivos e uso de armamento pesado, garantindo a segurança da população em cenários extremos.</p>
        </div>
      </div>
      <div class="grupamento">
        <img src="Imagens/Logo_CGPC.png" alt="CGPC">
        <div class="descricao">
          <h3>CGPC</h3>
          <p>A CGPC está diretamente vinculada a inquéritos, mandados, investigações e procedimentos internos da PCERJ, também sendo responsável pela padronização e fiscalização dos registros prisionais e periciais, bem como sendo o setor competente para identificar/corrigir falhas nos procedimentos policiais e esquemas de corrupção de todas as matrizes.</p>
        </div>
      </div>
      <div class="grupamento">
        <img src="Imagens/saerpcrj-removebg-preview.png" alt="SAER">
        <div class="descricao">
          <h3>SAER</h3>
          <p>O Serviço Aeropolicial oferece suporte aéreo essencial para as operações da Polícia Civil. Com aeronaves modernas e uma equipe altamente capacitada, o SAER é responsável por ações como patrulhamento aéreo, transporte de equipes táticas, evacuação médica e resgate em áreas de difícil acesso. A mobilidade e a visão estratégica proporcionadas pelas operações aéreas tornam o SAER um componente indispensável em missões de segurança pública.</p>
        </div>
      </div>
      <div class="grupamento">
        <img src="Imagens/GEM_IMPACT_2.png" alt="GEM">
        <div class="descricao">
          <h3>GEM</h3>
          <p>O Grupamento Especial de Motocicletas é especializado em patrulhamento e operações rápidas em áreas urbanas e de difícil acesso. Com motocicletas ágeis e pilotos experientes, o GEM atua em ações de combate ao crime, escoltas e intervenções táticas. Sua capacidade de se deslocar rapidamente em cenários de tráfego intenso e terrenos desafiadores faz do GEM uma força essencial para garantir a segurança e a ordem pública em situações dinâmicas.</p>
        </div>
      </div>
    </section>

  </div>



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
        typeSpeed: 50,
        backSpeed: 25,
        backDelay: 2000,
        loop: true,
        showCursor: true,
        cursorChar: "|",
        autoInsertCss: true
      });
    });
  </script>

</body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
    duration: 1200,
    once: true
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


</html>