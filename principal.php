<?php
$nomeArquivo = "C:\xTemp\PetShop.json";

//Se o arquivo existir eu recupero o arquivo
if (file_exists($nomeArquivo)) {

    //Recupera os dados
    $petShopJSON = file_get_contents($nomeArquivo);

    //Converter JSON em PHP
    $petShop = json_decode($petShopJSON, true);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<meta charset="utf-8">
<title>Pet shop</title>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
        table,
        td,
        th {
            border: 1px solid black;
            text-align: center;
            background-size: auto;
            padding: 10px;
        }        
        img {
            width: 300px;
            height: 400px;
            object-fit: cover;
        }
        body{
            background-color:#FDF5E6;
        }
        h2,h5{
            text-align: center;
        }
        form{
            padding: 40px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <header>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="imagens_php/animais.jpg" alt="First slide" >
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imagens_php/passaros.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imagens_php/coelho.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </header>
        <div class="row">
            <div class="col-2 mb-2">
                <br><br><br><br><br><br>
                <h5 >Aqui você encontra:</h5>
                <div class="text-white">
                    <ul class="list-group">

                        <li class="list-group-item list-group-item-warning">Acessórios</li>
                        <li class="list-group-item list-group-item-warning">Brinquedos</li>
                        <li class="list-group-item list-group-item-warning">Camas</li>
                        <li class="list-group-item list-group-item-warning">Casinhas</li>
                        <li class="list-group-item list-group-item-warning">Farmácia</li>
                        <li class="list-group-item list-group-item-warning">Higiene</li>
                    </ul>
                </div>
                <div class="text-black ">
                    <h4>Nossos objetivos</h4>
                    <ul>
                        <li>Ser referência de serviços e inovação em Pet Shop.</li>
                        <li>Trabalharemos sempre para manter seu pet feliz e saudável</li>
                        <li>Profissionais altamente qualificados para melhor atender seu pet</li>

                    </ul>
                </div>
            </div>
            <div class="col-8">

                <div>
                    <header>
                        <br><h1 class="text-center">Pet Shop</h1><br>
                        <h4 class="text-center">Mais que um pet shop. Um estilo de vida</h4><br>
                    </header>
                </div>
                
                <form action="processamento.php" method="REQUEST" class="border border-dark">
                    <h2>Formulário de cadastro</h2>
                    <div class="form-group">
                        <label for="nomeCliente">Nome do cliente:</label>
                        <input type="text" class="form-control" name="txtNomeCliente" placeholder="Digite o seu nome..">

                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input class="form-control" type="text" name="txtTelefone" placeholder="Digite o telefone..">
                    </div>
                    <div class="form-group">
                        <label for="nomeAnimal">Nome do animal:</label>
                        <input type="text" class="form-control" name="txtNomeAnimal" placeholder="Digite o nome do animal..">
                    </div>
                    <div class="form-group">
                        <label for="idadeAnimal">Idade do animal:</label>
                        <input type="number" class="form-control" name="numIdadeAnimal" placeholder="Digite a idade..">
                    </div>
                    <div class="form-group">
                        <label for="atendimento">Atendimento de interesse</label>
                        <select name="selectAtendimento" class="form-control">
                            <option value="">Selecione o atendimento</option>
                            <option value="Banho & Tosa">Banho & Tosa</option>
                            <option value="Corte de unhas">Corte de unhas</option>
                            <option value="Desembaraçamento de pelos">Desembaraçamento de pelos</option>
                            <option value="Escovação de dentes">Escovação de dentes</option>
                            <option value="Hidratação">Hidratação</option>
                            <option value="Higienização completa">Higienização completa</option>
                            <option value="Limpeza de ouvido">Limpeza de ouvido</option>
                            <option value="Tingimento dos pelos">Tingimento dos pelos</option>
                            <option value="Tosa higiênica">Tosa higiênica</option>
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
                        <textarea class="form-control" rows="2" name="txtAreaSugestoesReclamacoes"></textarea>
                    </div>
                    <div class="form-group">
                        <p>
                            <input class="btn btn-primary" type="submit" name="btnOperacao" value="inserir" /> &nbsp;
                            <input class="btn btn-primary" type="reset" name="btnOperacao" value="limpar" /> &nbsp;
                        </p>
                    </div>
                </form>
                <legend>Clientes cadastrados</legend>
                <table>
                    <tr>
                        <th>Nome cliente</th>
                        <th>Telefone</th>
                        <th>Nome animal</th>
                        <th>Idade animal</th>
                        <th>Atendimento</th>
                        <th>Pet</th>
                        <th>Sugestões ou reclamações</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>

                    <?php
                    if (!empty($petShop)) {
                        //$petShopKey essa váriavel que me passa o índice
                        foreach ($petShop as $petShopKey => $petShopValor) {
                            echo "<tr>";
                            //echo "<td>$petShopKey</td> ";
                            echo "   <td>" . $petShopValor['NomeCliente'] . "</td> ";
                            echo "   <td>" . $petShopValor['Telefone'] . "</td> ";
                            echo "   <td>" . $petShopValor['NomeAnimal'] . "</td> ";
                            echo "   <td>" . $petShopValor['NumIdadeAnimal'] . "</td> ";
                            echo "   <td>" . $petShopValor['Atendimento'] . "</td> ";
                            echo "   <td>" . $petShopValor['Pet'] . "</td> ";
                            echo "   <td>" . $petShopValor['SugestoesReclamacoes'] . "</td> ";
                            //passando dados para outra página ? nessa estrutura chave/valor
                            echo "   <td><a href='alterar.php?indice=$petShopKey'>Alterar</a></td> ";
                            echo "   <td><a href='excluir.php?indice=$petShopKey'>Excluir</a>-</td> ";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>


</body>

</html>