<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Catalogos Model
 *
 * @property \App\Model\Table\ActividadesTable&\Cake\ORM\Association\BelongsTo $Actividades
 * @property \App\Model\Table\EventosTable&\Cake\ORM\Association\BelongsTo $Eventos
 * @property \App\Model\Table\HorariosTable&\Cake\ORM\Association\HasMany $Horarios
 * @property \App\Model\Table\PagodetallesTable&\Cake\ORM\Association\HasMany $Pagodetalles
 *
 * @method \App\Model\Entity\Catalogo newEmptyEntity()
 * @method \App\Model\Entity\Catalogo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Catalogo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Catalogo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Catalogo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Catalogo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Catalogo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Catalogo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Catalogo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Catalogo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Catalogo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Catalogo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Catalogo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CatalogosTable extends Table
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

        $this->setTable('catalogos');
        $this->setDisplayField('id_catalogos');
        $this->setPrimaryKey('id_catalogos');

        $this->belongsTo('Actividades', [
            'foreignKey' => 'actividad_id',
        ]);
        $this->belongsTo('Eventos', [
            'foreignKey' => 'evento_id',
        ]);
        $this->hasMany('Horarios', [
            'foreignKey' => 'catalogo_id',
        ]);
        $this->hasMany('Pagodetalles', [
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
            ->allowEmptyString('id_catalogos', null, 'create');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 100)
            ->allowEmptyString('titulo');

        $validator
            ->numeric('costo')
            ->allowEmptyString('costo');

        $validator
            ->integer('totalhoras')
            ->allowEmptyString('totalhoras');

        $validator
            ->integer('cupolimite')
            ->allowEmptyString('cupolimite');

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
        $rules->add($rules->existsIn(['actividad_id'], 'Actividades'));
        $rules->add($rules->existsIn(['evento_id'], 'Eventos'));

        return $rules;
    }
}
