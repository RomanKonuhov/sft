<?php foreach ($blocks as $block): ?>
    <?php include_partial($block->getTemplateName(), array('block' => $block)); ?>
    <div class="clear"></div>
<?php endforeach; ?>
