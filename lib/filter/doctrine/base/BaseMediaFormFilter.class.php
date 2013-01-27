<?php

/**
 * Media filter form base class.
 *
 * @package    sft.loc
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMediaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'block_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Block'), 'add_empty' => true)),
      'filename'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'filepath'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mimetype'   => new sfWidgetFormFilterInput(),
      'filesize'   => new sfWidgetFormFilterInput(),
      'metadata'   => new sfWidgetFormFilterInput(),
      'dtype'      => new sfWidgetFormFilterInput(),
      'date'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'visible'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      's_order'    => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'block_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Block'), 'column' => 'id')),
      'filename'   => new sfValidatorPass(array('required' => false)),
      'filepath'   => new sfValidatorPass(array('required' => false)),
      'mimetype'   => new sfValidatorPass(array('required' => false)),
      'filesize'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'metadata'   => new sfValidatorPass(array('required' => false)),
      'dtype'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'date'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'visible'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      's_order'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('media_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Media';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'block_id'   => 'ForeignKey',
      'filename'   => 'Text',
      'filepath'   => 'Text',
      'mimetype'   => 'Text',
      'filesize'   => 'Number',
      'metadata'   => 'Text',
      'dtype'      => 'Number',
      'date'       => 'Date',
      'visible'    => 'Boolean',
      's_order'    => 'Number',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
