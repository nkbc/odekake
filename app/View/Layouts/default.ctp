
<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$toptitle = '１日おでかけ';
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $toptitle ?>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');	//CSS

		echo $this->fetch('meta');
		 echo $this->fetch('css');
		 echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">

			<h1 style="font-size:50px;padding-top:10px;">
			<?php echo $this->Html->link($toptitle, array('controller' => 'tops', 'action' => 'index')); ?></h1>


			<div Align="right">
				<!---ログイン判定ここから-------------->
				<?php if (!AuthComponent::user()):
				 echo $this->Html->link(__('ユーザ登録はこちら'), array('controller' => 'users', 'action' => 'add'));
			 else:
				 echo 'ようこそ'.AuthComponent::user('username').'さん!' ;
			 endif;
				 ?>
				<!---ログイン判定ここまで-------------->
				<?php echo $this->Html->link(__('トップページ'), array('controller' => 'tops', 'action' => 'index')); ?>
				<?php if(AuthComponent::user('id')): ?>
				<?php echo $this->Html->link(__('マイページ'), array('controller' => 'plans', 'action' => 'index')); ?>

				<?php echo $this->Html->link(__('ログアウト'), array('controller' => 'users', 'action' => 'logout')); ?>
			<?php else: ?>
				<?php echo $this->Html->link(__('ログイン'), array('controller' => 'users', 'action' => 'login')); ?>
			<?php endif ?>
			</div>

		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
<!--	<?php echo $this->element('sql_dump'); ?>-->
</body>
</html>
