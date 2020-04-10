<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $participantes
 */
?>
<div class="participantes index content">
    <?= $this->Html->link(__('New Participante'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Participantes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_participantes') ?></th>
                    <th><?= $this->Paginator->sort('nombrecompleto') ?></th>
                    <th><?= $this->Paginator->sort('curp') ?></th>
                    <th><?= $this->Paginator->sort('intitucionprocedencia') ?></th>
                    <th><?= $this->Paginator->sort('cuenta') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($participantes as $participante): ?>
                <tr>
                    <td><?= $this->Number->format($participante->id_participantes) ?></td>
                    <td><?= h($participante->nombrecompleto) ?></td>
                    <td><?= h($participante->curp) ?></td>
                    <td><?= h($participante->intitucionprocedencia) ?></td>
                    <td><?= h($participante->cuenta) ?></td>
                    <td><?= h($participante->password) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $participante->id_participantes]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $participante->id_participantes]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $participante->id_participantes], ['confirm' => __('Are you sure you want to delete # {0}?', $participante->id_participantes)]) ?>
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
