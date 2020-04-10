<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pagodetalles Model
 *
 * @property \App\Model\Table\PagosTable&\Cake\ORM\Association\BelongsTo $Pagos
 * @property \App\Model\Table\CatalogosTable&\Cake\ORM\Association\BelongsTo $Catalogos
 *
 * @method \App\Model\Entity\Pagodetalle newEmptyEntity()
 * @method \App\Model\Entity\Pagodetalle newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pagodetalle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pagodetalle get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pagodetalle findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pagodetalle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pagodetalle[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pagodetalle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pagodetalle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pagodetalle[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pagodetalle[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pagodetalle[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pagodetalle[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PagodetallesTable extends Table
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

        $this->setTable('pagodetalles');
        $this->setDisplayField('id_pagodetalles');
        $this->setPrimaryKey('id_pagodetalles');

        $this->belongsTo('Pagos', [
            'foreignKey' => 'pago_id',
        ]);
        $this->belongsTo('Catalogos', [
            'foreignKey' => 'catalogo_id',
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
            ->allowEmptyString('id_pagodetalles', null, 'create');

        $validator
            ->numeric('importe')
            ->allowEmptyString('importe');

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
        $rules->add($rules->existsIn(['pago_id'], 'Pagos'));
        $rules->add($rules->existsIn(['catalogo_id'], 'Catalogos'));

        return $rules;
    }
}
