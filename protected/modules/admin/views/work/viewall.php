
 <hr>
<h2>
    <div id="exp">Работа</div>
</h2>
<!-- Цикл по работе -->
<?php foreach ($model as $work): ?>
<p>
<dl class="dl-horizontal">

    <dt>Company:</dt> <dd><a href="#"><?php echo $work->namecompany ?></a><?php echo " (".$work->countrycompany.")" ?></dd>
    <dt>Post:</dt> <dd> <span class="label"><?php echo $work->position ?> </span></dd>
    <dt>Duties:</dt> <dd><?php echo $work->respon ?></dd>
    <dt>Period:</dt> <dd><?php echo $work->period ?></dd>
</dl>
</p>
<?php endforeach; ?>
<hr>
