<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./public/resources/css/style.css" rel="stylesheet">
    <title><?= $title ?></title>
</head>
<body>
<header>
    <h1>Surnom des enseignants</h1>
    <nav>
        <h3>Zone pour le menu</h3>
        <a href="index.php">Accueil</a>
        <a href="index.php?controller=teacher&action=add">Ajouter un enseignant</a>
    </nav>
</header>
<div class="container">
    <?= $content ?>
</div>
<footer>
    <p>Copyright Alexis Rojas - 2022</p>
</footer>
</body>
</html>