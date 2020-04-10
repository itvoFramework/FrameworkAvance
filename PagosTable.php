<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pagos Model
 *
 * @property \App\Model\Table\ParticipantesTable&\Cake\ORM\Association\BelongsTo $Participantes
 * @property \App\Model\Table\PagodetallesTable&\Cake\ORM\Association\HasMany $Pagodetalles
 *
 * @method \App\Model\Entity\Pago newEmptyEntity()
 * @method \App\Model\Entity\Pago newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pago[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pago get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pago findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pago patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pago[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pago|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pago saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pago[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pago[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pago[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pago[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PagosTable extends Table
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

        $this->setTable('pagos');
        $this->setDisplayField('id_pagos');
        $this->setPrimaryKey('id_pagos');

        $this->belongsTo('Participantes', [
            'foreignKey' => 'participante_id',
        ]);
        $this->hasMany('Pagodetalles', [
            'foreignKey' => 'pago_id',
        ]);
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
            ->allowEmptyString('id_pagos', null, 'create');

        $validator
            ->date('fechapago')
            ->allowEmptyDate('fechapago');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['participante_id'], 'Participantes'));

        return $rules;
    }
}
