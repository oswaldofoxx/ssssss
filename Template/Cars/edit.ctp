<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $car->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $car->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Cars'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Mechanics'), ['controller' => 'Mechanics', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Mechanic'), ['controller' => 'Mechanics', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $car->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $car->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Cars'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Mechanics'), ['controller' => 'Mechanics', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Mechanic'), ['controller' => 'Mechanics', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($car); ?>
<fieldset>
    <legend><?= __('Edit Car') ?></legend>
    <?php
    echo $this->Form->control('license');
    echo $this->Form->control('user_id', ['options' => $users]);
    echo $this->Form->control('maker');
    echo $this->Form->control('colour');
    echo $this->Form->control('mechanics._ids', ['options' => $mechanics]);
    ?>
</fieldset>
<?= $this->Form->button(__("save")); ?>
<?= $this->Form->end() ?>
