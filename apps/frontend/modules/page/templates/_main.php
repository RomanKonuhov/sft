<?php foreach ($blocks as $block): ?>
<div style="<?php echo $block->getCssAsString() ?>">
    <?php include_partial($block->getTemplateName(), array('block' => $block)); ?>

    <?php if ($block->hasChilds()): ?>
        <?php include_partial('main', array('blocks' => $block->getChilds())); ?>
    <?php endif; ?>
    <div style="position:absolute;left:10px;top:10px;background: #fff;color:#333;padding:3px;">
        <?php echo link_to('edit', 'block_edit', $block); ?>
    </div>
</div>
<?php endforeach; ?>
