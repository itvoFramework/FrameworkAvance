<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $participante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Participante'), ['action' => 'edit', $participante->id_participantes], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Participante'), ['action' => 'delete', $participante->id_participantes], ['confirm' => __('Are you sure you want to delete # {0}?', $participante->id_participantes), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Participantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Participante'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="participantes view content">
            <h3><?= h($participante->id_participantes) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombrecompleto') ?></th>
                    <td><?= h($participante->nombrecompleto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Curp') ?></th>
                    <td><?= h($participante->curp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Intitucionprocedencia') ?></th>
                    <td><?= h($participante->intitucionprocedencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cuenta') ?></th>
                    <td><?= h($participante->cuenta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($participante->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Participantes') ?></th>
                    <td><?= $this->Number->format($participante->id_participantes) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
