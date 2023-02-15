<?php

    $nome = isset($_POST["nome-name"])? $_POST["nome-name"] : null;
    $email = isset($_POST["email-name"])? $_POST["email-name"]: null;
    $cpf = isset($_POST["cpf-name"])? $_POST["cpf-name"]: null;
    $telefone = isset($_POST["telefone-name"])? $_POST["telefone-name"]: null;

    if($nome != "" and $email!= ""){
        include "conexao.php";

        $inserir = "INSERT INTO cadastro_tabela(nome,email,cpf,telefone) VALUES('$nome','$email','$cpf','$telefone')";

        $resultado = mysqli_query ($conexao,$inserir);

        mysqli_close($conexao);

        echo "CADASTRO REALIZADO COM SUCESSO ";
        print_r ($_POST);   
    }

?>
<button><a href="index.php">Voltar</a></button>