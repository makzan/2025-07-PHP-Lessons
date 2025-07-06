<h1>金句列表</h1>

<?php foreach ($quotes as $id => $quote): ?>
    <p>
        <a href="?mode=single&id=<?php echo $id; ?>">
            <?php echo $quote; ?>
        </a>
    </p>
<?php endforeach; ?>