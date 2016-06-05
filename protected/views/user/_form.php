
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

			<!-- name form -->
			<div class="form-group">
					<label for="name">Name</label>
					<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100, 'class'=>'form-control', 'placeholder'=>'Enter Name')); ?>
					<p class="help-block"><?php echo $form->error($model,'name', ['class'=>'alert alert-danger']); ?></p>
			</div><br/>

			<!-- username form -->
			<div class="form-group">
					<label for="username">Username</label>
					<?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50, 'class'=>'form-control', 'placeholder'=>'Enter Username')); ?>
					<p class="help-block"><?php echo $form->error($model,'username', ['class'=>'alert alert-danger']); ?></p>
			</div><br/>

			<!-- email form -->
			<div class="form-group">
					<label for="email">Email address</label>
					<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100, 'class'=>'form-control', 'placeholder'=>'Enter Email')); ?>
					<p class="help-block"><?php echo $form->error($model,'email', ['class'=>'alert alert-danger']); ?></p>
			</div><br/>

			<!-- password form -->
			<div class="form-group">
					<label for="password">Password</label>
					<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>512, 'class'=>'form-control', 'placeholder'=>'Enter Password')); ?>
					<p class="help-block"><?php echo $form->error($model,'password', ['class'=>'alert alert-danger']); ?></p>
			</div><br/>

			<!-- password repeat form -->
			<div class="form-group">
					<label for="password">Password Repeat</label>
					<?php echo $form->passwordField($model, 'password_repeat',array('size'=>60,'maxlength'=>512, 'class'=>'form-control', 'placeholder'=>'Repeat your Password')); ?>
					<p class="help-block"><?php echo $form->error($model,'password', ['class'=>'alert alert-danger']); ?></p>
			</div><br/>

			<!-- address form -->
			<div class="form-group">
					<label for="address">Address</label>
					<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50, 'class'=>'form-control', 'placeholder'=>'Enter Address')); ?>
					<p class="help-block"><?php echo $form->error($model,'address', ['class'=>'alert alert-danger']); ?></p>
			</div><br/>

			<!-- phone form -->
			<div class="form-group">
					<label for="phone">Phone</label>
					<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20, 'class'=>'form-control', 'placeholder'=>'Enter Phone Number')); ?>
					<p class="help-block"><?php echo $form->error($model,'phone', ['class'=>'alert alert-danger']); ?></p>
			</div><br/>

			<!-- profile picture form -->
			<?php if ($model->isNewRecord != '1') { ?>
				<div class="row">
					<div class="col-md-2">
						<div class="profile-pic text-center">
								 <?php
									echo CHtml::image( ($model->profile_picture) ? Yii::app()->request->baseUrl.'/images/'.$model->profile_picture : Yii::app()->request->baseUrl . '/themes/roomeo/assets/images/default.png', 'profile_picture',array("width"=>200));
								 ?>
						</div>
					</div>
					<div class="col-md-10">
						<br/><br/>
						<div class="form-group">
								<label for="profile_picture">Profile Picture</label>
								<?php echo CHtml::activeFileField($model, 'profile_picture',array('class'=>'form-control', 'placeholder'=>'Select your best photo')); ?>
								<p class="help-block">Only png or jpg or jpeg extension to be allowed</p>
								<p class="help-block"><?php echo $form->error($model,'profile_picture', ['class'=>'alert alert-danger']); ?></p>
						</div>
					</div>
				</div><br/>
			<?php } else { ?>
				<div class="form-group">
						<label for="profile_picture">Profile Picture</label>
						<?php echo CHtml::activeFileField($model,'profile_picture',array('class'=>'form-control', 'placeholder'=>'Select your best photo')); ?>
						<p class="help-block">Only png or jpg or jpeg extension to be allowed</p>
						<p class="help-block"><?php echo $form->error($model,'profile_picture', ['class'=>'alert alert-danger']); ?></p>
				</div><br/>
			<?php } ?>

			<!-- roles form -->
			<div class="form-group">
					<label for="role_id">Roles</label>
					<?php echo $form->dropDownList($model,'role_id', CHtml::listData(Role::model()->findAll(array('order' => 'id')),'id','name'), ['class'=>'form-control', 'placeholder'=>'Select a Role']);?>
					<p class="help-block"><?php echo $form->error($model,'role_id', ['class'=>'alert alert-danger']); ?></p>
			</div><br/>

			<!-- user status form -->
			<div class="form-group">
					<label for="is_active">User Status</label>
					<?php echo $form->dropDownList($model, 'is_active', array(0=>'Deactivate', 1=>'Activate'), [ 'class'=>'form-control', 'placeholder'=>'Select User Status']);?>
					<p class="help-block"><?php echo $form->error($model,'is_active', ['class'=>'alert alert-danger']); ?></p>
			</div><br/>

			<!-- button -->
			<div class="form-group">
					<br/>
					<?php echo CHtml::link('Cancel',array('user/admin'),array('class'=>'btn btn-warning')); ?>
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', ['class'=>'btn btn-success']); ?>
			</div>

<?php $this->endWidget(); ?>
