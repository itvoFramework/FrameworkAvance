<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $ponentes
 */
?>
<div class="ponentes index content">
    <?= $this->Html->link(__('New Ponente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ponentes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_ponentes') ?></th>
                    <th><?= $this->Paginator->sort('nombrecompleto') ?></th>
                    <th><?= $this->Paginator->sort('sexo') ?></th>
                    <th><?= $this->Paginator->sort('foto') ?></th>
                    <th><?= $this->Paginator->sort('cv') ?></th>
                    <th><?= $this->Paginator->sort('nivelacademico') ?></th>
                    <th><?= $this->Paginator->sort('cuenta') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ponentes as $ponente): ?>
                <tr>
                    <td><?= $this->Number->format($ponente->id_ponentes) ?></td>
                    <td><?= h($ponente->nombrecompleto) ?></td>
                    <td><?= h($ponente->sexo) ?></td>
                    <td><?= h($ponente->foto) ?></td>
                    <td><?= h($ponente->cv) ?></td>
                    <td><?= h($ponente->nivelacademico) ?></td>
                    <td><?= h($ponente->cuenta) ?></td>
                    <td><?= h($ponente->password) ?></td>
                    <td><?= h($ponente->correo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ponente->id_ponentes]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ponente->id_ponentes]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ponente->id_ponentes], ['confirm' => __('Are you sure you want to delete # {0}?', $ponente->id_ponentes)]) ?>
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
