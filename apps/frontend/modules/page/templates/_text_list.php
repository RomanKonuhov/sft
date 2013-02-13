<?php use_helper('Escaping'); ?>
<?php if ($id = $sf_request->getParameter('id')): ?>
    <?php $item = $block->getContent($id); ?>
    <div class="list-item">
        <h3><?php echo link_to($item->getHeader(), 'block_view', $item) ?></h3>
        <div class="list-thumb"><img src="<?php echo $item->getThumb(); ?>" width="120px" height="80px"></div>
        <div class="list-description"><?php echo $item->getContent(); ?></div>
        <div class="list-author"><?php echo $item->getAuthor(); ?></div>
        <div class="list-date"><?php echo $item->getDateTimeObject('created_at')->format('d/m/Y'); ?></div>
    </div>
<?php else : ?>
    <?php foreach ($block->getContent() as $item): ?>
    <div class="list-item">
        <h3><?php echo link_to($item->getHeader(), 'block_view', $item) ?></h3>
        <div class="list-thumb"><img src="<?php echo $item->getThumb(); ?>" width="120px" height="80px"></div>
        <div class="list-description"><?php echo $item->getDescription(); ?></div>
        <div class="list-author"><?php echo $item->getAuthor(); ?></div>
        <div class="list-date"><?php echo $item->getDateTimeObject('created_at')->format('d/m/Y'); ?></div>
    </div>
    <?php endforeach; ?>
<?php endif; ?>
