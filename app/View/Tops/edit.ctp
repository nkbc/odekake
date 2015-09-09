<div class="plans form">
<?php echo $this->Form->create('Plan'); ?>
	<fieldset>
		<legend><?php echo __('Edit Plan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('start');
		echo $this->Form->input('member');
		echo $this->Form->input('cost');
		echo $this->Form->input('season');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Plan.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Plan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Plans'), array('action' => 'index')); ?></li>
	</ul>
</div>
