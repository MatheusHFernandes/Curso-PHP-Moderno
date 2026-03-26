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
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"] ?? 0;
                $a = $n - 1;
                $s = $n + 1;
                echo "O número informado foi: $n<br>";
                echo "Seu antecessor é: $a<br>";
                echo "Seu sucessor é: $s<br>";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>