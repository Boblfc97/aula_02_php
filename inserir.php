<?php
include "conexao.php";

//Guardar os dados recebidos
$nome = $_POST['nome_estudante'];
$curso = $_POST['curso_escolhido'];
$bolsista = $_POST['bolsista'];
$promocoes;
$novos_cursos;
$eventos;

if(isset($_POST['promo'])){
    $promocoes =  "Sim";
}else{
    $promocoes = "Não";
}

if(isset($_POST['novos_cursos'])){
    $novos_cursos =  "Sim";
}else{
    $novos_cursos = "Não";
}

if(isset($_POST['eventos'])){
    $eventos =  "Sim";
}else{
    $eventos = "Não";
}

//1º Passo - Comando SQL
$sql = "INSERT INTO tb_estudantes
(nome_est, est_bolsista, aviso_promocoes, aviso_cursos, aviso_eventos, curso_est) VALUES
('$nome', '$bolsista', '$promocoes', '$novos_cursos', '$eventos', '$curso')";



//2º Passo - Preparar a conexão
$inserir = $pdo->prepare($sql);


try{
    $inserir->execute();
    echo "Cadastrado com Sucesso!";
    echo "<br> <a href= 'index.html'> Voltar ao ínicio </a>";
}catch(PDOException $erro){
    echo "Falha ao inserir! ". $erro->getmessage();
}



?>