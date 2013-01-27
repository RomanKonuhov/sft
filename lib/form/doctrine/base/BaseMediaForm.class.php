<?php

/**
 * Media form base class.
 *
 * @method Media getObject() Returns the current form's model object
 *
 * @package    sft.loc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMediaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'block_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Block'), 'add_empty' => false)),
      'filename'   => new sfWidgetFormInputText(),
      'filepath'   => new sfWidgetFormInputText(),
      'mimetype'   => new sfWidgetFormInputText(),
      'filesize'   => new sfWidgetFormInputText(),
      'metadata'   => new sfWidgetFormTextarea(),
      'dtype'      => new sfWidgetFormInputText(),
      'date'       => new sfWidgetFormDateTime(),
      'visible'    => new sfWidgetFormInputCheckbox(),
      's_order'    => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'block_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Block'))),
      'filename'   => new sfValidatorPass(),
      'filepath'   => new sfValidatorPass(),
      'mimetype'   => new sfValidatorPass(array('required' => false)),
      'filesize'   => new sfValidatorInteger(array('required' => false)),
      'metadata'   => new sfValidatorString(array('required' => false)),
      'dtype'      => new sfValidatorInteger(array('required' => false)),
      'date'       => new sfValidatorDateTime(array('required' => false)),
      'visible'    => new sfValidatorBoolean(array('required' => false)),
      's_order'    => new sfValidatorInteger(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('media[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Media';
  }

}
