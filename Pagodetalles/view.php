<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pagodetalle $pagodetalle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pagodetalle'), ['action' => 'edit', $pagodetalle->id_pagodetalles], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pagodetalle'), ['action' => 'delete', $pagodetalle->id_pagodetalles], ['confirm' => __('Are you sure you want to delete # {0}?', $pagodetalle->id_pagodetalles), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pagodetalles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pagodetalle'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pagodetalles view content">
            <h3><?= h($pagodetalle->id_pagodetalles) ?></h3>
            <table>
                <tr>
                    <th><?= __('Pago') ?></th>
                    <td><?= $pagodetalle->has('pago') ? $this->Html->link($pagodetalle->pago->id_pagos, ['controller' => 'Pagos', 'action' => 'view', $pagodetalle->pago->id_pagos]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Catalogo') ?></th>
                    <td><?= $pagodetalle->has('catalogo') ? $this->Html->link($pagodetalle->catalogo->id_catalogos, ['controller' => 'Catalogos', 'action' => 'view', $pagodetalle->catalogo->id_catalogos]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Pagodetalles') ?></th>
                    <td><?= $this->Number->format($pagodetalle->id_pagodetalles) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importe') ?></th>
                    <td><?= $this->Number->format($pagodetalle->importe) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
