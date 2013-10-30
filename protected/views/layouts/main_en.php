<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <!-- <link rel="stylesheet/less" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.less" media="screen" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="print" /> -->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php
       
        $webPath = Yii::app()->assetManager->publish(Yii::app()->basePath . '/assets/css');
        Yii::app()->clientScript->registerCssFile($webPath . '/my.css');
    ?>
</head>
<body>
<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brand'=>'Resume',
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Experience', 'icon'=>'icon-tag', 'url'=>'#'),
                array('label'=>'Education', 'icon'=>'icon-book', 'url'=>'#'),
                array('label'=>'Contact', 'icon'=>'icon-user', 'url'=>'#'),
            ),
        ),
       
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'dropup'=>false,
            'items'=>array(
               array('label'=>'Lang', 'url'=>'#', 'items'=>array(
                    array('label'=>'En', 'url'=>'/en/'),
                    array('label'=>'Ru', 'url'=>'/ru/'),
                )),
                ),
            ),
   		),
)); ?>


	<?php echo $content; ?>
</body>
</html>
