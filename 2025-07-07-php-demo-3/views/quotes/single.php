<h1>是日金句</h1>

<p><?php echo $quote; ?></p>


<?php if (isset($_GET["id"])): ?>
    <?php include "views/quotes/_next_prev_nav.php"; ?>
<?php endif; ?>