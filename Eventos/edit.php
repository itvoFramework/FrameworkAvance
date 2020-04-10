<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evento $evento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $evento->id_eventos],
                ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id_eventos), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Eventos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="eventos form content">
            <?= $this->Form->create($evento) ?>
            <fieldset>
                <legend><?= __('Edit Evento') ?></legend>
                <?php
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('fechainicio', ['empty' => true]);
                    echo $this->Form->control('fechafin', ['empty' => true]);
                    echo $this->Form->control('observaciones');
                    echo $this->Form->control('logotipo');
                    echo $this->Form->control('eslogan');
                    echo $this->Form->control('lugar');
                    echo $this->Form->control('inicioregistro', ['empty' => true]);
                    echo $this->Form->control('cierreregistro', ['empty' => true]);
                    echo $this->Form->control('categoria_id', ['options' => $categorias, 'empty' => true]);
                    echo $this->Form->control('organizador_id', ['options' => $organizadores, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
