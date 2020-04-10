<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $categoria
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->id_categorias], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id_categorias], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id_categorias), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categorias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Categoria'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categorias view content">
            <h3><?= h($categoria->id_categorias) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($categoria->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Categorias') ?></th>
                    <td><?= $this->Number->format($categoria->id_categorias) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
