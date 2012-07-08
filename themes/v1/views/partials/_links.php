			<ul>
				<li><h4>Capacitación</h4></li>
				<li><?php echo CHtml::link('Symfony', '/training/symfony'); ?></li>
				<li><?php echo CHtml::link('Drupal', '/training/drupal'); ?></li>
				<li><?php echo CHtml::link('Python/DJango', '/training/python-django'); ?></li>
				<li><?php echo CHtml::link('XHTML/CSS', '/training/xhtml-css'); ?></li>
				<li><?php echo CHtml::link('GNU/Linux', '/training/gnu-linux'); ?></li>
			</ul>
			<ul>
				<li><h4>Servicios</h4></li>
				<li><?php echo CHtml::link('Desarollos de apps', '/services/web-development'); ?></li>
				<li><?php echo CHtml::link('SUGAR Activities', '/services/sugar-activities'); ?></li>
				<li><?php echo CHtml::link('Soporte Técnico', '/services/tech-support'); ?></li>
				<li><?php echo CHtml::link('Hosting', '/services/hosting'); ?></li>
			</ul>
			<div id="social-links">
				<?php $images_dir = Yii::app()->theme->baseUrl ."/images"; ?>
				<ul>
					<li>
						<a href="https://twitter.com/#!/PressEnterComAr" target="_blank">
							<img src="<?php echo $images_dir; ?>/icons/infocus-twitter-logo-square-24x24.png" alt="" title="" />
						</a>
					</li>
					<li>
						<a href="http://www.facebook.com/pages/PressEnter-Cooperativa-de-desarrollo-de-Software-Libre/105554509534761" target="_blank">
							<img src="<?php echo $images_dir; ?>/icons/infocus-facebook-logo-square-24x24.png" alt="" title="" />
						</a>
					</li>
					<li>
						<a href="http://www.linkedin.com/company/2532858" target="_blank">
							<img src="<?php echo $images_dir; ?>/icons/infocus-linkedin-logo-square2-24x24.png" alt="" title="" />
						</a>
					</li>
				</ul>
			</div>
