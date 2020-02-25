<?php
use Migrations\AbstractSeed;

/**
 * Questions seed.
 */
class QuestionsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $data[] = [
            'id' => 'qs1_sus',
            'description' => 'Creo que usaría esta aplicación web frecuentemente',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s"),
            'test_id' => 'sus_test'
        ];

        $data[] = [
            'id' => 'qs2_sus',
            'description' => 'Encuentro esta aplicación web innecesariamente compleja',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s"),
            'test_id' => 'sus_test'
        ];

        $data[] = [
            'id' => 'qs3_sus',
            'description' => 'Creo que esta aplicación web es fácil de usar',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s"),
            'test_id' => 'sus_test'
        ];

        $data[] = [
            'id' => 'qs4_sus',
            'description' => 'Creo que necesitaría ayuda de una persona con conocimientos técnicos para usar esta aplicación web',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s"),
            'test_id' => 'sus_test'
        ];

        $data[] = [
            'id' => 'qs5_sus',
            'description' => 'Las funciones de esta aplicación web están bien integradas',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s"),
            'test_id' => 'sus_test'
        ];

        $data[] = [
            'id' => 'qs6_sus',
            'description' => 'Creo que la aplicación web es muy inconsistente',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s"),
            'test_id' => 'sus_test'
        ];

        $data[] = [
            'id' => 'qs7_sus',
            'description' => 'Imagino que la mayoría de la gente aprendería a usar esta aplicación web en forma muy rápida',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s"),
            'test_id' => 'sus_test'
        ];

        $data[] = [
            'id' => 'qs8_sus',
            'description' => 'Encuentro que esta aplicación web es muy difícil de usar',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s"),
            'test_id' => 'sus_test'
        ];

        $data[] = [
            'id' => 'qs9_sus',
            'description' => 'Me siento confiado al usar esta aplicación web',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s"),
            'test_id' => 'sus_test'
        ];

        $data[] = [
            'id' => 'qs10_sus',
            'description' => 'Necesité aprender muchas cosas antes de ser capaz de usar esta aplicación web',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s"),
            'test_id' => 'sus_test'
        ];

        $table = $this->table('questions');
        $table->insert($data)->save();
    }
}
