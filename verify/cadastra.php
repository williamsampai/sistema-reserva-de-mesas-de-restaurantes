<?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['nome']) && !empty($_POST['nome'])) {
           
            require './conexao.php';
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $nome = $_POST['nome'];

            $sql = "INSERT INTO login (email, senha, nome) VALUES (:email, :senha, :nome)";
            $resultado = $conexao->prepare($sql);
            $resultado->bindValue(":email", $email);
            $resultado->bindValue(":senha", $senha);
            $resultado->bindValue(":nome", $nome);
            
            $resultado->execute();

            header('Location: ../index.php');           
        }
        else {
            header('Location: ../formulariocadastro.php');
        } 
    }
