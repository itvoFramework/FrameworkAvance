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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $actividade->id_actividades],
                ['confirm' => __('Are you sure you want to delete # {0}?', $actividade->id_actividades), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Actividades'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="actividades form content">
            <?= $this->Form->create($actividade) ?>
            <fieldset>
                <legend><?= __('Edit Actividade') ?></legend>
                <?php
                    echo $this->Form->control('descripcion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
