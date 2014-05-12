<?php

//namespace behaviors;
Yii::import('zii.behaviors.CTimestampBehavior');

class MyRecordStampBehavior extends CTimestampBehavior {
	public $idStamp = 'dbowner';
	
	public function beforeSave($event) {
                if (Yii::app()->session['dbowner']===null || (!isset(Yii::app()->session['dbowner']))) {
                    throw new CHttpException(403,'Must be valid logged in before performing this action');
                }
		if ($this->getOwner()->getIsNewRecord() && ($this->idStamp !== null)) {
			$this->getOwner()->{$this->idStamp} = Yii::app()->session['dbowner'];
		}
		
		return parent::beforeSave();
		
	}
	
}

?>