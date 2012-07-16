<?php

class DefaultController extends Controller
{
	public $layout = 'application.modules.admin.views.layouts.column2';
	
	public function actionIndex()
	{
		$this->render('index');
	}
}
