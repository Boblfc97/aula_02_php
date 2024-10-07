<?php

include "conexao.php";
$u = $_POST['usuario_digitado'];
$s = $_POST['senha_digitada'];


//1º Passo - Comando

$sql = "SELECT * FROM tb_usuarios WHERE
        usuario= '$u' and senha='$s'";

//2º Passo - Preparar conexão

$consultar = $pdo->prepare($sql);

//3º Passo - Tentar consultar

try{
    $consultar->execute();
    $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
    if($resultado){
        session_start();
        $_SESSION['logado'] = "Sim";
        header("Location: index.php");
    }else{
        //isso abre outra página
        header("Location:login.php?erro=1");
    }
}catch(PDOException $erro){
    echo "Falha no login" . $erro->getMessage();
}


?>