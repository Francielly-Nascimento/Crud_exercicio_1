<?php
    include "conexao.php";

    $executar = 'UPDATE cadastro_tabela SET nome="'.$_POST["nome-name"].'",
    email="'.$_POST["email-name"].'",cpf="'.$_POST["cpf-name"].'",telefone="'.$_POST["telefone-name"].'" WHERE id='.$_POST["id"];

    $resultado = mysqli_query($conexao,$executar);

    mysqli_close($conexao);

    echo "ATUALIZADO";
?>

<button><a href="index.php">Voltar</a></button>