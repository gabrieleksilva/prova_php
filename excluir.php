
<?php
    $indice = 0;
    $codDisciplina = "";
    $disciplina = "";

    if (isset($_REQUEST["indice"])){
        if(!empty($_REQUEST["indice"])){
            $indice = $_REQUEST["indice"];
        }
    }
    //echo "Índice: $indice <br>";

    $nomeArquivo = "C:\xTemp\Disciplinas.json";

    //Se o arquivo existir eu recupero o arquivo
    if (file_exists($nomeArquivo)){
        //Recupera os dados
        $disciplinaJSON = file_get_contents($nomeArquivo);

        //Converter JSON em PHP
        $disciplinas = json_decode($disciplinaJSON, true);
    }

    $codDisciplina = $disciplinas[$indice]['CodDisciplina'];
    $disciplina = $disciplinas[$indice]['Disciplina'];

    //echo "Cod Disciplina: $codDisciplina <br>";
    //echo "Disciplina: $disciplina <br>";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Minha página</title>
</head>
<body>
    <h1>Cadastro de Disciplina - JSON</h1>
    <form action="40-JSON-Processar.php" method="GET">
        <fieldset>
            <legend>Excluir</legend>
            <p>
                Índice &ensp;<input type="text" name="txtIndice" readonly value=" <?php echo $indice;  ?>">
            </p>
            
            <p>
            Código &ensp;<input type="text" name="txtCodDisciplina" readonly value="<?php echo $codDisciplina;  ?>">
            </p>

            <p>
                Disciplina &ensp;<input type="text" name="txtDisciplina" readonly value="<?php echo $disciplina;  ?>">
            </p>

            <p>
                <input type="submit" name="btnOperacao" value="Excluir" /> &nbsp;
                <input type="submit" name="btnOperacao" value="Cancelar" /> &nbsp;
            </p>

        </fieldset>
    </form>
    <h2>Deseja realmente excluir os dados?</h2>
</body>

</html>
