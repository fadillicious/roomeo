<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Roomeo App">
    <meta name="author" content="Nur Fadillah Fajar">
    <link rel="shortcut icon" href="#" type="image/png">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<?php echo $content; ?>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/roomeo/assets/js/modernizr.min.js"></script>

</body>
</html>
