<?php

/**
 * block module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage block
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBlockGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%parent_id%% - %%page_id%% - %%block_link_id%% - %%header%% - %%type%% - %%sort%% - %%sort_type%% - %%visible%% - %%css%% - %%by_default%% - %%azlist_show%% - %%item_per_page%% - %%s_order%% - %%created_at%% - %%updated_at%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Block List';
  }

  public function getEditTitle()
  {
    return 'Edit Block';
  }

  public function getNewTitle()
  {
    return 'New Block';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'parent_id',  2 => 'page_id',  3 => 'block_link_id',  4 => 'header',  5 => 'type',  6 => 'sort',  7 => 'sort_type',  8 => 'visible',  9 => 'css',  10 => 'by_default',  11 => 'azlist_show',  12 => 'item_per_page',  13 => 's_order',  14 => 'created_at',  15 => 'updated_at',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'parent_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'page_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'block_link_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'header' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Enum',),
      'sort' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Enum',),
      'sort_type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Enum',),
      'visible' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'css' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'by_default' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'azlist_show' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'item_per_page' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      's_order' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'parent_id' => array(),
      'page_id' => array(),
      'block_link_id' => array(),
      'header' => array(),
      'type' => array(),
      'sort' => array(),
      'sort_type' => array(),
      'visible' => array(),
      'css' => array(),
      'by_default' => array(),
      'azlist_show' => array(),
      'item_per_page' => array(),
      's_order' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'parent_id' => array(),
      'page_id' => array(),
      'block_link_id' => array(),
      'header' => array(),
      'type' => array(),
      'sort' => array(),
      'sort_type' => array(),
      'visible' => array(),
      'css' => array(),
      'by_default' => array(),
      'azlist_show' => array(),
      'item_per_page' => array(),
      's_order' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'parent_id' => array(),
      'page_id' => array(),
      'block_link_id' => array(),
      'header' => array(),
      'type' => array(),
      'sort' => array(),
      'sort_type' => array(),
      'visible' => array(),
      'css' => array(),
      'by_default' => array(),
      'azlist_show' => array(),
      'item_per_page' => array(),
      's_order' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'parent_id' => array(),
      'page_id' => array(),
      'block_link_id' => array(),
      'header' => array(),
      'type' => array(),
      'sort' => array(),
      'sort_type' => array(),
      'visible' => array(),
      'css' => array(),
      'by_default' => array(),
      'azlist_show' => array(),
      'item_per_page' => array(),
      's_order' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'parent_id' => array(),
      'page_id' => array(),
      'block_link_id' => array(),
      'header' => array(),
      'type' => array(),
      'sort' => array(),
      'sort_type' => array(),
      'visible' => array(),
      'css' => array(),
      'by_default' => array(),
      'azlist_show' => array(),
      'item_per_page' => array(),
      's_order' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'BlockForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'BlockFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
