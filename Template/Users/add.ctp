<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Factures'), ['controller' => 'Factures', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Facture'), ['controller' => 'Factures', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Factures'), ['controller' => 'Factures', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Facture'), ['controller' => 'Factures', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($user); ?>
<fieldset>
    <legend><?= __('Add User') ?></legend>
    <?php
    echo $this->Form->control('role_id', ['options' => $roles]);
    echo $this->Form->control('name');
    echo $this->Form->control('surname');
    echo $this->Form->control('email');
    echo $this->Form->control('password');
    echo $this->Form->control('address');
    echo $this->Form->control('phone');
    echo $this->Form->control('status');
    ?>
</fieldset>
<?= $this->Form->button(__("add")); ?>
<?= $this->Form->end() ?>
