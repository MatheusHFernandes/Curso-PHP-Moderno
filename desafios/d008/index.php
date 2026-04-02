<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <?php 

        $numero = (float) ($_REQUEST['num'] ?? 1);
        
        ?>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?= $numero ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 

        // Calculos
        $rq = $numero ** (1/2);
        $rc = $numero ** (1/3);

        echo "<ul><li>A raiz quadrada de $numero é " . number_format($rq, 2, ",", ".") . "</li>";
        echo "<li>A raiz cubica de $numero é " . number_format($rc, 2, ",", ".") . "</li></ul>";
        
        ?>
    </section>
</body>
</html>