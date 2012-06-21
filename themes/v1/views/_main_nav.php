
<?php $this->widget('zii.widgets.CMenu',array(
	'htmlOptions' => array(
		'class' => 'sf-menu',
	),
	'items' => array(
		array('label' => 'Inicio', 'url' => array('/site/index')),
		array('label' => 'Noticias', 'url' => array('/site/index')),
		array('label' => 'Capacitación', 'url' => array('/site/index'), 'items' => array(
			array('label' => 'Symfony', 'url' => array('/site/index')),
			array('label' => 'Drupal', 'url' => array('/site/index')),
		)),
		array('label' => 'Servicios', 'url' => array('/site/index')),
		array('label' => 'Nosotros', 'url' => array('/site/page', 'view' => 'about')),
		array('label' => 'Contact', 'url' => array('/site/contact')),
		//array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
		//array('label' => 'Logout ('.Yii::app()->user->name.')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
	),
)); ?>
