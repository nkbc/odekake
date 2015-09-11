<!--//app/View/Users/login.ctp-->
<?php echo $this->Html->link(__('新規会員登録はこちら'), array('controller' => 'users', 'action' => 'add')); ?>

<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('ログイン'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>