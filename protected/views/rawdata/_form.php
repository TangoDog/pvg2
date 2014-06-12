<?php
/* @var $this RawdataController */
/* @var $model Rawdata */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rawdata-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_surgery'); ?>
		<?php echo $form->textField($model,'date_of_surgery'); ?>
		<?php echo $form->error($model,'date_of_surgery'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eye'); ?>
		<?php echo $form->textField($model,'eye',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'eye'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dob'); ?>
		<?php echo $form->textField($model,'dob'); ?>
		<?php echo $form->error($model,'dob'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'race'); ?>
		<?php echo $form->textField($model,'race',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'race'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mi'); ?>
		<?php echo $form->textField($model,'mi',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diagnosis'); ?>
		<?php echo $form->textField($model,'diagnosis',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'diagnosis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'documented_target_refraction'); ?>
		<?php echo $form->textField($model,'documented_target_refraction',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'documented_target_refraction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'current_systemic_medications'); ?>
		<?php echo $form->textField($model,'current_systemic_medications',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'current_systemic_medications'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'holladay_ii_target_chosen'); ?>
		<?php echo $form->textField($model,'holladay_ii_target_chosen',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'holladay_ii_target_chosen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iol_model'); ?>
		<?php echo $form->textField($model,'iol_model',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'iol_model'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iol_power'); ?>
		<?php echo $form->textField($model,'iol_power',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'iol_power'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_date'); ?>
		<?php echo $form->textField($model,'preop_date',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'presph'); ?>
		<?php echo $form->textField($model,'presph',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'presph'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precyl'); ?>
		<?php echo $form->textField($model,'precyl',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'precyl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m_axis'); ?>
		<?php echo $form->textField($model,'m_axis',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'m_axis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prebcva'); ?>
		<?php echo $form->textField($model,'prebcva',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'prebcva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preiop'); ?>
		<?php echo $form->textField($model,'preiop',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preiop'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prepachy'); ?>
		<?php echo $form->textField($model,'prepachy',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'prepachy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'axial_length'); ?>
		<?php echo $form->textField($model,'axial_length',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'axial_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hor_w_t_w'); ?>
		<?php echo $form->textField($model,'hor_w_t_w',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'hor_w_t_w'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phakic_lens_thickness'); ?>
		<?php echo $form->textField($model,'phakic_lens_thickness',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'phakic_lens_thickness'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phakic_anterior_chamber_depth'); ?>
		<?php echo $form->textField($model,'phakic_anterior_chamber_depth',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'phakic_anterior_chamber_depth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'k1'); ?>
		<?php echo $form->textField($model,'k1',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'k1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'k1a'); ?>
		<?php echo $form->textField($model,'k1a',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'k1a'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'k2'); ?>
		<?php echo $form->textField($model,'k2',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'k2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'k2a'); ?>
		<?php echo $form->textField($model,'k2a',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'k2a'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sk1'); ?>
		<?php echo $form->textField($model,'sk1',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'sk1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sk1yes'); ?>
		<?php echo $form->textField($model,'sk1yes',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'sk1yes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sk2yes_w_mmc'); ?>
		<?php echo $form->textField($model,'sk2yes_w_mmc',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'sk2yes_w_mmc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_any_sk'); ?>
		<?php echo $form->textField($model,'calc_any_sk',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'calc_any_sk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo5_8__no_scheduled'); ?>
		<?php echo $form->textField($model,'mo5_8__no_scheduled',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo5_8__no_scheduled'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uncorrected_va__udva__6'); ?>
		<?php echo $form->textField($model,'uncorrected_va__udva__6',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'uncorrected_va__udva__6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sph6'); ?>
		<?php echo $form->textField($model,'sph6',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'sph6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cyl6'); ?>
		<?php echo $form->textField($model,'cyl6',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'cyl6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m6_axis'); ?>
		<?php echo $form->textField($model,'m6_axis',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'m6_axis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bcva6'); ?>
		<?php echo $form->textField($model,'bcva6',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'bcva6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iop6'); ?>
		<?php echo $form->textField($model,'iop6',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'iop6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pachy6'); ?>
		<?php echo $form->textField($model,'pachy6',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'pachy6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecd6'); ?>
		<?php echo $form->textField($model,'ecd6',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'ecd6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_axial_length'); ?>
		<?php echo $form->textField($model,'mo6_axial_length',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_axial_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anterior_chamber_depth'); ?>
		<?php echo $form->textField($model,'anterior_chamber_depth',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'anterior_chamber_depth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_k1'); ?>
		<?php echo $form->textField($model,'mo6_k1',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_k1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_k1a'); ?>
		<?php echo $form->textField($model,'mo6_k1a',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_k1a'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_k2'); ?>
		<?php echo $form->textField($model,'mo6_k2',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_k2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_k2a'); ?>
		<?php echo $form->textField($model,'mo6_k2a',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_k2a'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_achieved_se_6'); ?>
		<?php echo $form->textField($model,'calc_achieved_se_6',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_achieved_se_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_se_error'); ?>
		<?php echo $form->textField($model,'calc_se_error',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_se_error'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_change_in_pachy__preop_to_6'); ?>
		<?php echo $form->textField($model,'calc_change_in_pachy__preop_to_6',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_change_in_pachy__preop_to_6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mos_9_14_no_appt'); ?>
		<?php echo $form->textField($model,'mos_9_14_no_appt',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mos_9_14_no_appt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uncorrected_va__udva__12'); ?>
		<?php echo $form->textField($model,'uncorrected_va__udva__12',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'uncorrected_va__udva__12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'momo12_m_sph'); ?>
		<?php echo $form->textField($model,'momo12_m_sph',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'momo12_m_sph'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m12_cyl'); ?>
		<?php echo $form->textField($model,'m12_cyl',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'m12_cyl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m12_axis'); ?>
		<?php echo $form->textField($model,'m12_axis',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'m12_axis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bcva_mo12'); ?>
		<?php echo $form->textField($model,'bcva_mo12',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'bcva_mo12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iop'); ?>
		<?php echo $form->textField($model,'iop',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'iop'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pachy_1_year'); ?>
		<?php echo $form->textField($model,'pachy_1_year',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'pachy_1_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecc1_year'); ?>
		<?php echo $form->textField($model,'ecc1_year',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'ecc1_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_axial_length'); ?>
		<?php echo $form->textField($model,'mo12_axial_length',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_axial_length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_anterior_chamber_depth'); ?>
		<?php echo $form->textField($model,'mo12_anterior_chamber_depth',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_anterior_chamber_depth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m12_k1'); ?>
		<?php echo $form->textField($model,'m12_k1',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'m12_k1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m12_k1a'); ?>
		<?php echo $form->textField($model,'m12_k1a',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'m12_k1a'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m12_k2'); ?>
		<?php echo $form->textField($model,'m12_k2',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'m12_k2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'m12_k2a'); ?>
		<?php echo $form->textField($model,'m12_k2a',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'m12_k2a'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_achieved_se_12'); ?>
		<?php echo $form->textField($model,'calc_achieved_se_12',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_achieved_se_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_se_error_12'); ?>
		<?php echo $form->textField($model,'calc_se_error_12',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_se_error_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_change_in_pachy__preop_to_12'); ?>
		<?php echo $form->textField($model,'calc_change_in_pachy__preop_to_12',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_change_in_pachy__preop_to_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_followup__6_or_12'); ?>
		<?php echo $form->textField($model,'calc_followup__6_or_12',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_followup__6_or_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_followup__6_and_12'); ?>
		<?php echo $form->textField($model,'calc_followup__6_and_12',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_followup__6_and_12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_preop_se_if_fu__6__12'); ?>
		<?php echo $form->textField($model,'calc_preop_se_if_fu__6__12',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_preop_se_if_fu__6__12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_mo6_se_if_fu__6__12'); ?>
		<?php echo $form->textField($model,'calc_mo6_se_if_fu__6__12',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_mo6_se_if_fu__6__12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_mo12_se_if_fu__6__12'); ?>
		<?php echo $form->textField($model,'calc_mo12_se_if_fu__6__12',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_mo12_se_if_fu__6__12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_length_of_followup__days'); ?>
		<?php echo $form->textField($model,'calc_length_of_followup__days',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_length_of_followup__days'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_length_of_followup__months'); ?>
		<?php echo $form->textField($model,'calc_length_of_followup__months',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_length_of_followup__months'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_difference_mo6_to_1_year_achieved_se'); ?>
		<?php echo $form->textField($model,'calc_difference_mo6_to_1_year_achieved_se',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_difference_mo6_to_1_year_achieved_se'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_mo6nth_avg_k___preop_avg_k'); ?>
		<?php echo $form->textField($model,'calc_mo6nth_avg_k___preop_avg_k',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_mo6nth_avg_k___preop_avg_k'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_mo12nth_avg_k___preop_avg_k'); ?>
		<?php echo $form->textField($model,'calc_mo12nth_avg_k___preop_avg_k',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_mo12nth_avg_k___preop_avg_k'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_last_avg_k___preop_avg_k'); ?>
		<?php echo $form->textField($model,'calc_last_avg_k___preop_avg_k',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_last_avg_k___preop_avg_k'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_preop_se'); ?>
		<?php echo $form->textField($model,'calc_preop_se',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_preop_se'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_last__se'); ?>
		<?php echo $form->textField($model,'calc_last__se',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_last__se'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_last_se_error'); ?>
		<?php echo $form->textField($model,'calc_last_se_error',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_last_se_error'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_last_change_in_pachy'); ?>
		<?php echo $form->textField($model,'calc_last_change_in_pachy',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_last_change_in_pachy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_change_in_al'); ?>
		<?php echo $form->textField($model,'calc_change_in_al',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_change_in_al'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_target_refraction_if_se_error_known'); ?>
		<?php echo $form->textField($model,'calc_target_refraction_if_se_error_known',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_target_refraction_if_se_error_known'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_change_in_last_cdva'); ?>
		<?php echo $form->textField($model,'calc_change_in_last_cdva',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_change_in_last_cdva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_last_cyl'); ?>
		<?php echo $form->textField($model,'calc_last_cyl',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_last_cyl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_change_in_cyl'); ?>
		<?php echo $form->textField($model,'calc_change_in_cyl',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_change_in_cyl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_last_cdva'); ?>
		<?php echo $form->textField($model,'calc_last_cdva',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_last_cdva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_preop_cdva_if_last_cdva_known'); ?>
		<?php echo $form->textField($model,'calc_preop_cdva_if_last_cdva_known',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_preop_cdva_if_last_cdva_known'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_last_udva___distance_eyes_only'); ?>
		<?php echo $form->textField($model,'calc_last_udva___distance_eyes_only',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_last_udva___distance_eyes_only'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_missing_pentacam_mo6_data'); ?>
		<?php echo $form->textField($model,'calc_missing_pentacam_mo6_data',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_missing_pentacam_mo6_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_missing_pentacam_mo12_data'); ?>
		<?php echo $form->textField($model,'calc_missing_pentacam_mo12_data',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_missing_pentacam_mo12_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc_missing_all_followup_pentacam_with_known_preop'); ?>
		<?php echo $form->textField($model,'calc_missing_all_followup_pentacam_with_known_preop',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc_missing_all_followup_pentacam_with_known_preop'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_rh'); ?>
		<?php echo $form->textField($model,'preop_rh',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_rh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_rv'); ?>
		<?php echo $form->textField($model,'preop_rv',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_rv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_axis__flat'); ?>
		<?php echo $form->textField($model,'preop_axis__flat',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_axis__flat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_astig'); ?>
		<?php echo $form->textField($model,'preop_astig',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_astig'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_ecc'); ?>
		<?php echo $form->textField($model,'preop_ecc',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_ecc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_eccsph'); ?>
		<?php echo $form->textField($model,'preop_eccsph',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_eccsph'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_c_height_endo'); ?>
		<?php echo $form->textField($model,'preop_c_height_endo',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_c_height_endo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_c_height_epi'); ?>
		<?php echo $form->textField($model,'preop_c_height_epi',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_c_height_epi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_pachy_apex'); ?>
		<?php echo $form->textField($model,'preop_pachy_apex',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_pachy_apex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_pachy_pupil'); ?>
		<?php echo $form->textField($model,'preop_pachy_pupil',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_pachy_pupil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_pachy_sup'); ?>
		<?php echo $form->textField($model,'preop_pachy_sup',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_pachy_sup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_pachy_inf'); ?>
		<?php echo $form->textField($model,'preop_pachy_inf',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_pachy_inf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_pachy_nas'); ?>
		<?php echo $form->textField($model,'preop_pachy_nas',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_pachy_nas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_pachy_tem'); ?>
		<?php echo $form->textField($model,'preop_pachy_tem',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_pachy_tem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_pachy_min'); ?>
		<?php echo $form->textField($model,'preop_pachy_min',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_pachy_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_pachyminx'); ?>
		<?php echo $form->textField($model,'preop_pachyminx',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_pachyminx'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_pachyminy'); ?>
		<?php echo $form->textField($model,'preop_pachyminy',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_pachyminy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_sag3mm'); ?>
		<?php echo $form->textField($model,'preop_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_sag3mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_sag5mm'); ?>
		<?php echo $form->textField($model,'preop_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_sag5mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_sag7mm'); ?>
		<?php echo $form->textField($model,'preop_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_sag7mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_sag9mm'); ?>
		<?php echo $form->textField($model,'preop_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_sag9mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_sag11mm'); ?>
		<?php echo $form->textField($model,'preop_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_sag11mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_sag13mm'); ?>
		<?php echo $form->textField($model,'preop_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_sag13mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_sag15mm'); ?>
		<?php echo $form->textField($model,'preop_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_sag15mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_kpd'); ?>
		<?php echo $form->textField($model,'preop_kpd',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_kpd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_post_sag3mm'); ?>
		<?php echo $form->textField($model,'preop_post_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_post_sag3mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_post_sag5mm'); ?>
		<?php echo $form->textField($model,'preop_post_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_post_sag5mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_post_sag7mm'); ?>
		<?php echo $form->textField($model,'preop_post_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_post_sag7mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_post_sag9mm'); ?>
		<?php echo $form->textField($model,'preop_post_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_post_sag9mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_post_sag11mm'); ?>
		<?php echo $form->textField($model,'preop_post_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_post_sag11mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_post_sag13mm'); ?>
		<?php echo $form->textField($model,'preop_post_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_post_sag13mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_post_sag15mm'); ?>
		<?php echo $form->textField($model,'preop_post_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_post_sag15mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_post_kpd'); ?>
		<?php echo $form->textField($model,'preop_post_kpd',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_post_kpd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_k1_f__d'); ?>
		<?php echo $form->textField($model,'preop_k1_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_k1_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_k2_f__d'); ?>
		<?php echo $form->textField($model,'preop_k2_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_k2_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_km_f__mm'); ?>
		<?php echo $form->textField($model,'preop_km_f__mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_km_f__mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_axis_f__flat'); ?>
		<?php echo $form->textField($model,'preop_axis_f__flat',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_axis_f__flat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_astig_f__d'); ?>
		<?php echo $form->textField($model,'preop_astig_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_astig_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_k1_b__d'); ?>
		<?php echo $form->textField($model,'preop_k1_b__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_k1_b__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_k2_b__d'); ?>
		<?php echo $form->textField($model,'preop_k2_b__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_k2_b__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_km_b__mm'); ?>
		<?php echo $form->textField($model,'preop_km_b__mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_km_b__mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_axis_b__flat'); ?>
		<?php echo $form->textField($model,'preop_axis_b__flat',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_axis_b__flat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_astig_b__d'); ?>
		<?php echo $form->textField($model,'preop_astig_b__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_astig_b__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_c_vol_d_3mm'); ?>
		<?php echo $form->textField($model,'preop_c_vol_d_3mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_c_vol_d_3mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_c_vol_d_5mm'); ?>
		<?php echo $form->textField($model,'preop_c_vol_d_5mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_c_vol_d_5mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_c_vol_d_7mm'); ?>
		<?php echo $form->textField($model,'preop_c_vol_d_7mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_c_vol_d_7mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_c_vol_d_10mm'); ?>
		<?php echo $form->textField($model,'preop_c_vol_d_10mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_c_vol_d_10mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preop_isv__index_surface_variance'); ?>
		<?php echo $form->textField($model,'preop_isv__index_surface_variance',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'preop_isv__index_surface_variance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_rh'); ?>
		<?php echo $form->textField($model,'mo6_rh',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_rh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_rv'); ?>
		<?php echo $form->textField($model,'mo6_rv',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_rv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_axis__flat'); ?>
		<?php echo $form->textField($model,'mo6_axis__flat',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_axis__flat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_astig'); ?>
		<?php echo $form->textField($model,'mo6_astig',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_astig'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_ecc'); ?>
		<?php echo $form->textField($model,'mo6_ecc',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_ecc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_eccsph'); ?>
		<?php echo $form->textField($model,'mo6_eccsph',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_eccsph'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_c_height_endo'); ?>
		<?php echo $form->textField($model,'mo6_c_height_endo',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_c_height_endo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_c_height_epi'); ?>
		<?php echo $form->textField($model,'mo6_c_height_epi',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_c_height_epi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_pachy_apex'); ?>
		<?php echo $form->textField($model,'mo6_pachy_apex',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_pachy_apex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_pachy_pupil'); ?>
		<?php echo $form->textField($model,'mo6_pachy_pupil',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_pachy_pupil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_pachy_sup'); ?>
		<?php echo $form->textField($model,'mo6_pachy_sup',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_pachy_sup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_pachy_inf'); ?>
		<?php echo $form->textField($model,'mo6_pachy_inf',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_pachy_inf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_pachy_nas'); ?>
		<?php echo $form->textField($model,'mo6_pachy_nas',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_pachy_nas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_pachy_tem'); ?>
		<?php echo $form->textField($model,'mo6_pachy_tem',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_pachy_tem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_pachy_min'); ?>
		<?php echo $form->textField($model,'mo6_pachy_min',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_pachy_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_pachyminx'); ?>
		<?php echo $form->textField($model,'mo6_pachyminx',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_pachyminx'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_pachyminy'); ?>
		<?php echo $form->textField($model,'mo6_pachyminy',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_pachyminy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_sag3mm'); ?>
		<?php echo $form->textField($model,'mo6_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_sag3mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_sag5mm'); ?>
		<?php echo $form->textField($model,'mo6_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_sag5mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_sag7mm'); ?>
		<?php echo $form->textField($model,'mo6_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_sag7mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_sag9mm'); ?>
		<?php echo $form->textField($model,'mo6_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_sag9mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_sag11mm'); ?>
		<?php echo $form->textField($model,'mo6_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_sag11mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_sag13mm'); ?>
		<?php echo $form->textField($model,'mo6_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_sag13mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_sag15mm'); ?>
		<?php echo $form->textField($model,'mo6_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_sag15mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_kpd'); ?>
		<?php echo $form->textField($model,'mo6_kpd',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_kpd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_post_sag3mm'); ?>
		<?php echo $form->textField($model,'mo6_post_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_post_sag3mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_post_sag5mm'); ?>
		<?php echo $form->textField($model,'mo6_post_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_post_sag5mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_post_sag7mm'); ?>
		<?php echo $form->textField($model,'mo6_post_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_post_sag7mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_post_sag9mm'); ?>
		<?php echo $form->textField($model,'mo6_post_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_post_sag9mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_post_sag11mm'); ?>
		<?php echo $form->textField($model,'mo6_post_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_post_sag11mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_post_sag13mm'); ?>
		<?php echo $form->textField($model,'mo6_post_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_post_sag13mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_post_sag15mm'); ?>
		<?php echo $form->textField($model,'mo6_post_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_post_sag15mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_post_kpd'); ?>
		<?php echo $form->textField($model,'mo6_post_kpd',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_post_kpd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_k1_f__d'); ?>
		<?php echo $form->textField($model,'mo6_k1_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_k1_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_k2_f__d'); ?>
		<?php echo $form->textField($model,'mo6_k2_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_k2_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_km_f__d'); ?>
		<?php echo $form->textField($model,'mo6_km_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_km_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_axis_f__flat'); ?>
		<?php echo $form->textField($model,'mo6_axis_f__flat',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_axis_f__flat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_astig_f__d'); ?>
		<?php echo $form->textField($model,'mo6_astig_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_astig_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_k1_b__d'); ?>
		<?php echo $form->textField($model,'mo6_k1_b__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_k1_b__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_k2_b__d'); ?>
		<?php echo $form->textField($model,'mo6_k2_b__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_k2_b__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_km_b__mm'); ?>
		<?php echo $form->textField($model,'mo6_km_b__mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_km_b__mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_axis_b__flat'); ?>
		<?php echo $form->textField($model,'mo6_axis_b__flat',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_axis_b__flat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_astig_b__d'); ?>
		<?php echo $form->textField($model,'mo6_astig_b__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_astig_b__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_c_vol_d_3mm'); ?>
		<?php echo $form->textField($model,'mo6_c_vol_d_3mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_c_vol_d_3mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_c_vol_d_5mm'); ?>
		<?php echo $form->textField($model,'mo6_c_vol_d_5mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_c_vol_d_5mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_c_vol_d_7mm'); ?>
		<?php echo $form->textField($model,'mo6_c_vol_d_7mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_c_vol_d_7mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_c_vol_d_10mm'); ?>
		<?php echo $form->textField($model,'mo6_c_vol_d_10mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_c_vol_d_10mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo6_isv__index_surface_variance'); ?>
		<?php echo $form->textField($model,'mo6_isv__index_surface_variance',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo6_isv__index_surface_variance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_rh'); ?>
		<?php echo $form->textField($model,'mo12_rh',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_rh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_rv'); ?>
		<?php echo $form->textField($model,'mo12_rv',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_rv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_axis__flat'); ?>
		<?php echo $form->textField($model,'mo12_axis__flat',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_axis__flat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_astig'); ?>
		<?php echo $form->textField($model,'mo12_astig',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_astig'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_ecc'); ?>
		<?php echo $form->textField($model,'mo12_ecc',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_ecc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_eccsph'); ?>
		<?php echo $form->textField($model,'mo12_eccsph',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_eccsph'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_c_height_endo'); ?>
		<?php echo $form->textField($model,'mo12_c_height_endo',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_c_height_endo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_c_height_epi'); ?>
		<?php echo $form->textField($model,'mo12_c_height_epi',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_c_height_epi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_pachy_apex'); ?>
		<?php echo $form->textField($model,'mo12_pachy_apex',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_pachy_apex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_pachy_pupil'); ?>
		<?php echo $form->textField($model,'mo12_pachy_pupil',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_pachy_pupil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_pachy_sup'); ?>
		<?php echo $form->textField($model,'mo12_pachy_sup',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_pachy_sup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_pachy_inf'); ?>
		<?php echo $form->textField($model,'mo12_pachy_inf',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_pachy_inf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_pachy_nas'); ?>
		<?php echo $form->textField($model,'mo12_pachy_nas',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_pachy_nas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_pachy_tem'); ?>
		<?php echo $form->textField($model,'mo12_pachy_tem',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_pachy_tem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_pachy_min'); ?>
		<?php echo $form->textField($model,'mo12_pachy_min',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_pachy_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_pachyminx'); ?>
		<?php echo $form->textField($model,'mo12_pachyminx',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_pachyminx'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_pachyminy'); ?>
		<?php echo $form->textField($model,'mo12_pachyminy',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_pachyminy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_sag3mm'); ?>
		<?php echo $form->textField($model,'mo12_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_sag3mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_sag5mm'); ?>
		<?php echo $form->textField($model,'mo12_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_sag5mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_sag7mm'); ?>
		<?php echo $form->textField($model,'mo12_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_sag7mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_sag9mm'); ?>
		<?php echo $form->textField($model,'mo12_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_sag9mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_sag11mm'); ?>
		<?php echo $form->textField($model,'mo12_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_sag11mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_sag13mm'); ?>
		<?php echo $form->textField($model,'mo12_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_sag13mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_sag15mm'); ?>
		<?php echo $form->textField($model,'mo12_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_sag15mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_kpd'); ?>
		<?php echo $form->textField($model,'mo12_kpd',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_kpd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_post_sag3mm'); ?>
		<?php echo $form->textField($model,'mo12_post_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_post_sag3mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_post_sag5mm'); ?>
		<?php echo $form->textField($model,'mo12_post_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_post_sag5mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_post_sag7mm'); ?>
		<?php echo $form->textField($model,'mo12_post_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_post_sag7mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_post_sag9mm'); ?>
		<?php echo $form->textField($model,'mo12_post_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_post_sag9mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_post_sag11mm'); ?>
		<?php echo $form->textField($model,'mo12_post_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_post_sag11mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_post_sag13mm'); ?>
		<?php echo $form->textField($model,'mo12_post_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_post_sag13mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_post_sag15mm'); ?>
		<?php echo $form->textField($model,'mo12_post_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_post_sag15mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_post_kpd'); ?>
		<?php echo $form->textField($model,'mo12_post_kpd',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_post_kpd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_k1_f__d'); ?>
		<?php echo $form->textField($model,'mo12_k1_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_k1_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_k2_f__d'); ?>
		<?php echo $form->textField($model,'mo12_k2_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_k2_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_km_f__mm'); ?>
		<?php echo $form->textField($model,'mo12_km_f__mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_km_f__mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_axis_f__flat'); ?>
		<?php echo $form->textField($model,'mo12_axis_f__flat',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_axis_f__flat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_astig_f__d'); ?>
		<?php echo $form->textField($model,'mo12_astig_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_astig_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_k1_b__d'); ?>
		<?php echo $form->textField($model,'mo12_k1_b__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_k1_b__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_k2_b__d'); ?>
		<?php echo $form->textField($model,'mo12_k2_b__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_k2_b__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_km_b__mm'); ?>
		<?php echo $form->textField($model,'mo12_km_b__mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_km_b__mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_axis_b__flat'); ?>
		<?php echo $form->textField($model,'mo12_axis_b__flat',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_axis_b__flat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_astig_b__d'); ?>
		<?php echo $form->textField($model,'mo12_astig_b__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_astig_b__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_c_vol_d_3mm'); ?>
		<?php echo $form->textField($model,'mo12_c_vol_d_3mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_c_vol_d_3mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_c_vol_d_5mm'); ?>
		<?php echo $form->textField($model,'mo12_c_vol_d_5mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_c_vol_d_5mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_c_vol_d_7mm'); ?>
		<?php echo $form->textField($model,'mo12_c_vol_d_7mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_c_vol_d_7mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_c_vol_d_10mm'); ?>
		<?php echo $form->textField($model,'mo12_c_vol_d_10mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_c_vol_d_10mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mo12_isv__index_surface_variance'); ?>
		<?php echo $form->textField($model,'mo12_isv__index_surface_variance',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'mo12_isv__index_surface_variance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_rh'); ?>
		<?php echo $form->textField($model,'calc__last_rh',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_rh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_rv'); ?>
		<?php echo $form->textField($model,'calc__last_rv',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_rv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_axis__flat'); ?>
		<?php echo $form->textField($model,'calc__last_axis__flat',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_axis__flat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_astig'); ?>
		<?php echo $form->textField($model,'calc__last_astig',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_astig'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_ecc'); ?>
		<?php echo $form->textField($model,'calc__last_ecc',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_ecc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_eccsph'); ?>
		<?php echo $form->textField($model,'calc__last_eccsph',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_eccsph'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_c_height_endo'); ?>
		<?php echo $form->textField($model,'calc__last_c_height_endo',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_c_height_endo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_c_height_epi'); ?>
		<?php echo $form->textField($model,'calc__last_c_height_epi',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_c_height_epi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_pachy_apex'); ?>
		<?php echo $form->textField($model,'calc__last_pachy_apex',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_pachy_apex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_pachy_pupil'); ?>
		<?php echo $form->textField($model,'calc__last_pachy_pupil',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_pachy_pupil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_pachy_sup'); ?>
		<?php echo $form->textField($model,'calc__last_pachy_sup',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_pachy_sup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_pachy_inf'); ?>
		<?php echo $form->textField($model,'calc__last_pachy_inf',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_pachy_inf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_pachy_nas'); ?>
		<?php echo $form->textField($model,'calc__last_pachy_nas',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_pachy_nas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_pachy_tem'); ?>
		<?php echo $form->textField($model,'calc__last_pachy_tem',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_pachy_tem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_pachy_min'); ?>
		<?php echo $form->textField($model,'calc__last_pachy_min',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_pachy_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_pachyminx'); ?>
		<?php echo $form->textField($model,'calc__last_pachyminx',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_pachyminx'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_pachyminy'); ?>
		<?php echo $form->textField($model,'calc__last_pachyminy',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_pachyminy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_sag3mm'); ?>
		<?php echo $form->textField($model,'calc__last_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_sag3mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_sag5mm'); ?>
		<?php echo $form->textField($model,'calc__last_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_sag5mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_sag7mm'); ?>
		<?php echo $form->textField($model,'calc__last_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_sag7mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_sag9mm'); ?>
		<?php echo $form->textField($model,'calc__last_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_sag9mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_sag11mm'); ?>
		<?php echo $form->textField($model,'calc__last_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_sag11mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_sag13mm'); ?>
		<?php echo $form->textField($model,'calc__last_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_sag13mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_sag15mm'); ?>
		<?php echo $form->textField($model,'calc__last_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_sag15mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_kpd'); ?>
		<?php echo $form->textField($model,'calc__last_kpd',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_kpd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_post_sag3mm'); ?>
		<?php echo $form->textField($model,'calc__last_post_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_post_sag3mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_post_sag5mm'); ?>
		<?php echo $form->textField($model,'calc__last_post_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_post_sag5mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_post_sag7mm'); ?>
		<?php echo $form->textField($model,'calc__last_post_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_post_sag7mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_post_sag9mm'); ?>
		<?php echo $form->textField($model,'calc__last_post_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_post_sag9mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_post_sag11mm'); ?>
		<?php echo $form->textField($model,'calc__last_post_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_post_sag11mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_post_sag13mm'); ?>
		<?php echo $form->textField($model,'calc__last_post_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_post_sag13mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_post_sag15mm'); ?>
		<?php echo $form->textField($model,'calc__last_post_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_post_sag15mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_post_kpd'); ?>
		<?php echo $form->textField($model,'calc__last_post_kpd',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_post_kpd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_k1_f__d'); ?>
		<?php echo $form->textField($model,'calc__last_k1_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_k1_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_k2_f__d'); ?>
		<?php echo $form->textField($model,'calc__last_k2_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_k2_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_km_f__mm'); ?>
		<?php echo $form->textField($model,'calc__last_km_f__mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_km_f__mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_axis_f__flat'); ?>
		<?php echo $form->textField($model,'calc__last_axis_f__flat',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_axis_f__flat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_astig_f__d'); ?>
		<?php echo $form->textField($model,'calc__last_astig_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_astig_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_k1_b__d'); ?>
		<?php echo $form->textField($model,'calc__last_k1_b__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_k1_b__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_k2_b__d'); ?>
		<?php echo $form->textField($model,'calc__last_k2_b__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_k2_b__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_km_b__mm'); ?>
		<?php echo $form->textField($model,'calc__last_km_b__mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_km_b__mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_axis_b__flat'); ?>
		<?php echo $form->textField($model,'calc__last_axis_b__flat',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_axis_b__flat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_astig_b__d'); ?>
		<?php echo $form->textField($model,'calc__last_astig_b__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_astig_b__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_c_vol_d_3mm'); ?>
		<?php echo $form->textField($model,'calc__last_c_vol_d_3mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_c_vol_d_3mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_c_vol_d_5mm'); ?>
		<?php echo $form->textField($model,'calc__last_c_vol_d_5mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_c_vol_d_5mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_c_vol_d_7mm'); ?>
		<?php echo $form->textField($model,'calc__last_c_vol_d_7mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_c_vol_d_7mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_c_vol_d_10mm'); ?>
		<?php echo $form->textField($model,'calc__last_c_vol_d_10mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_c_vol_d_10mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__last_isv__index_surface_variance'); ?>
		<?php echo $form->textField($model,'calc__last_isv__index_surface_variance',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__last_isv__index_surface_variance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_rh'); ?>
		<?php echo $form->textField($model,'calc__delta_last_rh',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_rh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_rv'); ?>
		<?php echo $form->textField($model,'calc__delta_last_rv',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_rv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_axis__flat'); ?>
		<?php echo $form->textField($model,'calc__delta_last_axis__flat',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_axis__flat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_astig'); ?>
		<?php echo $form->textField($model,'calc__delta_last_astig',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_astig'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_ecc'); ?>
		<?php echo $form->textField($model,'calc__delta_last_ecc',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_ecc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_eccsph'); ?>
		<?php echo $form->textField($model,'calc__delta_last_eccsph',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_eccsph'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_c_height_endo'); ?>
		<?php echo $form->textField($model,'calc__delta_last_c_height_endo',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_c_height_endo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_c_height_epi'); ?>
		<?php echo $form->textField($model,'calc__delta_last_c_height_epi',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_c_height_epi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_pachy_apex'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachy_apex',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_pachy_apex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_pachy_pupil'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachy_pupil',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_pachy_pupil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_pachy_sup'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachy_sup',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_pachy_sup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_pachy_inf'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachy_inf',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_pachy_inf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_pachy_nas'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachy_nas',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_pachy_nas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_pachy_tem'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachy_tem',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_pachy_tem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_pachy_min'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachy_min',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_pachy_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_pachyminx'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachyminx',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_pachyminx'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_pachyminy'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachyminy',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_pachyminy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_sag3mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_sag3mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_sag5mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_sag5mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_sag7mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_sag7mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_sag9mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_sag9mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_sag11mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_sag11mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_sag13mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_sag13mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_sag15mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_sag15mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_kpd'); ?>
		<?php echo $form->textField($model,'calc__delta_last_kpd',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_kpd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_post_sag3mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_post_sag3mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_post_sag5mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_post_sag5mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_post_sag7mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_post_sag7mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_post_sag9mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_post_sag9mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_post_sag11mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_post_sag11mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_post_sag13mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_post_sag13mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_post_sag15mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_post_sag15mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_last_post_kpd'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_kpd',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_last_post_kpd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_k1_f__d'); ?>
		<?php echo $form->textField($model,'calc__delta_k1_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_k1_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_k2_f__d'); ?>
		<?php echo $form->textField($model,'calc__delta_k2_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_k2_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_km_f__mm'); ?>
		<?php echo $form->textField($model,'calc__delta_km_f__mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_km_f__mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_axis_f__flat'); ?>
		<?php echo $form->textField($model,'calc__delta_axis_f__flat',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_axis_f__flat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_astig_f__d'); ?>
		<?php echo $form->textField($model,'calc__delta_astig_f__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_astig_f__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_k1_b__d'); ?>
		<?php echo $form->textField($model,'calc__delta_k1_b__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_k1_b__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_k2_b__d'); ?>
		<?php echo $form->textField($model,'calc__delta_k2_b__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_k2_b__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_km_b__mm'); ?>
		<?php echo $form->textField($model,'calc__delta_km_b__mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_km_b__mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_axis_b__flat'); ?>
		<?php echo $form->textField($model,'calc__delta_axis_b__flat',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_axis_b__flat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_astig_b__d'); ?>
		<?php echo $form->textField($model,'calc__delta_astig_b__d',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_astig_b__d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_c_vol_d_3mm'); ?>
		<?php echo $form->textField($model,'calc__delta_c_vol_d_3mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_c_vol_d_3mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_c_vol_d_5mm'); ?>
		<?php echo $form->textField($model,'calc__delta_c_vol_d_5mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_c_vol_d_5mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_c_vol_d_7mm'); ?>
		<?php echo $form->textField($model,'calc__delta_c_vol_d_7mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_c_vol_d_7mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_c_vol_d_10mm'); ?>
		<?php echo $form->textField($model,'calc__delta_c_vol_d_10mm',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_c_vol_d_10mm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__delta_isv__index_surface_variance'); ?>
		<?php echo $form->textField($model,'calc__delta_isv__index_surface_variance',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__delta_isv__index_surface_variance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__6_vs_12_m_k1_f'); ?>
		<?php echo $form->textField($model,'calc__6_vs_12_m_k1_f',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__6_vs_12_m_k1_f'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__6_vs_12_m_k2_f'); ?>
		<?php echo $form->textField($model,'calc__6_vs_12_m_k2_f',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__6_vs_12_m_k2_f'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__6_vs_12_m_k1_b'); ?>
		<?php echo $form->textField($model,'calc__6_vs_12_m_k1_b',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__6_vs_12_m_k1_b'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calc__6_vs_12_m_k2_b'); ?>
		<?php echo $form->textField($model,'calc__6_vs_12_m_k2_b',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'calc__6_vs_12_m_k2_b'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated'); ?>
		<?php echo $form->textField($model,'updated'); ?>
		<?php echo $form->error($model,'updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edited_by'); ?>
		<?php echo $form->textField($model,'edited_by'); ?>
		<?php echo $form->error($model,'edited_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pohx'); ?>
		<?php echo $form->textField($model,'pohx',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pohx'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pohx_oag_steroidresponse'); ?>
		<?php echo $form->textField($model,'pohx_oag_steroidresponse',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pohx_oag_steroidresponse'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'past_medical_history'); ?>
		<?php echo $form->textField($model,'past_medical_history',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'past_medical_history'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'past_ocular_surgery'); ?>
		<?php echo $form->textField($model,'past_ocular_surgery',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'past_ocular_surgery'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'current_eye_medications'); ?>
		<?php echo $form->textField($model,'current_eye_medications',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'current_eye_medications'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->