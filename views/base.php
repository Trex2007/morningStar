<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/images/H_Logo.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/flex.css" />
    <title><?= $title ?></title>
</head>
<body>

    <header class="flex justbet">
        <?php require_once("views/components/navBar.php"); ?>
    </header>
    <main>
        <?php require_once($template); ?>
    </main>
</body>
<script src="../assets/js/app.js"></script>
</html>