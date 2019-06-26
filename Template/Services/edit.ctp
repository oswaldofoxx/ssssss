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
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $service->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?></li>
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
        ['action' => 'delete', $service->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Mechanics'), ['controller' => 'Mechanics', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Mechanic'), ['controller' => 'Mechanics', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($service); ?>
<fieldset>
    <legend><?= __('Edit Service') ?></legend>
    <?php
    echo $this->Form->control('name');
    echo $this->Form->control('description');
    ?>
</fieldset>
<?= $this->Form->button(__("save")); ?>
<?= $this->Form->end() ?>
