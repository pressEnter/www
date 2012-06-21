<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * 
	 */ 
	public $contact_form_model;
	/**
	 * 
	 */ 
	protected function beforeAction($action){
		Yii::setPathOfAlias('forms', Yii::getPathOfAlias('application').'/models/forms');
		Yii::import('forms.QuickContactForm');
		$this->contact_form_model = new QuickContactForm;
		if(isset($_POST['QuickContactForm'])){
			$this->contact_form_model->attributes = $_POST['QuickContactForm'];
			if($this->contact_form_model->validate()){
				$headers = "From: {$this->contact_form_model->email}\r\nReply-To: {$this->contact_form_model->email}";
				mail(Yii::app()->params['adminEmail'], 'Contacto desde el sitio', $this->contact_form_model->body, $headers);
				Yii::app()->user->setFlash('success', 'Gracias por contactarse! Estaremos respondiendo.');
				$this->refresh();
			}
		}		
		return parent::beforeAction($action);
	}
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout = 'webroot.themes.v1.views.layouts.main';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
}
