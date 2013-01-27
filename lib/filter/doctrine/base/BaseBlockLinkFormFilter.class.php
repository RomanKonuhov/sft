<?php

/**
 * BlockLink filter form base class.
 *
 * @package    sft.loc
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBlockLinkFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'block_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Block'), 'add_empty' => true)),
      'entity_id' => new sfWidgetFormFilterInput(),
      's_order'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'block_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Block'), 'column' => 'id')),
      'entity_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      's_order'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('block_link_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BlockLink';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'block_id'  => 'ForeignKey',
      'entity_id' => 'Number',
      's_order'   => 'Number',
    );
  }
}
