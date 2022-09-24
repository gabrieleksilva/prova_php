<?php
//----------------------------------------------
// RECUPERA OS DADOS
//----------------------------------------------
$operacao = "";
$nomeCliente = "";
$telefone = "";
$nomeAnimal = "";
$idadeAnimal = 0;
$atendimento = "";
$pet = "";
$sugestoesReclamacoes = "";

$nomeArquivo = "C:\xTemp\PetShop.json";

if(isset($_REQUEST["btnOperacao"])){
    if(!empty($_REQUEST["btnOperacao"])){
        $operacao = $_REQUEST["btnOperacao"];
    }
}

if(isset($_REQUEST["txtNomeCliente"])){
    if(!empty($_REQUEST["txtNomeCliente"])){
        $nomeCliente = $_REQUEST["txtNomeCliente"];
    }
}

if(isset($_REQUEST["txtTelefone"])){
    if(!empty($_REQUEST["txtTelefone"])){
        $telefone = $_REQUEST["txtTelefone"];
    }
}

if(isset($_REQUEST["txtNomeAnimal"])){
    if(!empty($_REQUEST["txtNomeAnimal"])){
        $nomeAnimal = $_REQUEST["txtNomeAnimal"];
    }
}

if(isset($_REQUEST["numIdadeAnimal"])){
    if(!empty($_REQUEST["numIdadeAnimal"])){
        $idadeAnimal = $_REQUEST["numIdadeAnimal"];
    }
}

if(isset($_REQUEST["selectAtendimento"])){
    if(!empty($_REQUEST["selectAtendimento"])){
        $atendimento = $_REQUEST["selectAtendimento"];
    }
}

if(isset($_REQUEST["rdoPet"])){
    if(!empty($_REQUEST["rdoPet"])){
        $pet = $_REQUEST["rdoPet"];
    }
}
if(isset($_REQUEST["txtAreaSugestoesReclamacoes"])){
    if(!empty($_REQUEST["txtAreaSugestoesReclamacoes"])){
        $sugestoesReclamacoes = $_REQUEST["txtAreaSugestoesReclamacoes"];
    }
}

echo "Operacao: $operacao <br>";
echo "Nome cliente: $nomeCliente <br>";
echo "Telefone: $telefone <br>";
echo "nomeAnimal: $nomeAnimal <br>";
echo "idadeAnimal: $idadeAnimal <br>";
echo "atendimento: $atendimento <br>";
echo "pet: $pet <br>";
echo "Sugestoes ou reclamacoes: $sugestoesReclamacoes <br>";


//----------------------------------------------
// PROCESSAR OS DADOS
//----------------------------------------------



