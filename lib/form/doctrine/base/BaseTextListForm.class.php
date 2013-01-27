<?php

/**
 * TextList form base class.
 *
 * @method TextList getObject() Returns the current form's model object
 *
 * @package    sft.loc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTextListForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'block_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Block'), 'add_empty' => false)),
      'header'           => new sfWidgetFormInputText(),
      'description'      => new sfWidgetFormTextarea(),
      'content'          => new sfWidgetFormTextarea(),
      'author'           => new sfWidgetFormInputText(),
      'date'             => new sfWidgetFormDateTime(),
      'thumb'            => new sfWidgetFormInputText(),
      'visible'          => new sfWidgetFormInputCheckbox(),
      's_order'          => new sfWidgetFormInputText(),
      'meta_keywords'    => new sfWidgetFormTextarea(),
      'meta_description' => new sfWidgetFormTextarea(),
      'meta_indexing'    => new sfWidgetFormInputCheckbox(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'block_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Block'))),
      'header'           => new sfValidatorPass(array('required' => false)),
      'description'      => new sfValidatorString(array('required' => false)),
      'content'          => new sfValidatorString(array('required' => false)),
      'author'           => new sfValidatorPass(array('required' => false)),
      'date'             => new sfValidatorDateTime(array('required' => false)),
      'thumb'            => new sfValidatorPass(array('required' => false)),
      'visible'          => new sfValidatorBoolean(array('required' => false)),
      's_order'          => new sfValidatorInteger(array('required' => false)),
      'meta_keywords'    => new sfValidatorString(array('required' => false)),
      'meta_description' => new sfValidatorString(array('required' => false)),
      'meta_indexing'    => new sfValidatorBoolean(array('required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('text_list[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TextList';
  }

}
