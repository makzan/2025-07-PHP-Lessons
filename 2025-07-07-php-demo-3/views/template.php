<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>
</head>
<body>

    <nav>
        <a href="?mode=single">是日金句</a>
        <a href="?mode=list">金句列表</a>
    </nav>

    <?php include "views/quotes/$mode.php"; ?>

</body>
</html>
