<?php

class ResumeController extends Controller
{


	//public $layout='//layouts/main_ru';
 

  public function actionIndex()
    {
    	
    	// var_dump('f');
      // public $layout = '/layouts/auth.php';

        // echo 'test server';
      //  $model = new User;
    	//$post=$this->loadModel();

      $user=User::model()->with('info')->findByPk(1);

        // var_dump($user->work->namecompany);
        // exit();

      $lang = Yii::app()->language;

      switch($lang)
      {
        case "ru":
          $this->layout = '//layouts/main_ru';
          $this->render('index_ru',array('model'=>$user));
          break;
        case "en":
          $this->layout = '//layouts/main_en';
          $this->render('index_en',array('model'=>$user));
          break;
      }
      
       // var_dump(Yii::app()->language);

    }
}