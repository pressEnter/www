<?php

class TrainingController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionDetails($item)
	{
		$valid = array(
			'symfony', 
			'drupal',
			'python-django',
			'xhtml-css',
			'gnu-linux',
		);

		if (!in_array($item, $valid)) {
			throw new CHttpException(404);
		}
		
		$this->render('details', array('item' => $item));
	}
	
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
