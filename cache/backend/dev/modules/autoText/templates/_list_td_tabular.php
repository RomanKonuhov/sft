<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($text->getId(), 'text_edit', $text) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_block_id">
  <?php echo $text->getBlockId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_content">
  <?php echo $text->getContent() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($text->getCreatedAt()) ? format_date($text->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($text->getUpdatedAt()) ? format_date($text->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
