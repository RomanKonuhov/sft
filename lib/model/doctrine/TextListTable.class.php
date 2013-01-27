<?php

/**
 * TextListTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TextListTable extends Doctrine_Table
{
    protected $_block = null;

    /**
     * Returns an instance of this class.
     *
     * @return object TextListTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('TextList');
    }


    public function getBlock()
    {
        return $this->_block;
    }


    public function setBlock(Block $block)
    {
        $this->_block = $block;
    }


    public function getContent()
    {
        $block = $this->getBlock();
        if (!isset($block)) {
            throw new Exception('block is not defined');
        }

        $q = $this->createQuery('a')
            ->where('block_id = ?', $block->getId());

        return $q->execute();
    }

}