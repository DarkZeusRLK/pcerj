<?php
// Inicializa variáveis para armazenar os dados do relatório
$nome = '';
$qra = '';
$passaporte = '';
$totalHoras = '';

// Recebe os dados do formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $qra = $_POST['qra'];
  $passaporte = $_POST['passaporte'];
  $totalHoras = $_POST['total-horas']; // Recebendo o total de horas do campo oculto
}
?>

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

    /* Estilos para o relatório */
    #summary {
      margin-top: 20px;
      padding: 15px;
      background-color: black border: 1px solid #007bff;
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
      ?>
    </tbody>
  </table>

  <h1 class="text-center">Calculadora de Horas Trabalhadas</h1>
  <form id="hours-form" method="POST">
    <div id="user-info">
      <label>Nome:</label>
      <input type="text" name="nome" value="<?php echo htmlspecialchars($nome); ?>" readonly>
      <label>QRA:</label>
      <input type="text" name="qra" value="<?php echo htmlspecialchars($qra); ?>" readonly>
      <label>Passaporte:</label>
      <input type="text" name="passaporte" value="<?php echo htmlspecialchars($passaporte); ?>" readonly>
    </div>
    <div id="time-inputs">
      <div class="time-entry">
        <label>Hora de Início:</label>
        <input type="time" name="start-time[]" required>
        <label>Hora de Fim:</label>
        <input type="time" name="end-time[]" required>
      </div>
    </div>

    <!-- Campo oculto para total de horas -->
    <input type="hidden" name="total-horas" id="total-horas">

    <button type="button" id="add-time">Adicionar Mais Horas</button>
    <button type="submit">Calcular Total</button>
  </form>

  <div id="total-hours" style="display: <?php echo !empty($totalHoras) ? 'block' : 'none'; ?>;">
    <h2>Total de Horas Trabalhadas: <span id="total"><?php echo isset($totalHoras) ? htmlspecialchars($totalHoras) : ''; ?></span></h2>
    <div id="summary" style="display: <?php echo !empty($nome) && !empty($qra) && !empty($passaporte) ? 'block' : 'none'; ?>;">
      <h1>Resumo</h1>
      <p>Nome: <?php echo htmlspecialchars($nome); ?></p>
      <p>QRA: <?php echo htmlspecialchars($qra); ?></p>
      <p>Passaporte: <?php echo htmlspecialchars($passaporte); ?></p>
      <p>Total de Horas: <?php echo htmlspecialchars($totalHoras); ?></p>
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
      </div>
    </div>
  </footer>

  <script>
    const form = document.getElementById('hours-form');
    const totalHoursDiv = document.getElementById('total-hours');
    const totalSpan = document.getElementById('total');
    const totalHorasInput = document.getElementById('total-horas');

    // Adiciona nova entrada de tempo
    document.getElementById('add-time').addEventListener('click', () => {
      const timeInputs = document.createElement('div');
      timeInputs.className = 'time-entry';
      timeInputs.innerHTML = `
      <label>Hora de Início:</label>
      <input type="time" name="start-time[]" required>
      <label>Hora de Fim:</label>
      <input type="time" name="end-time[]" required>
      <button type="button" class="remove-time" title="Remover entrada">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
          <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2h4V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h4v1zM4.118 4l.882 9h6l.882-9H4.118zM2.5 2v1h11V2h-11z"/>
        </svg>
      </button>
      `;
      document.getElementById('time-inputs').appendChild(timeInputs);

      // Adiciona o evento de clique para remover a entrada
      timeInputs.querySelector('.remove-time').addEventListener('click', function () {
        timeInputs.remove();
      });
    });

    form.addEventListener('submit', function (event) {
      event.preventDefault();

      let totalMinutes = 0;
      const startTimes = document.querySelectorAll('input[name="start-time[]"]');
      const endTimes = document.querySelectorAll('input[name="end-time[]"]');

      for (let i = 0; i < startTimes.length; i++) {
        const startTime = startTimes[i].value;
        const endTime = endTimes[i].value;

        if (!startTime || !endTime) {
          alert('Por favor, preencha todos os campos de horário.');
          return;
        }

        // Converte as horas para objetos Date
        let start = new Date(`1970-01-01T${startTime}:00`);
        let end = new Date(`1970-01-01T${endTime}:00`);

        // Verifica se o horário de fim é anterior ao de início (passando para o dia seguinte)
        if (end < start) {
          end.setDate(end.getDate() + 1); // Adiciona 1 dia ao horário de fim
        }

        const diffInMinutes = (end - start) / (1000 * 60);
        totalMinutes += diffInMinutes;
      }

      const totalHours = Math.floor(totalMinutes / 60);
      const remainingMinutes = totalMinutes % 60;

      totalSpan.textContent = `${totalHours}h ${remainingMinutes}m`;
      totalHorasInput.value = `${totalHours}h ${remainingMinutes}m`; // Adiciona o valor ao campo oculto

      // Agora que o total foi calculado, enviamos o formulário
      form.submit();
    });

    function scrollToCalculator(nome, qra, passaporte) {
      document.querySelector('input[name="nome"]').value = nome;
      document.querySelector('input[name="qra"]').value = qra;
      document.querySelector('input[name="passaporte"]').value = passaporte;

      document.getElementById('hours-form').scrollIntoView({ behavior: 'smooth' });
    }
  </script>
</body>

</html>