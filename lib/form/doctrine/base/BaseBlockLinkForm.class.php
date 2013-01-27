<?php

/**
 * BlockLink form base class.
 *
 * @method BlockLink getObject() Returns the current form's model object
 *
 * @package    sft.loc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBlockLinkForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'block_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Block'), 'add_empty' => true)),
      'entity_id' => new sfWidgetFormInputText(),
      's_order'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'block_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Block'), 'required' => false)),
      'entity_id' => new sfValidatorInteger(array('required' => false)),
      's_order'   => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('block_link[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BlockLink';
  }

}
