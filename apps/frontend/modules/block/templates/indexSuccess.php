<h1>Blocks List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Parent</th>
      <th>Page</th>
      <th>Block link</th>
      <th>Header</th>
      <th>Type</th>
      <th>Sort</th>
      <th>Sort type</th>
      <th>Visible</th>
      <th>Css</th>
      <th>By default</th>
      <th>Azlist show</th>
      <th>Item per page</th>
      <th>S order</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($blocks as $block): ?>
    <tr>
      <td><a href="<?php echo url_for('block/edit?id='.$block->getId()) ?>"><?php echo $block->getId() ?></a></td>
      <td><?php echo $block->getParentId() ?></td>
      <td><?php echo $block->getPageId() ?></td>
      <td><?php echo $block->getBlockLinkId() ?></td>
      <td><?php echo $block->getHeader() ?></td>
      <td><?php echo $block->getType() ?></td>
      <td><?php echo $block->getSort() ?></td>
      <td><?php echo $block->getSortType() ?></td>
      <td><?php echo $block->getVisible() ?></td>
      <td><?php echo $block->getCss() ?></td>
      <td><?php echo $block->getByDefault() ?></td>
      <td><?php echo $block->getAzlistShow() ?></td>
      <td><?php echo $block->getItemPerPage() ?></td>
      <td><?php echo $block->getSOrder() ?></td>
      <td><?php echo $block->getCreatedAt() ?></td>
      <td><?php echo $block->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('block/new') ?>">New</a>
