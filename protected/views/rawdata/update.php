<?php
/* @var $this RawdataController */
/* @var $model Rawdata */

$this->breadcrumbs=array(
	'Rawdatas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rawdata', 'url'=>array('index')),
	array('label'=>'Create Rawdata', 'url'=>array('create')),
	array('label'=>'View Rawdata', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Rawdata', 'url'=>array('admin')),
);
?>

<h1>Update Rawdata <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>