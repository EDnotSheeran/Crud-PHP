<?php 
    include("conexao.php");
    $query = "select * from tabela;";
    $busca = mysqli_query($conexao,$query);
    while($linha = mysqli_fetch_assoc($busca)){
        $text = $linha["coluna"];
        $id = $linha["id"];
        echo(
            "<div style='display:flex'>
                <form action='delete.php?delete=".$id."' method='get'>
                    <input style='display:none' type='text' name='delete' value='".$id."'>
                    <button><img src='delete.png' width='20px'></button>
                </form>
                <p id='".$text."'>".$text."</p>
                <button class='btneditar' onclick=\"editar('update-".$id."')\"><img class='editarPNG' src='edit.png' width='20px'></button>
            </div>
            <form id='update-".$id."' class='update hide' action='update.php?updateid=".$id."' method='get'>
                <input style='display:none' type='text' name='update' value='".$id."'>
                <input type='text' name='texto'>
                <button>ok</button>
            </form>"
            );}
?>