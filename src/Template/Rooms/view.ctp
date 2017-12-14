<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Showtime[] $showtimes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Showtimes'), ['controller' => 'Showtimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Showtime'), ['controller' => 'Showtimes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rooms view large-9 medium-8 columns content">
    <h4><?= "Planning room"?></h4>
    <h5><?= h($room->name) ?></h5>
    <table class="vertical-table">
        <tr>
            <th scope="col"><?= "Lundi" ?></th>
            <th scope="col"><?= "Mardi" ?></th>
            <th scope="col"><?= "Mercredi" ?></th>
            <th scope="col"><?= "Jeudi" ?></th>
            <th scope="col"><?= "Vendredi" ?></th>
            <th scope="col"><?= "Samedi" ?></th>
            <th scope="col"><?= "Dimanche" ?></th>
        <tr>
        <?php foreach ($showtimes as $show): ?>
            <tr>
                <li><?= $this->Number->format($show->id) ?></li>
                <li><?= $show->start ?></li>
                <li><?= $show->end ?></li>
            </tr>
        <?php endforeach; ?>
    </table>
</div>