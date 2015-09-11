<div class="plans form">
<?php echo $this->Form->create('Plan'); ?>
	<fieldset>
		<legend><?php echo __('プランの編集'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label' => 'プラン名','type' => 'text'));
		echo $this->Form->input('start', array('label' => 'スタート地点','type' => 'text'));
		echo $this->Form->input('member', array('label' => '誰と行く？','type' => 'text'));
		echo $this->Form->input('cost',array('label' => '予算'));
		echo $this->Form->input('season', array('label' => 'おススメの季節','type' => 'text'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('登録する')); ?>
</div>
<div class="actions">
	<h3><?php echo __('レッツ アクション'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('このプランを削除する'), array('action' => 'delete', $this->Form->value('Plan.id')), array(), __('本当に削除しますか？', $this->Form->value('Plan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('プランの一覧を見る'), array('action' => 'index')); ?></li>
	</ul>
</div>
