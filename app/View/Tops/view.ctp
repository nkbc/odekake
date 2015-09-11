<div class="plans view">


<!--<h2><?php echo __('Plan'); ?></h2>-->
	<h2>Plan:<?php echo h($plan['Plan']['name']); ?></h2>

	<div font-size="250" style="border-style: solid ; border-width: 1px; padding: 10px 5px 10px 50px; border-color: black; color: blue; background-color: white; width: 800px;  border-radius: 10px; box-shadow: 5px 5px 5px #AAA;overflow : visible; ">

		<div style="border-style: solid ; border-width: 1px; padding: 10px 5px 10px 25px; border-color: black; color: blue; background-color: white; width: 600px;  border-radius: 10px;overflow :auto;">
		<?php if($plan['Plan']['start'] == '博多駅'):?>
		<font style="font-size:30px"><?php echo h($plan['Plan']['start']); ?></font></br>
		<img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/JR_Hakata_City_2011_Jan.jpg" style=" vertical-align: middle;height:150px;width:200px;">
		<?php elseif($plan['Plan']['start'] == '天神駅'):?>
		<img src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Solaria_Terminal_Building_-_01.JPG" style=" vertical-align: middle;height:150px;width:200px;">
		<?php else:?>
			<img src="http://img.laughy.jp/13500/default_26b4eedced17d470ff6625d2dd0d11a4.jpg" style=" vertical-align: middle;height:150px;width:200px;">
			
			家で引き籠ってろ！m9(^Д^)ﾌﾟｷﾞｬｰ
		<?php endif; ?>
		<font style="color:red;font-size:25px;">START!!!!</font>

		
		</div>
		</br>
	


		<?php foreach ($plan['PlanSpot'] as $view): ?>
			<img src="http://yajidesign.com/i/0213/tnm.png" style="height:100px; width:100px;vertical-align: middle;" >	
			<?php if($view['trans'] == '車'||$view['trans'] == '自動車'):?>
				<img src="http://www.carsensor.net/CSphoto/cat/TO/S199/TO_S199_F001_M001_1_L.jpg" style="height:150px; width:150px;vertical-align: middle"> 
					自動車 
			<?php elseif($view['trans'] == '徒歩' || $view['trans'] == '歩き'):?>
				<img src="http://cdns2.freepik.com/free-photo/_318-27604.jpg" height="150px" width="150px" style="vertical-align: middle">
					歩き
			<?php elseif($view['trans'] == '電車' || $view['trans'] == '地下鉄'):?>
				<img src="http://www.geocities.jp/motorcity_pit8419/subway/F1529.jpg" height="150px" width="150px" style="vertical-align: middle">
					地下鉄
				<?php else:?>
					ほふく前進でもして行くんだな!m9(^Д^)ﾌﾟｷﾞｬｰ
			<?php endif; ?>			
			</br>	


			<div style="border-style: solid ; border-width: 1px; padding: 10px 5px 10px 25px; border-color: black; color: blue; background-color: white; width: 600px;  border-radius: 10px;overflow : auto">
				<font style="font-size:30px"><?php echo h($view['Spot']['name']); ?></font></br>
				<?php if($view['Spot']['imageurl']) :?>
					<img src="<?php echo $view['Spot']['imageurl'] ?>"　style="height:150px; width:200px;vertical-align: middle;">
				<?php else: ?>
				<img src="http://www.cocowill.com/wordpress/wp-content/themes/cocowill/img/noimage.png"　style="height:150px; width:200px;vertical-align: middle;">
				<?php endif; ?>
				<font style="font-size:15px" color="black"><?php echo h($view['Spot']['comment']); ?></font>
			</div>
			</br>
			
			<?php endforeach; ?>


	</br>	
	<span style="color: black; font-size:20px;">出発地点:<?php echo h($plan['Plan']['start']); ?></span>
	</br>
	<span style="color: black;font-size:20px;">人数:<?php echo h($plan['Plan']['member']); ?></span>
	</br>
	<span style="color: black;font-size:20px;">費用:<?php echo h($plan['Plan']['cost']); ?></span>
	

	<!--<?php echo $this->Html->link(__('お気に入り登録'), array('action' => 'view', $plan['Plan']['id'])); ?> -->






	</div>

<?php echo $this->Form->create('Review'); ?>
	<fieldset>
		<legend><?php echo __('Add Review'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('review');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

</div>




<div class="actions">
	<h3><?php echo __('レッツ アクティブ'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('プラン編集'), array('action' => 'edit', $plan['Plan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('プラン削除'), array('action' => 'delete', $plan['Plan']['id']), array(), __('Are you sure you want to delete # %s?', $plan['Plan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('プランリスト'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('プラン作成'), array('controller' => 'plans', 'action' => 'add')); ?> </li>

	</ul>
</div>
