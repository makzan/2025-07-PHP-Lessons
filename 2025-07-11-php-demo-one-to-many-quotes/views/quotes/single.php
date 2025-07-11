<h1>是日金句</h1>

<blockquote>
    <?php echo $quote["content"]; ?>
    <cite>– <?php echo $quote["who"]; ?></cite>
</blockquote>


<?php if (isset($_GET["id"])): ?>
    <?php include "views/quotes/_next_prev_nav.php"; ?>
<?php endif; ?>