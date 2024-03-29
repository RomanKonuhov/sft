<?php

/**
 * Menu form base class.
 *
 * @method Menu getObject() Returns the current form's model object
 *
 * @package    sft.loc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMenuForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'parent_id' => new sfWidgetFormInputText(),
      'block_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Page'), 'add_empty' => false)),
      'alias'     => new sfWidgetFormInputText(),
      'type'      => new sfWidgetFormChoice(array('choices' => array('horizontal' => 'horizontal', 'vertical' => 'vertical'))),
      's_order'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'parent_id' => new sfValidatorInteger(),
      'block_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Page'))),
      'alias'     => new sfValidatorPass(array('required' => false)),
      'type'      => new sfValidatorChoice(array('choices' => array(0 => 'horizontal', 1 => 'vertical'), 'required' => false)),
      's_order'   => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('menu[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Menu';
  }

}
