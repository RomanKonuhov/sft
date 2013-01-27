<?php

/**
 * Settings filter form base class.
 *
 * @package    sft.loc
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSettingsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'header'   => new sfWidgetFormFilterInput(),
      'var'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'value'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'checkbox' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'header'   => new sfValidatorPass(array('required' => false)),
      'var'      => new sfValidatorPass(array('required' => false)),
      'value'    => new sfValidatorPass(array('required' => false)),
      'checkbox' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('settings_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Settings';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'header'   => 'Text',
      'var'      => 'Text',
      'value'    => 'Text',
      'checkbox' => 'Boolean',
    );
  }
}
