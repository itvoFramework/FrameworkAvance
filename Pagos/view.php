<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pago $pago
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pago'), ['action' => 'edit', $pago->id_pagos], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pago'), ['action' => 'delete', $pago->id_pagos], ['confirm' => __('Are you sure you want to delete # {0}?', $pago->id_pagos), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pagos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pago'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pagos view content">
            <h3><?= h($pago->id_pagos) ?></h3>
            <table>
                <tr>
                    <th><?= __('Participante') ?></th>
                    <td><?= $pago->has('participante') ? $this->Html->link($pago->participante->nombrecompleto, ['controller' => 'Participantes', 'action' => 'view', $pago->participante->nombrecompleto]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Pagos') ?></th>
                    <td><?= $this->Number->format($pago->id_pagos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fechapago') ?></th>
                    <td><?= h($pago->fechapago) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Pagodetalles') ?></h4>
                <?php if (!empty($pago->pagodetalles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Pagodetalles') ?></th>
                            <th><?= __('Importe') ?></th>
                            <th><?= __('Pago Id') ?></th>
                            <th><?= __('Catalogo Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($pago->pagodetalles as $pagodetalles) : ?>
                        <tr>
                            <td><?= h($pagodetalles->id_pagodetalles) ?></td>
                            <td><?= h($pagodetalles->importe) ?></td>
                            <td><?= h($pagodetalles->pago_id) ?></td>
                            <td><?= h($pagodetalles->catalogo_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pagodetalles', 'action' => 'view', $pagodetalles->id_pagodetalles]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pagodetalles', 'action' => 'edit', $pagodetalles->id_pagodetalles]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pagodetalles', 'action' => 'delete', $pagodetalles->id_pagodetalles], ['confirm' => __('Are you sure you want to delete # {0}?', $pagodetalles->id_pagodetalles)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
