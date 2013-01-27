<?php use_helper('I18N', 'Date') ?>
<?php include_partial('text/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Text', array(), 'messages') ?></h1>

  <?php include_partial('text/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('text/form_header', array('text' => $text, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('text/form', array('text' => $text, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('text/form_footer', array('text' => $text, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
