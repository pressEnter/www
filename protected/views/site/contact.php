<h1>Contacto</h1>
<h2>Get in touch!</h2>
<div id="contact-text">
	<p>Si estás buscando <strong>desarrolladores</strong> para un proyecto, capacitar a tus empleados en <strong>tecnologías libres</strong> o simplemente saber <strong>cómo podemos ayudarte</strong>, contactáte con nosotros.</p>
	<h4>Estamos creciendo...</h4>
	<p>Si lo tuyo es la <strong>programación</strong> o la <strong>administración de servidores</strong>, te sentís identificado con el espíritu del <strong>Software Libre</strong> y simpatizás con <strong>Pressenter</strong>, enviános tu <strong>CV</strong>. Podríamos trabajar juntos!</p>
</div>
<div id="contact-form-wrapper" class="form-wrapper">
<?php 
$form = $this->beginWidget('CActiveForm', array(
	'id' => 'contact-form',
	'enableClientValidation' => false,
	'clientOptions' => array(
		'validateOnSubmit' => false,
	),
)); 
?>
	<?php echo $form->errorSummary($model); ?>
	<div id="contact-form-widgets">
		<fieldset id="fieldset-main-data">
			<legend>Datos principales</legend>
			<div class="form-row input-text">
				<?php echo $form->labelEx($model, 'name'); ?>
				<?php echo $form->textField($model, 'name'); ?>
				<?php echo $form->error($model, 'name'); ?>
				<hr />
			</div>

			<div class="form-row input-text">
				<?php echo $form->labelEx($model, 'email'); ?>
				<?php echo $form->textField($model, 'email'); ?>
				<?php echo $form->error($model, 'email'); ?>
				<hr />
			</div>

			<div class="form-row input-select">
				<?php echo $form->labelEx($model, 'subject'); ?>
				<?php echo $form->dropDownList($model, 'subject', ContactForm::$subjectOptions); ?>
				<?php echo $form->error($model, 'subject'); ?>
				<hr />
			</div>
		
			<?php if(CCaptcha::checkRequirements()): ?>
			<div class="form-row captcha">
				<?php echo $form->labelEx($model, 'verifyCode'); ?>
				<div>
				<?php $this->widget('CCaptcha'); ?>
				<?php echo $form->textField($model, 'verifyCode'); ?>
				</div>
				<?php echo $form->error($model, 'verifyCode'); ?>
				<hr />
			</div>
			<?php endif; ?>
		</fieldset>
		
		<fieldset id="fieldset-message">
			<div class="form-row input-textarea">
				<?php echo $form->labelEx($model, 'body'); ?>
				<?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 50)); ?>
				<?php echo $form->error($model, 'body'); ?>
				<hr />
			</div>
		</fieldset>

		<div class="form-row input-submit">
			<?php echo CHtml::submitButton('Enviar'); ?>
		</div>
		<hr />
<?php $this->endWidget(); ?>
	</div>
</div><!-- form-wrapper -->

