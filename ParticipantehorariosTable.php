<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Participantehorarios Model
 *
 * @property \App\Model\Table\ParticipantesTable&\Cake\ORM\Association\BelongsTo $Participantes
 * @property \App\Model\Table\HorariosTable&\Cake\ORM\Association\BelongsTo $Horarios
 *
 * @method \App\Model\Entity\Participantehorario newEmptyEntity()
 * @method \App\Model\Entity\Participantehorario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Participantehorario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Participantehorario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Participantehorario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Participantehorario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Participantehorario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Participantehorario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Participantehorario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Participantehorario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Participantehorario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Participantehorario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Participantehorario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ParticipantehorariosTable extends Table
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

        $this->setTable('participantehorarios');
        $this->setDisplayField('id_participantehorarios');
        $this->setPrimaryKey('id_participantehorarios');

        $this->belongsTo('Participantes', [
            'foreignKey' => 'participante_id',
        ]);
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
            ->allowEmptyString('id_participantehorarios', null, 'create');

        $validator
            ->dateTime('fecharegistro')
            ->allowEmptyDateTime('fecharegistro');

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
        $rules->add($rules->existsIn(['horario_id'], 'Horarios'));

        return $rules;
    }
}
