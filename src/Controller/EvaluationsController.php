<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Evaluations Controller
 *
 * @property \App\Model\Table\EvaluationsTable $Evaluations
 *
 * @method \App\Model\Entity\Evaluation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EvaluationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['UsersTests'],
        ];
        $evaluations = $this->paginate($this->Evaluations);

        $this->set(compact('evaluations'));
    }

    /**
     * View method
     *
     * @param string|null $id Evaluation id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evaluation = $this->Evaluations->get($id, [
            'contain' => ['UsersTests'],
        ]);

        $this->set('evaluation', $evaluation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $evaluation = $this->Evaluations->newEntity();
        if ($this->request->is('post')) {
            $evaluation = $this->Evaluations->patchEntity($evaluation, $this->request->getData());
            if ($this->Evaluations->save($evaluation)) {
                $this->Flash->success(__('The evaluation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The evaluation could not be saved. Please, try again.'));
        }
        $usersTests = $this->Evaluations->UsersTests->find('list', ['limit' => 200]);
        $this->set(compact('evaluation', 'usersTests'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Evaluation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $evaluation = $this->Evaluations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            date_default_timezone_set('America/Bogota');
            $time = date('Y-m-d H:i:s');
            //$ip = $_SERVER['REMOTE_ADDR']; // Esto contendrá la ip de la solicitud.
           /* $ip = '186.148.188.186';
            $dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip), true);
            $pais = $dataArray['geoplugin_countryName'];*/
            $pais = 'Colombia';
            $data = array(
                'active' => 1,
                'age' => (int) $this->request->getData('edad'),
                'gender' => $this->request->getData('genero'),
                'date' => $time,
                'location' => $pais
            );
            $evaluation = $this->Evaluations->patchEntity($evaluation, $data);
            debug($evaluation);
            if ($this->Evaluations->save($evaluation)) {

                return True;
            }else{
                return False;
            }            
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Evaluation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evaluation = $this->Evaluations->get($id);
        if ($this->Evaluations->delete($evaluation)) {
            $this->Flash->success(__('The evaluation has been deleted.'));
        } else {
            $this->Flash->error(__('The evaluation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function llenarEncuesta($token)
    {
        $this->loadModel("UsersTests");
        $evaluation = $this->Evaluations->find()
            ->where(['token' => $token])
            ->first();
        
        $user_test = $this->UsersTests->find()
        ->where(['id' => $evaluation->users_tests_id])
        ->first();
        $this->set('url_pagina', $user_test->url_app);
        $this->set('token', $token);
        $this->render();

    }
    public function enviarEncuesta($token){
        $this->loadModel("Answers"); 

        $evaluation = $this->Evaluations->find()
            ->where(['token' => $token])
            ->first();
        $this->edit($evaluation->id);   
        
        if ($this->request->is(['post'])) {
            if ($this->Evaluations->save($evaluation)) {
                $answer1 = $this->Answers->newEntity();
                $value = $this->request->getData('rtas-pregunta1');
                $data = array(
                    'value' => $value,
                    'question_id' => 'qs1_sus',
                    'evaluation_id' => $evaluation->id
                );
                $answer1 = $this->Answers->patchEntity($answer1, $data);
                $this->Answers->save($answer1);
                
                $answer2 = $this->Answers->newEntity();
                $value = $this->request->getData('rtas-pregunta2');
                $data = array(
                    'value' => $value,
                    'question_id' => 'qs2_sus',
                    'evaluation_id' => $evaluation->id
                );
                $answer2 = $this->Answers->patchEntity($answer2, $data);
                $this->Answers->save($answer2);

                $answer3 = $this->Answers->newEntity();
                $value = $this->request->getData('rtas-pregunta3');
                $data = array(
                    'value' => $value,
                    'question_id' => 'qs3_sus',
                    'evaluation_id' => $evaluation->id
                );
                $answer3 = $this->Answers->patchEntity($answer3, $data);
                $this->Answers->save($answer3);

                $answer4 = $this->Answers->newEntity();
                $value = $this->request->getData('rtas-pregunta4');
                $data = array(
                    'value' => $value,
                    'question_id' => 'qs4_sus',
                    'evaluation_id' => $evaluation->id
                );
                $answer4 = $this->Answers->patchEntity($answer4, $data);
                $this->Answers->save($answer4);

                $answer5 = $this->Answers->newEntity();
                $value = $this->request->getData('rtas-pregunta5');
                $data = array(
                    'value' => $value,
                    'question_id' => 'qs5_sus',
                    'evaluation_id' => $evaluation->id
                );
                $answer5 = $this->Answers->patchEntity($answer5, $data);
                $this->Answers->save($answer5);

                $answer6 = $this->Answers->newEntity();
                $value = $this->request->getData('rtas-pregunta6');
                $data = array(
                    'value' => $value,
                    'question_id' => 'qs6_sus',
                    'evaluation_id' => $evaluation->id
                );
                $answer6 = $this->Answers->patchEntity($answer6, $data);
                $this->Answers->save($answer6);

                $answer7 = $this->Answers->newEntity();
                $value = $this->request->getData('rtas-pregunta7');
                $data = array(
                    'value' => $value,
                    'question_id' => 'qs7_sus',
                    'evaluation_id' => $evaluation->id
                );
                $answer7 = $this->Answers->patchEntity($answer7, $data);
                $this->Answers->save($answer7);

                $answer8 = $this->Answers->newEntity();
                $value = $this->request->getData('rtas-pregunta8');
                $data = array(
                    'value' => $value,
                    'question_id' => 'qs8_sus',
                    'evaluation_id' => $evaluation->id
                );
                $answer8 = $this->Answers->patchEntity($answer8, $data);
                $this->Answers->save($answer8);

                $answer9 = $this->Answers->newEntity();
                $value = $this->request->getData('rtas-pregunta9');
                $data = array(
                    'value' => $value,
                    'question_id' => 'qs9_sus',
                    'evaluation_id' => $evaluation->id
                );
                $answer9 = $this->Answers->patchEntity($answer9, $data);
                $this->Answers->save($answer9);

                $answer10 = $this->Answers->newEntity();
                $value = $this->request->getData('rtas-pregunta10');
                $data = array(
                    'value' => $value,
                    'question_id' => 'qs10_sus',
                    'evaluation_id' => $evaluation->id
                );
                $answer10 = $this->Answers->patchEntity($answer10, $data);
                $this->Answers->save($answer10);

                $this->render();
            }
            //$this->Flash->error(__('No se pudo guardar las respuestas. Intente nuevamente.'));
        }
        $usersTests = $this->Evaluations->UsersTests->find('list', ['limit' => 200]);
        $this->set(compact('evaluation', 'usersTests'));
        $this->render();
        
    }
    
    public function verResultados()
    {
        
        $this->request->allowMethod('ajax');
        $url = $this->request->query('url');
        $this->loadModel("UsersTests");
        $this->loadModel("Answers");
        
        $user_id = $this->Auth->user('id');
        
        $evaluations_id = $this->Evaluations->find()
        ->join([ 'A' => [
            'table' => 'Answers',
            'type' => 'INNER',
            'conditions' => 'Evaluations.id = A.evaluation_id',
        ]])
        ->join([ 'UE' => [
            'table' => 'Users_Tests',
            'type' => 'INNER',
            'conditions' => 'Evaluations.users_tests_id = UE.id',
        ]])
        ->select(['id'=>'Evaluations.id'])  
        ->distinct(['Evaluations.id'])          
        ->where(['and'=> ['UE.user_id' => $user_id, 'UE.url_app' => $url]]);
                
        $answers1 = array();
        $answers2 = array();
        $answers3 = array();
        $answers4 = array();
        $answers5 = array();
        $answers6 = array();
        $answers7 = array();
        $answers8 = array();
        $answers9 = array();
        $answers10 = array();
        $cont = 0;

        foreach($evaluations_id as $evaluation_id){
            $id = $evaluation_id->id;
            $answers1[$cont] = $this->Answers->find('answers', 
                ['evaluation_id' => $id, 'question_id' => 'qs1_sus']);         
            $answers2[$cont] = $this->Answers->find('answers', 
                ['evaluation_id' => $id, 'question_id' => 'qs2_sus']);
            $answers3[$cont] = $this->Answers->find('answers', 
                ['evaluation_id' => $id, 'question_id' => 'qs3_sus']);
            $answers4[$cont] = $this->Answers->find('answers', 
                ['evaluation_id' => $id, 'question_id' => 'qs4_sus']);
            $answers5[$cont] = $this->Answers->find('answers', 
                ['evaluation_id' => $id, 'question_id' => 'qs5_sus']);
            $answers6[$cont] = $this->Answers->find('answers', 
                ['evaluation_id' => $id, 'question_id' => 'qs6_sus']);
            $answers7[$cont] = $this->Answers->find('answers', 
                ['evaluation_id' => $id, 'question_id' => 'qs7_sus']);
            $answers8[$cont] = $this->Answers->find('answers', 
                ['evaluation_id' => $id, 'question_id' => 'qs8_sus']);
            $answers9[$cont] = $this->Answers->find('answers', 
                ['evaluation_id' => $id, 'question_id' => 'qs9_sus']);
            $answers10[$cont] = $this->Answers->find('answers', 
                ['evaluation_id' => $id, 'question_id' => 'qs10_sus']);
            $cont = $cont + 1; 
        }
        $this->set('rows1', $answers1);
        $this->set('rows2', $answers2);
        $this->set('rows3', $answers3);
        $this->set('rows4', $answers4);
        $this->set('rows5', $answers5);
        $this->set('rows6', $answers6);
        $this->set('rows7', $answers7);
        $this->set('rows8', $answers8);
        $this->set('rows9', $answers9);
        $this->set('rows10', $answers10);
    }
    public function resultados(){
        $this->render();
    }
    public function beforeFilter(\Cake\Event\Event $event)
    {
        $this->Auth->allow("llenarEncuesta");
        $this->Auth->allow("enviarEncuesta");
        if ($this->request->is('ajax')) {
            $this->layout = 'ajax';
        }
    }

    
}
