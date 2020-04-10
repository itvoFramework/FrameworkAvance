<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Horariodetalles Model
 *
 * @property \App\Model\Table\HorariosTable&\Cake\ORM\Association\BelongsTo $Horarios
 *
 * @method \App\Model\Entity\Horariodetalle newEmptyEntity()
 * @method \App\Model\Entity\Horariodetalle newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Horariodetalle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Horariodetalle get($primaryKey, $options = [])
 * @method \App\Model\Entity\Horariodetalle findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Horariodetalle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Horariodetalle[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Horariodetalle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Horariodetalle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Horariodetalle[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Horariodetalle[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Horariodetalle[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Horariodetalle[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class HorariodetallesTable extends Table
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

        $this->setTable('horariodetalles');
        $this->setDisplayField('id_horariodetalles');
        $this->setPrimaryKey('id_horariodetalles');

        $this->belongsTo('Horarios', [
            'foreignKey' => 'horario_id',
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
            ->allowEmptyString('id_horariodetalles', null, 'create');

        $validator
            ->date('fecha')
            ->allowEmptyDate('fecha');

        $validator
            ->time('horarioinicio')
            ->allowEmptyTime('horarioinicio');

        $validator
            ->time('horariofin')
            ->allowEmptyTime('horariofin');

        $validator
            ->scalar('lugar')
            ->maxLength('lugar', 100)
            ->allowEmptyString('lugar');

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
        $rules->add($rules->existsIn(['horario_id'], 'Horarios'));

        return $rules;
    }
}
