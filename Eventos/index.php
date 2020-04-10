<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evento[]|\Cake\Collection\CollectionInterface $eventos
 */
?>
<div class="eventos index content">
    <?= $this->Html->link(__('New Evento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    
    <h3><?= __('Eventos') ?></h3>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_eventos') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('fechainicio') ?></th>
                    <th><?= $this->Paginator->sort('fechafin') ?></th>
                    <th><?= $this->Paginator->sort('logotipo') ?></th>
                    <th><?= $this->Paginator->sort('lugar') ?></th>
                    <th><?= $this->Paginator->sort('inicioregistro') ?></th>
                    <th><?= $this->Paginator->sort('cierreregistro') ?></th>
                    <th><?= $this->Paginator->sort('categoria_id') ?></th>
                    <th><?= $this->Paginator->sort('organizador_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($eventos as $evento): ?>
                <tr>
                    <td><?= $this->Number->format($evento->id_eventos) ?></td>
                    <td><?= h($evento->titulo) ?></td>
                    <td><?= h($evento->fechainicio) ?></td>
                    <td><?= h($evento->fechafin) ?></td>
                   <td><?= h($evento->logotipo) ?></td> 

                     <!--<td><?= $this->Html->logotipo($evento->logotipo) ?></td>-->

                    <td><?= h($evento->lugar) ?></td>
                    <td><?= h($evento->inicioregistro) ?></td>
                    <td><?= h($evento->cierreregistro) ?></td>
                    <td><?= $evento->has('categoria') ? $this->Html->link($evento->categoria->descripcion, ['controller' => 'Categorias', 'action' => 'view', $evento->categoria->descripcion]) : '' ?></td>
                    <td><?= $evento->has('organizadore') ? $this->Html->link($evento->organizadore->nombreorazonsocial, ['controller' => 'Organizadores', 'action' => 'view', $evento->organizadore->nombreorazonsocial]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $evento->id_eventos]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evento->id_eventos]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evento->id_eventos], ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id_eventos)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
