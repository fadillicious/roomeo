<?php

$this->breadcrumbs=array(
	'<li>Users</li>'=>array('index'),
	'<li>Manage</li>',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<!-- page heading start-->
        <div class="page-heading">
            <h3>
                Users
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">User Management</a>
                </li>
                <li class="active">Users </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            List Users
                             <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                             </span>
                        </header>
                        <div class="panel-body">

													<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
													<div class="search-form" style="display:none">
													<?php $this->renderPartial('_search',array(
														'model'=>$model,
													)); ?>
													</div><!-- search-form -->

													<?php $this->widget('zii.widgets.grid.CGridView', array(
														'id'=>'user-grid',
														'dataProvider'=>$model->search(),
														'itemsCssClass' => 'table  table-hover general-table',
														// 'filter'=>$model,
														'columns'=>array(
															['header'=>'No',
															 'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
															 'htmlOptions'=>['style'=>'text-align: center;'],
															 'headerHtmlOptions'=>['style'=>'width: 4%; text-align: center;']
															],
															'name',
															'username',
															'email',
															'address',
															['name'=>'phone',
															 'htmlOptions'=>['style'=>'text-align: center;'],
															 'headerHtmlOptions'=>['style'=>'width: 10%; text-align: center;']
															],
															['name'=>'role_id',
															 'value'=> function($data) {
																 		$role = Role::model()->findByAttributes(['id'=>$data->role_id]);
																		return $role->name;
																 },
															 'htmlOptions'=>['style'=>'text-align: center;'],
															 'headerHtmlOptions'=>['style'=>'width: 10%; text-align: center;']
															],
															['name'=>'is_active',
															 'value'=> function($data) {
																 		return ($data->is_active == true) ? 'Aktif' : 'Tidak Aktif';
																 },
															 'header'=>'Status Pegawai',
															 'htmlOptions'=>['style'=>'text-align: center;'],
															 'headerHtmlOptions'=>['style'=>'width: 10%; text-align: center;']
															],
															// 'password',
															// 'id',
															// 'profile_picture',

															array(
																'class'=>'CButtonColumn',
																'header'=>'Actions',
																'template'=>'{update} {delete}',
																'buttons'=> [
																	'update' => array(
																			'options' => array('title' => 'Updates'),
											                'label' => '<button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>',
											                'imageUrl' => false,
											            ),
																	'delete' => array(
											                'options' => array('title' => 'Deletes'),
											                'label' => '<button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>',
																			'imageUrl' => false,
											            ),
																],
															),
														),
													)); ?>

                        </div>

                    </section>
                </div>
            </div>
        </div>
        <!--body wrapper end-->

<?php
Yii::app()->clientScript->registerScript('delete',"
		$(document).ready(function(){
				$('.delete').each(function(index){
						$(this).click(function(){
								var url = $(this).attr('href');
								confirmDelete(url);
								return false;
						});
				});
		});
");
?>
