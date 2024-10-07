<?php
    include "verificar_login.php";
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
    <h1>Cadastrar Estudante</h1>
    <form action="inserir.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome_estudante"> <br> <br>

        <label>Curso:</label>
        <select name="curso_escolhido">
            <option value="">Selecione</option>
            <option value="Informática">Informática</option>
            <option value="Automação">Automação</option>
            <option value="Nutrição">Nutrição</option>
        </select> <br> <br>

        <label>Bolsista:</label> <br> <br>
        <input type="radio" name="bolsista" value="Sim"> Sim <br>
        <input type="radio" name="bolsista" value="Não"> Não <br> <br>

        <label>Receber Avisos:</label> <br>
        <input type="checkbox" name="promo" value="Sim"> Promoções <br>
        <input type="checkbox" name="novos_cursos" value="Sim"> Novos Cursos <br>
        <input type="checkbox" name="eventos" value="Sim"> Eventos <br> <br> <br>

        <button type="submit">Cadastrar</button>





    </form>
</body>
</html>