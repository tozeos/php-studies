<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/styles/exercicio.css">
    <title>Exercício</title>
</head>

<body class="exercicio">
    <header class="header">
        <h1>Exercício</h1>
        <h2>Visualização do exercício</h2>
    </header>
    <nav class="navigation">
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="main">
        <div class="content">
            <?php 
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php")
            ?>
        </div>
    </main>
    <footer class="footer">
        Caike Laurentino - <?= date('Y'); ?>
    </footer>
</body>

</html>