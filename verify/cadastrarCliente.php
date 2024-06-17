<?php
if (isset($_POST['submit'])) {
    require './conexao.php';
    echo "oi";
    if (
        isset($_POST['numero_da_mesa']) && !empty($_POST['numero_da_mesa']) &&
        isset($_POST['nome_do_cliente']) && !empty($_POST['nome_do_cliente']) &&
        isset($_POST['quantidade_de_lugares_reservados']) && !empty($_POST['quantidade_de_lugares_reservados']) &&
        isset($_POST['data_reserva']) && !empty($_POST['data_reserva']) &&
        isset($_POST['hora']) && !empty($_POST['hora'])
    ) {

       

        $numero_da_mesa = $_POST['numero_da_mesa'];
        $nome_do_cliente = $_POST['nome_do_cliente'];
        $quantidade_de_lugares_reservados = $_POST['quantidade_de_lugares_reservados'];
        $data_reserva = $_POST['data_reserva'];
        $hora = $_POST['hora'];

        $sql = "INSERT INTO cliente (numero_da_mesa, nome_do_cliente, quantidade_de_lugares_reservados, data_reserva, hora) VALUES (:numero_da_mesa, :nome_do_cliente, :quantidade_de_lugares_reservados, :data_reserva, :hora)";

        $result = $conexao->prepare($sql);
        $result->bindValue(":numero_da_mesa", $numero_da_mesa);
        $result->bindValue(":nome_do_cliente", $nome_do_cliente);
        $result->bindValue(":quantidade_de_lugares_reservados", $quantidade_de_lugares_reservados);
        $result->bindValue(":data_reserva", $data_reserva);
        $result->bindValue(":hora", $hora);
        $result->execute();
         echo"deu certo";
         header('Location:../listagem.php');
    }
    
    } else {
         echo "Preencha todos os campos.";
     }
