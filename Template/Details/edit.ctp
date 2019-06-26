<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detail $detail
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $detail->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $detail->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Details'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Factures'), ['controller' => 'Factures', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Facture'), ['controller' => 'Factures', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Replacements'), ['controller' => 'Replacements', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Replacement'), ['controller' => 'Replacements', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $detail->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $detail->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Details'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Factures'), ['controller' => 'Factures', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Facture'), ['controller' => 'Factures', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Replacements'), ['controller' => 'Replacements', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Replacement'), ['controller' => 'Replacements', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($detail); ?>
<fieldset>
    <legend><?= __('Edit Detail') ?></legend>
    <?php
    echo $this->Form->control('facture_id', ['options' => $factures]);
    echo $this->Form->control('replacement_id', ['options' => $replacements]);
    echo $this->Form->control('amount');
    echo $this->Form->control('unit_price');
    echo $this->Form->control('price_total');
    ?>
</fieldset>
<?= $this->Form->button(__("save")); ?>
<?= $this->Form->end() ?>
