<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Mechanics'), ['controller' => 'Mechanics', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Mechanic'), ['controller' => 'Mechanics', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Mechanics'), ['controller' => 'Mechanics', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Mechanic'), ['controller' => 'Mechanics', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($service); ?>
<fieldset>
    <legend><?= __('Add Service') ?></legend>
    <?php
    echo $this->Form->control('name');
    echo $this->Form->control('description');
    ?>
</fieldset>
<?= $this->Form->button(__("add")); ?>
<?= $this->Form->end() ?>
