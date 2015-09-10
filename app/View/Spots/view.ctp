<div class="spots view">
<!-- <h2><?php echo __('Spot'); ?></h2> -->
<h2><?php echo __('スポット情報'); ?></h2>	<!--	変更	-->
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($spot['Spot']['id']); ?>
			&nbsp;
		</dd>
		<!-- <dt><?php echo __('Name'); ?></dt> -->
		<dt><?php echo __('スポット名'); ?></dt>	<!--	変更	-->
		<dd>
			<?php echo h($spot['Spot']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ジャンル'); ?></dt>	<!--	変更	-->
		<dd>
			<?php echo $this->Html->link($spot['Genre']['name'], array('controller' => 'genres', 'action' => 'view', $spot['Genre']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('説明'); ?></dt>	<!--	変更	-->
		<dd>
			<?php echo h($spot['Spot']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('緯度'); ?></dt>	<!--	変更	-->
		<dd>
			<?php echo h($spot['Spot']['latitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('経度'); ?></dt>	<!--	変更	-->
		<dd>
			<?php echo h($spot['Spot']['longitude']); ?>
			&nbsp;
		</dd>
		<dd>
			<?php echo $this->Label->image($spot['Spot']['image']); ?>
			&nbsp;
		</dd>

	</dl>
<?php echo $this->Form->button('前に戻る', array('type' => 'button', 'onClick' => 'history.back()')) . PHP_EOL; ?>		<!-- 変更	-->

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<!-- <li><?php echo $this->Html->link(__('Edit Spot'), array('action' => 'edit', $spot['Spot']['id'])); ?> </li> -->
		<li><?php echo $this->Html->link(__('このスポットを編集'), array('action' => 'edit', $spot['Spot']['id'])); ?> </li>
		<!-- <li><?php echo $this->Form->postLink(__('Delete Spot'), array('action' => 'delete', $spot['Spot']['id']), array(), __('Are you sure you want to delete # %s?', $spot['Spot']['id'])); ?> </li> -->
		<li><?php echo $this->Form->postLink(__('このスポットを削除'), array('action' => 'delete', $spot['Spot']['id']), array(), __('Are you sure you want to delete # %s?', $spot['Spot']['id'])); ?> </li>
		<!-- <li><?php echo $this->Html->link(__('List Spots'), array('action' => 'index')); ?> </li> -->
		<li><?php echo $this->Html->link(__('スポット一覧'), array('action' => 'index')); ?> </li>
		<!-- <li><?php echo $this->Html->link(__('New Spot'), array('action' => 'add')); ?> </li> -->
		<li><?php echo $this->Html->link(__('スポットの登録'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
	</ul>
</div>
