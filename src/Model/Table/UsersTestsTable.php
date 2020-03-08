<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersTests Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\TestsTable&\Cake\ORM\Association\BelongsTo $Tests
 *
 * @method \App\Model\Entity\UsersTest get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsersTest newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsersTest[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsersTest|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersTest saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersTest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsersTest[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsersTest findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTestsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users_tests');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tests', [
            'foreignKey' => 'test_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->scalar('id')
            ->maxLength('id', 15)
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('url_app')
            ->maxLength('url_app', 150)
            ->requirePresence('url_app', 'create')
            ->notEmptyString('url_app');

        $validator
            ->dateTime('max_date')
            ->requirePresence('max_date', 'create')
            ->notEmptyDateTime('max_date');

        $validator
            ->scalar('message')
            ->maxLength('message', 250)
            ->requirePresence('message', 'create')
            ->notEmptyString('message');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['test_id'], 'Tests'));

        return $rules;
    }
}
