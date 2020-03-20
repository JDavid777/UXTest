<?php
use Migrations\AbstractMigration;

class CreateUsersTests extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users_tests');
        $table->addColumn('url_app', 'string', [
            'default' => null,
            'limit' => 150,
            'null' => false,
        ]);
        $table->addColumn('max_date', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('message', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => false,
        ]);

        $table->addColumn('user_id', 'integer')->addForeignKey('user_id', 'users','id', ['delete'=>'CASCADE', 'update'=>'CASCADE']);
        $table->addColumn('test_id', 'string')->addForeignKey('test_id', 'tests','id', ['delete'=>'CASCADE', 'update'=>'CASCADE']);
        
        $table->create();
    }
}
