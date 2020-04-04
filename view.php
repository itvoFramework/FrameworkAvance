<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $pago
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pago'), ['action' => 'edit', $pago->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pago'), ['action' => 'delete', $pago->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pago->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pagos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pago'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pagos view content">
            <h3><?= h($pago->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pago->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Participante Id') ?></th>
                    <td><?= $this->Number->format($pago->participante_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fechapago') ?></th>
                    <td><?= h($pago->fechapago) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
