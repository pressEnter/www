			<ul>
				<li><h4>Proyectos</h4></li>
				<li><?php echo CHtml::link('ALBA', 'http://proyectoalba.com.ar', array('target' => '_blank')); ?></li>
				<li><?php echo CHtml::link('Calandria Gestión', 'http://calandriagestion.com.ar', array('target' => '_blank')); ?></li>
				<li><?php echo CHtml::link('Real State', 'http://realstatesoft.com.ar', array('target' => '_blank')); ?></li>
			</ul>
			<ul>
				<li><h4>Servicios</h4></li>
				<li><?php echo CHtml::link('Desarollos a medida', '#'); ?></li>
				<li><?php echo CHtml::link('SUGAR Activities', '#'); ?></li>
				<li><?php echo CHtml::link('HOSTING', '#'); ?></li>
				<li><?php echo CHtml::link('Servidores Linux', '#'); ?></li>
			</ul>
			<ul>
				<li><h4>Capacitación</h4></li>
				<li><?php echo CHtml::link('Drupal', '#'); ?></li>
				<li><?php echo CHtml::link('Symfony', '#'); ?></li>
				<li><?php echo CHtml::link('HTML/CSS', '#'); ?></li>
				<li><?php echo CHtml::link('Servidores Linux', '#'); ?></li>
			</ul>
			<ul>
				<li><h4>Links</h4></li>
				<li><?php echo CHtml::link('Symfony Project', 'http://symfony-project.org/', array('target' => '_blank')); ?></li>
				<li><?php echo CHtml::link('YII Framework', 'http://yiiframework.com/', array('target' => '_blank')); ?></li>
				<li><?php echo CHtml::link('Marcelo Prizmic', 'http://marcelo.prizmic.com.ar/', array('target' => '_blank')); ?></li>
				<li><?php echo CHtml::link('Django Project', 'https://www.djangoproject.com/', array('target' => '_blank')); ?></li>
				<li><?php echo CHtml::link('SugarLabs', 'http://sugarlabs.org/', array('target' => '_blank')); ?></li>
			</ul>
			<div id="social-links">
				<?php $images_dir = Yii::app()->theme->baseUrl ."/images"; ?>
				<ul>
					<li>
						<a href="#">
							<img src="<?php echo $images_dir; ?>/icons/twitter-logo-square-24x24.png" alt="" title="" />
						</a>
					</li>
					<li>
						<a href="#">
							<img src="<?php echo $images_dir; ?>/icons/facebook-logo-square-24x24.png" alt="" title="" />
						</a>
					</li>
					<li>
						<a href="http://www.linkedin.com/company/2532858">
							<img src="<?php echo $images_dir; ?>/icons/linkedin-logo-square2-24x24.png" alt="" title="" />
						</a>
					</li>
				</ul>
			</div>
