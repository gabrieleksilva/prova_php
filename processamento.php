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

function Requests($ValueDoCampo){
    if(isset($_REQUEST[$ValueDoCampo])){
        if(!empty($_REQUEST[$ValueDoCampo])){
            $varDoCampo = $_REQUEST[$ValueDoCampo];
            return $varDoCampo;
        }
    }
    
}
// verifica o botao
$operacao = Requests("btnOperacao");
// verifica o txtNomeCliente
$nomeCliente = Requests("txtNomeCliente");
// verifica o txtTelefone
$telefone = Requests("txtTelefone");
// verifica o txtNomeAnimal
$nomeAnimal = Requests("txtNomeAnimal");
// verifica o numIdadeAnimal
$idadeAnimal = Requests("numIdadeAnimal");
// verifica o numIdadeAnimal
$atendimento = Requests("selectAtendimento");
// verifica o rdoPet
$pet = Requests("rdoPet");
// verifica o txtAreaSugestoesReclamacoes
$sugestoesReclamacoes = Requests("txtAreaSugestoesReclamacoes");
// verifica o txtIndice
$indice = Requests("txtIndice");

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