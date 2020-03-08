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

        $this->loadModel("UsersTests");
        $user_test = $this->UsersTests->newEntity();
        
        if($this->request->is('post')){

            if(empty($user_test->getErrors())){

                $lineaCorreos = $this->request->getData('destinatarios');
                $mensaje = $this->request->getData('txtmensaje');
                $url = $this->request->getData('url');
                $fecha = $this->request->getData('fecha');
                $correos = explode(", ", $lineaCorreos);
                $email = new Email('default');
                foreach ($correos as $correo) {
                        $email->from(['mariaft@unicauca.edu.co' => 'UXTest'])
                            ->to($correo)
                            ->subject('Test SUS')
                            ->send("¡Hola!\n $mensaje
                            \n URL Página: $url
                            \n Fecha límite: ". $fecha);
                }
                $user_test->id = 'usertest 1';
                $user_test->url_app = $url;
                $user_test->max_date = $fecha;
                $user_test->message = $mensaje; 
                $user_test->user_id = 1;
                $user_test->test_id = 'sus_test';
                $this->UsersTests->save($user_test);
            }
        }
        
        $this->render();
    }

}
