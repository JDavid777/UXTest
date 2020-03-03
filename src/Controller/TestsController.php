<?php
namespace App\Controller;
use Cake\Mailer\Email;
use App\Controller\AppController;

/**
 * Tests Controller
 *
 *
 * @method \App\Model\Entity\Test[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestsController extends AppController
{
    public function testsdisponibles(){
        $this->render();
    }

    public function testsus(){
        $this->render();
    }

    public function enviarEmail(){

        $correos = array('mariaft@unicauca.edu.co','dmpino216@unicauca.edu.co','jdgarcia216@unicauca.edu.co', 'faberps@unicauca.edu.co', 'acmeneses@unicauca.edu.co');
        $email = new Email('default');
        foreach ($correos as $correo) {
            $email->from(['mariaft@unicauca.edu.co' => 'UXTest'])
                ->to($correo)
                ->subject('Test SUS')
                ->send("¡Hola!\n
                Te invitamos a evaluar la usabilidad de www.mercadolibre.com.co a través del siguiente link: www.uxtest/testsus.com\n
                Fecha límite: 25/03/2020");
        }
        $this->render();
    }

}
