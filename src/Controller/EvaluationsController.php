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

        $evaluation = $this->Evaluations->get(4);

        if ($this->request->is(['post'])) {
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

            if ($this->Evaluations->save($evaluation)) {
                $answer1 = $this->Answers->newEntity();
                //TODO: pasar de string a int
                $answer1->value = $this->request->getData('rtas-pregunta1');
                $answer1->questions_id = 'qs1_sus';
                $answer1->evaluations_id = $evaluation->id;
                $this->Evaluations->save($answer1);
                
                $answer2 = $this->Answers->newEntity();
                $answer2->value = $this->request->getData('rtas-pregunta2');
                $answer2->questions_id = 'qs2_sus';
                $answer2->evaluations_id = $evaluation->id;
                $this->Evaluations->save($answer2);

                $answer3 = $this->Answers->newEntity();
                $answer3->value = $this->request->getData('rtas-pregunta3');
                $answer3->questions_id = 'qs3_sus';
                $answer3->evaluations_id = $evaluation->id;
                $this->Evaluations->save($answer3);

                $answer4 = $this->Answers->newEntity();
                $answer4->value = $this->request->getData('rtas-pregunta4');
                $answer4->questions_id = 'qs4_sus';
                $answer4->evaluations_id = $evaluation->id;
                $this->Evaluations->save($answer4);

                $answer5 = $this->Answers->newEntity();
                $answer5->value = $this->request->getData('rtas-pregunta5');
                $answer5->questions_id = 'qs5_sus';
                $answer5->evaluations_id = $evaluation->id;
                $this->Evaluations->save($answer5);

                $answer6 = $this->Answers->newEntity();
                $answer6->value = $this->request->getData('rtas-pregunta6');
                $answer6->questions_id = 'qs6_sus';
                $answer6->evaluations_id = $evaluation->id;
                $this->Evaluations->save($answer6);

                $answer7 = $this->Answers->newEntity();
                $answer7->value = $this->request->getData('rtas-pregunta7');
                $answer7->questions_id = 'qs7_sus';
                $answer7->evaluations_id = $evaluation->id;
                $this->Evaluations->save($answer7);

                $answer8 = $this->Answers->newEntity();
                $answer8->value = $this->request->getData('rtas-pregunta8');
                $answer8->questions_id = 'qs8_sus';
                $answer8->evaluations_id = $evaluation->id;
                $this->Evaluations->save($answer8);

                $answer9 = $this->Answers->newEntity();
                $answer9->value = $this->request->getData('rtas-pregunta9');
                $answer9->questions_id = 'qs9_sus';
                $answer9->evaluations_id = $evaluation->id;
                $this->Evaluations->save($answer9);

                $answer10 = $this->Answers->newEntity();
                $answer10->value = $this->request->getData('rtas-pregunta10');
                $answer10->questions_id = 'qs10_sus';
                $answer10->evaluations_id = $evaluation->id;
                $this->Evaluations->save($answer10);

                $this->Flash->success(__('Gracias por contestar la encuesta'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo guardar las respuestas. Intente nuevamente.'));
        }
        $usersTests = $this->Evaluations->UsersTests->find('list', ['limit' => 200]);
        $this->set(compact('evaluation', 'usersTests'));
    }

    public function verResultados()
    {
        $this->loadModel("UsersTests");
        $this->loadModel("Answers");
        
        $user_id = $this->Auth->user('id');
        $usertest = $this->UsersTests->find()        
            ->where(['user_id' => $user_id],
                    ['test_id' => 'sus_test'])
            ->first();
        
        $evaluations_id = $this->Evaluations->find()
            ->where(['users_tests_id' => $usertest->id])
            ->all();

        $query = $this->Answers->find();
               
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
                ['evaluations_id' => $id, 'question_id' => 'qs1_sus']);
                debug($answers1);            
            /*$answers2[$cont] = $this->Answers->find('answers', 
                ['evaluations_id' => $id, 'question_id' => 'qs2_sus']);
            $answers3[$cont] = $this->Answers->find('answers', 
                ['evaluations_id' => $id, 'question_id' => 'qs3_sus']);
            $answers4[$cont] = $this->Answers->find('answers', 
                ['evaluations_id' => $id, 'question_id' => 'qs4_sus']);
            $answers5[$cont] = $this->Answers->find('answers', 
                ['evaluations_id' => $id, 'question_id' => 'qs5_sus']);
            $answers6[$cont] = $this->Answers->find('answers', 
                ['evaluations_id' => $id, 'question_id' => 'qs6_sus']);
            $answers7[$cont] = $this->Answers->find('answers', 
                ['evaluations_id' => $id, 'question_id' => 'qs7_sus']);
            $answers8[$cont] = $this->Answers->find('answers', 
                ['evaluations_id' => $id, 'question_id' => 'qs8_sus']);
            $answers9[$cont] = $this->Answers->find('answers', 
                ['evaluations_id' => $id, 'question_id' => 'qs9_sus']);
            $answers10[$cont] = $this->Answers->find('answers', 
                ['evaluations_id' => $id, 'question_id' => 'qs10_sus']);*/
            $cont = $cont + 1; 
        }
        debug($answers1);
        $this->set('rows1', $answers1);
        //$this->set('rows2', $answers2);
        /*$this->set('rows3', $answers3);
        $this->set('rows4', $answers4);
        $this->set('rows5', $answers5);
        $this->set('rows6', $answers6);
        $this->set('rows7', $answers7);
        $this->set('rows8', $answers8);
        $this->set('rows9', $answers9);
        $this->set('rows10', $answers10);*/
        
        $this->render();
    }
    public function beforeFilter(\Cake\Event\Event $event)
    {
        $this->Auth->allow("llenarEncuesta");
        //$this->Auth->allow("prueba");
    }

    
}
