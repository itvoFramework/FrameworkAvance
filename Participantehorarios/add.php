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
            <?= $this->Html->link(__('List Participantehorarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="participantehorarios form content">
            <?= $this->Form->create($participantehorario) ?>
            <fieldset>
                <legend><?= __('Add Participantehorario') ?></legend>
                <?php
                    echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true]);
                    echo $this->Form->control('horario_id', ['options' => $horarios, 'empty' => true]);
                    echo $this->Form->control('fecharegistro', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
