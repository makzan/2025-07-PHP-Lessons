

<h1><?php echo $person["name"]; ?></h1>

<p><?php echo $person["description"]; ?></p>

<?php foreach ($quotes as $quote): ?>
    <p>
        <a href="?mode=single&id=<?php echo $quote["id"]; ?>">
            <?php echo $quote["content"]; ?>
            –
            <?php echo personNameFromQuote($quote["id"]); ?>
        </a>
    </p>
<?php endforeach; ?>