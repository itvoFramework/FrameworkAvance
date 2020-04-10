<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Horario[]|\Cake\Collection\CollectionInterface $horarios
 */
?>
<div class="horarios index content">
    <?= $this->Html->link(__('New Horario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Horarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_horarios') ?></th>
                    <th><?= $this->Paginator->sort('catalogo_id') ?></th>
                    <th><?= $this->Paginator->sort('ponente_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($horarios as $horario): ?>
                <tr>
                    <td><?= $this->Number->format($horario->id_horarios) ?></td>
                    <td><?= $horario->has('catalogo') ? $this->Html->link($horario->catalogo->titulo, ['controller' => 'Catalogos', 'action' => 'view', $horario->catalogo->id_catalogos]) : '' ?></td>
                    <td><?= $horario->has('ponente') ? $this->Html->link($horario->ponente->nombrecompleto, ['controller' => 'Ponentes', 'action' => 'view', $horario->ponente->id_ponentes]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $horario->id_horarios]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $horario->id_horarios]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $horario->id_horarios], ['confirm' => __('Are you sure you want to delete # {0}?', $horario->id_horarios)]) ?>
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
