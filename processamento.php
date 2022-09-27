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
$indice = 0;
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
if(isset($_REQUEST["txtIndice"])){
    if(!empty($_REQUEST["txtIndice"])){
        $indice = $_REQUEST["txtIndice"];
    }
}

//----------------------------------------------
// PROCESSAR OS DADOS
//----------------------------------------------

if($operacao=="inserir"){
    if(empty($nomeCliente)){
        echo "<h2>Por favor informe o nome do cliente.</h2>";
        echo "<p><a href='principal.php'>Clique aqui para voltar. </a></p>";
        die();
    }
    if(empty($telefone)){
        echo "<h2>Por favor informe o telefone.</h2>";
        echo "<p><a href='principal.php'>Clique aqui para voltar. </a></p>";
        die();
    }
    if(empty($nomeAnimal)){
        echo "<h2>Por favor informe o nome do animal.</h2>";
        echo "<p><a href='principal.php'>Clique aqui para voltar. </a></p>";
        die();
    }
    if(empty($idadeAnimal)){
        echo "<h2>Por favor informe a idade do animal.</h2>";
        echo "<p><a href='principal.php'>Clique aqui para voltar. </a></p>";
        die();
    }
    if(empty($atendimento)){
        echo "<h2>Por favor selecione o atendimento.</h2>";
        echo "<p><a href='principal.php'>Clique aqui para voltar. </a></p>";
        die();
    }
    if(empty($pet)){
        echo "<h2>Por favor selecione o tipo de pet.</h2>";
        echo "<p><a href='principal.php'>Clique aqui para voltar. </a></p>";
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

    $petShop[] = ['NomeCliente' => $nomeCliente, 'Telefone' => $telefone, 'NomeAnimal' => $nomeAnimal, 'NumIdadeAnimal' => $idadeAnimal, 'Atendimento' => $atendimento, 'Pet' => $pet, 'SugestoesReclamacoes' => $sugestoesReclamacoes];

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
    
    if(empty($nomeCliente)){
        echo "<h2>Por favor informe o nome do cliente.</h2>";
        echo "<p><a href='principal.php'> Clique aqui para voltar. </a></p>";
        die();
    }
    if(empty($telefone)){
        echo "<h2>Por favor informe o telefone.</h2>";
        echo "<p><a href='principal.php'> Clique aqui para voltar. </a></p>";
        die();
    }
    if(empty($nomeAnimal)){
        echo "<h2>Por favor informe o nome do animal.</h2>";
        echo "<p><a href='principal.php'> Clique aqui para voltar. </a></p>";
        die();
    }
    if(empty($idadeAnimal)){
        echo "<h2>Por favor informe a idade do animal.</h2>";
        echo "<p><a href='principal.php'> Clique aqui para voltar. </a></p>";
        die();
    }
    if(empty($atendimento)){
        echo "<h2>Por favor selecione o atendimento.</h2>";
        echo "<p><a href='principal.php'> Clique aqui para voltar. </a></p>";
        die();
    }
    if(empty($pet)){
        echo "<h2>Por favor selecione o tipo de pet.</h2>";
        echo "<p><a href='principal.php'> Clique aqui para voltar. </a></p>";
        die();
    }

    if (file_exists($nomeArquivo)){
        //Recupera os dados
        $petShopJSON = file_get_contents($nomeArquivo);

        //Converter JSON em PHP
        $petShop = json_decode($petShopJSON, true);
    }

    //----------------------------------------------
    // Alterar
    //----------------------------------------------

    $petShop[$indice]['NomeCliente'] = $nomeCliente;
    $petShop[$indice]['Telefone'] = $telefone;
    $petShop[$indice]['NomeAnimal'] = $nomeAnimal;
    $petShop[$indice]['NumIdadeAnimal'] = $idadeAnimal;
    $petShop[$indice]['Atendimento'] = $atendimento;
    $petShop[$indice]['Pet'] = $pet;
    $petShop[$indice]['SugestoesReclamacoes'] = $sugestoesReclamacoes;
   
    //Converter PHP para Json
    $petShopJSON = json_encode($petShop);

    //SALVAR
    file_put_contents($nomeArquivo, $petShopJSON);

    echo "<h3> Dados alterados com sucesso! </h3>";

    //quando chegar nessa instrução ele vai ser direcionado para a página que eu informar
    header("Location: principal.php");
    die();
}

elseif ($operacao=="Excluir"){
    if (file_exists($nomeArquivo)){
        //Recupera os dados
        $petShopJSON = file_get_contents($nomeArquivo);

        //Converter JSON em PHP
        $petShop = json_decode($petShopJSON, true);

    }

    //----------------------------------------------
    // Excluir
    //----------------------------------------------

    unset($petShop[$indice]);
    //comando que exclui do vetor
    // if($petShop[$indice]==0){
    //     array_pop($petShop);
    // } else {
    //     unset($petShop[$indice]);
    // }
     

    //Converter PHP para Json
    $petShopJSON = json_encode($petShop);

    //SALVAR
    file_put_contents($nomeArquivo, $petShopJSON);

    echo "<h3> Dados excluídos com sucesso! </h3>";

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
    echo "<p> <a href= 'principal.php'> Clique aqui para voltar. </a> </p>";
    die();
}

?>