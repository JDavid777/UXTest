<?php
use Migrations\AbstractMigration;

class CreateAnswers extends AbstractMigration
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
        $table = $this->table('answers');
        $table->addColumn('value', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        
        $table->addColumn('users_tests_id', 'string')->addForeignKey('users_tests_id', 'tests','id', ['delete'=>'CASCADE', 'update'=>'CASCADE']);
        $table->addColumn('question_id', 'string')->addForeignKey('question_id', 'questions','id', ['delete'=>'CASCADE', 'update'=>'CASCADE']);
        
        $table->create();
    }
}
