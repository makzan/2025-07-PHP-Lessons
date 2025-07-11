<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Quotes</title>
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="?mod=quotes&action=random">隨機金句</a>
        </nav>
    </header>

    <main>
        <?php include("controllers/$mod/$action.php"); ?>
    </main>

    <footer>
        Demo purpose, free to use. 2025-07-11, Makzan.
    </footer>

</body>
</html>