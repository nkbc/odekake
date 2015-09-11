<div class="plans view">
<h2><?php echo __('このプランについて'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('プラン名'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('スタート地点'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('誰と行く？'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['member']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('予算'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('おススメの季節'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['season']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('レッツ アクション'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('このプランを編集'), array('action' => 'edit', $plan['Plan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('このプランを削除'), array('action' => 'delete', $plan['Plan']['id']), array(), __('本当に削除しますか？', $plan['Plan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('プランの一覧を見る'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('プランを登録する'), array('action' => 'add')); ?> </li>
	</ul>
</div>
