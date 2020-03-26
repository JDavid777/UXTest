<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evaluation $evaluation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Evaluations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users Tests'), ['controller' => 'UsersTests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Users Test'), ['controller' => 'UsersTests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evaluations form large-9 medium-8 columns content">
    <?= $this->Form->create($evaluation) ?>
    <fieldset>
        <legend><?= __('Add Evaluation') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('token');
            echo $this->Form->control('active');
            echo $this->Form->control('age');
            echo $this->Form->control('gender');
            echo $this->Form->control('location');
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('users_tests_id', ['options' => $usersTests]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
