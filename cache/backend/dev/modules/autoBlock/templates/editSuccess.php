<?php use_helper('I18N', 'Date') ?>
<?php include_partial('block/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Block', array(), 'messages') ?></h1>

  <?php include_partial('block/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('block/form_header', array('block' => $block, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('block/form', array('block' => $block, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('block/form_footer', array('block' => $block, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
