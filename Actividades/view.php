<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $actividade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Actividade'), ['action' => 'edit', $actividade->id_actividades], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Actividade'), ['action' => 'delete', $actividade->id_actividades], ['confirm' => __('Are you sure you want to delete # {0}?', $actividade->id_actividades), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Actividades'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Actividade'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="actividades view content">
            <h3><?= h($actividade->id_actividades) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($actividade->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Actividades') ?></th>
                    <td><?= $this->Number->format($actividade->id_actividades) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
