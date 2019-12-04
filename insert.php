<?php
    include('conexao.php');
    $texto = mysqli_real_escape_string($conexao,$_POST['text-field']);
    $query = "insert into tabela(coluna)values('{$texto}');";
    mysqli_query($conexao,$query);
    header('Location: index.php');
    exit();
?>