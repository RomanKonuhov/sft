<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($block->getId(), 'block_edit', $block) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_parent_id">
  <?php echo $block->getParentId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_page_id">
  <?php echo $block->getPageId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_block_link_id">
  <?php echo $block->getBlockLinkId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_header">
  <?php echo $block->getHeader() ?>
</td>
<td class="sf_admin_enum sf_admin_list_td_type">
  <?php echo $block->getType() ?>
</td>
<td class="sf_admin_enum sf_admin_list_td_sort">
  <?php echo $block->getSort() ?>
</td>
<td class="sf_admin_enum sf_admin_list_td_sort_type">
  <?php echo $block->getSortType() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_visible">
  <?php echo get_partial('block/list_field_boolean', array('value' => $block->getVisible())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_css">
  <?php echo $block->getCss() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_by_default">
  <?php echo get_partial('block/list_field_boolean', array('value' => $block->getByDefault())) ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_azlist_show">
  <?php echo get_partial('block/list_field_boolean', array('value' => $block->getAzlistShow())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_item_per_page">
  <?php echo $block->getItemPerPage() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_s_order">
  <?php echo $block->getSOrder() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($block->getCreatedAt()) ? format_date($block->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($block->getUpdatedAt()) ? format_date($block->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
