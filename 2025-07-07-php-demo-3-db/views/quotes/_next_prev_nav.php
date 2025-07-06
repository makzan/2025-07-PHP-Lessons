<div class="next-prev-nav">
    <?php $id = $_GET["id"]; ?>
    <?php $previousQuote = getPreviousQuote($id); ?>
    <?php $nextQuote = getNextQuote($id); ?>

    <?php if ($previousQuote): ?>
        <a href="?mode=single&id=<?php echo $previousQuote["id"]; ?>">上一個</a>
    <?php endif; ?>

    <?php if ($nextQuote): ?>
        <a href="?mode=single&id=<?php echo $nextQuote["id"]; ?>">下一個</a>
    <?php endif; ?>
</div>