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

    /* Estilos para o relatório */
    #summary {
      margin-top: 20px;
      padding: 15px;
      background-color: #e9ecef;
      border: 1px solid #007bff;
      border-radius: 8px;
      font-family: 'Roboto', sans-serif;
    }

    #summary h3 {
      margin: 0;
    }

    #summary p {
      margin: 5px 0 0;
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

  <!-- Tabela de usuários -->
  <h2>Usuários Cadastrados</h2>
  <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>QRA</th>
        <th>Passaporte</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Conectar ao banco de dados e buscar usuários
      include 'conexao.php'; // Inclua seu arquivo de conexão aqui
      
      $sql = "SELECT nome, qra, passaporte FROM usuarios"; // Ajuste a consulta conforme sua tabela
      $result = mysqli_query($conexao, $sql);

      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr onclick=\"scrollToCalculator('{$row['nome']}', '{$row['qra']}', '{$row['passaporte']}')\">";
        echo "<td>{$row['nome']}</td>";
        echo "<td>{$row['qra']}</td>";
        echo "<td>{$row['passaporte']}</td>";
        echo "</tr>";
      }

      $usuario['qra'] = $row['qra'];
      ?>
    </tbody>
  </table>

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
    <div id="user-info">
      <label>Nome:</label>
      <input type="text" name="nome" readonly>
      <label>QRA:</label>
      <input type="text" name="qra" readonly>
      <label>Passaporte:</label>
      <input type="text" name="passaporte" readonly>
    </div>
    <div id="time-inputs">
      <div class="time-entry">
        <label>Hora de Início:</label>
        <input type="time" name="start-time[]">
        <label>Hora de Fim:</label>
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
  <p class="text-center">Mensagem de Relatório</p>
  <div class="relatorio">
    <h3 class="text-center">QRA:<?php $usuario['qra']; ?></h3>
    <h3 class="text-center">Nome:</h3>
    <h3 class="text-center">Passaporte: </h3>
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
      </div>
    </div>
  </footer>

  <script>
    const form = document.getElementById('hours-form');
    const totalHoursDiv = document.getElementById('total-hours');
    const totalSpan = document.getElementById('total');
    const reportMessage = document.getElementById('report-message');

    // Adiciona nova entrada de tempo
    document.getElementById('add-time').addEventListener('click', () => {
      const timeInputs = document.createElement('div');
      timeInputs.className = 'time-entry';
      timeInputs.innerHTML = `
        <label>Hora de Início:</label>
        <input type="time" name="start-time[]">
        <label>Hora de Fim:</label>
        <input type="time" name="end-time[]">
        <button type="button" class="remove-time" title="Remover entrada">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
          </svg>
        </button>
      `;
      document.getElementById('time-inputs').appendChild(timeInputs);
    });

    // Remove uma entrada de tempo
    document.body.addEventListener('click', (event) => {
      if (event.target.classList.contains('remove-time')) {
        event.target.parentElement.parentElement.remove();
      }
    });

    // Calcula o total de horas trabalhadas
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      let totalMinutes = 0;

      const startTimes = form.querySelectorAll('input[name="start-time[]"]');
      const endTimes = form.querySelectorAll('input[name="end-time[]"]');

      startTimes.forEach((startTime, index) => {
        const start = startTime.value;
        const end = endTimes[index].value;

        if (start && end) {
          const startDate = new Date(`1970-01-01T${start}:00`);
          const endDate = new Date(`1970-01-01T${end}:00`);

          // Se a hora de fim for menor que a hora de início, isso significa que a hora de fim é no dia seguinte
          if (endDate < startDate) {
            endDate.setDate(endDate.getDate() + 1); // Adiciona um dia
          }

          const diffMinutes = (endDate - startDate) / (1000 * 60);
          totalMinutes += diffMinutes;
        }
      });

      // Cálculo total em horas e minutos
      const totalHours = Math.floor(totalMinutes / 60);
      const remainingMinutes = totalMinutes % 60;

      // Se o total de horas for maior que 24, exiba corretamente
      totalSpan.textContent = `${totalHours} horas e ${remainingMinutes} minutos`;

      // Atualiza a mensagem do relatório
      reportMessage.textContent = `Você trabalhou um total de ${totalHours} horas e ${remainingMinutes} minutos.`;
      totalHoursDiv.style.display = 'block';
    });

    // Função para rolar até a calculadora e preencher os campos
    function scrollToCalculator(nome, qra, passaporte) {
      document.querySelector('input[name="nome"]').value = nome;
      document.querySelector('input[name="qra"]').value = qra;
      document.querySelector('input[name="passaporte"]').value = passaporte;

      window.scrollTo({
        top: document.getElementById('time-inputs').offsetTop,
        behavior: 'smooth'
      });
    }
  </script>

</body>

</html>