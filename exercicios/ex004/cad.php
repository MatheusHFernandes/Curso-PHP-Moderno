<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Cadastro</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Usuário";
            $sobrenome = $_GET["sobrenome"] ?? "Anônimo";
            echo "É um prazer te conhecer,<strong> $nome $sobrenome</strong>! Esse é o meu site.";
        ?>
    </main>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</body>
</html>