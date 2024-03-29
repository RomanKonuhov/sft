<?php

/**
 * BasePage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property varchar $header
 * @property varchar $name
 * @property varchar $type
 * @property clob $meta_keywords
 * @property clob $meta_description
 * @property boolean $meta_indexing
 * @property Doctrine_Collection $Blocks
 * @property Doctrine_Collection $Menus
 * 
 * @method integer             getId()               Returns the current record's "id" value
 * @method varchar             getHeader()           Returns the current record's "header" value
 * @method varchar             getName()             Returns the current record's "name" value
 * @method varchar             getType()             Returns the current record's "type" value
 * @method clob                getMetaKeywords()     Returns the current record's "meta_keywords" value
 * @method clob                getMetaDescription()  Returns the current record's "meta_description" value
 * @method boolean             getMetaIndexing()     Returns the current record's "meta_indexing" value
 * @method Doctrine_Collection getBlocks()           Returns the current record's "Blocks" collection
 * @method Doctrine_Collection getMenus()            Returns the current record's "Menus" collection
 * @method Page                setId()               Sets the current record's "id" value
 * @method Page                setHeader()           Sets the current record's "header" value
 * @method Page                setName()             Sets the current record's "name" value
 * @method Page                setType()             Sets the current record's "type" value
 * @method Page                setMetaKeywords()     Sets the current record's "meta_keywords" value
 * @method Page                setMetaDescription()  Sets the current record's "meta_description" value
 * @method Page                setMetaIndexing()     Sets the current record's "meta_indexing" value
 * @method Page                setBlocks()           Sets the current record's "Blocks" collection
 * @method Page                setMenus()            Sets the current record's "Menus" collection
 * 
 * @package    sft.loc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('page');
        $this->hasColumn('id', 'integer', 5, array(
             'type' => 'integer',
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 5,
             ));
        $this->hasColumn('header', 'varchar', 255, array(
             'type' => 'varchar',
             'default' => '',
             'length' => 255,
             ));
        $this->hasColumn('name', 'varchar', 255, array(
             'type' => 'varchar',
             'unique' => true,
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('type', 'varchar', 32, array(
             'type' => 'varchar',
             'notnull' => true,
             'default' => 'user',
             'length' => 32,
             ));
        $this->hasColumn('meta_keywords', 'clob', null, array(
             'type' => 'clob',
             'default' => '',
             ));
        $this->hasColumn('meta_description', 'clob', null, array(
             'type' => 'clob',
             'default' => '',
             ));
        $this->hasColumn('meta_indexing', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));

        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Block as Blocks', array(
             'local' => 'id',
             'foreign' => 'page_id'));

        $this->hasMany('Menu as Menus', array(
             'local' => 'id',
             'foreign' => 'block_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}