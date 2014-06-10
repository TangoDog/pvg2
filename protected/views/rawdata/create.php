<?php
/* @var $this RawdataController */
/* @var $model Rawdata */

$this->breadcrumbs=array(
	'Rawdatas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rawdata', 'url'=>array('index')),
	array('label'=>'Manage Rawdata', 'url'=>array('admin')),
);
?>

<h1>Create Rawdata</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>