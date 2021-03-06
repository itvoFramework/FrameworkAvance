<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $ponente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ponentes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ponentes form content">
            <?= $this->Form->create($ponente) ?>
            <fieldset>
                <legend><?= __('Add Ponente') ?></legend>
                <?php
                    echo $this->Form->control('nombrecompleto');
                    echo $this->Form->control('sexo');
                    echo $this->Form->control('foto');
                    echo $this->Form->control('cv');
                    echo $this->Form->control('nivelacademico');
                    echo $this->Form->control('cuenta');
                    echo $this->Form->control('password');
                    echo $this->Form->control('correo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
