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

if (isset($_REQUEST["indice"])) {
    if (!empty($_REQUEST["indice"])) {
        $indice = $_REQUEST["indice"];
    }
}

$nomeArquivo = "C:\xTemp\PetShop.json";

//Se o arquivo existir eu recupero o arquivo
if (file_exists($nomeArquivo)) {
    //Recupera os dados
    $petShopJSON = file_get_contents($nomeArquivo);
}
//Converter JSON em PHP
$petShop = json_decode($petShopJSON, true);

$nomeCliente = $petShop[$indice]['NomeCliente'];
$telefone = $petShop[$indice]['Telefone'];
$nomeAnimal = $petShop[$indice]['NomeAnimal'];
$idadeAnimal = $petShop[$indice]['NumIdadeAnimal'];
$atendimento = $petShop[$indice]['Atendimento'];
$pet = $petShop[$indice]['Pet'];
$sugestoesReclamacoes = $petShop[$indice]['SugestoesReclamacoes'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Excluir cadastro</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>
    h2 {
        text-align: center;
    }

    body {
        background-color: #FDF5E6;
    }

    form {
        padding: 10px;
    }
</style>
</head>

<body>
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8 bg-warning">
            <div class="col mb-2 bg-danger text-dark">
                <div class="card">
                    <div class="card-body">
                        <h2>Exclusão de cadastro</h2>
                        <form action="processamento.php" method="REQUEST">
                            <p>
                                Índice &ensp;<input type="text" name="txtIndice" readonly value="<?php echo $indice; ?>">
                            </p>
                            <div class="form-group">

                                <label for="nomeCliente">Nome do cliente:</label>
                                <input type="text" class="form-control" name="txtNomeCliente" readonly value="<?php echo $nomeCliente; ?>">
                            </div>
                            <div class="form-group">
                                <label for="telefone">Telefone:</label>
                                <input class="form-control" type="text" name="txtTelefone" readonly value="<?php echo $telefone; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nomeAnimal">Nome do animal:</label>
                                <input type="text" class="form-control" name="txtNomeAnimal" readonly value="<?php echo $nomeAnimal; ?>">
                            </div>
                            <div class="form-group">
                                <label for="idadeAnimal">Idade do animal:</label>
                                <input type="number" class="form-control" name="numIdadeAnimal" readonly value="<?php echo $idadeAnimal; ?>">
                            </div>
                            <div class="form-group">
                                <label for="atendimento">Atendimento de interesse</label>
                                <select readonly name="selectAtendimento" disabled>
                                    <option <?php echo ($atendimento == "Banho & Tosa") ? "selected" : null; ?> value="Banho & Tosa">Banho & Tosa</option>
                                    <option <?php echo ($atendimento == "Corte de unhas") ? "selected" : null; ?> value="Corte de unhas">Corte de unhas</option>
                                    <option <?php echo ($atendimento == "Desembaraçamento de pelos") ? "selected" : null; ?> value="Desembaraçamento de pelos">Desembaraçamento de pelos</option>
                                    <option <?php echo ($atendimento == "Escovação de dentes") ? "selected" : null; ?> value="Escovação de dentes">Escovação de dentes</option>
                                    <option <?php echo ($atendimento == "Hidratação") ? "selected" : null; ?> value="Hidratação">Hidratação</option>
                                    <option <?php echo ($atendimento == "Higienização completa") ? "selected" : null; ?> value="Higienização completa">Higienização completa</option>
                                    <option <?php echo ($atendimento == "Limpeza de ouvido") ? "selected" : null; ?> value="Limpeza de ouvido">Limpeza de ouvido</option>
                                    <option <?php echo ($atendimento == "Tingimento dos pelos") ? "selected" : null; ?> value="Tingimento dos pelos">Tingimento dos pelos</option>
                                    <option <?php echo ($atendimento == "Tosa higiênica") ? "selected" : null; ?> value="Tosa higiênica">Tosa higiênica</option>
                                </select>
                            </div>
                            <div class="form-group">

                                <label>Pet:</label><br>
                                <label><input type="radio" name="rdoPet" disabled value="cachorro" <?php echo ($pet == "cachorro") ? "checked" : null; ?> /> Cachorro</label><br>
                                <label><input type="radio" name="rdoPet" disabled value="gato" <?php echo ($pet == "gato") ? "checked" : null; ?> /> Gato</label><br>
                                <label><input type="radio" name="rdoPet" disabled value="passarinho" <?php echo ($pet == "passarinho") ? "checked" : null; ?> /> Passaros</label><br>
                                <label><input type="radio" name="rdoPet" disabled value="roedores" <?php echo ($pet == "roedores") ? "checked" : null; ?> /> Roedores</label><br>
                            </div>

                            <div class="form-group">
                                <label for="sugestoesReclamacoes">Sugestões ou reclamações:</label>
                                <textarea disabled class="form-control" name="txtAreaSugestoesReclamacoes" value=""> <?php echo $sugestoesReclamacoes; ?> </textarea>
                            </div>
                            <br>
                            <h2>Deseja realmente excluir os dados?</h2>
                            <br>
                            <p>
                                <button class="btn btn-success" type="submit" name="btnOperacao" value="Excluir">Excluir</button> &nbsp;
                                <button class="btn btn-danger" type="submit" name="btnOperacao" value="Cancelar">Cancelar</button> &nbsp;
                            </p>
                        </form>

                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div class="col">
        </div>
    </div>

</body>

</html>