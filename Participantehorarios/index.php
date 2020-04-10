<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Participantehorario[]|\Cake\Collection\CollectionInterface $participantehorarios
 */
?>
<div class="participantehorarios index content">
    <?= $this->Html->link(__('New Participantehorario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Participantehorarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_participantehorarios') ?></th>
                    <th><?= $this->Paginator->sort('participante_id') ?></th>
                    <th><?= $this->Paginator->sort('horario_id') ?></th>
                    <th><?= $this->Paginator->sort('fecharegistro') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($participantehorarios as $participantehorario): ?>
                <tr>
                    <td><?= $this->Number->format($participantehorario->id_participantehorarios) ?></td>
                    <td><?= $participantehorario->has('participante') ? $this->Html->link($participantehorario->participante->nombrecompleto, ['controller' => 'Participantes', 'action' => 'view', $participantehorario->participante->id_participantes]) : '' ?></td>
                    <td><?= $participantehorario->has('horario') ? $this->Html->link($participantehorario->horario->id_horarios, ['controller' => 'Horarios', 'action' => 'view', $participantehorario->horario->id_horarios]) : '' ?></td>
                    <td><?= h($participantehorario->fecharegistro) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $participantehorario->id_participantehorarios]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $participantehorario->id_participantehorarios]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $participantehorario->id_participantehorarios], ['confirm' => __('Are you sure you want to delete # {0}?', $participantehorario->id_participantehorarios)]) ?>
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
