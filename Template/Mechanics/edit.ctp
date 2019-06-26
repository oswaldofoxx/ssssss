<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mechanic $mechanic
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $mechanic->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $mechanic->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Mechanics'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $mechanic->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $mechanic->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Mechanics'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($mechanic); ?>
<fieldset>
    <legend><?= __('Edit Mechanic') ?></legend>
    <?php
    echo $this->Form->control('name');
    echo $this->Form->control('surname');
    echo $this->Form->control('service_id', ['options' => $services]);
    echo $this->Form->control('salary');
    echo $this->Form->control('address');
    echo $this->Form->control('phone');
    echo $this->Form->control('status');
    echo $this->Form->control('cars._ids', ['options' => $cars]);
    ?>
</fieldset>
<?= $this->Form->button(__("save")); ?>
<?= $this->Form->end() ?>
