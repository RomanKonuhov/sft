<td class="sf_admin_text sf_admin_list_td_header">
  <?php echo link_to($block->getHeader(), 'block_edit', $block) ?>
</td>
<td class="sf_admin_enum sf_admin_list_td_type">
  <?php echo $block->getType() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_css">
  <?php echo $block->getCss() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_visible">
  <?php echo get_partial('block/list_field_boolean', array('value' => $block->getVisible())) ?>
</td>
