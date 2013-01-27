<?php

/**
 * Capcha filter form base class.
 *
 * @package    sft.loc
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCapchaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'picture' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'value'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'picture' => new sfValidatorPass(array('required' => false)),
      'value'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('capcha_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Capcha';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'picture' => 'Text',
      'value'   => 'Text',
    );
  }
}
