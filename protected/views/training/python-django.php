<?php $this->pageTitle = 'pressEnter | Capacitación en Python/Django'; ?>
<div class="article">
	<div class="header">
		<h2>Curso de Python y Django</h2>
	</div>
	<div class="figure">
		<?php echo CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/training/django-logo-100x100.png', 'Python/Django logos', array()); ?>
	</div>
	<div class="body">
		<p>Django es un framework de alto nivel hecho en Python que alienta un desarrollo limpio y un diseño pragmático.</p>
		<p>Este framework se enfoca en automatizar las tareas lo más posible y así evitar código repetitivo y propenso al error.</p>
		<p>Dictado por miembros activos de la comunidad de Python, el curso propone aprender a utilizar tanto el framework como el lenguaje en el que está basado.</p>
	</div>
	<div class="syllabus">
		<h3>Temario del curso</h3>
        <ul>
            <li>Introducción a Python</li>
			<li>Introducción a Django</li>
			<li>Django como MVC: Model, View y Templates</li>
			<li>Obtener y configurar Django</li>
			<li>Estructura de Django:
				<ul>
					<li>models.py</li>
					<li>urls.py</li>
					<li>views.py</li>
				</ul>
			</li>
			<li>Configurando las conexiones a la DB</li>
			<li>Django URL Patterns y Views</li>
			<li>Django Forms</li>
			<li>Form classes</li>
			<li>Validaciones</li>
			<li>CRUD con el Admin</li>
			<li>Autenticación y gestión de usuarios</li>
			<li>Forms y Vistas </li>
		</ul>
	</div>
	<div class="audience">
		<h3>A quién está dirigido?</h3>
		<p>Desarrolladores web - programadores</p>
	</div>
	<div class="prerequisites">
		<h3>Pre requisitos</h3>
		<p>Conocimientos básicos de Python</p>
	</div>
	<div class="footer"></div>
</div>
<?php echo $this->renderPartial('instructors/hector_sanchez/_python_django'); ?>
<hr />
