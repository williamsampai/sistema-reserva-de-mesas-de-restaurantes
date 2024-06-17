<?php

require 'verify/conexao.php';
$sql = "SELECT * FROM cliente";
$resultado = $conexao->prepare($sql);
$resultado->execute();
$clientes = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section id="listagem">
  <?php
  if (count($clientes) > 0) {
  ?>
        <table class="tabela">

          <thead>

            <tr>
              <th>N* Mesa</th>

              <th>Nome</th>

              <th>Cadeiras reservadas</th>

              <th>data</th>

              <th>Hora</th>

              <th style="text-align:center;">Ações</th>

            </tr>

          </thead>

          <tbody>
            <?php
            foreach ($clientes as $cliente) {
              echo "<tr>";
              echo "<td data-title='numero_da_mesa'>" . $cliente['numero_da_mesa'] . "</td>";
              echo "<td data-title='nome_do_cliente	'>" . $cliente['nome_do_cliente'] . "</td>";
              echo "<td data-title='quantidade_de_lugares_reservados'>" . $cliente['quantidade_de_lugares_reservados'] . "</td>";
              echo "<td data-title='data_reserva'>" . $cliente['data_reserva'] . "</td>";
              echo "<td data-title='hora'>" . $cliente['hora'] . "</td>";
              
          echo "</tr>";
            }
          }
            ?>
          </tbody>

        </table>
      </div>
        </section>
</body>
</html>
