<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel
{
	public $name;
	public $subject;
	public $email;
	public $body;
	public $verifyCode;

	public $subjectOptions = array(
		null => '',
		1 => 'Capacitación',
		'Enviar CV',
		'Hosting',
		'Proyecto Alba',
		'Solicitud de presupuesto',
		'Soporte técnico',
		'Otro motivo',
	);

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('name, subject, email, body', 'required'),
			// email has to be a valid email address
			array('email', 'email'),
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'name' => 'Nombre',
			'subject' => 'Asunto',
			'email' => 'Email',
			'body' => 'Mensaje',
			'verifyCode' => 'Código de verificación',
		);
	}
	public function getSubject(){
		die(var_export($this->subjectOptions[$this->subject])); 
		return $this->subjectOptions[$this->subject];
	}
}
