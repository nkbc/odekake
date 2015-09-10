<div class="spots form">
<?php echo $this->Form->create('Spot'); ?>
	<fieldset>
		<!-- <legend><?php echo __('Edit Spot'); ?></legend> -->
		<legend><?php echo __('スポットの編集'); ?></legend>	<!--	変更	-->
	<?php
		// echo $this->Form->input('id');
		// echo $this->Form->input('name');
		// echo $this->Form->input('genre_id');
		// echo $this->Form->input('comment');
		// echo $this->Form->input('latitude');
		// echo $this->Form->input('longitude');
		echo $this->Form->input('id');
		// echo $this->Form->input('name',['label' => 'スポット名']);
		echo $this->Form->input('name',array('label' => 'スポット名','type' => 'text'));
		echo $this->Form->input('genre_id',['label' => 'ジャンル']);
		echo $this->Form->input('comment',['label' => '説明']);
		echo $this->Form->input('latitude',['label' => '緯度']);
		echo $this->Form->input('longitude',['label' => '経度']);

	?>
	</fieldset>
<?php echo $this->Form->end(__('登録する！')); ?>
<?php echo $this->Form->button('前に戻る', array('type' => 'button', 'onClick' => 'history.back()')) . PHP_EOL; ?>		<!-- 変更	-->

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<!-- <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Spot.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Spot.id'))); ?></li> -->
		<li><?php echo $this->Form->postLink(__('このスポットを削除'), array('action' => 'delete', $this->Form->value('Spot.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Spot.id'))); ?></li>
		<!-- <li><?php echo $this->Html->link(__('List Spots'), array('action' => 'index')); ?></li> -->
		<li><?php echo $this->Html->link(__('スポット一覧'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
	</ul>
</div>
