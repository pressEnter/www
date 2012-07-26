<?php

class ProjectsController extends Controller
{
	public function actionIndex(){
		$this->render('index');
	}
	
	public function actionDetails($item){
		$valid = array(
			'alba', 
			'calandria',
		);
		if (!in_array($item, $valid)){
			throw new CHttpException(404);
		}
		
		if($item == 'alba'){
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/js/jquery-lightbox-0.5/css/jquery.lightbox-0.5.css', 'screen, projection');
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery-lightbox-0.5/js/jquery.lightbox-0.5.min.js', CClientScript::POS_BEGIN);
		}
		$this->render('details', array('item' => $item));
	}
}
