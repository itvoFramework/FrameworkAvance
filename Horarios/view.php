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
            <?= $this->Html->link(__('Edit Horario'), ['action' => 'edit', $horario->id_horarios], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Horario'), ['action' => 'delete', $horario->id_horarios], ['confirm' => __('Are you sure you want to delete # {0}?', $horario->id_horarios), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Horarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Horario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="horarios view content">
            <h3><?= h($horario->id_horarios) ?></h3>
            <table>
                <tr>
                    <th><?= __('Catalogo') ?></th>
                    <td><?= $horario->has('catalogo') ? $this->Html->link($horario->catalogo->titulo, ['controller' => 'Catalogos', 'action' => 'view', $horario->catalogo->id_catalogos]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ponente') ?></th>
                    <td><?= $horario->has('ponente') ? $this->Html->link($horario->ponente->nombrecompleto, ['controller' => 'Ponentes', 'action' => 'view', $horario->ponente->id_ponentes]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Horarios') ?></th>
                    <td><?= $this->Number->format($horario->id_horarios) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Horariodetalles') ?></h4>
                <?php if (!empty($horario->horariodetalles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Horariodetalles') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Horarioinicio') ?></th>
                            <th><?= __('Horariofin') ?></th>
                            <th><?= __('Lugar') ?></th>
                            <th><?= __('Horario Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($horario->horariodetalles as $horariodetalles) : ?>
                        <tr>
                            <td><?= h($horariodetalles->id_horariodetalles) ?></td>
                            <td><?= h($horariodetalles->fecha) ?></td>
                            <td><?= h($horariodetalles->horarioinicio) ?></td>
                            <td><?= h($horariodetalles->horariofin) ?></td>
                            <td><?= h($horariodetalles->lugar) ?></td>
                            <td><?= h($horariodetalles->horario_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Horariodetalles', 'action' => 'view', $horariodetalles->id_horariodetalles]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Horariodetalles', 'action' => 'edit', $horariodetalles->id_horariodetalles]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Horariodetalles', 'action' => 'delete', $horariodetalles->id_horariodetalles], ['confirm' => __('Are you sure you want to delete # {0}?', $horariodetalles->id_horariodetalles)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Participantehorarios') ?></h4>
                <?php if (!empty($horario->participantehorarios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Participantehorarios') ?></th>
                            <th><?= __('Participante Id') ?></th>
                            <th><?= __('Horario Id') ?></th>
                            <th><?= __('Fecharegistro') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($horario->participantehorarios as $participantehorarios) : ?>
                        <tr>
                            <td><?= h($participantehorarios->id_participantehorarios) ?></td>
                            <td><?= h($participantehorarios->participante_id) ?></td>
                            <td><?= h($participantehorarios->horario_id) ?></td>
                            <td><?= h($participantehorarios->fecharegistro) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Participantehorarios', 'action' => 'view', $participantehorarios->id_participantehorarios]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Participantehorarios', 'action' => 'edit', $participantehorarios->id_participantehorarios]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Participantehorarios', 'action' => 'delete', $participantehorarios->id_participantehorarios], ['confirm' => __('Are you sure you want to delete # {0}?', $participantehorarios->id_participantehorarios)]) ?>
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
