<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Participantes Model
 *
 * @property \App\Model\Table\PagosTable&\Cake\ORM\Association\HasMany $Pagos
 * @property \App\Model\Table\ParticipantehorariosTable&\Cake\ORM\Association\HasMany $Participantehorarios
 *
 * @method \App\Model\Entity\Participante newEmptyEntity()
 * @method \App\Model\Entity\Participante newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Participante[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Participante get($primaryKey, $options = [])
 * @method \App\Model\Entity\Participante findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Participante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Participante[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Participante|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Participante saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Participante[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Participante[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Participante[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Participante[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ParticipantesTable extends Table
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

        $this->setTable('participantes');
        $this->setDisplayField('id_participantes');
        $this->setPrimaryKey('id_participantes');

        $this->hasMany('Pagos', [
            'foreignKey' => 'participante_id',
        ]);
        $this->hasMany('Participantehorarios', [
            'foreignKey' => 'participante_id',
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
            ->allowEmptyString('id_participantes', null, 'create');

        $validator
            ->scalar('nombrecompleto')
            ->maxLength('nombrecompleto', 100)
            ->allowEmptyString('nombrecompleto');

        $validator
            ->scalar('curp')
            ->maxLength('curp', 18)
            ->allowEmptyString('curp');

        $validator
            ->scalar('intitucionprocedencia')
            ->maxLength('intitucionprocedencia', 100)
            ->allowEmptyString('intitucionprocedencia');

        $validator
            ->scalar('cuenta')
            ->maxLength('cuenta', 20)
            ->allowEmptyString('cuenta');

        $validator
            ->scalar('password')
            ->maxLength('password', 128)
            ->allowEmptyString('password');

        return $validator;
    }
}
