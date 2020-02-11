<?php
use Migrations\AbstractSeed;

/**
 * Tests seed.
 */
class TestsSeed extends AbstractSeed
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
            'id' => 'sus_test',
            'name' => 'Test SUS: System Usability Scale',
            'description' => 'El Test SUS (Escala de usabilidad del sistema) proporciona una herramienta confiable y rápida para medir la usabilidad. 
                            Consiste en un cuestionario de 10 ítems con cinco opciones de respuesta para los encuestados; desde Totalmente de acuerdo a Totalmente en desacuerdo.',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s") 
        ];

        
        $data[] = [
            'id' => 'asq_test',
            'name' => 'ASQ: After Scenario Questionnaire',
            'description' => 'Test para medir la usabilidad',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s") 
        ];

        
        $data[] = [
            'id' => 'nasa_tlx_test',
            'name' => 'NASA_TLX. NASAs task load index',
            'description' => 'Test para medir la usabilidad',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s") 
        ];

        
        $data[] = [
            'id' => 'smeq_test',
            'name' => 'SMEQ: Subjective Mental Effort Questionnaire',
            'description' => 'Test para medir la usabilidad',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s") 
        ];

        
        $data[] = [
            'id' => 'ume_test',
            'name' => 'UME: Usability Magnitude Estimation',
            'description' => 'Test para medir la usabilidad',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s") 
        ];
        
        $data[] = [
            'id' => 'seq_test',
            'name' => 'SEQ: Single Ease Question',
            'description' => 'Test para medir la usabilidad',
            'created'    => date("Y-m-d H:i:s"),
            'modified'   => date("Y-m-d H:i:s") 
        ];

        $table = $this->table('tests');
        $table->insert($data)->save();
    }
}
