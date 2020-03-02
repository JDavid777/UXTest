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
        $email = new Email('default');
        $email->from(['me@example.com' => 'UXTest'])
                ->to('you@example.com')
                ->subject('About')
                ->send('My message');

        $correos = explode(", ", $_POST["destinatarios"]);
        $mensaje = $_POST["mensaje"];
        $url = "www.uxtest/encuesta";
        foreach ($correos as $correo){
            $email->from(['me@example.com' => 'UXTest'])
                ->to($correo)
                ->subject('Test usabilidad')
                ->send($mensaje ." \n". $url);
            mail($correo, "Test usabilidad", $mensaje ." \n". $url);
        }
        
    }

}
