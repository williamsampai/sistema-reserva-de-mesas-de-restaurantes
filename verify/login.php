<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
        session_start();
        require './conexao.php';
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM login WHERE email = :email AND senha = :senha";
        $resultado = $conexao->prepare($sql);
        $resultado->bindValue(":email", $email);
        $resultado->bindValue(":senha", $senha);
        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $dado = $resultado->fetch();
            $_SESSION["id"] = $dado["id"];
            $_SESSION["email"] = $dado["email"];
            $_SESSION["nome"] = $dado["nome"];

            header('Location: ../index.php');  
        
        } 
        else {
            header('Location: ../formulariologin.php');
        }
}
}
