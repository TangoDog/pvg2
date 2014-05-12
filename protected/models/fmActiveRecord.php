<?php
abstract class fmActiveRecord extends CActiveRecord
{
	/**
	 * Prepares create_user_id and update_user_id attributes before saving.
	 */
	
	public function defaultScope()
	{
		//$condition = $this->testStatus();
		if (isset(Yii::app()->session['dbowner']))
			return array(
					'alias' => $this->tableName(),  // see below
					// needed to change to t.dbowner .. or add alias above
					'condition' => $this->tableName().'.dbowner='.Yii::app()->session['dbowner']
			);
			
	  return array(
					//'alias' => $this->modelName,
					
					'condition' => '',
			) ;
	
	}
	
	public function modelName()
	{
		return __CLASS__;
	}
        public function relations() {  /** these are default relations for almost all models, 
         * except formulas and postoprefractive surgery (shared by all users) (no dbowners for those
         */
            	return array(
			//'dbowner0' => array(self::BELONGS_TO, 'Dbowner', 'dbowner'),
                        'user' => array(self::BELONGS_TO, 'User', 'user_id'),
                        'editedBy' => array(self::BELONGS_TO, 'User', 'edited_by'),
		);
                
        }
	protected function beforeSave()
	{
		/*
		 * Need to make sure this attributes are set safe in the child model as they will not validate otherwise
		 */
		if(null !== Yii::app()->user)
			$id=Yii::app()->user->id;
		else
			$id=1;
		
// 		if (($this->isNewRecord) {
// 			 $date = new DateTime();
// 			$this->created = $date->getTimestamp();
// 		}
		
		if (($this->isNewRecord)  // have to ignore this if the model is User - causes error because user_id is only id in the User model
		   && ($this->tableName() !== 'tbl_user')) {
				$this->user_id=$id;
		}
		// move this out - so that all fmActiveRecords get stamped with dbowner
		//$this->dbowner=Yii::app()->user->dbowner;
                //$this->dbowner=Yii::app()->user->getDbowner();
		// @todo - I don't know if that is safe - can the session be changed from another browser window
		
		//$this->edited_by=$id;
                //var_dump($this);

		return parent::beforeSave();
	}

	/**
	 * Attaches the timestamp behavior to update our create and update times
	 */
	public function behaviors()
	{
		return array(
				'CTimestampBehavior' => array(
						'class' => 'zii.behaviors.CTimestampBehavior',
						'createAttribute' => 'created',
						'updateAttribute' => 'updated',
						'setUpdateOnCreate' => true,
				),
		);
	}

}