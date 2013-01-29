<?php

/**
 * Block
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    sft.loc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Block extends BaseBlock
{
    public function getEncodeHeader()
    {
        return Tools::urlencode($this->getHeader());
    }


    public function getInstance()
    {
        $instance = null;
        switch ($this->getType()) {
            case 'text_list' :      $instance = Doctrine_Core::getTable('TextList');    break;
            case 'text' :           $instance = Doctrine_Core::getTable('Text');        break;
            case 'media' :          $instance = Doctrine_Core::getTable('Media');       break;
            case 'search' :         $instance = Doctrine_Core::getTable('Search');      break;
            case 'menu' :           $instance = Doctrine_Core::getTable('Menu');        break;
            case 'text_list_link' : $instance = Doctrine_Core::getTable('TextList');    break;
            case 'media_link' :     $instance = Doctrine_Core::getTable('Media');       break;
        }
        $instance->setBlock($this);

        return $instance;
    }


    public function getTemplateName()
    {
        return $this->getType();
    }


    public function getCssAsString()
    {
        $css = new Css();
        $css->decode($this->getCss());
        return $css;
    }


    public function getContent($id = null)
    {
        return $this->getInstance()->getContent($id);
    }
}
