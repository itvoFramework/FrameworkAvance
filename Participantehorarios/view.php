<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Participantehorario $participantehorario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Participantehorario'), ['action' => 'edit', $participantehorario->id_participantehorarios], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Participantehorario'), ['action' => 'delete', $participantehorario->id_participantehorarios], ['confirm' => __('Are you sure you want to delete # {0}?', $participantehorario->id_participantehorarios), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Participantehorarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Participantehorario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="participantehorarios view content">
            <h3><?= h($participantehorario->id_participantehorarios) ?></h3>
            <table>
                <tr>
                    <th><?= __('Participante') ?></th>
                    <td><?= $participantehorario->has('participante') ? $this->Html->link($participantehorario->participante->nombrecompleto, ['controller' => 'Participantes', 'action' => 'view', $participantehorario->participante->id_participantes]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Horario') ?></th>
                    <td><?= $participantehorario->has('horario') ? $this->Html->link($participantehorario->horario->id_horarios, ['controller' => 'Horarios', 'action' => 'view', $participantehorario->horario->id_horarios]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Participantehorarios') ?></th>
                    <td><?= $this->Number->format($participantehorario->id_participantehorarios) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecharegistro') ?></th>
                    <td><?= h($participantehorario->fecharegistro) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
