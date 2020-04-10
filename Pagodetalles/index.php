<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pagodetalle[]|\Cake\Collection\CollectionInterface $pagodetalles
 */
?>
<div class="pagodetalles index content">
    <?= $this->Html->link(__('New Pagodetalle'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pagodetalles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_pagodetalles') ?></th>
                    <th><?= $this->Paginator->sort('importe') ?></th>
                    <th><?= $this->Paginator->sort('pago_id') ?></th>
                    <th><?= $this->Paginator->sort('catalogo_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pagodetalles as $pagodetalle): ?>
                <tr>
                    <td><?= $this->Number->format($pagodetalle->id_pagodetalles) ?></td>
                    <td><?= $this->Number->format($pagodetalle->importe) ?></td>
                    <td><?= $pagodetalle->has('pago') ? $this->Html->link($pagodetalle->pago->id_pagos, ['controller' => 'Pagos', 'action' => 'view', $pagodetalle->pago->id_pagos]) : '' ?></td>
                    <td><?= $pagodetalle->has('catalogo') ? $this->Html->link($pagodetalle->catalogo->id_catalogos, ['controller' => 'Catalogos', 'action' => 'view', $pagodetalle->catalogo->id_catalogos]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pagodetalle->id_pagodetalles]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pagodetalle->id_pagodetalles]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pagodetalle->id_pagodetalles], ['confirm' => __('Are you sure you want to delete # {0}?', $pagodetalle->id_pagodetalles)]) ?>
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
