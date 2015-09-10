<div class="plans form">
<!DOCTYPE html>
<html lang="ja">
<body>
	<?php $a ="New Spot"; ?>
			<h1><?php echo $this->Html->link($a, array('controller' => 'tops', 'action' => 'index')); ?></h1>
<?php echo $this->Form->create('Plan'); ?>
	<fieldset>
		<?php echo __('プランの登録画面です'); ?>
	<?php


		echo $this->Form->input('name', array('type' => 'text'));
		echo $this->Form->input('start', array('type' => 'text'));
		echo $this->Form->input('member', array('type' => 'text'));
		echo $this->Form->input('cost');
		echo $this->Form->input('season', array('type' => 'text'));
		?>
		</fieldset>
		<fieldset>
		<?php
for($i=1;$i<3;$i++){
		echo $i."番目のスポットを選択してください";
//findでspotsから名前とかを持ってくる？どう表示させる？
//スポット名とコメントを持ってくる
		echo $this->Form->input( 'PlanSpot.'.$i.'.spot_id', array(
			'type' => 'select',
			'options' => $select1));
		echo $this->Form->input('PlanSpot.'.$i.'.sort', array('type' => 'int'));


		echo $this->Form->input('PlanSpot.'.$i.'.comment', array('type' => 'text'));
		echo $this->Form->input('PlanSpot.'.$i.'.trans', array('type' => 'text'));
		echo $this->Form->input('PlanSpot.'.$i.'.distance', array('type' => 'int'));

}
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Plans'), array('action' => 'index')); ?></li>
	</ul>
</div>
</body>

</html>
