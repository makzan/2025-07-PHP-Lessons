<h1>People</h1>

<?php foreach ($viewData['people'] as $person): ?>
    <p>
        <a href="?mod=people&action=show&id=<?php echo $person["id"] ?>">
            <?php echo $person["name"] ?>
        </a>
    </p>
<?php endforeach;