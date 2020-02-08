<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 */
class UsersController extends AppController
{
    public function login()
    {
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else{
                $this->Flash->error("Por favor ingresar datos validos",['key'=>'auth']);
            }
        }
    }
    public function home(){
        $this->render();
    }

    public function logout(){
        return $this->redirect($this->Auth->logout);
    }
}
