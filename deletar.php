<?php
    include "conexao.php";

    $deletar = "DELETE FROM cadastro_tabela WHERE id=" .$_GET["id"];

    $resultado = mysqli_query($conexao,$deletar);

    mysqli_close($conexao);

    echo "DELETAR";

?>
<button><a href="index.php">Voltar</a></button>