<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Lista de Estudantes Matriculados</h1>

    <?php
        include "conexao.php";
        // 1º Passo - Comando SQL
        $sql = "SELECT * FROM tb_estudantes";

        // 2º Passo - Prepara a conexão
        $consultar = $pdo->prepare($sql);

        //3º Passo - Tentar executar e exibir
        try{
            $consultar->execute();
            $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);
            foreach ($resultados as $item) {
        echo "<div class= 'cartoes'>";
                echo "<b>Matrícula: </b>";
                echo $item ['matricula_est'] . "<br>";

                echo "<b>Nome Completo: </b>";
                echo $item ['nome_est'] . "<br>";

                echo "<b>É Bolsista? </b>";
                echo $item ['est_bolsista'] . "<br>";

                echo "<b>Curso: </b>";
                echo $item ['curso_est'] . "<br>";

                echo "<b>Preferências de avisos: </b> <br>";
                echo "<b> Promoções: </b>";
                echo $item ['aviso_promocoes'] . "<br>";

                echo "<b> Novos Cursos: </b>";
                echo $item ['aviso_cursos'] . "<br>";

                echo "<b> Eventos: </b>";
                echo $item ['aviso_eventos'] . "<br> <br>";

                $matricula = $item['matricula_est'];
                echo "<a href='pagina_deletar.php?cod=$matricula'>";
                    echo "<button>🗑️Deletar</button>";
                echo "</a> ";

                echo "<a href='pagina_editar.php?cod=$matricula'>";
                    echo "<button>✏️Editar</button>";
                echo "</a>";

        echo "</div>";



        }



        }catch(PDOException $erro){
            echo "Falha ao Consultar!". $erro->getMessage();
        }

    ?>
</body>
</html>