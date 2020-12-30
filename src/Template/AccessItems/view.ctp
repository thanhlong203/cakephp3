<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccessItem $accessItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Access Item'), ['action' => 'edit', $accessItem->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Access Item'), ['action' => 'delete', $accessItem->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $accessItem->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Access Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Access Item'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="accessItems view large-9 medium-8 columns content">
    <h3><?= h($accessItem->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ALIAS') ?></th>
            <td><?= h($accessItem->ALIAS) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DISPLAY NAME') ?></th>
            <td><?= h($accessItem->DISPLAY_NAME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($accessItem->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CONTROLLER ID') ?></th>
            <td><?= $this->Number->format($accessItem->CONTROLLER_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PARENT ID') ?></th>
            <td><?= $this->Number->format($accessItem->PARENT_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ACTIVE FLG') ?></th>
            <td><?= $this->Number->format($accessItem->ACTIVE_FLG) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('INSERT DATETIME') ?></th>
            <td><?= h($accessItem->INSERT_DATETIME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UPDATE DATETIME') ?></th>
            <td><?= h($accessItem->UPDATE_DATETIME) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('SUB FUNCTION') ?></h4>
        <?= $this->Text->autoParagraph(h($accessItem->SUB_FUNCTION)); ?>
    </div>
</div>
