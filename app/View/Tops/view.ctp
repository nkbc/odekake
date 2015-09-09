<div class="plans view">
<h2><?php echo __('Plan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['member']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Season'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['season']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plan'), array('action' => 'edit', $plan['Plan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plan'), array('action' => 'delete', $plan['Plan']['id']), array(), __('Are you sure you want to delete # %s?', $plan['Plan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Plans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan'), array('action' => 'add')); ?> </li>
	</ul>
</div>
