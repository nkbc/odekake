<!--ジャンルのとこ-->

<div class="plans index">

	<h2><?php echo __('ジャンル'); ?></h2>



<!--genre_id=1のジャンル-->

    	<?php echo $this->Html->link('まったり', /*表示させる名前をここで変更*/
				array('controller' => 'Tops',
						'action' => 'index',
						'?' => [
							'genre_id' => 1	
						]
						));	
		?>

<!--genre_id=2のジャンル-->

		<?php echo $this->Html->link('ゆったり', /*表示させる名前をここで変更*/
				array('controller' => 'Tops',
						'action' => 'index',
						'?' => [
							'genre_id' => 2
						]
						));	
		?>
		
<!--genre_id=3のジャンル-->

		<?php echo $this->Html->link('げんき', /*表示させる名前をここで変更*/
				array('controller' => 'Tops',
						'action' => 'index',
						'?' => [
							'genre_id' => 3
						]
						));	
		?>


		
<!--プラン一覧のとこ-->

	<div style='margin-top:20px'><h2><?php echo __('プラン一覧'); ?></h2></div>
	<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th><?php echo $this->Paginator->sort('start'); ?></th>
					<th><?php echo $this->Paginator->sort('member'); ?></th>
					<th><?php echo $this->Paginator->sort('cost'); ?></th>
					<th><?php echo $this->Paginator->sort('season'); ?></th>

			</tr>
		</thead>
	<tbody>
<?php foreach ($plans as $plan): ?>
	<tr>
		<td><?php echo h($plan['Plan']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link(h($plan['Plan']['name']), array('action' => 'view', $plan['Plan']['id'])); ?>
		<td><?php echo h($plan['Plan']['start']); ?>&nbsp;</td>
		<td><?php echo h($plan['Plan']['member']); ?>&nbsp;</td>
		<td><?php echo h($plan['Plan']['cost']); ?>&nbsp;</td>
		<td><?php echo h($plan['Plan']['season']); ?>&nbsp;</td>

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

<!--Actions-->

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('プランを登録'), array('controller' => 'plans', 'action' => 'add')); ?></li>
		<li><?php echo $this->Form->create();
			echo $this->Form->input('keyword', array(
					'style' => 'width:100px',
			        'div' => false,
			        'label' => 'キーワード検索'
			    )		
			);	
	
		echo $this->Form->submit(__('検索'), array(
		        'div' => false
		    )
		);	

	echo $this->Form->end();?></li>
	</ul>
</div>
