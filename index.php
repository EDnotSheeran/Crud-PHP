<!-- EDSON RODRIGUES DOS SANTOS JUNIOR CG3001229 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="insert.php" method="post">
            <input id="text-field" name ="text-field" type="text" placeholder="Digite algo:">
            <button>ok</button>
        </form>
    </main>
    <aside>
        <?php include("select.php"); ?>
    </aside>
    <div id="mobile">
        <p>Este site nao suporta telas pequenas</p>
    </div>
    <script src="script.js"></script>
</body>
</html>