<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catalogo[]|\Cake\Collection\CollectionInterface $catalogos
 */
?>
<div class="catalogos index content">
    <?= $this->Html->link(__('New Catalogo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Catalogos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_catalogos') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('costo') ?></th>
                    <th><?= $this->Paginator->sort('totalhoras') ?></th>
                    <th><?= $this->Paginator->sort('cupolimite') ?></th>
                    <th><?= $this->Paginator->sort('actividad_id') ?></th>
                    <th><?= $this->Paginator->sort('evento_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($catalogos as $catalogo): ?>
                <tr>
                    <td><?= $this->Number->format($catalogo->id_catalogos) ?></td>
                    <td><?= h($catalogo->titulo) ?></td>
                    <td><?= $this->Number->format($catalogo->costo) ?></td>
                    <td><?= $this->Number->format($catalogo->totalhoras) ?></td>
                    <td><?= $this->Number->format($catalogo->cupolimite) ?></td>
                    <td><?= $catalogo->has('actividade') ? $this->Html->link($catalogo->actividade->descripcion, ['controller' => 'Actividades', 'action' => 'view', $catalogo->actividade->descripcion]) : '' ?></td>
                    <td><?= $catalogo->has('evento') ? $this->Html->link($catalogo->evento->titulo, ['controller' => 'Eventos', 'action' => 'view', $catalogo->evento->titulo]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $catalogo->id_catalogos]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $catalogo->id_catalogos]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $catalogo->id_catalogos], ['confirm' => __('Are you sure you want to delete # {0}?', $catalogo->id_catalogos)]) ?>
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
