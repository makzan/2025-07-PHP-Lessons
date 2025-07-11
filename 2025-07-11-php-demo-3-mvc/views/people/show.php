
<h1><?php echo $viewData["person"]["name"]; ?></h1>

<p><?php echo $viewData["person"]["description"]; ?></p>

<?php foreach ($viewData["quotes"] as $quote): ?>
    <p>
        <a href="?mod=quotes&action=show&id=<?php echo $quote["id"]; ?>">
            <?php echo $quote["content"]; ?>
            –
            <?php echo $viewData["person"]["name"]; ?>
        </a>
    </p>
<?php endforeach; ?>