<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $atual = date("Y");
        $nasc = $_REQUEST['nasc'] ?? '2000';
        $ano = $_REQUEST['ano'] ?? $atual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?= $atual ?>" value="<?= $nasc ?>">
            <label for="ano">Quer saber sua idade em que ano?</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?= $ano ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    <main>
    <section>

        <?php 
        $idade = $ano - $nasc;
        ?>

        <h2>Resultado</h2>
        <p>Quem nasceu em <?= $nasc ?> vai fazer <strong> <?= $idade ?> anos </strong> em <?= $ano ?>.</p>
        
        
        
    </section>
</body>
</html>