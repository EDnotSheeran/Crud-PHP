<?php
include('conexao.php');
    $texto = mysqli_real_escape_string($conexao,$_GET['delete']);
    if($texto != "" && $texto !=null){
        $query = "delete from tabela where id = '{$texto}';";
        mysqli_query($conexao,$query);
    }
    header('Location: index.php');
    exit();    
?>