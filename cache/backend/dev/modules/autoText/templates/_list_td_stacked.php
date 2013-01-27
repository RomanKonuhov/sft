<td colspan="5">
  <?php echo __('%%id%% - %%block_id%% - %%content%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($text->getId(), 'text_edit', $text), '%%block_id%%' => $text->getBlockId(), '%%content%%' => $text->getContent(), '%%created_at%%' => false !== strtotime($text->getCreatedAt()) ? format_date($text->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($text->getUpdatedAt()) ? format_date($text->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
