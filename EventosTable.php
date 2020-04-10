<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Eventos Model
 *
 * @property \App\Model\Table\CategoriasTable&\Cake\ORM\Association\BelongsTo $Categorias
 * @property \App\Model\Table\OrganizadoresTable&\Cake\ORM\Association\BelongsTo $Organizadores
 * @property \App\Model\Table\CatalogosTable&\Cake\ORM\Association\HasMany $Catalogos
 *
 * @method \App\Model\Entity\Evento newEmptyEntity()
 * @method \App\Model\Entity\Evento newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Evento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Evento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Evento findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Evento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Evento[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Evento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Evento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Evento[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Evento[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Evento[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Evento[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EventosTable extends Table
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

        $this->setTable('eventos');
        $this->setDisplayField('id_eventos');
        $this->setPrimaryKey('id_eventos');

        $this->belongsTo('Categorias', [
            'foreignKey' => 'categoria_id',
        ]);
        $this->belongsTo('Organizadores', [
            'foreignKey' => 'organizador_id',
        ]);
        $this->hasMany('Catalogos', [
            'foreignKey' => 'evento_id',
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
            ->allowEmptyString('id_eventos', null, 'create');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 100)
            ->allowEmptyString('titulo');

        $validator
            ->scalar('descripcion')
            ->allowEmptyString('descripcion');

        $validator
            ->dateTime('fechainicio')
            ->allowEmptyDateTime('fechainicio');

        $validator
            ->dateTime('fechafin')
            ->allowEmptyDateTime('fechafin');

        $validator
            ->scalar('observaciones')
            ->allowEmptyString('observaciones');

        $validator
            ->scalar('logotipo')
            ->maxLength('logotipo', 100)
            ->allowEmptyString('logotipo');

        $validator
            ->scalar('eslogan')
            ->allowEmptyString('eslogan');

        $validator
            ->scalar('lugar')
            ->maxLength('lugar', 200)
            ->allowEmptyString('lugar');

        $validator
            ->dateTime('inicioregistro')
            ->allowEmptyDateTime('inicioregistro');

        $validator
            ->dateTime('cierreregistro')
            ->allowEmptyDateTime('cierreregistro');


        

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
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'));
        $rules->add($rules->existsIn(['organizador_id'], 'Organizadores'));

        return $rules;
    }
}
