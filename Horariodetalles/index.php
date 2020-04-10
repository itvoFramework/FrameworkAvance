<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Horariodetalle[]|\Cake\Collection\CollectionInterface $horariodetalles
 */
?>
<div class="horariodetalles index content">
    <?= $this->Html->link(__('New Horariodetalle'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Horariodetalles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_horariodetalles') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('horarioinicio') ?></th>
                    <th><?= $this->Paginator->sort('horariofin') ?></th>
                    <th><?= $this->Paginator->sort('lugar') ?></th>
                    <th><?= $this->Paginator->sort('horario_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($horariodetalles as $horariodetalle): ?>
                <tr>
                    <td><?= $this->Number->format($horariodetalle->id_horariodetalles) ?></td>
                    <td><?= h($horariodetalle->fecha) ?></td>
                    <td><?= h($horariodetalle->horarioinicio) ?></td>
                    <td><?= h($horariodetalle->horariofin) ?></td>
                    <td><?= h($horariodetalle->lugar) ?></td>
                    <td><?= $horariodetalle->has('horario') ? $this->Html->link($horariodetalle->horario->id_horarios, ['controller' => 'Horarios', 'action' => 'view', $horariodetalle->horario->id_horarios]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $horariodetalle->id_horariodetalles]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $horariodetalle->id_horariodetalles]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $horariodetalle->id_horariodetalles], ['confirm' => __('Are you sure you want to delete # {0}?', $horariodetalle->id_horariodetalles)]) ?>
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