if($operacao=="Submit"){

    $operacao = "";
    $nomeCliente = "";
    $telefone = "";
    $nomeAnimal = "";
    $idadeAnimal = 0;
    $atendimento = "";
    $pet = "";
    $sugestoesReclamacoes = "";
    
   
    if(empty($nomeCliente)){
        echo "<h2>Por favor informe o nome do cliente.</h2>";
        echo "<p> <a href= 'principal.php'> Clique aqui para voltar. </a>";
        die();
    }
    if(empty($telefone)){
        echo "<h2>Por favor informe o telefone.</h2>";
        echo "<p> <a href= 'principal.php'> Clique aqui para voltar. </a>";
        die();
    }
    if(empty($nomeAnimal)){
        echo "<h2>Por favor informe o nome do animal.</h2>";
        echo "<p> <a href= 'principal.php'> Clique aqui para voltar. </a>";
        die();
    }
    if(empty($idadeAnimal)){
        echo "<h2>Por favor informe a idade do animal.</h2>";
        echo "<p> <a href= 'principal.php'> Clique aqui para voltar. </a>";
        die();
    }
    if(empty($atendimento)){
        echo "<h2>Por favor selecione o atendimento.</h2>";
        echo "<p> <a href= 'principal.php'> Clique aqui para voltar. </a>";
        die();
    }
    if(empty($atendimento)){
        echo "<h2>Por favor selecione o atendimento.</h2>";
        echo "<p> <a href= 'principal.php'> Clique aqui para voltar. </a>";
        die();
    }
    if(empty($pet)){
        echo "<h2>Por favor selecione o tipo de pet.</h2>";
        echo "<p> <a href= 'principal.php'> Clique aqui para voltar. </a>";
        die();
    }

    if (file_exists($nomeArquivo)){
        //Recupera os dados
        $petShopJSON = file_get_contents($nomeArquivo);

        //Converter JSON em PHP
        $petShop = json_decode($petShopJSON, true);

    }

    //----------------------------------------------
    // Adicionar
    //----------------------------------------------

    $petShop[] = ['txtNomeCliente' => $nomeCliente, 'txtTelefone' => $telefone, 'txtNomeAnimal' => $nomeAnimal, 'numIdadeAnimal' => $idadeAnimal, 'selectAtendimento' => $atendimento, 'rdoPet' => $pet, 'txtAreaSugestoesReclamacoes' => $sugestoesReclamacoes];

    //Converter PHP para Json
    $petShopJSON = json_encode($petShop);

    //SALVAR
    file_put_contents($nomeArquivo, $petShopJSON);

    echo "<h3> Dados salvos com sucesso! </h3>";

    //quando chegar nessa instrução ele vai ser direcionado para a página que eu informar
    header("Location: principal.php");
    die();
    
}
elseif ($operacao=="Alterar"){
    
    if(empty($codDisciplina)){
        echo "<h2>Por favor informe o código da disciplina.</h2>";
        echo "<p> <a href= '39-JSON-Enviar.php'> Clique aqui para voltar. </a>";
        die();
    }
    if(empty($disciplina)){
        echo "<h2>Por favor informe o nome da disciplina.</h2>";
        echo "<p> <a href= '39-JSON-Enviar.php'> Clique aqui para voltar. </a>";
        die();
    }

    if (file_exists($nomeArquivo)){
        //Recupera os dados
        $disciplinaJSON = file_get_contents($nomeArquivo);

        //Converter JSON em PHP
        $disciplinas = json_decode($disciplinaJSON, true);

    }

    //----------------------------------------------
    // Alterar
    //----------------------------------------------

    $disciplinas[$indice]['CodDisciplina'] = $codDisciplina;
    $disciplinas[$indice]['Disciplina'] = $disciplina;

    //print_r($disciplinas);
    //die();


    //Converter PHP para Json
    $disciplinaJSON = json_encode($disciplinas);

    //SALVAR
    file_put_contents($nomeArquivo, $disciplinaJSON);

    echo "<h3> Dados salvos com sucesso! </h3>";

    //quando chegar nessa instrução ele vai ser direcionado para a página que eu informar
    header("Location: 39-JSON-Enviar.php");
    die();
}

elseif ($operacao=="Excluir"){
    if (file_exists($nomeArquivo)){
        //Recupera os dados
        $disciplinaJSON = file_get_contents($nomeArquivo);

        //Converter JSON em PHP
        $disciplinas = json_decode($disciplinaJSON, true);

    }

    //----------------------------------------------
    // Excluir
    //----------------------------------------------

    //comando que exclui do vetor
    unset($disciplinas[$indice]);
     

    //Converter PHP para Json
    $disciplinaJSON = json_encode($disciplinas);

    //SALVAR
    file_put_contents($nomeArquivo, $disciplinaJSON);

    echo "<h3> Dados excluído com sucesso! </h3>";

    //quando chegar nessa instrução ele vai ser direcionado para a página que eu informar
    header("Location: principal.php");
    die();
}

elseif ($operacao=="Cancelar"){
    //quando chegar nessa instrução ele vai ser direcionado para a página que eu informar
    header("Location: principal.php");
    die();
}
else {
    echo "<h2>Operação não cadastrada</h2>";
    echo "<p> <a href= 'principal.php'> Clique aqui para voltar. </a>";
    die();
}

?>