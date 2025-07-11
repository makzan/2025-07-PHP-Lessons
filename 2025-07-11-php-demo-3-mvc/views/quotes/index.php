<h1>金句列表</h1>

<?php foreach ($viewData["quotes"] as $quote): ?>
    <p>
        <a href="?mod=quotes&action=show&id=<?php echo $quote["id"]; ?>">
            <?php echo $quote["content"]; ?>
        </a>
        –
        <a href="?mod=people&action=show&id=<?php echo $quote["person"]["id"] ?>">
            <?php echo $quote["person"]["name"] ?>
        </a>
    </p>
<?php endforeach; ?>