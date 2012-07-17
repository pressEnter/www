<?php
// Tooltip library
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquerytools.org/jquery.tools.tooltip.min.js', CClientScript::POS_BEGIN);
?>
<?php $this->pageTitle = 'pressEnter | Quiénes somos'; ?>
<h2>Nosotros</h2>

<p><strong>pressEnter</strong> es una cooperativa de trabajo Argentina con más de 10 años de experiencia brindando servicios en el mercado de las tecnologías de información y comunicaciones.</p>
<div id="about-us" class="section">
	<div class="articles-wrapper">

		<div class="article" id="hector-sanchez">
			<h3>Héctor Sanchez</h3>
			<div class="figure">
				<?php echo CHtml::image(Yii::app()->request->getBaseUrl(true) . '/images/about-us/hector-sanchez-100x100-color.jpg', 'Héctor Sanchez', array('title' => 'Héctor Sanchez')); ?>
			</div>
			<p>Analista de sistemas, graduado en la Universidad Tecnológica Nacional (UTN). Tiene conocimiento en diferentes lenguajes de programación, su preferido es <strong>Python</strong>.</p>
			<p>Posee mucha experiencia en desarrollos Web, en sitios de gran escala utilizando los frameworks Symfony y Django.</p>
			<p>Es un activista de <strong>Software Libre</strong>, que participó en el dictado de cursos y conferencias nacionales e internacionales, actualmente participa activamente de organizaciones como <a href="http://www.lanux.org.ar" target="_blank">LANUX</a>, <a href="http://www.solar.org.ar" target="_blank">SoLAr</a>, <a href="http://www.python.com.ar" target="_blank">PyAr</a> y <a href="http://ar.sugarlabs.org" target="_blank"> SugarLabs-Argentina </a>, dedicadas a la difusión del Software Libre tanto en el aspecto social como técnico.</p>
			<p>Participa en el  <a href="http://www.proyectoalba.com.ar" target="_blank">Proyecto Alba</a> desde sus comienzos.</p>
            <p>Formó parte del equipo <a href="http://activities.sugarlabs.org/es-ES/sugar/addon/4215" target="_blank">Falabracman</a> ganador de la competencia OLPC Game Jam 2008 en Porto Alegre - Brasil en FISL.</p>
			<div class="footer">
				<div class="footer-inner">
				<?php
				echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/infocus-linkedin-logo-square2-24x24.png', 'Ver perfil de Héctor Sánchez en Linkedin', array('title' => 'Ver perfil de Héctor Sánchez en Linkedin')), 'http://www.linkedin.com/in/karucha', array('target' => '_blank'));
				echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/twitter-bird-24x24.png', 'Cuenta de Twitter', array('title' => 'Cuenta de Twitter')), 'https://twitter.com/hectorksanchez', array('target' => '_blank'));
				echo CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/infocus-gmail-24x24.png', 'XMPP/GTalk: hsanchez@pressenter.com.ar', array('class' => 'gtalk-info', 'title' => 'XMPP/GTalk: hsanchez@pressenter.com.ar'));
				?>
				</div>
			</div>
		</div>

		<div class="article" id="fernando-toledo">
			<h3>Fernando Toledo</h3>
			<div class="figure">
				<?php echo CHtml::image(Yii::app()->request->getBaseUrl(true) . '/images/about-us/fernando-toledo-100x100-color.jpg', 'Fernando Toledo', array('title' => 'Fernando Toledo')); ?>
			</div>
			<p>Desarrollador y Administrador de sistemas con más de 10 años de trabajo sobre plataformas <strong>GNU/Linux</strong>.</p>
			<p>Posee amplios conocimientos en hardware, software e infraestructura de redes y se especializa en implentaciones de sevidores, seguridad y monitoreo.</p>
			<p>Miembro de <a href="http://www.solar.org.ar" target="_blank">SoLAr</a>, promotor y partícipe activo en varios proyectos de <strong>Software Libre</strong> alrededor del mundo.</p>
			<p>Es uno de los creadores y actual mantenedor del <a href="http://www.proyectoalba.com.ar" target="_blank">Proyecto Alba</a>.</p>
			<div class="footer">
				<div class="footer-inner">
				<?php
				echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/infocus-linkedin-logo-square2-24x24.png', 'Ver perfil de Fernando Toledo en Linkedin', array('title' => 'Ver perfil de Fernando Toledo en Linkedin')), 'http://www.linkedin.com/in/ftoledo', array('target' => '_blank'));
				echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/infocus-facebook-logo-square-24x24.png', 'Fernando Toledo en Facebook', array('title' => 'Fernando Toledo en Facebook')), 'http://www.facebook.com/nandiky', array('target' => '_blank'));
				echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/twitter-bird-24x24.png', 'Cuenta de Twitter', array('title' => 'Cuenta de Twitter')), 'https://twitter.com/docksud', array('target' => '_blank'));
				echo CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/infocus-gmail-24x24.png', 'XMPP/GTalk: ftoledo@pressenter.com.ar', array('class' => 'gtalk-info', 'title' => 'XMPP/GTalk: ftoledo@pressenter.com.ar'));
				?>
				</div>
			</div>
		</div>

		<div class="article" id="miguel-garcia">
			<h3>Miguel Ángel García</h3>
			<div class="figure">
				<?php echo CHtml::image(Yii::app()->request->getBaseUrl(true) . '/images/about-us/miguel-garcia-100x100-color.jpg', 'Miguel García', array('title' => 'Miguel García')); ?>
			</div>
			<p>Arquitecto de software, con amplia experiencia en gestión de proyectos y desarrollo de aplicaciones web y de escritorio utilizando tecnologías <strong>libres</strong>: Python, PHP5, C++ y SQL.</p>
			<p>Especializado en diseño <strong>OOP</strong>, metodologías <strong>ágiles</strong>, optimización de aplicaciones e integración con librerias y servicios de terceros.</p>
			<p>Ha participado en varios proyectos complejos, creando soluciones tecnológicas para empresas y organizaciones de Argentina, Canada y USA.</p>
			<p>Está interesado en la utilización de <strong>best practices</strong> para mejorar la calidad del proceso de desarrollo y del software creado, minimizando los costos.</p>
			<div class="footer">
				<div class="footer-inner">
				<?php
				echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/infocus-linkedin-logo-square2-24x24.png', 'Ver perfil de Miguel García en Linkedin', array('title' => 'Ver perfil de Miguel García en Linkedin')), 'http://www.linkedin.com/in/zzmike', array('target' => '_blank'));
				echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/twitter-bird-24x24.png', 'Cuenta de Twitter', array('title' => 'Cuenta de Twitter')), 'https://twitter.com/MikezGarcia', array('target' => '_blank'));
				?>
				</div>
			</div>
		</div>

		<div class="article" id="luciano-baraglia">
			<h3>Luciano Abel Baraglia</h3>
			<div class="figure">
				<?php echo CHtml::image(Yii::app()->request->getBaseUrl(true) . '/images/about-us/luciano-baraglia-100x100-color.jpg', 'Luciano Baraglia', array('title' => 'Luciano Baraglia')); ?>
			</div>
			<p>Desarrollador Web autodidacta desde hace más de 10 años. Defensor de la <a href="http://en.wikipedia.org/wiki/Semantic_HTML" target="_blank">web semántica</a>, los <a href="http://www.w3.org/standards/" target="_blank">estándares de la W3C</a> y proclamado entre los suyos como <strong>GURÚ del CSS</strong>.</p>
			<p>Especializado en maquetación, <strong>SEO</strong> y optimización de sitios web para buscadores.</p>
			<p>Posee vasta experiencia programando en <strong>PHP</strong>, tanto para el mercado local como para clientes y empresas del exterior, principalmente España y Japón.</p>
			<p>Es un desarrollador avanzado de módulos y themes para <a href="http://drupal.org" target="_blank">Drupal</a> aunque prefiere utilizar frameworks como <a href="http://yiiframework.com" target="_blank">YII</a>, <a href="http://symfony-project.org" target="_blank">Symfony</a>, y <a href="https://www.djangoproject.com/" target="_blank">Django</a>.</p>
			<p>Actualmente ansioso en la espera de mejor soporte de <strong>HTML5</strong> y <strong>CSS 3</strong> de los navegadores para poder experimentar más en esa área.</p>
			<div class="footer">
				<div class="footer-inner">
				<?php
				echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/infocus-linkedin-logo-square2-24x24.png', 'Ver perfil de Luciano Baraglia en Linkedin', array('title' => 'Ver perfil de Luciano Baraglia en Linkedin')), 'http://www.linkedin.com/in/lucianobaraglia', array('target' => '_blank'));
				echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/infocus-facebook-logo-square-24x24.png', 'Luciano Baraglia en Facebook', array('title' => 'Luciano Baraglia en Facebook')), 'http://www.facebook.com/luciano.baraglia', array('target' => '_blank'));
				echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/twitter-bird-24x24.png', 'Cuenta de Twitter', array('title' => 'Cuenta de Twitter')), 'https://twitter.com/lucianobaraglia', array('target' => '_blank'));
				echo CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/infocus-gmail-24x24.png', 'XMPP/GTalk: luciano.baraglia@gmail.com', array('class' => 'gtalk-info', 'title' => 'XMPP/GTalk: luciano.baraglia@gmail.com'));
				?>
				</div>
			</div>
		</div>

	</div> <!-- articles-wrapper -->
	<hr />
</div>
<script type="text/javascript">
	$(document).ready(function(){ 
		$("div.footer img.gtalk-info").tooltip({
			effect: 'slide',
			delay: 700,
			tipClass: 'gtalk-info-tooltip',
			position: 'top center'
		});
	}); 
</script>
