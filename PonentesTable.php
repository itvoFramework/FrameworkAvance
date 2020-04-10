<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ponentes Model
 *
 * @property \App\Model\Table\HorariosTable&\Cake\ORM\Association\HasMany $Horarios
 *
 * @method \App\Model\Entity\Ponente newEmptyEntity()
 * @method \App\Model\Entity\Ponente newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ponente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ponente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ponente findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ponente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ponente[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ponente|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ponente saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ponente[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ponente[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ponente[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ponente[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PonentesTable extends Table
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

        $this->setTable('ponentes');
        $this->setDisplayField('id_ponentes');
        $this->setPrimaryKey('id_ponentes');

        $this->hasMany('Horarios', [
            'foreignKey' => 'ponente_id',
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
            ->allowEmptyString('id_ponentes', null, 'create');

        $validator
            ->scalar('nombrecompleto')
            ->maxLength('nombrecompleto', 100)
            ->allowEmptyString('nombrecompleto');

        $validator
            ->scalar('sexo')
            ->maxLength('sexo', 1)
            ->allowEmptyString('sexo');

        $validator
            ->scalar('foto')
            ->maxLength('foto', 100)
            ->allowEmptyString('foto');

        $validator
            ->scalar('cv')
            ->maxLength('cv', 100)
            ->allowEmptyString('cv');

        $validator
            ->scalar('nivelacademico')
            ->maxLength('nivelacademico', 100)
            ->allowEmptyString('nivelacademico');

        $validator
            ->scalar('cuenta')
            ->maxLength('cuenta', 20)
            ->allowEmptyString('cuenta');

        $validator
            ->scalar('password')
            ->maxLength('password', 128)
            ->allowEmptyString('password');

        $validator
            ->scalar('correo')
            ->maxLength('correo', 100)
            ->allowEmptyString('correo');

        return $validator;
    }
}
