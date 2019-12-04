<?php
include('conexao.php');
    $id = mysqli_real_escape_string($conexao,$_GET['update']);
    $texto = mysqli_real_escape_string($conexao,$_GET['texto']);
    if($texto != "" && $texto !=null){
        $query = "update tabela SET coluna = '{$texto}' where id = '{$id}';";
        mysqli_query($conexao,$query);
    }
    header('Location: index.php');
    exit();    
?>