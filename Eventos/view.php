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
            <?= $this->Html->link(__('Edit Evento'), ['action' => 'edit', $evento->id_eventos], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Evento'), ['action' => 'delete', $evento->id_eventos], ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id_eventos), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Eventos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Evento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="eventos view content">
            <h3><?= h($evento->id_eventos) ?></h3>
            <table>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($evento->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logotipo') ?></th>
                    <td><?= h($evento->logotipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lugar') ?></th>
                    <td><?= h($evento->lugar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categoria') ?></th>
                    <td><?= $evento->has('categoria') ? $this->Html->link($evento->categoria->descripcion, ['controller' => 'Categorias', 'action' => 'view', $evento->categoria->descripcion]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Organizadore') ?></th>
                    <td><?= $evento->has('organizadore') ? $this->Html->link($evento->organizadore->nombreorazonsocial, ['controller' => 'Organizadores', 'action' => 'view', $evento->organizadore->nombreorazonsocial]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Eventos') ?></th>
                    <td><?= $this->Number->format($evento->id_eventos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fechainicio') ?></th>
                    <td><?= h($evento->fechainicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fechafin') ?></th>
                    <td><?= h($evento->fechafin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Inicioregistro') ?></th>
                    <td><?= h($evento->inicioregistro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cierreregistro') ?></th>
                    <td><?= h($evento->cierreregistro) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descripcion') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($evento->descripcion)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Observaciones') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($evento->observaciones)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Eslogan') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($evento->eslogan)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Catalogos') ?></h4>
                <?php if (!empty($evento->catalogos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Catalogos') ?></th>
                            <th><?= __('Titulo') ?></th>
                            <th><?= __('Costo') ?></th>
                            <th><?= __('Totalhoras') ?></th>
                            <th><?= __('Cupolimite') ?></th>
                            <th><?= __('Actividad Id') ?></th>
                            <th><?= __('Evento Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($evento->catalogos as $catalogos) : ?>
                        <tr>
                            <td><?= h($catalogos->id_catalogos) ?></td>
                            <td><?= h($catalogos->titulo) ?></td>
                            <td><?= h($catalogos->costo) ?></td>
                            <td><?= h($catalogos->totalhoras) ?></td>
                            <td><?= h($catalogos->cupolimite) ?></td>
                            <td><?= h($catalogos->actividad_id) ?></td>
                            <td><?= h($catalogos->evento_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Catalogos', 'action' => 'view', $catalogos->id_catalogos]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Catalogos', 'action' => 'edit', $catalogos->id_catalogos]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Catalogos', 'action' => 'delete', $catalogos->id_catalogos], ['confirm' => __('Are you sure you want to delete # {0}?', $catalogos->id_catalogos)]) ?>
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
