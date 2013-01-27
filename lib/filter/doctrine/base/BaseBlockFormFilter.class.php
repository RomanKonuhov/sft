<?php

/**
 * Block filter form base class.
 *
 * @package    sft.loc
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBlockFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'parent_id'     => new sfWidgetFormFilterInput(),
      'page_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Page'), 'add_empty' => true)),
      'block_link_id' => new sfWidgetFormFilterInput(),
      'header'        => new sfWidgetFormFilterInput(),
      'type'          => new sfWidgetFormChoice(array('choices' => array('' => '', 'text' => 'text', 'text_list' => 'text_list', 'media' => 'media', 'search' => 'search', 'menu' => 'menu', 'text_list_link' => 'text_list_link', 'media_link' => 'media_link'))),
      'sort'          => new sfWidgetFormChoice(array('choices' => array('' => '', 'time' => 'time', 'hand' => 'hand', 'alphabet' => 'alphabet'))),
      'sort_type'     => new sfWidgetFormChoice(array('choices' => array('' => '', 'asc' => 'asc', 'desc' => 'desc'))),
      'visible'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'css'           => new sfWidgetFormFilterInput(),
      'by_default'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'azlist_show'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'item_per_page' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      's_order'       => new sfWidgetFormFilterInput(),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'parent_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'page_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Page'), 'column' => 'id')),
      'block_link_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'header'        => new sfValidatorPass(array('required' => false)),
      'type'          => new sfValidatorChoice(array('required' => false, 'choices' => array('text' => 'text', 'text_list' => 'text_list', 'media' => 'media', 'search' => 'search', 'menu' => 'menu', 'text_list_link' => 'text_list_link', 'media_link' => 'media_link'))),
      'sort'          => new sfValidatorChoice(array('required' => false, 'choices' => array('time' => 'time', 'hand' => 'hand', 'alphabet' => 'alphabet'))),
      'sort_type'     => new sfValidatorChoice(array('required' => false, 'choices' => array('asc' => 'asc', 'desc' => 'desc'))),
      'visible'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'css'           => new sfValidatorPass(array('required' => false)),
      'by_default'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'azlist_show'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'item_per_page' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      's_order'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('block_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Block';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'parent_id'     => 'Number',
      'page_id'       => 'ForeignKey',
      'block_link_id' => 'Number',
      'header'        => 'Text',
      'type'          => 'Enum',
      'sort'          => 'Enum',
      'sort_type'     => 'Enum',
      'visible'       => 'Boolean',
      'css'           => 'Text',
      'by_default'    => 'Boolean',
      'azlist_show'   => 'Boolean',
      'item_per_page' => 'Number',
      's_order'       => 'Number',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
