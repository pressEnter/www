<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			// http://www.yiiframework.com/doc/api/1.1/CCaptchaAction
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor' => 0xFFFFFF,
				'foreColor' => 0xFF0D00,
				'height' => 40,
				'width' => 90,
				'padding' => 0,
				'offset' => 2,
				'minLength' => 5,
				'maxLength' => 5,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/homepage.css', 'screen, projection');
		Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/js/jquery-lightbox-0.5/css/jquery.lightbox-0.5.css', 'screen, projection');
		Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery-lightbox-0.5/js/jquery.lightbox-0.5.min.js', CClientScript::POS_BEGIN);
		// Carousel
		Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.bxSlider/jquery.easing.1.3.js', CClientScript::POS_BEGIN);
		Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.bxSlider/jquery.bxSlider.min.js', CClientScript::POS_BEGIN);
		//
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest){
	    		echo $error['message'];
	    	} else {
	        	$this->render('error', $error);
	        }
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{	
		Yii::import('forms.ContactForm');
		$model = new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'], $model->subject, $model->body, $headers);
				Yii::app()->user->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			} else {
				Yii::app()->user->setFlash('error', 'Hay algún error en el formulario. Por favor chequeálo y enviálo nuevamente.');
			}
		}
		$this->render('contact', array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
