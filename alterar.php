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
    <title>Minha página</title>
</head>
<body>
    <h1>Alteração de cadastro - JSON</h1>
    <div class="col-6 mb-2 bg-warning text-dark">
            <div class="card">
                <div class="card-body">
                    <h2>Formulário de cadastro</h2>
                    <form action="processamento.php" method="REQUEST">
                        <div class="form-group">
                            <label for="nomeCliente">Nome do cliente:</label>
                            <input type="text" class="form-control" name="txtNomeCliente" id="nomeCliente" placeholder="Digite o seu nome..">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone:</label>
                            <input class="form-control" type="text" name="txtTelefone" id="telefone" placeholder="Digite o telefone..">
                        </div>
                        <div class="form-group">
                            <label for="nomeAnimal">Nome do animal:</label>
                            <input type="text" class="form-control" name="txtNomeAnimal" id="nomeAnimal" placeholder="Digite o nome do animal..">
                        </div>
                        <div class="form-group">
                            <label for="idadeAnimal">Idade do animal:</label>
                            <input type="number" class="form-control" name="numIdadeAnimal" id="idadeAnimal" placeholder="Digite a idade..">
                        </div>
                        <div class="form-group">
                            <label for="atendimento">Atendimento de interesse</label>
                            <select name="selectAtendimento">
                                <option value="">Selecione o atendimento</option>
                                <option value="Banho_&_Tosa">Banho & Tosa</option>
                                <option value="Corte_de_unhas">Corte de unhas</option>
                                <option value="Desembaraçamento_de_pelos">Desembaraçamento de pelos</option>
                                <option value="Escovação_de_dentes">Escovação de dentes</option>
                                <option value="Hidratação">Hidratação</option>
                                <option value="Higienização_completa">Higienização completa</option>
                                <option value="Limpeza_de_ouvido">Limpeza de ouvido</option>
                                <option value="Tingimento_dos_pelos">Tingimento dos pelos</option>
                                <option value="Tosa_higiênica">Tosa higiênica</option>
                            </select>
                        </div>
                        <div class="form-group">

                            <label>Pet:</label><br>
                            <label><input type="radio" name="rdoPet" value="cachorro"> Cachorro</label><br>
                            <label><input type="radio" name="rdoPet" value="gato"> Gato</label><br>
                            <label><input type="radio" name="rdoPet" value="passarinho"> Passaros</label><br>
                            <label><input type="radio" name="rdoPet" value="roedores"> Roedores</label><br>
                        </div>

                        <div class="form-group">
                            <label for="sugestoesReclamacoes">Sugestões ou reclamações:</label>
                            <textarea  class="form-control" name="txtAreaSugestoesReclamacoes"> </textarea>
                        </div>
                        <br>
                        <button class="btn btn-primary" name="btnOperacao" type="submit" value="Reset">Alterar</button>
                        <button class="btn btn-primary" name="btnOperacao" type="submit" value="Submit">Canceçar</button>

                    </form>
                </div>
                <br>


            </div>
        </div>
</body>

</html>