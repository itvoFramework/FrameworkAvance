<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actividades Model
 *
 * @method \App\Model\Entity\Actividade newEmptyEntity()
 * @method \App\Model\Entity\Actividade newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Actividade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Actividade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Actividade findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Actividade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Actividade[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Actividade|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Actividade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Actividade[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Actividade[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Actividade[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Actividade[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ActividadesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('actividades');
        $this->setDisplayField('id_actividades');
        $this->setPrimaryKey('id_actividades');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->allowEmptyString('id_actividades', null, 'create');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 100)
            ->allowEmptyString('descripcion');

        return $validator;
    }
}
