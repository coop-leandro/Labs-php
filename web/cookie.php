<?php 
    setcookie("nome", "Leandro", time() + 3600);

    if(isset($_COOKIE['nome'])){
        $nome = $_COOKIE['nome'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($nome != ""): ?>
        <h1>nome : <?= $nome ?></h1>
    <?php endif ?>
</body>
</html>