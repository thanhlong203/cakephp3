<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccessItem[]|\Cake\Collection\CollectionInterface $accessItems
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Access Item'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="accessItems index large-9 medium-8 columns content">
    <h3><?= __('Access Items') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CONTROLLER_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PARENT_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ALIAS') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DISPLAY_NAME') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ACTIVE_FLG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('INSERT_DATETIME') ?></th>
                <th scope="col"><?= $this->Paginator->sort('UPDATE_DATETIME') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($accessItems as $accessItem): ?>
            <tr>
                <td><?= $this->Number->format($accessItem->ID) ?></td>
                <td><?= $this->Number->format($accessItem->CONTROLLER_ID) ?></td>
                <td><?= $this->Number->format($accessItem->PARENT_ID) ?></td>
                <td><?= h($accessItem->ALIAS) ?></td>
                <td><?= h($accessItem->DISPLAY_NAME) ?></td>
                <td><?= $this->Number->format($accessItem->ACTIVE_FLG) ?></td>
                <td><?= h($accessItem->INSERT_DATETIME) ?></td>
                <td><?= h($accessItem->UPDATE_DATETIME) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $accessItem->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $accessItem->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $accessItem->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $accessItem->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
