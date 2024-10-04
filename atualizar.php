<?php
include "conexao.php";
$mat = $_POST['matricula'];
$nome = $_POST['nome_estudante'];
$curso = $_POST['curso_escolhido'];
$bol = $_POST['bolsista'];
$pro = isset($_POST['promo'])? "Sim":"Não";
$n_cursos = isset($_POST['novos_cursos'])? "Sim":"Não";
$eve = isset($_POST['eventos'])? "Sim":"Não";
// 1º Passo - Comando SQL
$sql = "UPDATE tb_estudantes SET
        nome_est='$nome',
        est_bolsista='$bol',
        aviso_promocoes='$pro',
        aviso_cursos='$n_cursos',
        aviso_eventos='$eve',
        curso_est='$curso' WHERE matricula_est='$mat'";

// 2º Passo - Preparar conexão
$atualizar = $pdo->prepare($sql);

// 3º Passo - Tentar Executar
try{
    $atualizar->execute();
    echo "Atualizado com Sucesso! <br>";
    echo "<a href=pg_gerenciar_estudante.php> Voltar </a>";
}catch(PDOException $erro){
    echo "Falha ao atualizar!" . $erro->getMessage();
}


?>