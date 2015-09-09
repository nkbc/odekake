<div class="plans index">
	<h2><?php echo __('Plans'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('start'); ?></th>
			<th><?php echo $this->Paginator->sort('member'); ?></th>
			<th><?php echo $this->Paginator->sort('cost'); ?></th>
			<th><?php echo $this->Paginator->sort('season'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($plans as $plan): ?>
	<tr>
		<td><?php echo h($plan['Plan']['id']); ?>&nbsp;</td>
		<td><?php echo h($plan['Plan']['name']); ?>&nbsp;</td>
		<td><?php echo h($plan['Plan']['start']); ?>&nbsp;</td>
		<td><?php echo h($plan['Plan']['member']); ?>&nbsp;</td>
		<td><?php echo h($plan['Plan']['cost']); ?>&nbsp;</td>
		<td><?php echo h($plan['Plan']['season']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $plan['Plan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $plan['Plan']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $plan['Plan']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $plan['Plan']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Plan'), array('action' => 'add')); ?></li>
	</ul>
</div>
