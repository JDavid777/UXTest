<?php
namespace App\Controller;
use Cake\Mailer\Email;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Event\Event;

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
                date_default_timezone_set('America/Bogota');

                $lineaCorreos = $this->request->getData('destinatarios');
                $mensaje = $this->request->getData('txtmensaje');
                $url = $this->request->getData('url');
                $fecha = $this->request->getData('fecha') . " 23:59:59";
                $this->set('url_pagina', $url);

                //GUARDAR EN LA BD NUEVO USER_TEST
                $user_test->url_app = $url;
                $user_test->max_date = date("Y-m-d H:i:s", strtotime($fecha));
                $user_test->message = $mensaje; 
                $user_test->user_id = $this->Auth->user('id');
                $user_test->test_id = 'sus_test';
                $this->UsersTests->save($user_test);
                $correos = explode(", ", $lineaCorreos);
                $email = new Email('default');
                $urlbase = "http://www.uxtest.com/UXTest/";
                $controlador = "evaluations/llenarEncuesta/";
                

                foreach ($correos as $correo) {
                    $evaluation = $this->Evaluations->newEntity();
                    $token = Text::uuid();
                    
                    $data = array(
                        'email' => $correo,
                        'token' => $token,
                        'active' => 0,
                        'users_tests_id' => $user_test->id
                    );
                    $evaluation = $this->Evaluations->patchEntity($evaluation, $data);
                    $this->Evaluations->save($evaluation);

                    $urlEncuesta = $urlbase.$controlador.$token;
                    $email->setEmailFormat('html')
                    ->setTo($correo)
                    ->setSubject('Test SUS')
                    ->setViewVars(['url' => $urlEncuesta, 'mensaje' => $mensaje, 'fecha' => $fecha])
                    ->setFrom(['applicationuxtest@gmail.com' => 'Encuesta de UXTest'])  
                    ->setTemplate('email')
                    ->send();  
                }

            }
        }
        $this->render();
    }

}
