<h1>是日金句</h1>

<?php if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $quote = $quotes[$id];
} else {
    $randomIndex = array_rand($quotes);
    $quote = $quotes[$randomIndex];
}
?>

<p><?php echo $quote; ?></p>

<?php if (isset($_GET["id"])): ?>
    <?php $prevId = max(0, $id - 1); ?>
    <a href="?mode=single&id=<?php echo $prevId; ?>">上一個</a>

    <?php $nextId = min(count($quotes) - 1, $id + 1); ?>
    <a href="?mode=single&id=<?php echo $nextId; ?>">下一個</a>
<?php endif; ?>