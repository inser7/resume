<?php

class DefaultController extends Controller
{

	public $layout='/layouts/column1';
	public function actionIndex()
	{
		if(Yii::app()->user->isGuest)
				$this->redirect(array('/user/login'));
		else
		{

			$this->render('index');
		}
	}
}