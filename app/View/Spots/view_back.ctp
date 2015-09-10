<div class="spots view">
<h2><?php echo __('Spot'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($spot['Spot']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($spot['Spot']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($spot['Genre']['name'], array('controller' => 'genres', 'action' => 'view', $spot['Genre']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($spot['Spot']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latitude'); ?></dt>
		<dd>
			<?php echo h($spot['Spot']['latitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longitude'); ?></dt>
		<dd>
			<?php echo h($spot['Spot']['longitude']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Spot'), array('action' => 'edit', $spot['Spot']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Spot'), array('action' => 'delete', $spot['Spot']['id']), array(), __('Are you sure you want to delete # %s?', $spot['Spot']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Spots'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Spot'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
	</ul>
</div>
