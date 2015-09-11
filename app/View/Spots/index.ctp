<div class="spots index">
	<!-- <h2><?php echo __('Spots'); ?></h2> -->
	<h2><?php echo __('スポットの登録'); ?></h2>		<!--	変更	-->

	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name','スポット名'); ?></th>			<!--	変更	-->
			<th><?php echo $this->Paginator->sort('genre_id','ジャンル'); ?></th>			<!--	変更	-->
			<th><?php echo $this->Paginator->sort('comment','説明'); ?></th>			<!--	変更	-->
			<th><?php echo $this->Paginator->sort('latitude','緯度'); ?></th>			<!--	変更	-->
			<th><?php echo $this->Paginator->sort('longitude','経度'); ?></th>			<!--	変更	-->
			<!-- <th class="actions"><?php echo __('Actions','編集'); ?></th>			-->
			<th class="actions"><?php echo __('編集'); ?></th>			<!--	変更	-->

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
			<!-- <?php echo $this->Html->link(__('View'), array('action' => 'view', $spot['Spot']['id'])); ?> -->
			<!-- <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $spot['Spot']['id'])); ?> -->
			<!-- <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $spot['Spot']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $spot['Spot']['id']))); ?> -->
			<?php echo $this->Html->link(__('見る'), array('action' => 'view', $spot['Spot']['id'])); ?>	<!--	変更	-->
			<?php echo $this->Html->link(__('編集'), array('action' => 'edit', $spot['Spot']['id'])); ?>	<!--	変更	-->
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $spot['Spot']['id']), array('confirm' => __('本当に削除しますか？', $spot['Spot']['id']))); ?>	<!--	変更	-->
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
		echo $this->Paginator->prev('< ' . __('前へ'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('次へ') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
<h3><?php echo __('レッツ アクティブ'); ?></h3>
	<ul>
		<!-- <li><?php echo $this->Html->link(__('New Spot'), array('action' => 'add')); ?></li> -->
		<li><?php echo $this->Html->link(__('スポットの登録'), array('action' => 'add')); ?></li>	<!--	変更	-->
		<li><?php echo $this->Html->link(__('ジャンル一覧'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('ジャンルの登録'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
	</ul>
</div>
