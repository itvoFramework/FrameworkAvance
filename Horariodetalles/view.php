<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Horariodetalle $horariodetalle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Horariodetalle'), ['action' => 'edit', $horariodetalle->id_horariodetalles], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Horariodetalle'), ['action' => 'delete', $horariodetalle->id_horariodetalles], ['confirm' => __('Are you sure you want to delete # {0}?', $horariodetalle->id_horariodetalles), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Horariodetalles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Horariodetalle'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="horariodetalles view content">
            <h3><?= h($horariodetalle->id_horariodetalles) ?></h3>
            <table>
                <tr>
                    <th><?= __('Lugar') ?></th>
                    <td><?= h($horariodetalle->lugar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Horario') ?></th>
                    <td><?= $horariodetalle->has('horario') ? $this->Html->link($horariodetalle->horario->id_horarios, ['controller' => 'Horarios', 'action' => 'view', $horariodetalle->horario->id_horarios]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Horariodetalles') ?></th>
                    <td><?= $this->Number->format($horariodetalle->id_horariodetalles) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($horariodetalle->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Horarioinicio') ?></th>
                    <td><?= h($horariodetalle->horarioinicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Horariofin') ?></th>
                    <td><?= h($horariodetalle->horariofin) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
