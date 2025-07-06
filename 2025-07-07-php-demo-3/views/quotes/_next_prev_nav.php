<?php $id = $_GET["id"]; ?>
<?php $prevId = max(0, $id - 1); ?>
<a href="?mode=single&id=<?php echo $prevId; ?>">上一個</a>

<?php $nextId = min(count($quotes) - 1, $id + 1); ?>
<a href="?mode=single&id=<?php echo $nextId; ?>">下一個</a>