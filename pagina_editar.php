<?php
include "conexao.php";
include "verificar_login.php";
$matricula = $_GET['cod'];

// 1º Passo - Comando SQL
$sql = "SELECT * FROM tb_estudantes WHERE matricula_est= '$matricula'";

// 2º Passo - Preparar a conexão
$consultar = $pdo->prepare($sql);

// 3º Passo - Tentar Executar
try{
    $consultar->execute();
    $resultados = $consultar->fetch(PDO::FETCH_ASSOC);
    $nome_capturado = $resultados['nome_est'];
    $curso_capturado = $resultados['curso_est'];
    $bolsista_capturado = $resultados['est_bolsista'];
    $promo_capturado = $resultados['aviso_promocoes'];
    $evento_capturado = $resultados['aviso_eventos'];
    $av_curso_capturado = $resultados['aviso_cursos'];
}catch(PDOException $erro){
    echo "Falha ao consultar! ". $erro->getMessage();
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alterar dados do Estudante</h1>
    <form action="atualizar.php" method="post">
        <input type="text" name= "matricula" value=<?php echo $matricula; ?> > <br> <br>
        <label>Nome:</label>
        <input type="text" name="nome_estudante"
            value='<?php echo $nome_capturado; ?>' > <br> <br>

        <label>Curso:</label>
        <select name="curso_escolhido">
            <option value="">Selecione</option>
            <option value="Informática"
            <?php echo ($curso_capturado=="Informática")? "selected":""; ?> >Informática</option>
            <option value="Automação"
            <?php echo ($curso_capturado=="Automação")? "selected":""; ?> >Automação</option>
            <option value="Nutrição"
            <?php echo ($curso_capturado=="Nutrição")? "selected":""; ?> >Nutrição</option>
        </select> <br> <br>

        <label>Bolsista:</label> <br> <br>
        <input type="radio"
            name="bolsista"
            value="Sim" <?php echo ($bolsista_capturado=="Sim")? "checked":"" ?> > Sim <br>
        <input type="radio"
            name="bolsista"
            value="Não" <?php echo ($bolsista_capturado=="Não")? "checked":"" ?>> Não <br> <br>

        <label>Receber Avisos:</label> <br>
        <input type="checkbox"
            name="promo"
            value="Sim" <?php echo($promo_capturado == "Sim")? "checked": ""; ?> > Promoções <br>

        <input type="checkbox"
            name="novos_cursos"
            value="Sim" <?php echo($av_curso_capturado == "Sim")? "checked": ""; ?> > Novos Cursos <br>

        <input type="checkbox"
            name="eventos"
            value="Sim" <?php echo($evento_capturado == "Sim")? "checked": ""; ?> > Eventos <br> <br> <br>

        <button type="submit">Cadastrar</button>





    </form>
</body>
</html>