<?php

class m140612_152735_update_rawdata extends CDbMigration
{
	public function up()
	{   
//            POHx: Other
//            POHx: Dry Eye (Using Ats or reported)
//            POHx: OAG or steroid response
//            PAST MEDICAL HISTORY
//            PAST OCULAR SURGERY
//            Current Eye Medications
//            Current Systemic Medications

            $change = "Alter Table tbl_rawdata"
                    . "Add Column pohx VARCHAR(100) , "
                    . "Add Column pohx_oag_steroidresponse VARCHAR(100) , "
                    . "Add Column past_medical_history VARCHAR(100) , "
                    . "Add Column past_ocular_surgery VARCHAR(100) , "
                    . "Add Column current_eye_medications VARCHAR(100) , "
                    . "Add Column current_systemic_medications VARCHAR(100)  "
                    . 'after documented_target_refraction;';
            $this->execute($change);
	}

	public function down()
	{
		echo "m140612_152735_update_rawdata does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}