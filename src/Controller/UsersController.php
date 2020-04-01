<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users Controller
 *
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hasher = new DefaultPasswordHasher();
        $user = $this->Users->newEntity();

        if ($this->request->is('post')) {
            $id = $this->request->getData('idn');
            $password = $this->request->getData('password');
            $passwdHasheado = $hasher->hash($password);
            $nombre = $this->request->getData('first_name');
            $apellidos = $this->request->getData('last_name');
            $username = $this->request->getData('username');
            $data = array(
                'id' => $id,
                'first_name' => $nombre,
                'last_name' => $apellidos,
                'username' => $username,
                'password' => $passwdHasheado,
                'role' => 'user',
                'active' => 1
            );
            
            $user = $this->Users->patchEntity($user, $data);
            echo $user;
            if ($this->Users->save($user)) {
                $this->Auth->setUser($user);
                $this->Flash->success(__('Usuario registrado.'));

                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('No fue posible registrar el usuario. Id o username ya existen'));
            return $this->redirect(['action' => 'addUser']);
        } 
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        $this->render();
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else{
                $this->Flash->error("Por favor ingresar datos válidos",['key'=>'auth']);
            }
        }
    }
    
    public function home(){
        $this->render();
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow("adduser");
    }
}
