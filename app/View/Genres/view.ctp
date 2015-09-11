<div class="genres view">
<h2><?php echo __('Genre'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($genre['Genre']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($genre['Genre']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Genre'), array('action' => 'edit', $genre['Genre']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Genre'), array('action' => 'delete', $genre['Genre']['id']), array(), __('Are you sure you want to delete # %s?', $genre['Genre']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Genres'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Spots'), array('controller' => 'spots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Spot'), array('controller' => 'spots', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Spots'); ?></h3>
	<?php if (!empty($genre['Spot'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Genre Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Latitude'); ?></th>
		<th><?php echo __('Longitude'); ?></th>
		<th><?php echo __('Imageurl'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($genre['Spot'] as $spot): ?>
		<tr>
			<td><?php echo $spot['id']; ?></td>
			<td><?php echo $spot['name']; ?></td>
			<td><?php echo $spot['genre_id']; ?></td>
			<td><?php echo $spot['comment']; ?></td>
			<td><?php echo $spot['latitude']; ?></td>
			<td><?php echo $spot['longitude']; ?></td>
			<td><?php echo $spot['imageurl']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'spots', 'action' => 'view', $spot['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'spots', 'action' => 'edit', $spot['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'spots', 'action' => 'delete', $spot['id']), array(), __('Are you sure you want to delete # %s?', $spot['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Spot'), array('controller' => 'spots', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
