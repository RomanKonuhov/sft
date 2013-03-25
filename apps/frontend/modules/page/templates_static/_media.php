<?php foreach ($block->getContent() as $item): ?>
<div class="media-item">
    <div class="media-thumb"><img src="<?php echo $item->getFilepath(); ?>" width="100px" height="100px"></div>
    <div class="media-name"><?php echo $item->getFilename(); ?></div>
</div>
<?php endforeach; ?>
