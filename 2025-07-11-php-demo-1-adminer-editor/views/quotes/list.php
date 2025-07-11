<h1>金句列表</h1>

<?php $quotes = getAllQuotes(); ?>
<?php foreach ($quotes as $quote): ?>
    <p>
        <a href="?mode=single&id=<?php echo $quote["id"]; ?>">
            <?php echo $quote["content"]; ?>
            –
            <?php echo $quote["who"]; ?>
        </a>
    </p>
<?php endforeach; ?>