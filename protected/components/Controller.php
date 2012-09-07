<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var QuickContactForm $contact_form_model
	 * Representa al formulario de contacto que está en el footer de todas las páginas.
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
				$date = date('r');
				$headers = "From: {$this->contact_form_model->email}\r\nReply-To: {$this->contact_form_model->email}\r\nDate: {$date}";
				$url = Yii::app()->request->getHostInfo() . Yii::app()->request->getRequestUri();
				$body = $this->contact_form_model->body . "\r\n\r\n\r\n\r\nEnviado desde: " . $url;
				mail(Yii::app()->params['contactEmail'], 'Contacto desde el sitio', $body, $headers);
				Yii::app()->user->setFlash('success', 'Gracias por contactarse! Pronto nos estaremos comunicando.');
				$this->refresh();
			} else {
				Yii::app()->user->setFlash('error', 'Hay algún error en el formulario. Por favor chequeálo y enviálo nuevamente.');
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
	
	/**
	 * @var string metaDescription
	 * Si no se sobreescribe esta propiedad, se porporciona la descripción por defecto.
	 * 
	 */
	public $metaDescription='pressEnter es una cooperativa de desarrollo de software Argentina con más de 10 años de actividad brindando servicios en el mercado de las tecnologías de información y comunicaciones.';
	
}
