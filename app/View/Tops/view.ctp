<div class="plans view">
<!--<h2><?php echo __('Plan'); ?></h2>-->
	<h2>Plan:<?php echo h($plan['Plan']['name']); ?></h2>

	<div font-size="250" style="border-style: solid ; border-width: 1px; padding: 10px 5px 10px 25px; border-color: black; color: blue; background-color: white; width: 800px; height:1500px; border-radius: 10px; box-shadow: 5px 5px 5px #AAA">

		<?php if($plan['Plan']['start'] == '博多駅'):?>
		<img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/JR_Hakata_City_2011_Jan.jpg" style=" vertical-align: middle;height:200px;,width:200px;">
		<?php endif; ?>
		<font size="100"><?php echo h($plan['Plan']['start']); ?></font>
		</br>
	


		<?php foreach ($plan['PlanSpot'] as $view): ?>
			<img src="http://yajidesign.com/i/0213/tnm.png",height="100" width="100">	
			<?php if($view['trans'] == '車'):?><img src="http://www.carsensor.net/CSphoto/cat/TO/S199/TO_S199_F001_M001_1_L.jpg",height="150px" width="150px"> 
			<?php endif; ?>			
			</br>	
			<img src="http://members2.jcom.home.ne.jp/sakura77/TABLE/P1010477.JPG" style=" vertical-align: middle;height:200px;, width:200px;">
			
			<font size="100"><?php echo h($view['Spot']['name']); ?></font>
			</br>
			
		

		<?php endforeach; ?>


	</br>	
	<span style="color: black;">出発地点:<?php echo h($plan['Plan']['start']); ?></span>
	</br>
	<span style="color: black;">人数:<?php echo h($plan['Plan']['member']); ?></span>
	</br>
	<span style="color: black;">費用:<?php echo h($plan['Plan']['cost']); ?></span>
	</div>

	<!--</div>	
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Member'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['member']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Season'); ?></dt>
		<dd>
			<?php echo h($plan['Plan']['season']); ?>
			&nbsp;
		</dd>
	</dl>-->
</div>


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plan'), array('action' => 'edit', $plan['Plan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plan'), array('action' => 'delete', $plan['Plan']['id']), array(), __('Are you sure you want to delete # %s?', $plan['Plan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Plans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan'), array('action' => 'add')); ?> </li>
	</ul>
</div>
