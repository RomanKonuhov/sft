<?php

class Pageaddcolumnremovable extends Doctrine_Migration_Base
{
  public function up()
  {
      $this->addColumn('page', 'name', 'varchar', 255, array(
            'unique' => true,
            'type' => 'varchar',
            'default' => '',
            'length' => 155,
      ));
  }

  public function down()
  {
      $this->removeColumn('page', 'name');
  }
}
