<h1>金句列表</h1>

<?php $quotes = getAllQuotes(); ?>
<?php foreach ($quotes as $quote): ?>
    <p>
        <a href="?mode=single&id=<?php echo $quote["id"]; ?>">
            <?php echo $quote["content"]; ?>
        </a>
        –
        <a href="?mode=person&id=<?php echo personFromQuote($quote["id"])["id"]; ?>">
            <?php echo personNameFromQuote($quote["id"]); ?>
        </a>
    </p>
<?php endforeach; ?>