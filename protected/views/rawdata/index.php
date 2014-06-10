<?php
/* @var $this RawdataController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rawdatas',
);

$this->menu=array(
	array('label'=>'Create Rawdata', 'url'=>array('create')),
	array('label'=>'Manage Rawdata', 'url'=>array('admin')),
);
?>

<h1>Rawdatas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
