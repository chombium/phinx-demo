<?php

use Phinx\Migration\AbstractMigration;

class UsersAddUpdatedColumn extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('users');
        $users ->addColumn('updated', 'datetime', array('default' => null))
              ->save();    
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $users = $this->table('users');
        $users ->removeColumn('updated')
              ->save();    
    }
}
