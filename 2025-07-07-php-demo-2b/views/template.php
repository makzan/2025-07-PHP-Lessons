<?php $title = ucfirst($page); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/website.css">
    <title><?php echo $title; ?> | PHP Demo 2b</title>
</head>
<body>
    <header>
        <h1>PHP Demo 2b</h1>
    </header>
    <?php include "views/includes/nav.php"; ?>
    <main>
        <?php include "views/pages/" . $page . ".php" ; ?>
    </main>

    <?php include "views/includes/footer.php"; ?>
</body>
</html>
