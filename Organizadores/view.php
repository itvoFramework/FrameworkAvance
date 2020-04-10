<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $organizadore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Organizadore'), ['action' => 'edit', $organizadore->id_organizadores], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Organizadore'), ['action' => 'delete', $organizadore->id_organizadores], ['confirm' => __('Are you sure you want to delete # {0}?', $organizadore->id_organizadores), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Organizadores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Organizadore'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="organizadores view content">
            <h3><?= h($organizadore->id_organizadores) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombreorazonsocial') ?></th>
                    <td><?= h($organizadore->nombreorazonsocial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rfc') ?></th>
                    <td><?= h($organizadore->rfc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contacto') ?></th>
                    <td><?= h($organizadore->contacto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Url') ?></th>
                    <td><?= h($organizadore->url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($organizadore->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($organizadore->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($organizadore->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Organizadores') ?></th>
                    <td><?= $this->Number->format($organizadore->id_organizadores) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
