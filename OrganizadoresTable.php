<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Organizadores Model
 *
 * @method \App\Model\Entity\Organizadore newEmptyEntity()
 * @method \App\Model\Entity\Organizadore newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Organizadore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Organizadore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Organizadore findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Organizadore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Organizadore[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Organizadore|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Organizadore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Organizadore[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Organizadore[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Organizadore[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Organizadore[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrganizadoresTable extends Table
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

        $this->setTable('organizadores');
        $this->setDisplayField('id_organizadores');
        $this->setPrimaryKey('id_organizadores');
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
            ->allowEmptyString('id_organizadores', null, 'create');

        $validator
            ->scalar('nombreorazonsocial')
            ->maxLength('nombreorazonsocial', 100)
            ->allowEmptyString('nombreorazonsocial');

        $validator
            ->scalar('rfc')
            ->maxLength('rfc', 12)
            ->allowEmptyString('rfc');

        $validator
            ->scalar('contacto')
            ->maxLength('contacto', 100)
            ->allowEmptyString('contacto');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->allowEmptyString('url');

        $validator
            ->scalar('correo')
            ->maxLength('correo', 100)
            ->allowEmptyString('correo');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 100)
            ->allowEmptyString('telefono');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 100)
            ->allowEmptyString('direccion');

        return $validator;
    }
}
