<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccessItem $accessItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $accessItem->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $accessItem->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Access Items'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="accessItems form large-9 medium-8 columns content">
    <?= $this->Form->create($accessItem) ?>
    <fieldset>
        <legend><?= __('Edit Access Item') ?></legend>
        <?php
            echo $this->Form->control('CONTROLLER_ID');
            echo $this->Form->control('PARENT_ID');
            echo $this->Form->control('ALIAS');
            echo $this->Form->control('DISPLAY_NAME');
            echo $this->Form->control('SUB_FUNCTION');
            echo $this->Form->control('ACTIVE_FLG');
            echo $this->Form->control('INSERT_DATETIME');
            echo $this->Form->control('UPDATE_DATETIME');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
