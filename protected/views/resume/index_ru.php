	<div class="container" id="page">
		<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Профпортрет',
)); ?>
 


    <p><?php 
    print($model->info->fio); 
    ?>
    </p>
   <!--  <p><?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'large',
        'label'=>'Learn more',
    )); ?></p> -->
 
<?php $this->endWidget(); ?>


<p>
		Специализация  <span class="badge badge-info"><?php echo $model->info->profession; ?></span><br />
       <!--  Career Objectives:  <?php echo $model->info->quality ?>
		<br /> -->
        Опыт:  <span class="badge badge-info">
		 <?php echo $model->info->exp ?>
		</span>
</p>
<hr>
<h2>
	<div id="exp">Опыт работы</div>
</h2>
			<!-- Цикл по работе -->
			<?php foreach ($model->work as $work): ?>
			<p>
				<dl class="dl-horizontal">
 
				<dt>Компания:</dt> <dd><?php echo '<a href="'.$work->urlcompany.'">'.$work->namecompany ?></a><?php echo " (".$work->countrycompany.")" ?></dd>
				<dt>Должность:</dt> <dd> <span class="label"><?php echo $work->position ?> </span></dd>
				<dt>Обязанности:</dt> <dd><?php echo $work->respon ?></dd>
				<dt>Период:</dt> <dd><?php echo $work->period ?></dd>
				</dl>
			</p>
			<?php endforeach; ?>
<hr>

<h2>
				<div id="study">Образование</div>
</h2>
		
			<p>
				<dl class="dl-horizontal">
 
				<dt>Университет:</dt> <dd><?php echo '<a href="'.$model->info->urluni.'">'.$model->info->university.'</a>'.' ('.$model->info->unicountry.')'; ?></dd>
				<dt>Специальность:</dt> <dd><?php echo $model->info->diploma ?></dd>
				<dt>Период:</dt> <dd><?php echo $model->info->study_per ?></dd>
				</dl>
			</p>
<hr>
	<h2>
					<div id="link">Связь</div>
	</h2>
 <p>
				<dl class="dl-horizontal">
						<?php if(!empty($model->info->telephone)): ?>
							<dt>Телефон:</dt><dd><span class="label label-success"><?php echo $model->info->telephone; ?></span></dd>
			      		<?php endif; ?>

        				<?php if(!empty($model->info->email)) ?>
							<dt>E-mail:</dt><dd><?php echo $model->info->email; ?></dd>
      			

      					<?php if(!empty($model->info->jabber)): ?>
							<?php echo "<dt>jabber1:</dt><dd>".$model->info->jabber; ?></dd>
						<?php endif; ?>
								
      					<?php if(!empty($model->info->skype)): ?>
							<dt>skype:</dt><dd><?php $model->info->skype ?></dd>
						<?php endif; ?>
  				</dl>
			</p>        
<?php 
// foreach ($model->work as $work){
// 	echo $work->namecompany;
// }
 //var_dump($model->work); 

?>
	</div><!-- page -->