
<!-- page heading start-->
        <div class="page-heading">
            <h3>
                Update Users
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">User Management</a>
                </li>
                <li>
                    <a href="<?php echo Yii::app()->baseUrl; ?>/user/admin">Users</a>
                </li>
                <li class="active">Update Users </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                             <?php echo $model->name; ?>
                             <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                             </span>
                        </header>
                        <div class="panel-body">

													<?php $this->renderPartial('_form', array('model'=>$model)); ?>

                        </div>

                    </section>
                </div>
            </div>
        </div>
        <!--body wrapper end-->
