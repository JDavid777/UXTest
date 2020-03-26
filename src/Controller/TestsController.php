<?php
namespace App\Controller;
use Cake\Mailer\Email;
use App\Controller\AppController;
use Cake\Utility\Text;

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
        $this->loadModel("Evaluations");
        $user_test = $this->UsersTests->newEntity();
        if($this->request->is('post')){

            if(empty($user_test->getErrors())){

                $lineaCorreos = $this->request->getData('destinatarios');
                $mensaje = $this->request->getData('txtmensaje');
                $url = $this->request->getData('url');
                $fecha = $this->request->getData('fecha');

                //GUARDAR EN LA BD NUEVO USER_TEST
                $user_test->url_app = $url;
                $user_test->max_date = $fecha;
                $user_test->message = $mensaje; 
                $user_test->user_id = $this->Auth->user('id');
                $user_test->test_id = 'sus_test';
                $saved_entity = $this->UsersTests->save($user_test);
                $correos = explode(", ", $lineaCorreos);
                $email = new Email('default');
                //TODO: CONSTRUIR URL 
                foreach ($correos as $correo) {
                    $evaluation = $this->Evaluations->newEntity();
                    $data = array(
                        'email' => $correo,
                        'token' => Text::uuid(),
                        'active' => 1,
                        'users_test_id' => $saved_entity->id
                    );
                    $evaluation = $this->Evaluations->patchEntity($evaluation, $data);
                    $this->Evaluations->save($evaluation);
                    $email->setFrom(['applicationuxtest@gmail.com' => 'Encuesta de UXTest'])
                        ->setTo($correo)
                        ->setSubject('Test SUS')
                        ->send("¡Hola!\n $mensaje
                        \n URL Página: $url
                        \n Fecha límite: ". $fecha);
                }

            }
        }
        $this->render();
    }
}
