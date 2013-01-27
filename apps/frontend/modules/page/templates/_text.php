<?php use_helper('Escaping'); ?>
<div style="<?php echo $block->getCssAsString() ?>">
    <?php echo $block->getContent(ESC_RAW); ?>
</div>