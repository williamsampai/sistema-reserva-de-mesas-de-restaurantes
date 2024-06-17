<?php
session_start();

if (isset($_SESSION['id'])) {
    
    require './conexao.php';
    $id_usuario = $_SESSION['id'];

    $deletar_sql = "DELETE FROM login WHERE id = :id";
    $delete = $conexao->prepare($deletar_sql);
    $delete->bindValue(':id', $id_usuario);
    $delete->execute();

    session_destroy();

    header('Location: ../formulariologin.php');
    exit();
} else {
    header('Location: ../index.php ');
    exit();
} 