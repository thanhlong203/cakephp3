<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AccessItems Model
 *
 * @method \App\Model\Entity\AccessItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\AccessItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AccessItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AccessItem|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AccessItem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AccessItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AccessItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AccessItem findOrCreate($search, callable $callback = null, $options = [])
 */
class AccessItemsTable extends Table
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

        $this->setTable('access_items');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');
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
            ->integer('ID')
            ->allowEmptyString('ID', null, 'create');

        $validator
            ->integer('CONTROLLER_ID')
            ->allowEmptyString('CONTROLLER_ID');

        $validator
            ->integer('PARENT_ID')
            ->allowEmptyString('PARENT_ID');

        $validator
            ->scalar('ALIAS')
            ->maxLength('ALIAS', 50)
            ->allowEmptyString('ALIAS');

        $validator
            ->scalar('DISPLAY_NAME')
            ->maxLength('DISPLAY_NAME', 255)
            ->allowEmptyString('DISPLAY_NAME');

        $validator
            ->scalar('SUB_FUNCTION')
            ->allowEmptyString('SUB_FUNCTION');

        $validator
            ->decimal('ACTIVE_FLG')
            ->allowEmptyString('ACTIVE_FLG');

        $validator
            ->dateTime('INSERT_DATETIME')
            ->notEmptyDateTime('INSERT_DATETIME');

        $validator
            ->dateTime('UPDATE_DATETIME')
            ->allowEmptyDateTime('UPDATE_DATETIME');

        return $validator;
    }
}
