<?php

/**
 * Block form base class.
 *
 * @method Block getObject() Returns the current form's model object
 *
 * @package    sft.loc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBlockForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'parent_id'     => new sfWidgetFormInputText(),
      'page_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Page'), 'add_empty' => false)),
      'block_link_id' => new sfWidgetFormInputText(),
      'header'        => new sfWidgetFormInputText(),
      'type'          => new sfWidgetFormChoice(array('choices' => array('text' => 'text', 'text_list' => 'text_list', 'media' => 'media', 'search' => 'search', 'menu' => 'menu', 'text_list_link' => 'text_list_link', 'media_link' => 'media_link'))),
      'sort'          => new sfWidgetFormChoice(array('choices' => array('time' => 'time', 'hand' => 'hand', 'alphabet' => 'alphabet'))),
      'sort_type'     => new sfWidgetFormChoice(array('choices' => array('asc' => 'asc', 'desc' => 'desc'))),
      'visible'       => new sfWidgetFormInputCheckbox(),
      'css'           => new sfWidgetFormTextarea(),
      'by_default'    => new sfWidgetFormInputCheckbox(),
      'azlist_show'   => new sfWidgetFormInputCheckbox(),
      'item_per_page' => new sfWidgetFormInputText(),
      's_order'       => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'parent_id'     => new sfValidatorInteger(array('required' => false)),
      'page_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Page'))),
      'block_link_id' => new sfValidatorInteger(array('required' => false)),
      'header'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type'          => new sfValidatorChoice(array('choices' => array(0 => 'text', 1 => 'text_list', 2 => 'media', 3 => 'search', 4 => 'menu', 5 => 'text_list_link', 6 => 'media_link'), 'required' => false)),
      'sort'          => new sfValidatorChoice(array('choices' => array(0 => 'time', 1 => 'hand', 2 => 'alphabet'), 'required' => false)),
      'sort_type'     => new sfValidatorChoice(array('choices' => array(0 => 'asc', 1 => 'desc'), 'required' => false)),
      'visible'       => new sfValidatorBoolean(array('required' => false)),
      'css'           => new sfValidatorString(array('required' => false)),
      'by_default'    => new sfValidatorBoolean(array('required' => false)),
      'azlist_show'   => new sfValidatorBoolean(array('required' => false)),
      'item_per_page' => new sfValidatorInteger(array('required' => false)),
      's_order'       => new sfValidatorInteger(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('block[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Block';
  }

}
