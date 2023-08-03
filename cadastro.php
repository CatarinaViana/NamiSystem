<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family= Playfair +Display & display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\estilo.css">
    <link rel="stylesheet" href="assets\cadastro.css">
</head>
<body class="cadastro">
    <header class="cabecalho">
        <h1>Nami System</h1>
        <h2>Banco de Vagas</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verdinho">Sem formatação</a>
        <a href="index.php" class="verde">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                include (__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); 
            ?>
        </div>
    </main>
    <footer class="rodape">
        BO$$|EDY ™ <?= date('M Y') ?>
    </footer>
</body>
</html>