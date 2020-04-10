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
            <?= $this->Html->link(__('List Participantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="participantes form content">
            <?= $this->Form->create($participante) ?>
            <fieldset>
                <legend><?= __('Add Participante') ?></legend>
                <?php
                    echo $this->Form->control('nombrecompleto');
                    echo $this->Form->control('curp');
                    echo $this->Form->control('intitucionprocedencia');
                    echo $this->Form->control('cuenta');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
