<?php 
    include("conexao.php");
    $query = "select * from tabela;";
    $busca = mysqli_query($conexao,$query);
    while($linha = mysqli_fetch_assoc($busca)){
        $text = $linha["coluna"];
        $id = $linha["id"];
        echo(
            "<form action='delete.php?delete=".$id."' method='get'>
                <input style='display:none' type='text' name='delete' value='".$id."'>
                <button>x</button>
                <p id'".$text."'>".$text."</p>".
            "</form>"
            );}
?>