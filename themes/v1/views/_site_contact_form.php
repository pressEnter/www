<div class="form-wrapper<?php echo $this->contact_form_model->hasErrors() ? ' with-errors' : ''; ?>">
<?php $form = $this->beginWidget('CActiveForm', array(
	'id'=>'site-contact-form',
	'enableClientValidation' => false,
	'clientOptions' => array(
		'validateOnSubmit' => true,
	),
)); ?>
	<div class="form-row input-text">
		<?php echo $form->labelEx($this->contact_form_model,'name'); ?>
		<?php echo $form->textField($this->contact_form_model,'name'); ?>
		<?php echo $form->error($this->contact_form_model,'name'); ?>
	</div>

	<div class="form-row input-text">
		<?php echo $form->labelEx($this->contact_form_model,'email'); ?>
		<?php echo $form->textField($this->contact_form_model,'email'); ?>
		<?php echo $form->error($this->contact_form_model,'email'); ?>
	</div>

	<div class="form-row textarea">
		<?php echo $form->labelEx($this->contact_form_model,'body'); ?>
		<?php echo $form->textArea($this->contact_form_model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($this->contact_form_model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="form-row captcha">
		<?php echo $form->labelEx($this->contact_form_model, 'verifyCode'); ?>
		<?php 
		$this->widget('CCaptcha', array(
			'showRefreshButton' => false,
			'clickableImage' => true,
			'imageOptions' => array(),
		)); 
		?>
		<?php echo $form->textField($this->contact_form_model, 'verifyCode'); ?>
		<?php echo $form->error($this->contact_form_model, 'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="form-row input-submit">
		<?php echo CHtml::submitButton('Enviar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
