<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pago[]|\Cake\Collection\CollectionInterface $pagos
 */
?>
<div class="pagos index content">
    <?= $this->Html->link(__('New Pago'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pagos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_pagos') ?></th>
                    <th><?= $this->Paginator->sort('fechapago') ?></th>
                    <th><?= $this->Paginator->sort('participante_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pagos as $pago): ?>
                <tr>
                    <td><?= $this->Number->format($pago->id_pagos) ?></td>
                    <td><?= h($pago->fechapago) ?></td>
                    <td><?= $pago->has('participante') ? $this->Html->link($pago->participante->nombrecompleto, ['controller' => 'Participantes', 'action' => 'view', $pago->participante->nombrecompleto]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pago->id_pagos]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pago->id_pagos]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pago->id_pagos], ['confirm' => __('Are you sure you want to delete # {0}?', $pago->id_pagos)]) ?>
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
