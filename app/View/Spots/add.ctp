<div class="spots form">
<?php echo $this->Form->create('Spot',['type' => 'file']); ?>
	<fieldset>
		<!-- <legend><?php echo __('Add Spot'); ?></legend> -->
		<legend><?php echo __('スポットの追加'); ?></legend>	<!--	変更	-->
	<?php
		// echo $this->Form->input('name');
		// echo $this->Form->input('genre_id');
		// echo $this->Form->input('comment');
		// echo $this->Form->input('latitude');
		// echo $this->Form->input('longitude');
		echo $this->Form->input('name',array('label' => 'スポット名','type' => 'text'));	//	変更
		echo $this->Form->input('genre_id',['label' => 'ジャンル']);	//	変更
		echo $this->Form->input('comment',['label' => '説明']);	//	変更
		echo $this->Form->input('latitude',['label' => '緯度']);	//	変更
		echo $this->Form->input('longitude',['label' => '経度']);	//	変更
		echo $this->Form->input('image', array('label' => '写真の投稿','type' => 'file'));
	?>
	</fieldset>
<!-- <?php echo $this->Form->end(__('Submit')); ?> -->
<?php echo $this->Form->end(__('登録する！')); ?>	<!--	変更	-->
<?php echo $this->Form->button('前に戻る', array('type' => 'button', 'onClick' => 'history.back()')) . PHP_EOL; ?>		<!-- 変更	-->

</div>
<div class="actions">
	<h3><?php echo __('レッツ アクティブ'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('スポット一覧'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('ジャンル一覧'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('ジャンルの登録'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
	</ul>
</div>
