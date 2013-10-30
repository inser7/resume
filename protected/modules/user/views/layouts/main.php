<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <?php
        $module = Yii::app()->getModule('user');
        $webPath = Yii::app()->assetManager->publish($module->basePath . '/assets/css');
        Yii::app()->clientScript->registerCssFile($webPath . '/overbootstrap.css');
    ?>
</head>
<body>
    <div class="container">
      <div class="content">
        <div class="row">
          <div class="login-form">
            <h2>Login</h2>
  		        <?php echo $content; ?>
          </div>
        </div>
      </div>
    </div> <!-- /container -->
</body>
</html>