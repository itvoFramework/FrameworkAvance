<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catalogo $catalogo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Catalogo'), ['action' => 'edit', $catalogo->id_catalogos], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Catalogo'), ['action' => 'delete', $catalogo->id_catalogos], ['confirm' => __('Are you sure you want to delete # {0}?', $catalogo->id_catalogos), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Catalogos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Catalogo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="catalogos view content">
            <h3><?= h($catalogo->id_catalogos) ?></h3>
            <table>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($catalogo->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Actividade') ?></th>
                    <td><?= $catalogo->has('actividade') ? $this->Html->link($catalogo->actividade->descripcion, ['controller' => 'Actividades', 'action' => 'view', $catalogo->actividade->descripcion]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Evento') ?></th>
                    <td><?= $catalogo->has('evento') ? $this->Html->link($catalogo->evento->titulo, ['controller' => 'Eventos', 'action' => 'view', $catalogo->evento->titulo]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Catalogos') ?></th>
                    <td><?= $this->Number->format($catalogo->id_catalogos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Costo') ?></th>
                    <td><?= $this->Number->format($catalogo->costo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totalhoras') ?></th>
                    <td><?= $this->Number->format($catalogo->totalhoras) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cupolimite') ?></th>
                    <td><?= $this->Number->format($catalogo->cupolimite) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Horarios') ?></h4>
                <?php if (!empty($catalogo->horarios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Horarios') ?></th>
                            <th><?= __('Catalogo Id') ?></th>
                            <th><?= __('Ponente Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($catalogo->horarios as $horarios) : ?>
                        <tr>
                            <td><?= h($horarios->id_horarios) ?></td>
                            <td><?= h($horarios->catalogo_id) ?></td>
                            <td><?= h($horarios->ponente_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Horarios', 'action' => 'view', $horarios->id_horarios]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Horarios', 'action' => 'edit', $horarios->id_horarios]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Horarios', 'action' => 'delete', $horarios->id_horarios], ['confirm' => __('Are you sure you want to delete # {0}?', $horarios->id_horarios)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Pagodetalles') ?></h4>
                <?php if (!empty($catalogo->pagodetalles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Pagodetalles') ?></th>
                            <th><?= __('Importe') ?></th>
                            <th><?= __('Pago Id') ?></th>
                            <th><?= __('Catalogo Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($catalogo->pagodetalles as $pagodetalles) : ?>
                        <tr>
                            <td><?= h($pagodetalles->id_pagodetalles) ?></td>
                            <td><?= h($pagodetalles->importe) ?></td>
                            <td><?= h($pagodetalles->pago_id) ?></td>
                            <td><?= h($pagodetalles->catalogo_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pagodetalles', 'action' => 'view', $pagodetalles->id_pagodetalles]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pagodetalles', 'action' => 'edit', $pagodetalles->id_pagodetalles]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pagodetalles', 'action' => 'delete', $pagodetalles->id_pagodetalles], ['confirm' => __('Are you sure you want to delete # {0}?', $pagodetalles->id_pagodetalles)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
