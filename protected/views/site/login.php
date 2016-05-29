<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions'=>array(
		'class'=>'form-signin',
	),
)); ?>

		<div class="form-signin-heading text-center">
				<h1 class="sign-title">Sign In</h1>
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/images/login-logo.png" alt=""/>
		</div>
		<div class="login-wrap">

				<!-- form username -->
				<?php echo $form->textField($model,'username', ['class'=>'form-control', 'placeholder'=>'Username']); ?>
				<?php echo $form->error($model,'username', ['class'=>'alert alert-danger']); ?>

				<!-- form password -->
				<?php echo $form->passwordField($model,'password', ['class'=>'form-control', 'placeholder'=>'Password']); ?>
				<?php echo $form->error($model,'password', ['class'=>'alert alert-danger']); ?>

				<!-- button login -->
				<?php echo CHtml::tag('button', array(
		        'class'=>'btn btn-lg btn-login btn-block',
		        'type'=>'submit'
		      ), '<i class="fa fa-check"></i>');
			 ?>

				<!-- <div class="registration">
						Not a member yet?
						<a class="" href="registration.html">
								Signup
						</a>
				</div>
				<label class="checkbox">
						<?php //echo $form->checkBox($model,'rememberMe'); ?> Remember me
						<span class="pull-right">
								<a data-toggle="modal" href="#myModal"> Forgot Password?</a>
						</span>
				</label> -->

		</div>

		<!-- Modal -->
		<!-- <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
				<div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Forgot Password ?</h4>
								</div>
								<div class="modal-body">
										<p>Enter your e-mail address below to reset your password.</p>
										<input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

								</div>
								<div class="modal-footer">
										<button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
										<button class="btn btn-primary" type="button">Submit</button>
								</div>
						</div>
				</div>
		</div> -->
		<!-- modal -->

<?php $this->endWidget(); ?>
