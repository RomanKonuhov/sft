<?php

/**
 * Settings form base class.
 *
 * @method Settings getObject() Returns the current form's model object
 *
 * @package    sft.loc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSettingsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'header'   => new sfWidgetFormInputText(),
      'var'      => new sfWidgetFormInputText(),
      'value'    => new sfWidgetFormInputText(),
      'checkbox' => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'header'   => new sfValidatorPass(array('required' => false)),
      'var'      => new sfValidatorPass(),
      'value'    => new sfValidatorPass(),
      'checkbox' => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('settings[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Settings';
  }

}
