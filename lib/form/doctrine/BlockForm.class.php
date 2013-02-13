<?php

/**
 * Block form.
 *
 * @package    sft.loc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BlockForm extends BaseBlockForm
{
    public function configure()
    {
        unset(
            $this['created_at'],
            $this['updated_at']
        );

        $this->validatorSchema['parent_id'] = new sfValidatorChoice(array(
            'choices' => array_keys(Doctrine_Core::getTable('Block')->getHeaders($this->getObject()->getId()))
        ));

        $this->widgetSchema['parent_id'] = new sfWidgetFormChoice(array(
            'choices' => Doctrine_Core::getTable('Block')->getHeaders($this->getObject()->getId()),
            'multiple' => false,
            'expanded' => false
        ));
    }
}
