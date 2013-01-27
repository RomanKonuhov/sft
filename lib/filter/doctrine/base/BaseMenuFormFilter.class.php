<?php

/**
 * Menu filter form base class.
 *
 * @package    sft.loc
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMenuFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'parent_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'block_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Page'), 'add_empty' => true)),
      'alias'     => new sfWidgetFormFilterInput(),
      'type'      => new sfWidgetFormChoice(array('choices' => array('' => '', 'horizontal' => 'horizontal', 'vertical' => 'vertical'))),
      's_order'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'parent_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'block_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Page'), 'column' => 'id')),
      'alias'     => new sfValidatorPass(array('required' => false)),
      'type'      => new sfValidatorChoice(array('required' => false, 'choices' => array('horizontal' => 'horizontal', 'vertical' => 'vertical'))),
      's_order'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('menu_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Menu';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'parent_id' => 'Number',
      'block_id'  => 'ForeignKey',
      'alias'     => 'Text',
      'type'      => 'Enum',
      's_order'   => 'Number',
    );
  }
}
