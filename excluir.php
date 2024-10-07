<?php
include "conexao.php";
include "verificar_login.php"
$matricula = $_GET['cod'];

// 1º Passo - Comando SQL
$sql = "DELETE FROM tb_estudantes WHERE matricula_est= '$matricula'";

// 2º Passo - Preparar a conexão
$deletar = $pdo->prepare($sql);

// 3º Passo - Tentar executar
try{
    $deletar->execute();
    echo "Deletado com Sucesso! <br>";
    echo "<a href='pg_gerenciar_estudante.php'> Voltar</a>";
}catch(PDOException $erro){
    echo "Falha ao Deletar! " . $erro->getMessage();
}
?>