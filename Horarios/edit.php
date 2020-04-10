<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Horario $horario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $horario->id_horarios],
                ['confirm' => __('Are you sure you want to delete # {0}?', $horario->id_horarios), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Horarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="horarios form content">
            <?= $this->Form->create($horario) ?>
            <fieldset>
                <legend><?= __('Edit Horario') ?></legend>
                <?php
                    echo $this->Form->control('catalogo_id', ['options' => $catalogos, 'empty' => true]);
                    echo $this->Form->control('ponente_id', ['options' => $ponentes, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
