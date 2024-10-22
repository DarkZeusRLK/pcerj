<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contagem de Horas - G.E.M</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="Imagens/image (1).png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrQ6cuBwj7OmdtY0z5VX2+NVKOkF7LDsZFuA5g7lBttG1L1CbKBeulLDVtyNyEErrxFRGvvW5A9uIr8XoA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    /* Estilos para os cards */
    html,
    body {
      height: 100%;
      margin: 0;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    .card-container {
      display: flex;
      justify-content: space-around;
      margin: 20px 0;
      flex-wrap: wrap;
    }

    .card {
      background-color: #f8f9fa;
      border: 1px solid #007bff;
      border-radius: 8px;
      padding: 20px;
      width: 300px;
      box-shadow: 0 4px 8px black;
      text-align: center;
      margin: 10px;
    }

    .card img {
      width: 100%;
      height: auto;
      border-radius: 4px black;
    }

    .card h3 {
      margin: 10px 0;
      font-weight: 700;
    }
  </style>
</head>

<body>

  <!-- Barra de navegação lateral -->
  <div class="sidebar">
    <div class="logo-container">
      <a href="index.php"><img src="Imagens/image (1).png" alt="Logo Principal" class="logo-principal"></a>
    </div>
    <h2>Polícia Civil</h2>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li>
        <a href="#about">GEM</a>
        <img src="Imagens/GEM_IMPACT_2.png" alt="Logo 2" class="logo-pequena">
      </li>
      <li>
        <a href="contagem_saer.php">SAER</a>
        <img src="Imagens/saerpcrj-removebg-preview.png" alt="Logo 3" class="logo-pequena">
      </li>
      <li>
        <a href="#contact">CORE</a>
        <img src="Imagens/Core_logo.png" alt="Logo 4" class="logo-pequena">
      </li>
    </ul>
  </div>

  <!-- Cards dos Comandantes -->
  <div class="card-container">
    <div class="card">
      <img src="Imagens/comandante1.jpg" alt="Comandante">
      <h3>Dark</h3>
    </div>
    <div class="card">
      <img src="Imagens/comandante2.jpg" alt="Sub-Comandante">
      <h3>Andrade</h3>
    </div>
  </div>

  <h1 class="text-center">Calculadora de Horas Trabalhadas</h1>
  <form id="hours-form">
    <div id="time-inputs">
      <div class="time-entry">
        <label for="start-time[]">Hora de Início:</label>
        <input type="time" name="start-time[]">
        <label for="end-time[]">Hora de Fim:</label>
        <input type="time" name="end-time[]">
        <button type="button" class="remove-time" title="Remover entrada">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
          </svg>
        </button>
      </div>
    </div>
    <button type="button" id="add-time">Adicionar Mais Horas</button>
    <button type="submit">Calcular Total</button>
  </form>

  <div id="total-hours" style="display:none;">
    <h2>Total de Horas Trabalhadas: <span id="total"></span></h2>
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
    document.getElementById('add-time').addEventListener('click', function () {
      const newEntry = document.createElement('div');
      newEntry.classList.add('time-entry');
      newEntry.innerHTML = `
        <label for="start-time[]">Hora de Início:</label>
        <input type="time" name="start-time[]">
        <label for="end-time[]">Hora de Fim:</label>
        <input type="time" name="end-time[]">
        <button type="button" class="remove-time" title="Remover entrada">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
          </svg>
        </button>
      `;
      document.getElementById('time-inputs').appendChild(newEntry);

      // Adiciona funcionalidade de remoção ao novo botão
      newEntry.querySelector('.remove-time').addEventListener('click', function () {
        newEntry.remove();
      });
    });

    document.getElementById('hours-form').addEventListener('submit', function (e) {
      e.preventDefault();

      const startTimes = document.getElementsByName('start-time[]');
      const endTimes = document.getElementsByName('end-time[]');
      let totalMinutes = 0;

      for (let i = 0; i < startTimes.length; i++) {
        const startTime = startTimes[i].value;
        const endTime = endTimes[i].value;

        // Ignorar entradas vazias
        if (startTime && endTime) {
          const [startHours, startMinutes] = startTime.split(':').map(Number);
          const [endHours, endMinutes] = endTime.split(':').map(Number);

          const startTotalMinutes = startHours * 60 + startMinutes;
          let endTotalMinutes = endHours * 60 + endMinutes;

          // Se o horário de término for menor que o de início, adicionar 24 horas (1440 minutos)
          if (endTotalMinutes < startTotalMinutes) {
            endTotalMinutes += 1440; // Adiciona 24 horas em minutos
          }

          totalMinutes += (endTotalMinutes - startTotalMinutes);
        }
      }

      // Exibir total mesmo se todos os campos não estiverem preenchidos
      const totalHours = Math.floor(totalMinutes / 60);
      const remainingMinutes = totalMinutes % 60;
      const totalDisplay = `${totalHours} hora(s) e ${remainingMinutes} minuto(s)`;

      document.getElementById('total').innerText = totalDisplay;
      document.getElementById('total-hours').style.display = 'block';
    });

    // Funcionalidade de remoção para entradas existentes
    document.querySelectorAll('.remove-time').forEach(button => {
      button.addEventListener('click', function () {
        button.parentElement.remove();
      });
    });
  </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

</html>