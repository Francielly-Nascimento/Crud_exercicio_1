<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
           <th>NOME</th>
           <th>EMAIL</th>
           <th>CPF</th>
           <th>TELEFONE</th>
           <th>ATUALIZAR</th>
           <th>DELETAR</th>
        </thead>
        <tbody>

        </tbody>
        <?php
        include "conexao.php";

        $selecionar = "SELECT * FROM cadastro_tabela";
        $resultado = mysqli_query($conexao, $selecionar);

        while($dados = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
            ?>
            <tr>
                <td><?= $dados["nome"]?></td>
                <td><?= $dados ["email"]?></td>
                <td><?= $dados ["cpf"]?></td>
                <td><?= $dados ["telefone"]?></td>
                <td><a href="index.php?id=<?=$dados["id"]?>&action=update">atualizar</a></td>
                <td><a href="deletar.php?id=<?=$dados["id"]?>&action=delete">deletar</a></td>
            </tr>
            <?php
                }
                mysqli_close($conexao);

            ?>
    </table>
    
</body>
</html>