<?php use_helper('Escaping'); ?>
<div style="<?php echo $block->getCssAsString() ?>">
    <?php foreach ($block->getContent() as $item): ?>
    <div class="list-item">
        <div class="list-thumb"><img src="<?php echo $item->getThumb(); ?>" width="120px" height="80px"></div>
        <div class="list-description"><?php echo $item->getDescription(); ?></div>
        <div class="list-author"><?php echo $item->getAuthor(); ?></div>
        <div class="list-date"><?php echo $item->getDateTimeObject('created_at')->format('d/m/Y'); ?></div>
    </div>
    <hr />
    <?php endforeach; ?>
</div>
