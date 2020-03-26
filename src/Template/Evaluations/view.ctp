<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evaluation $evaluation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evaluation'), ['action' => 'edit', $evaluation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evaluation'), ['action' => 'delete', $evaluation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Evaluations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evaluation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users Tests'), ['controller' => 'UsersTests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Test'), ['controller' => 'UsersTests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="evaluations view large-9 medium-8 columns content">
    <h3><?= h($evaluation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($evaluation->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Token') ?></th>
            <td><?= h($evaluation->token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($evaluation->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($evaluation->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Users Test') ?></th>
            <td><?= $evaluation->has('users_test') ? $this->Html->link($evaluation->users_test->id, ['controller' => 'UsersTests', 'action' => 'view', $evaluation->users_test->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($evaluation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($evaluation->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($evaluation->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($evaluation->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($evaluation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($evaluation->modified) ?></td>
        </tr>
    </table>
</div>
