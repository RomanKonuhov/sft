<?php

/**
 * BaseBlock
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $parent_id
 * @property integer $page_id
 * @property integer $block_link_id
 * @property string $header
 * @property enum $type
 * @property enum $sort
 * @property enum $sort_type
 * @property boolean $visible
 * @property clob $css
 * @property boolean $by_default
 * @property boolean $azlist_show
 * @property integer $item_per_page
 * @property integer $s_order
 * @property Page $Page
 * @property Doctrine_Collection $BlockLinks
 * @property Doctrine_Collection $Texts
 * @property Doctrine_Collection $Medias
 * @property Doctrine_Collection $TextLists
 * 
 * @method integer             getId()            Returns the current record's "id" value
 * @method integer             getParentId()      Returns the current record's "parent_id" value
 * @method integer             getPageId()        Returns the current record's "page_id" value
 * @method integer             getBlockLinkId()   Returns the current record's "block_link_id" value
 * @method string              getHeader()        Returns the current record's "header" value
 * @method enum                getType()          Returns the current record's "type" value
 * @method enum                getSort()          Returns the current record's "sort" value
 * @method enum                getSortType()      Returns the current record's "sort_type" value
 * @method boolean             getVisible()       Returns the current record's "visible" value
 * @method clob                getCss()           Returns the current record's "css" value
 * @method boolean             getByDefault()     Returns the current record's "by_default" value
 * @method boolean             getAzlistShow()    Returns the current record's "azlist_show" value
 * @method integer             getItemPerPage()   Returns the current record's "item_per_page" value
 * @method integer             getSOrder()        Returns the current record's "s_order" value
 * @method Page                getPage()          Returns the current record's "Page" value
 * @method Doctrine_Collection getBlockLinks()    Returns the current record's "BlockLinks" collection
 * @method Doctrine_Collection getTexts()         Returns the current record's "Texts" collection
 * @method Doctrine_Collection getMedias()        Returns the current record's "Medias" collection
 * @method Doctrine_Collection getTextLists()     Returns the current record's "TextLists" collection
 * @method Block               setId()            Sets the current record's "id" value
 * @method Block               setParentId()      Sets the current record's "parent_id" value
 * @method Block               setPageId()        Sets the current record's "page_id" value
 * @method Block               setBlockLinkId()   Sets the current record's "block_link_id" value
 * @method Block               setHeader()        Sets the current record's "header" value
 * @method Block               setType()          Sets the current record's "type" value
 * @method Block               setSort()          Sets the current record's "sort" value
 * @method Block               setSortType()      Sets the current record's "sort_type" value
 * @method Block               setVisible()       Sets the current record's "visible" value
 * @method Block               setCss()           Sets the current record's "css" value
 * @method Block               setByDefault()     Sets the current record's "by_default" value
 * @method Block               setAzlistShow()    Sets the current record's "azlist_show" value
 * @method Block               setItemPerPage()   Sets the current record's "item_per_page" value
 * @method Block               setSOrder()        Sets the current record's "s_order" value
 * @method Block               setPage()          Sets the current record's "Page" value
 * @method Block               setBlockLinks()    Sets the current record's "BlockLinks" collection
 * @method Block               setTexts()         Sets the current record's "Texts" collection
 * @method Block               setMedias()        Sets the current record's "Medias" collection
 * @method Block               setTextLists()     Sets the current record's "TextLists" collection
 * 
 * @package    sft.loc
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBlock extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('block');
        $this->hasColumn('id', 'integer', 5, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 5,
             ));
        $this->hasColumn('parent_id', 'integer', 5, array(
             'type' => 'integer',
             'unsigned' => true,
             'default' => 0,
             'length' => 5,
             ));
        $this->hasColumn('page_id', 'integer', 5, array(
             'type' => 'integer',
             'unsigned' => true,
             'notnull' => true,
             'length' => 5,
             ));
        $this->hasColumn('block_link_id', 'integer', 5, array(
             'type' => 'integer',
             'unsigned' => true,
             'default' => 0,
             'length' => 5,
             ));
        $this->hasColumn('header', 'string', 255, array(
             'type' => 'string',
             'default' => '',
             'length' => 255,
             ));
        $this->hasColumn('type', 'enum', 14, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'text',
              1 => 'text_list',
              2 => 'media',
              3 => 'search',
              4 => 'menu',
              5 => 'text_list_link',
              6 => 'media_link',
             ),
             'default' => 'text',
             'notnull' => true,
             'length' => 14,
             ));
        $this->hasColumn('sort', 'enum', 8, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'time',
              1 => 'hand',
              2 => 'alphabet',
             ),
             'default' => 'hand',
             'notnull' => true,
             'length' => 8,
             ));
        $this->hasColumn('sort_type', 'enum', 4, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'asc',
              1 => 'desc',
             ),
             'default' => 'asc',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('visible', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
        $this->hasColumn('css', 'clob', null, array(
             'type' => 'clob',
             'default' => '',
             ));
        $this->hasColumn('by_default', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
        $this->hasColumn('azlist_show', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('item_per_page', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('s_order', 'integer', 5, array(
             'type' => 'integer',
             'unsigned' => true,
             'default' => 0,
             'length' => 5,
             ));


        $this->index('block_page_id', array(
             'fields' => 
             array(
              0 => 'page_id',
             ),
             ));
        $this->index('block_parent_id', array(
             'fields' => 
             array(
              0 => 'parent_id',
             ),
             ));
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Page', array(
             'local' => 'page_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $this->hasMany('BlockLink as BlockLinks', array(
             'local' => 'id',
             'foreign' => 'block_id'));

        $this->hasMany('Text as Texts', array(
             'local' => 'id',
             'foreign' => 'block_id'));

        $this->hasMany('Media as Medias', array(
             'local' => 'id',
             'foreign' => 'block_id'));

        $this->hasMany('TextList as TextLists', array(
             'local' => 'id',
             'foreign' => 'block_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}