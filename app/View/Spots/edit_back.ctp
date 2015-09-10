<div class="spots form">
<?php echo $this->Form->create('Spot'); ?>
	<fieldset>
		<legend><?php echo __('Edit Spot'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('genre_id');
		echo $this->Form->input('comment');
		echo $this->Form->input('latitude');
		echo $this->Form->input('longitude');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Spot.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Spot.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Spots'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
	</ul>
</div>
