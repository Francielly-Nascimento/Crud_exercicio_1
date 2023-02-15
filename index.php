<!DOCTYPE html>
<?php

    $nome = isset($_POST["nome-name"])? $_POST["nome-name"] : null;
    $email = isset($_POST["email-name"])? $_POST["email-name"]: null;
    $cpf = isset($_POST["cpf-name"])? $_POST["cpf-name"]: null;
    $telefone = isset($_POST["telefone-name"])? $_POST["telefone-name"]: null;
    $id = isset($_GET["id"]) ? $_GET["id"] : null;

    $action = "inserir_dados.php";

    if(isset($_GET["action"]) and $_GET["action"]=="update"){
        include "atualizar.php";
        $action = "exec_atualizar.php";
    }

    print_r ($_POST);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Cadastro</legend>
        <form action="<?= $action ?>" method="post">

            <label for="id-nome">
                Nome:
                <input type="text" name="nome-name" id="id-nome" placeholder="Digite seu nome aqui.." value="<?= $nome?>">
            </label>
            <br><br>

            <label for="id-email">
                Email:
                <input type="email" name="email-name" id="id-email" placeholder="Digite seu email.." value=" <?= $email?>">
            </label>
            <br><br>
            
            <label for="id-cpf">
                Cpf:
                <input type="text" name="cpf-name" id="id-cpf" placeholder="xxx xxx xxx xx" value="<?=$cpf?>">
            </label>
            <br><br>

            <label for="id-telefone">
                Telefone:
                <input type="text" name="telefone-name" id="id-telefone" placeholder="Digite seu telefone.." value="<?=$telefone?>">
            </label>
            <br><br>
            

            <button type="submit">Enviar</button>
            <button><a href="index.php">Limpar</a></button>
            <?php
            if($id != ""){?>
                <input type="hidden" name="id" value="<?= $id ?>" >
            <?php } ?>
            

        </form>
    </fieldset>
    <div>
        <?php
        include "tabela_ler.php";
        ?>
    </div>
    
</body>
</html>