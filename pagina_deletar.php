<?php
$matricula =$_GET['cod'];

    echo "Tem certeza que deseja apagar a matrícula nº $matricula?";
    echo "<br> <br>";
    echo "<a href='excluir.php?cod=$matricula'> Sim</a>";
    echo "<br> <br>";
    echo "<a href='pg_gerenciar_estudante.php'> Não</a>";



?>