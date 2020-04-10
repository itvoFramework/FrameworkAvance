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
            <?= $this->Html->link(__('List Horariodetalles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="horariodetalles form content">
            <?= $this->Form->create($horariodetalle) ?>
            <fieldset>
                <legend><?= __('Add Horariodetalle') ?></legend>
                <?php
                    echo $this->Form->control('fecha', ['empty' => true]);
                    echo $this->Form->control('horarioinicio', ['empty' => true]);
                    echo $this->Form->control('horariofin', ['empty' => true]);
                    echo $this->Form->control('lugar');
                    echo $this->Form->control('horario_id', ['options' => $horarios, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
