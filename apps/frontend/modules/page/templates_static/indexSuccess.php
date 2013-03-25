<h1>Pages List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Header</th>
      <th>Meta keywords</th>
      <th>Meta description</th>
      <th>Meta indexing</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pages as $page): ?>
    <tr>
      <td><a href="<?php echo url_for('page/show?id='.$page->getId()) ?>"><?php echo $page->getId() ?></a></td>
      <td><?php echo $page->getHeader() ?></td>
      <td><?php echo $page->getMetaKeywords() ?></td>
      <td><?php echo $page->getMetaDescription() ?></td>
      <td><?php echo $page->getMetaIndexing() ?></td>
      <td><?php echo $page->getCreatedAt() ?></td>
      <td><?php echo $page->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('page/new') ?>">New</a>
