<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $organizadores
 */
?>
<div class="organizadores index content">
    <?= $this->Html->link(__('New Organizadore'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Organizadores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_organizadores') ?></th>
                    <th><?= $this->Paginator->sort('nombreorazonsocial') ?></th>
                    <th><?= $this->Paginator->sort('rfc') ?></th>
                    <th><?= $this->Paginator->sort('contacto') ?></th>
                    <th><?= $this->Paginator->sort('url') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($organizadores as $organizadore): ?>
                <tr>
                    <td><?= $this->Number->format($organizadore->id_organizadores) ?></td>
                    <td><?= h($organizadore->nombreorazonsocial) ?></td>
                    <td><?= h($organizadore->rfc) ?></td>
                    <td><?= h($organizadore->contacto) ?></td>
                    <td><?= h($organizadore->url) ?></td>
                    <td><?= h($organizadore->correo) ?></td>
                    <td><?= h($organizadore->telefono) ?></td>
                    <td><?= h($organizadore->direccion) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $organizadore->id_organizadores]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $organizadore->id_organizadores]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $organizadore->id_organizadores], ['confirm' => __('Are you sure you want to delete # {0}?', $organizadore->id_organizadores)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
