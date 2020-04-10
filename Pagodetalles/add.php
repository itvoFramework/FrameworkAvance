<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pagodetalle $pagodetalle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Pagodetalles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pagodetalles form content">
            <?= $this->Form->create($pagodetalle) ?>
            <fieldset>
                <legend><?= __('Add Pagodetalle') ?></legend>
                <?php
                    echo $this->Form->control('importe');
                    echo $this->Form->control('pago_id', ['options' => $pagos, 'empty' => true]);
                    echo $this->Form->control('catalogo_id', ['options' => $catalogos, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
