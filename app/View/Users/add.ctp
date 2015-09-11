<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('新規会員登録'); ?></legend>
        <?php echo $this->Form->input('username',array('label' => 'お名前'));
        echo $this->Form->input('password',array('label' => 'パスワード'));
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('登録')); ?>
</div>
<div class="actions">
	<h3><?php echo __('レッツ アクション'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('ユーザー一覧'), array('action' => 'index')); ?></li>
	</ul>
</div>
