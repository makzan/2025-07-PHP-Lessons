<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/website.css">
    <title>PHP Demo 2</title>
</head>
<body>
    <header>
        <h1>PHP Demo 2</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=about">About</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
    </nav>
    <main>
        <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                include $page . ".php";
            } else {
                include "home.php";
            }
        ?>
    </main>
    <footer>
        <p>&copy; 2026. Demo only</p>
    </footer>

</body>
</html>
