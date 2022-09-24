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

<head>
    <meta charset="utf-8">
    <title>Pet shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>         
       table {
            width: 500px;
            border-collapse: collapse;
        }
        table, td, th {
            border: 1px solid black;
        }      
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class=" mx-auto" style="width: 200px; ">
            <header>
                <h1>PetShop</h1><br>
                <h4>Mais que um pet shop.<br>Um estilo de vida</h4>
            </header>
        </div>
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
                        <button class="btn btn-primary" name="btnOperacao" type="reset" value="Reset">Apagar tudo</button>
                        <button class="btn btn-primary" name="btnOperacao" type="submit" value="Submit">Submeter</button>


                        <fieldset>

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
                                         //echo "Índice: " . $petShopKey . "<br>";
                                         echo "nomeCliente: " . $petShopValor['NomeCliente'] . "<br>";
                                         echo "telefone: " . $petShopValor['Telefone'] . "<br>";
                                         echo "nomeAnimal: " . $petShopValor['NomeAnimal'] . "<br>";
                                         echo "idadeAnimal: " . $petShopValor['NumIdadeAnimal'] . "<br>";
                                         echo "atendimento: " . $petShopValor['Atendimento'] . "<br>";
                                         echo "pet: " . $petShopValor['Pet'] . "<br>";
                                         echo "sugestoesReclamacoes: " . $petShopValor['SugestoesReclamacoes'] . "<br>";

                                        echo "<tr>";
                                        //echo "<td>$petShopKey</td> ";
                                        echo "<td>" . $petShopValor['NomeCliente'] . "</td> ";
                                        echo "<td>" . $petShopValor['Telefone'] . "</td> ";
                                        echo "<td>" . $petShopValor['NomeAnimal'] . "</td> ";
                                        echo "<td>" . $petShopValor['NumIdadeAnimal'] . "</td> ";
                                        echo "<td>" . $petShopValor['Atendimento'] . "</td> ";
                                        echo "<td>" . $petShopValor['Pet'] . "</td> ";
                                        echo "<td>" . $petShopValor['SugestoesReclamacoes'] . "</td> ";
                                        //passando dados para outra página ? nessa estrutura chave/valor
                                        echo "<td><a href='41-JSON-Alterar.php?indice=$petShopKey'>Alterar</a></td> ";
                                        echo "<td><a href='42-JSON-Excluir.php?indice=$petShopKey'>Excluir</a>-</td> ";
                                        echo "</tr>";
                                    }
                                }


                                ?>
                            </table>

                        </fieldset>

                    </form>
                </div>
                <br>


            </div>
        </div>

        <!-- <div class="col-3 mb-2 bg-info font-weight">
                <p class="font-weight-bold">Aqui você e a família terão: </p>
                <p class="font-weight-normal"> A XXXX-Pet vem oferecendo os melhores serviços para seu pet, sempre buscando novidades em estética animal, acessórios. Um PetShop completo para estética, saúde e lazer do seu melhor amigo. Sabemos que cada vez mais, os animais de estimação assumem um papel primordial na composição familiar. E para cuidar com carinho deles, oferecemos uma ótima infraestrutura e equipamentos de última geração para a saúde e bem estar dos nossos pets.</p>
            </div> -->
    </div>
    </div>
</body>

</html>