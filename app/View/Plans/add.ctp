<?php echo $this->Html->script( 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array( 'inline' => false)); ?>
<?php echo $this->Html->script( 'http://webos-goodies.googlecode.com/svn/trunk/products/jslib/draggable_grid/draggable_grid.js', array( 'inline' => false)); ?>


<style type="text/css">
.draggable {
  display: inline-block;
  vertical-align: top;
  width: 200px;
  height: 40px;
  zoom: 1;
  *display: inline;
  background-color: #00bfff;
}
.handle {
  height: 30px;
  background-color: #00bfff;
}
</style>

<!--
変更点ここまで
-->!
<div class="plans form">

<body>
	<?php $a ="New Spot"; ?>
			<h1><?php echo $this->Html->link($a, array('controller' => 'tops', 'action' => 'index')); ?></h1>
<?php echo $this->Form->create('Plan'); ?>
	<fieldset>
		<?php echo __('プランの登録画面です'); ?>
	<?php

		echo $this->Form->input('name',array('type' => 'text') );
		echo '出発地を選択してください';
		echo $this->Form->input('start', array(
												 'legend' => false,
												 'type' => 'radio',
												 'options' => $radio,
));

		//echo $this->Form->input('start', array('type' => 'text'));
		echo $this->Form->input('member', array('type' => 'text'));
		echo $this->Form->input('cost');
		echo $this->Form->input('season', array('type' => 'text'));
		?>
		</fieldset>

		<fieldset>
			<?php// echo '　　　　　　　1番目　　　　　　　　　　　2番目　　　　　　　　　　　3番目'
			?>

			<div id="grid">
		<?php
for($i=1;$i<4;$i++){
	//	echo $i."番目";

//findでspotsから名前とかを持ってくる？どう表示させる？
//スポット名とコメントを持ってくる
?>

  <div class="draggable"><div class="handle">ここをドラッグしてね！
 </div><div>

<?php
		echo $this->Form->input( 'PlanSpot.'.$i.'.spot_id', array(
			'type' => 'select',
			'options' => $select1));


		 echo $this->Form->input('PlanSpot.'.$i.'.sort', array('default' => "$i", 'class' => 'sort'));
		echo $this->Form->input('PlanSpot.'.$i.'.comment', array('type' => 'text'));
		echo $this->Form->input('PlanSpot.'.$i.'.trans', array('type' => 'text'));
		echo $this->Form->input('PlanSpot.'.$i.'.distance', array('type' => 'int'));
?>

		</div></div>
		<?php
}
	?>
</div>

<script type="text/javascript">
new DraggableGrid('grid', { handleClass: 'handle', onDrop: function(){
//var array =
//console.log(array);
var number = 1;
$(".sort").each(function(){
  $(this).val(number++);
//  console.log($(this).val());
});

  //sortクラスを全部撮ってくる
//foreachをまわす
}
});
</script>
	</fieldset>



  <?php
    for($count=0;$count<27;$count++){
      ?><br><?php
    }?>

<?php echo $this->Form->end(__('登録する')); ?>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Plans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Spot'), array('controller' => 'spots', 'action' => 'index')); ?></li>

	</ul>
</div>
</body>
