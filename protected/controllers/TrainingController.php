<?php

class TrainingController extends Controller
{
	private function modal(){
		$cs = Yii::app()->clientScript;
		$modal_url = Yii::app()->theme->baseUrl . '/js/osx/';
		$cs->registerCssFile($modal_url . 'css/osx.css');
		$cs->registerCss('modal', '
			div#osx-modal-data a:link, 
			div#osx-modal-data a:visited { 
				color: #F01800;
				text-decoration: none;
			}
			div#osx-modal-data a:hover { 
				text-decoration: underline;
			}
		');
		$cs->registerScriptFile($modal_url . 'js/jquery.simplemodal.js', CClientScript::POS_END);
		$cs->registerScriptFile($modal_url . 'js/osx.js', CClientScript::POS_END);
		$cs->registerScript('modal', '$("input.osx").click();', CClientScript::POS_READY);		
	}
	
	public function actionIndex(){
		$this->modal();
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
		
		if($item != 'proyecto-alba'){
			$this->modal();
		}
		
		$this->render('details', array('item' => $item));
	}
}
