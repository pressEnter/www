<?php

class TrainingController extends Controller
{
	public function actionIndex(){
		$this->render('index');
	}

	public function actionDetails($item){
		$valid = array(
			'symfony', 
			'drupal',
			'python-django',
			'xhtml-css',
			'gnu-linux',
			'proyecto-alba',
		);

		if (!in_array($item, $valid)){
			throw new CHttpException(404);
		}
		
		$this->render('details', array('item' => $item));
	}
}
