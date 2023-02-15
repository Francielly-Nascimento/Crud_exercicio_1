<?php
    include "conexao.php";

    $id = $_GET["id"];

    $action = "exec_atualizar.php";

    $selecionar = "SELECT * FROM cadastro_tabela WHERE id= ".$_GET["id"];

    $resultado = mysqli_query($conexao,$selecionar);

    $linha = mysqli_fetch_row($resultado);

    mysqli_close($conexao);

    $nome = $linha[1];
    $email =$linha[2];
    $cpf = $linha[3];
    $telefone =$linha[4];


    print_r($linha);
?>