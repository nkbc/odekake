<div class="spots index">
	<h2><?php echo __('Spots'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('genre_id'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('latitude'); ?></th>
			<th><?php echo $this->Paginator->sort('longitude'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($spots as $spot): ?>
	<tr>
		<td><?php echo h($spot['Spot']['id']); ?>&nbsp;</td>
		<td><?php echo h($spot['Spot']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($spot['Genre']['name'], array('controller' => 'genres', 'action' => 'view', $spot['Genre']['id'])); ?>
		</td>
		<td><?php echo h($spot['Spot']['comment']); ?>&nbsp;</td>
		<td><?php echo h($spot['Spot']['latitude']); ?>&nbsp;</td>
		<td><?php echo h($spot['Spot']['longitude']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $spot['Spot']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $spot['Spot']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $spot['Spot']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $spot['Spot']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Spot'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
	</ul>
</div>
