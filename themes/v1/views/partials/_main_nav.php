
<?php $this->widget('zii.widgets.CMenu',array(
	'htmlOptions' => array(
		'class' => 'nav sf-menu',
	),
	'items' => array(
		array('label' => 'Inicio', 'url' => array('/site/index')),
		array('label' => 'Noticias', 'url' => array('/news')),
		array('label' => 'Servicios', 'url' => array('/services'), 'items' => array(
			array('label' => 'Desarrollo web', 'url' => array('/services/web-development')),
      array('label' => 'Software a medida', 'url' => array('/services/custom-software')),
			array('label' => 'Soporte técnico Linux', 'url' => array('/services/tech-support')),
      array('label' => 'Actividades SUGAR', 'url' => array('/services/sugar-activities')),
			array('label' => 'Hosting', 'url' => array('/services/hosting')),
		)),
		array('label' => 'Nosotros', 'url' => array('/about-us')),
		array('label' => 'Contacto', 'url' => array('/contact')),
		//array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
		//array('label' => 'Logout ('.Yii::app()->user->name.')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
	),
)); ?>
