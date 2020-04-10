<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Horarios Model
 *
 * @property \App\Model\Table\CatalogosTable&\Cake\ORM\Association\BelongsTo $Catalogos
 * @property \App\Model\Table\PonentesTable&\Cake\ORM\Association\BelongsTo $Ponentes
 * @property \App\Model\Table\HorariodetallesTable&\Cake\ORM\Association\HasMany $Horariodetalles
 * @property \App\Model\Table\ParticipantehorariosTable&\Cake\ORM\Association\HasMany $Participantehorarios
 *
 * @method \App\Model\Entity\Horario newEmptyEntity()
 * @method \App\Model\Entity\Horario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Horario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Horario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Horario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Horario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Horario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Horario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Horario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Horario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Horario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Horario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Horario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class HorariosTable extends Table
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

        $this->setTable('horarios');
        $this->setDisplayField('id_horarios');
        $this->setPrimaryKey('id_horarios');

        $this->belongsTo('Catalogos', [
            'foreignKey' => 'catalogo_id',
        ]);
        $this->belongsTo('Ponentes', [
            'foreignKey' => 'ponente_id',
        ]);
        $this->hasMany('Horariodetalles', [
            'foreignKey' => 'horario_id',
        ]);
        $this->hasMany('Participantehorarios', [
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
            ->allowEmptyString('id_horarios', null, 'create');

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
        $rules->add($rules->existsIn(['catalogo_id'], 'Catalogos'));
        $rules->add($rules->existsIn(['ponente_id'], 'Ponentes'));

        return $rules;
    }
}
