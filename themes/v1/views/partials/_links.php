			<ul>
				<li><h4>Capacitación</h4></li>
				<li><?php echo CHtml::link('Drupal', '/training/drupal'); ?></li>
				<li><?php echo CHtml::link('Symfony', '/training/symfony'); ?></li>
				<li><?php echo CHtml::link('XHTML/CSS', '/training/xhtml-css'); ?></li>
				<li><?php echo CHtml::link('Servidores Linux', '/training/servers'); ?></li>
			</ul>
			<ul>
				<li><h4>Servicios</h4></li>
				<li><?php echo CHtml::link('Desarollos a medida', '#'); ?></li>
				<li><?php echo CHtml::link('SUGAR Activities', '#'); ?></li>
				<li><?php echo CHtml::link('HOSTING', '#'); ?></li>
				<li><?php echo CHtml::link('Servidores Linux', '#'); ?></li>
			</ul>
			<div id="social-links">
				<?php $images_dir = Yii::app()->theme->baseUrl ."/images"; ?>
				<ul>
					<li>
						<a href="https://twitter.com/#!/PressEnterComAr" target="_blank">
							<img src="<?php echo $images_dir; ?>/icons/twitter-logo-square-24x24.png" alt="" title="" />
						</a>
					</li>
					<li>
						<a href="http://www.facebook.com/pages/PressEnter-Soluciones-Inform%C3%A1ticas/105554509534761" target="_blank">
							<img src="<?php echo $images_dir; ?>/icons/facebook-logo-square-24x24.png" alt="" title="" />
						</a>
					</li>
					<li>
						<a href="http://www.linkedin.com/company/2532858" target="_blank">
							<img src="<?php echo $images_dir; ?>/icons/linkedin-logo-square2-24x24.png" alt="" title="" />
						</a>
					</li>
				</ul>
			</div>
