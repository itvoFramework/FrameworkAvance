<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $actividades
 */
?>
<div class="actividades index content">
    <?= $this->Html->link(__('New Actividade'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Actividades') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_actividades') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($actividades as $actividade): ?>
                <tr>
                    <td><?= $this->Number->format($actividade->id_actividades) ?></td>
                    <td><?= h($actividade->descripcion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $actividade->id_actividades]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actividade->id_actividades]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $actividade->id_actividades], ['confirm' => __('Are you sure you want to delete # {0}?', $actividade->id_actividades)]) ?>
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
