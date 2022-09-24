
<?php
    //----------------------------------------------
    // RECUPERA OS DADOS
    //----------------------------------------------
    $indice = 0;
    $operacao = "";
    $nomeCliente = "";
    $telefone = "";
    $nomeAnimal = "";
    $idadeAnimal = 0;
    $atendimento = "";
    $pet = "";
    $sugestoesReclamacoes = "";

    if (isset($_REQUEST["indice"])){
        if(!empty($_REQUEST["indice"])){
            $indice = $_REQUEST["indice"];
        }
    }
    //echo "Índice: $indice <br>";

    $nomeArquivo = "C:\xTemp\PetShop.json";

    //Se o arquivo existir eu recupero o arquivo
    if (file_exists($nomeArquivo)) {

        //Recupera os dados
        $petShopJSON = file_get_contents($nomeArquivo);

        //Converter JSON em PHP
        $petShop = json_decode($petShopJSON, true);
    }

    $nomeCliente = $petShop[$indice]['NomeCliente'];
    $telefone = $petShop[$indice]['Telefone'];
    $nomeAnimal = $petShop[$indice]['NomeAnimal'];
    $idadeAnimal = $petShop[$indice]['NumIdadeAnimal'];
    $atendimento = $petShop[$indice]['Atendimento'];
    $pet = $petShop[$indice]['Pet'];
    $sugestoesReclamacoes = $petShop[$indice]['SugestoesReclamacoes'];

    echo "Índice: $indice <br>";
    echo "Nome cliente: $nomeCliente <br>";
    echo "Telefone: $telefone <br>";
    echo "Nome animal: $nomeAnimal <br>";
    echo "Idade animal: $idadeAnimal <br>";
    echo "Atendimento: $atendimento <br>";
    echo "Pet: $pet <br>";
    echo "Sugestoes Reclamacoes: $sugestoesReclamacoes <br>";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Excluir cadastro</title>
</head>
<body>
    <div class="col-6 mb-2 bg-warning text-dark">
            <div class="card">
                <div class="card-body">
                    <h2>Exclusão de cadastro</h2>
                    <form action="processamento.php" method="GET">
                    <div class="form-group">
                        <label for="nomeCliente">Nome do cliente:</label>
                        <input type="text" class="form-control" name="txtNomeCliente" id="nomeCliente" readonly value= "<?php echo $nomeCliente; ?>">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input class="form-control" type="text" name="txtTelefone" id="telefone" readonly value= "<?php echo $telefone; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nomeAnimal">Nome do animal:</label>
                        <input type="text" class="form-control" name="txtNomeAnimal" id="nomeAnimal" readonly value= "<?php echo $nomeAnimal; ?>">
                    </div>
                    <div class="form-group">
                        <label for="idadeAnimal">Idade do animal:</label>
                        <input type="number" class="form-control" name="numIdadeAnimal" id="idadeAnimal" readonly value= "<?php echo $idadeAnimal; ?>">
                    </div>
                    <div class="form-group">
                        <label for="atendimento">Atendimento de interesse</label>
                        <select readonly name="selectAtendimento" disabled>
                            <option <?php echo ($atendimento == "Banho_&_Tosa") ? "selected" : null; ?> value="Banho_&_Tosa">Banho & Tosa</option>
                            <option <?php echo ($atendimento == "Corte_de_unhas") ? "selected" : null; ?> value="Corte_de_unhas">Corte de unhas</option>
                            <option <?php echo ($atendimento == "Desembaraçamento_de_pelos") ? "selected" : null; ?> value="Desembaraçamento_de_pelos">Desembaraçamento de pelos</option>
                            <option <?php echo ($atendimento == "Escovação_de_dentes") ? "selected" : null; ?> value="Escovação_de_dentes">Escovação de dentes</option>
                            <option <?php echo ($atendimento == "Hidratação") ? "selected" : null; ?> value="Hidratação">Hidratação</option>
                            <option <?php echo ($atendimento == "Higienização_completa") ? "selected" : null; ?> value="Higienização_completa">Higienização completa</option>
                            <option <?php echo ($atendimento == "Limpeza_de_ouvido") ? "selected" : null; ?> value="Limpeza_de_ouvido">Limpeza de ouvido</option>
                            <option <?php echo ($atendimento == "Tingimento_dos_pelos") ? "selected" : null; ?> value="Tingimento_dos_pelos">Tingimento dos pelos</option>
                            <option <?php echo ($atendimento == "Tosa_higiênica") ? "selected" : null; ?> value="Tosa_higiênica">Tosa higiênica</option>
                        </select>
                    </div>
                    <div class="form-group">

                        <label>Pet:</label><br>
                        <label><input type="radio" name="rdoPet" disabled value="cachorro"  <?php echo ($pet == "cachorro") ? "checked" : null; ?>/> Cachorro</label><br>
                        <label><input type="radio" name="rdoPet" disabled value="gato" <?php echo ($pet == "gato") ? "checked" : null; ?>/> Gato</label><br>
                        <label><input type="radio" name="rdoPet" disabled value="passarinho" <?php echo ($pet == "passarinho") ? "checked" : null; ?>/> Passaros</label><br>
                        <label><input type="radio" name="rdoPet" disabled value="roedores" <?php echo ($pet == "roedores") ? "checked" : null; ?>/> Roedores</label><br>
                    </div>

                    <div class="form-group">
                        <label for="sugestoesReclamacoes">Sugestões ou reclamações:</label>
                        <textarea disabled class="form-control" name="txtAreaSugestoesReclamacoes" value= ""> <?php echo $sugestoesReclamacoes; ?> </textarea>
                    </div>
                    <br>
                    <h2>Deseja realmente excluir os dados?</h2>
                    <button class="btn btn-primary" name="btnOperacao" type="submit" value="Excluir">Excluir</button>
                    <button class="btn btn-primary" name="btnOperacao" type="submit" value="Cancelar">Cancelar</button>

                </form>
                
                </div>
                <br>


            </div>
        </div>
</body>

</html>
