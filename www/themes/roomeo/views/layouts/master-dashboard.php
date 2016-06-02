<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="roomeo">
  <meta name="description" content="roomeo">
  <meta name="author" content="Nur Fadillah Fajar">
  <link rel="shortcut icon" href="#" type="image/png">

  <title><?php echo CHtml::encode($this->pageTitle); ?></title>

  <!--icheck-->
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/iCheck/skins/square/square.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/iCheck/skins/square/red.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/iCheck/skins/square/blue.css" rel="stylesheet">

  <!--dashboard calendar-->
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/css/clndr.css" rel="stylesheet">

  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/morris-chart/morris.css">

  <!--common-->
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/css/style-responsive.css" rel="stylesheet">




  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>

  <?php $this->beginContent('//layouts/column-sidebar'); ?>
	<?php $this->endContent(); ?>

    <!-- main content start-->
    <div class="main-content" >

      <?php $this->beginContent('//layouts/column-topbar'); ?>
    	<?php $this->endContent(); ?>

        <?php echo $content; ?>

        <?php $this->beginContent('//layouts/column-footer'); ?>
      	<?php $this->endContent(); ?>


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/modernizr.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/bower_components/bootbox.js/bootbox.js"></script>

<!--easy pie chart-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/easypiechart/jquery.easypiechart.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/easypiechart/easypiechart-init.js"></script>

<!--Sparkline Chart-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/sparkline/jquery.sparkline.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/sparkline/sparkline-init.js"></script>

<!--icheck -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/iCheck/jquery.icheck.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/icheck-init.js"></script>

<!-- jQuery Flot Chart-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/flot-chart/jquery.flot.tooltip.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/flot-chart/jquery.flot.resize.js"></script>


<!--Morris Chart-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/morris-chart/morris.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/morris-chart/raphael-min.js"></script>

<!--Calendar-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/calendar/clndr.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/calendar/evnt.calendar.init.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/calendar/moment-2.2.1.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

<!--common scripts for all pages-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/scripts.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/confirm.js"></script>

<!--Dashboard Charts-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/dashboard-chart-init.js"></script>


</body>
</html>
