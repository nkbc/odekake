<div class="plans index">
	<!DOCTYPE html>
	<html lang="ja">

	<h2><?php echo __('プランの一覧'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id','ID'); ?></th>
			<th><?php echo $this->Paginator->sort('name','プラン名'); ?></th>
			<th><?php echo $this->Paginator->sort('start','スタート地点'); ?></th>
			<th><?php echo $this->Paginator->sort('member','誰と行くか'); ?></th>
			<th><?php echo $this->Paginator->sort('cost','費用'); ?></th>
			<th><?php echo $this->Paginator->sort('season','オススメの季節'); ?></th>
			<th class="actions"><?php echo __('編集'); ?></th>
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
			<?php echo $this->Html->link(__('見る'), array('controller' => 'tops','action' => 'view', $plan['Plan']['id'])); ?>
			<?php echo $this->Html->link(__('編集'), array('action' => 'edit', $plan['Plan']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $plan['Plan']['id']), array('confirm' => __('本当に削除しますか？', $plan['Plan']['id']))); ?>
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
	<h3><?php echo __('レッツ アクション'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('プランの作成'), array('action' => 'add')); ?></li>
    <li><?php echo $this->Html->link(__('スポットの作成'), array('controller' => 'spots', 'action' => 'index')); ?></li>

	</ul>
</div>
</html>
