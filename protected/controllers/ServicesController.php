<?php

class ServicesController extends Controller
{
	public function actionIndex(){
		$this->render('index');
	}

	public function actionDetails($item){
		$valid = array(
			'tech-support', 
			'web-development',
			'sugar-activities',
			'hosting',
			'custom-software',
		);

		if (!in_array($item, $valid)){
			throw new CHttpException(404);
		}
		
		$this->render('details', array('item' => $item));
	}
}
