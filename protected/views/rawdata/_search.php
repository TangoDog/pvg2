<?php
/* @var $this RawdataController */
/* @var $model Rawdata */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'date_of_surgery'); ?>
		<?php echo $form->textField($model,'date_of_surgery'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eye'); ?>
		<?php echo $form->textField($model,'eye',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dob'); ?>
		<?php echo $form->textField($model,'dob'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'race'); ?>
		<?php echo $form->textField($model,'race',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sex'); ?>
		<?php echo $form->textField($model,'sex',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mi'); ?>
		<?php echo $form->textField($model,'mi',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diagnosis'); ?>
		<?php echo $form->textField($model,'diagnosis',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'documented_target_refraction'); ?>
		<?php echo $form->textField($model,'documented_target_refraction',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'holladay_ii_target_chosen'); ?>
		<?php echo $form->textField($model,'holladay_ii_target_chosen',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iol_model'); ?>
		<?php echo $form->textField($model,'iol_model',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iol_power'); ?>
		<?php echo $form->textField($model,'iol_power',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_date'); ?>
		<?php echo $form->textField($model,'preop_date',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'presph'); ?>
		<?php echo $form->textField($model,'presph',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precyl'); ?>
		<?php echo $form->textField($model,'precyl',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m_axis'); ?>
		<?php echo $form->textField($model,'m_axis',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prebcva'); ?>
		<?php echo $form->textField($model,'prebcva',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preiop'); ?>
		<?php echo $form->textField($model,'preiop',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prepachy'); ?>
		<?php echo $form->textField($model,'prepachy',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'axial_length'); ?>
		<?php echo $form->textField($model,'axial_length',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hor_w_t_w'); ?>
		<?php echo $form->textField($model,'hor_w_t_w',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phakic_lens_thickness'); ?>
		<?php echo $form->textField($model,'phakic_lens_thickness',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phakic_anterior_chamber_depth'); ?>
		<?php echo $form->textField($model,'phakic_anterior_chamber_depth',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'k1'); ?>
		<?php echo $form->textField($model,'k1',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'k1a'); ?>
		<?php echo $form->textField($model,'k1a',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'k2'); ?>
		<?php echo $form->textField($model,'k2',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'k2a'); ?>
		<?php echo $form->textField($model,'k2a',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sk1'); ?>
		<?php echo $form->textField($model,'sk1',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sk1yes'); ?>
		<?php echo $form->textField($model,'sk1yes',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sk2yes_w_mmc'); ?>
		<?php echo $form->textField($model,'sk2yes_w_mmc',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_any_sk'); ?>
		<?php echo $form->textField($model,'calc_any_sk',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo5_8__no_scheduled'); ?>
		<?php echo $form->textField($model,'mo5_8__no_scheduled',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uncorrected_va__udva__6'); ?>
		<?php echo $form->textField($model,'uncorrected_va__udva__6',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sph6'); ?>
		<?php echo $form->textField($model,'sph6',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cyl6'); ?>
		<?php echo $form->textField($model,'cyl6',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m6_axis'); ?>
		<?php echo $form->textField($model,'m6_axis',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bcva6'); ?>
		<?php echo $form->textField($model,'bcva6',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iop6'); ?>
		<?php echo $form->textField($model,'iop6',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pachy6'); ?>
		<?php echo $form->textField($model,'pachy6',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecd6'); ?>
		<?php echo $form->textField($model,'ecd6',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_axial_length'); ?>
		<?php echo $form->textField($model,'mo6_axial_length',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anterior_chamber_depth'); ?>
		<?php echo $form->textField($model,'anterior_chamber_depth',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_k1'); ?>
		<?php echo $form->textField($model,'mo6_k1',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_k1a'); ?>
		<?php echo $form->textField($model,'mo6_k1a',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_k2'); ?>
		<?php echo $form->textField($model,'mo6_k2',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_k2a'); ?>
		<?php echo $form->textField($model,'mo6_k2a',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_achieved_se_6'); ?>
		<?php echo $form->textField($model,'calc_achieved_se_6',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_se_error'); ?>
		<?php echo $form->textField($model,'calc_se_error',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_change_in_pachy__preop_to_6'); ?>
		<?php echo $form->textField($model,'calc_change_in_pachy__preop_to_6',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mos_9_14_no_appt'); ?>
		<?php echo $form->textField($model,'mos_9_14_no_appt',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uncorrected_va__udva__12'); ?>
		<?php echo $form->textField($model,'uncorrected_va__udva__12',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'momo12_m_sph'); ?>
		<?php echo $form->textField($model,'momo12_m_sph',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m12_cyl'); ?>
		<?php echo $form->textField($model,'m12_cyl',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m12_axis'); ?>
		<?php echo $form->textField($model,'m12_axis',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bcva_mo12'); ?>
		<?php echo $form->textField($model,'bcva_mo12',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iop'); ?>
		<?php echo $form->textField($model,'iop',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pachy_1_year'); ?>
		<?php echo $form->textField($model,'pachy_1_year',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecc1_year'); ?>
		<?php echo $form->textField($model,'ecc1_year',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_axial_length'); ?>
		<?php echo $form->textField($model,'mo12_axial_length',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_anterior_chamber_depth'); ?>
		<?php echo $form->textField($model,'mo12_anterior_chamber_depth',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m12_k1'); ?>
		<?php echo $form->textField($model,'m12_k1',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m12_k1a'); ?>
		<?php echo $form->textField($model,'m12_k1a',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m12_k2'); ?>
		<?php echo $form->textField($model,'m12_k2',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'m12_k2a'); ?>
		<?php echo $form->textField($model,'m12_k2a',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_achieved_se_12'); ?>
		<?php echo $form->textField($model,'calc_achieved_se_12',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_se_error_12'); ?>
		<?php echo $form->textField($model,'calc_se_error_12',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_change_in_pachy__preop_to_12'); ?>
		<?php echo $form->textField($model,'calc_change_in_pachy__preop_to_12',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_followup__6_or_12'); ?>
		<?php echo $form->textField($model,'calc_followup__6_or_12',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_followup__6_and_12'); ?>
		<?php echo $form->textField($model,'calc_followup__6_and_12',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_preop_se_if_fu__6__12'); ?>
		<?php echo $form->textField($model,'calc_preop_se_if_fu__6__12',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_mo6_se_if_fu__6__12'); ?>
		<?php echo $form->textField($model,'calc_mo6_se_if_fu__6__12',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_mo12_se_if_fu__6__12'); ?>
		<?php echo $form->textField($model,'calc_mo12_se_if_fu__6__12',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_length_of_followup__days'); ?>
		<?php echo $form->textField($model,'calc_length_of_followup__days',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_length_of_followup__months'); ?>
		<?php echo $form->textField($model,'calc_length_of_followup__months',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_difference_mo6_to_1_year_achieved_se'); ?>
		<?php echo $form->textField($model,'calc_difference_mo6_to_1_year_achieved_se',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_mo6nth_avg_k___preop_avg_k'); ?>
		<?php echo $form->textField($model,'calc_mo6nth_avg_k___preop_avg_k',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_mo12nth_avg_k___preop_avg_k'); ?>
		<?php echo $form->textField($model,'calc_mo12nth_avg_k___preop_avg_k',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_last_avg_k___preop_avg_k'); ?>
		<?php echo $form->textField($model,'calc_last_avg_k___preop_avg_k',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_preop_se'); ?>
		<?php echo $form->textField($model,'calc_preop_se',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_last__se'); ?>
		<?php echo $form->textField($model,'calc_last__se',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_last_se_error'); ?>
		<?php echo $form->textField($model,'calc_last_se_error',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_last_change_in_pachy'); ?>
		<?php echo $form->textField($model,'calc_last_change_in_pachy',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_change_in_al'); ?>
		<?php echo $form->textField($model,'calc_change_in_al',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_target_refraction_if_se_error_known'); ?>
		<?php echo $form->textField($model,'calc_target_refraction_if_se_error_known',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_change_in_last_cdva'); ?>
		<?php echo $form->textField($model,'calc_change_in_last_cdva',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_last_cyl'); ?>
		<?php echo $form->textField($model,'calc_last_cyl',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_change_in_cyl'); ?>
		<?php echo $form->textField($model,'calc_change_in_cyl',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_last_cdva'); ?>
		<?php echo $form->textField($model,'calc_last_cdva',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_preop_cdva_if_last_cdva_known'); ?>
		<?php echo $form->textField($model,'calc_preop_cdva_if_last_cdva_known',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_last_udva___distance_eyes_only'); ?>
		<?php echo $form->textField($model,'calc_last_udva___distance_eyes_only',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_missing_pentacam_mo6_data'); ?>
		<?php echo $form->textField($model,'calc_missing_pentacam_mo6_data',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_missing_pentacam_mo12_data'); ?>
		<?php echo $form->textField($model,'calc_missing_pentacam_mo12_data',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc_missing_all_followup_pentacam_with_known_preop'); ?>
		<?php echo $form->textField($model,'calc_missing_all_followup_pentacam_with_known_preop',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_rh'); ?>
		<?php echo $form->textField($model,'preop_rh',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_rv'); ?>
		<?php echo $form->textField($model,'preop_rv',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_axis__flat'); ?>
		<?php echo $form->textField($model,'preop_axis__flat',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_astig'); ?>
		<?php echo $form->textField($model,'preop_astig',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_ecc'); ?>
		<?php echo $form->textField($model,'preop_ecc',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_eccsph'); ?>
		<?php echo $form->textField($model,'preop_eccsph',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_c_height_endo'); ?>
		<?php echo $form->textField($model,'preop_c_height_endo',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_c_height_epi'); ?>
		<?php echo $form->textField($model,'preop_c_height_epi',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_pachy_apex'); ?>
		<?php echo $form->textField($model,'preop_pachy_apex',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_pachy_pupil'); ?>
		<?php echo $form->textField($model,'preop_pachy_pupil',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_pachy_sup'); ?>
		<?php echo $form->textField($model,'preop_pachy_sup',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_pachy_inf'); ?>
		<?php echo $form->textField($model,'preop_pachy_inf',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_pachy_nas'); ?>
		<?php echo $form->textField($model,'preop_pachy_nas',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_pachy_tem'); ?>
		<?php echo $form->textField($model,'preop_pachy_tem',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_pachy_min'); ?>
		<?php echo $form->textField($model,'preop_pachy_min',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_pachyminx'); ?>
		<?php echo $form->textField($model,'preop_pachyminx',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_pachyminy'); ?>
		<?php echo $form->textField($model,'preop_pachyminy',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_sag3mm'); ?>
		<?php echo $form->textField($model,'preop_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_sag5mm'); ?>
		<?php echo $form->textField($model,'preop_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_sag7mm'); ?>
		<?php echo $form->textField($model,'preop_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_sag9mm'); ?>
		<?php echo $form->textField($model,'preop_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_sag11mm'); ?>
		<?php echo $form->textField($model,'preop_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_sag13mm'); ?>
		<?php echo $form->textField($model,'preop_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_sag15mm'); ?>
		<?php echo $form->textField($model,'preop_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_kpd'); ?>
		<?php echo $form->textField($model,'preop_kpd',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_post_sag3mm'); ?>
		<?php echo $form->textField($model,'preop_post_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_post_sag5mm'); ?>
		<?php echo $form->textField($model,'preop_post_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_post_sag7mm'); ?>
		<?php echo $form->textField($model,'preop_post_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_post_sag9mm'); ?>
		<?php echo $form->textField($model,'preop_post_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_post_sag11mm'); ?>
		<?php echo $form->textField($model,'preop_post_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_post_sag13mm'); ?>
		<?php echo $form->textField($model,'preop_post_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_post_sag15mm'); ?>
		<?php echo $form->textField($model,'preop_post_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_post_kpd'); ?>
		<?php echo $form->textField($model,'preop_post_kpd',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_k1_f__d'); ?>
		<?php echo $form->textField($model,'preop_k1_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_k2_f__d'); ?>
		<?php echo $form->textField($model,'preop_k2_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_km_f__mm'); ?>
		<?php echo $form->textField($model,'preop_km_f__mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_axis_f__flat'); ?>
		<?php echo $form->textField($model,'preop_axis_f__flat',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_astig_f__d'); ?>
		<?php echo $form->textField($model,'preop_astig_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_k1_b__d'); ?>
		<?php echo $form->textField($model,'preop_k1_b__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_k2_b__d'); ?>
		<?php echo $form->textField($model,'preop_k2_b__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_km_b__mm'); ?>
		<?php echo $form->textField($model,'preop_km_b__mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_axis_b__flat'); ?>
		<?php echo $form->textField($model,'preop_axis_b__flat',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_astig_b__d'); ?>
		<?php echo $form->textField($model,'preop_astig_b__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_c_vol_d_3mm'); ?>
		<?php echo $form->textField($model,'preop_c_vol_d_3mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_c_vol_d_5mm'); ?>
		<?php echo $form->textField($model,'preop_c_vol_d_5mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_c_vol_d_7mm'); ?>
		<?php echo $form->textField($model,'preop_c_vol_d_7mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_c_vol_d_10mm'); ?>
		<?php echo $form->textField($model,'preop_c_vol_d_10mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preop_isv__index_surface_variance'); ?>
		<?php echo $form->textField($model,'preop_isv__index_surface_variance',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_rh'); ?>
		<?php echo $form->textField($model,'mo6_rh',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_rv'); ?>
		<?php echo $form->textField($model,'mo6_rv',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_axis__flat'); ?>
		<?php echo $form->textField($model,'mo6_axis__flat',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_astig'); ?>
		<?php echo $form->textField($model,'mo6_astig',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_ecc'); ?>
		<?php echo $form->textField($model,'mo6_ecc',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_eccsph'); ?>
		<?php echo $form->textField($model,'mo6_eccsph',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_c_height_endo'); ?>
		<?php echo $form->textField($model,'mo6_c_height_endo',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_c_height_epi'); ?>
		<?php echo $form->textField($model,'mo6_c_height_epi',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_pachy_apex'); ?>
		<?php echo $form->textField($model,'mo6_pachy_apex',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_pachy_pupil'); ?>
		<?php echo $form->textField($model,'mo6_pachy_pupil',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_pachy_sup'); ?>
		<?php echo $form->textField($model,'mo6_pachy_sup',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_pachy_inf'); ?>
		<?php echo $form->textField($model,'mo6_pachy_inf',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_pachy_nas'); ?>
		<?php echo $form->textField($model,'mo6_pachy_nas',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_pachy_tem'); ?>
		<?php echo $form->textField($model,'mo6_pachy_tem',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_pachy_min'); ?>
		<?php echo $form->textField($model,'mo6_pachy_min',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_pachyminx'); ?>
		<?php echo $form->textField($model,'mo6_pachyminx',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_pachyminy'); ?>
		<?php echo $form->textField($model,'mo6_pachyminy',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_sag3mm'); ?>
		<?php echo $form->textField($model,'mo6_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_sag5mm'); ?>
		<?php echo $form->textField($model,'mo6_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_sag7mm'); ?>
		<?php echo $form->textField($model,'mo6_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_sag9mm'); ?>
		<?php echo $form->textField($model,'mo6_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_sag11mm'); ?>
		<?php echo $form->textField($model,'mo6_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_sag13mm'); ?>
		<?php echo $form->textField($model,'mo6_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_sag15mm'); ?>
		<?php echo $form->textField($model,'mo6_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_kpd'); ?>
		<?php echo $form->textField($model,'mo6_kpd',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_post_sag3mm'); ?>
		<?php echo $form->textField($model,'mo6_post_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_post_sag5mm'); ?>
		<?php echo $form->textField($model,'mo6_post_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_post_sag7mm'); ?>
		<?php echo $form->textField($model,'mo6_post_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_post_sag9mm'); ?>
		<?php echo $form->textField($model,'mo6_post_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_post_sag11mm'); ?>
		<?php echo $form->textField($model,'mo6_post_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_post_sag13mm'); ?>
		<?php echo $form->textField($model,'mo6_post_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_post_sag15mm'); ?>
		<?php echo $form->textField($model,'mo6_post_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_post_kpd'); ?>
		<?php echo $form->textField($model,'mo6_post_kpd',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_k1_f__d'); ?>
		<?php echo $form->textField($model,'mo6_k1_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_k2_f__d'); ?>
		<?php echo $form->textField($model,'mo6_k2_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_km_f__d'); ?>
		<?php echo $form->textField($model,'mo6_km_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_axis_f__flat'); ?>
		<?php echo $form->textField($model,'mo6_axis_f__flat',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_astig_f__d'); ?>
		<?php echo $form->textField($model,'mo6_astig_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_k1_b__d'); ?>
		<?php echo $form->textField($model,'mo6_k1_b__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_k2_b__d'); ?>
		<?php echo $form->textField($model,'mo6_k2_b__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_km_b__mm'); ?>
		<?php echo $form->textField($model,'mo6_km_b__mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_axis_b__flat'); ?>
		<?php echo $form->textField($model,'mo6_axis_b__flat',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_astig_b__d'); ?>
		<?php echo $form->textField($model,'mo6_astig_b__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_c_vol_d_3mm'); ?>
		<?php echo $form->textField($model,'mo6_c_vol_d_3mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_c_vol_d_5mm'); ?>
		<?php echo $form->textField($model,'mo6_c_vol_d_5mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_c_vol_d_7mm'); ?>
		<?php echo $form->textField($model,'mo6_c_vol_d_7mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_c_vol_d_10mm'); ?>
		<?php echo $form->textField($model,'mo6_c_vol_d_10mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo6_isv__index_surface_variance'); ?>
		<?php echo $form->textField($model,'mo6_isv__index_surface_variance',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_rh'); ?>
		<?php echo $form->textField($model,'mo12_rh',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_rv'); ?>
		<?php echo $form->textField($model,'mo12_rv',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_axis__flat'); ?>
		<?php echo $form->textField($model,'mo12_axis__flat',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_astig'); ?>
		<?php echo $form->textField($model,'mo12_astig',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_ecc'); ?>
		<?php echo $form->textField($model,'mo12_ecc',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_eccsph'); ?>
		<?php echo $form->textField($model,'mo12_eccsph',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_c_height_endo'); ?>
		<?php echo $form->textField($model,'mo12_c_height_endo',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_c_height_epi'); ?>
		<?php echo $form->textField($model,'mo12_c_height_epi',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_pachy_apex'); ?>
		<?php echo $form->textField($model,'mo12_pachy_apex',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_pachy_pupil'); ?>
		<?php echo $form->textField($model,'mo12_pachy_pupil',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_pachy_sup'); ?>
		<?php echo $form->textField($model,'mo12_pachy_sup',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_pachy_inf'); ?>
		<?php echo $form->textField($model,'mo12_pachy_inf',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_pachy_nas'); ?>
		<?php echo $form->textField($model,'mo12_pachy_nas',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_pachy_tem'); ?>
		<?php echo $form->textField($model,'mo12_pachy_tem',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_pachy_min'); ?>
		<?php echo $form->textField($model,'mo12_pachy_min',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_pachyminx'); ?>
		<?php echo $form->textField($model,'mo12_pachyminx',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_pachyminy'); ?>
		<?php echo $form->textField($model,'mo12_pachyminy',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_sag3mm'); ?>
		<?php echo $form->textField($model,'mo12_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_sag5mm'); ?>
		<?php echo $form->textField($model,'mo12_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_sag7mm'); ?>
		<?php echo $form->textField($model,'mo12_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_sag9mm'); ?>
		<?php echo $form->textField($model,'mo12_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_sag11mm'); ?>
		<?php echo $form->textField($model,'mo12_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_sag13mm'); ?>
		<?php echo $form->textField($model,'mo12_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_sag15mm'); ?>
		<?php echo $form->textField($model,'mo12_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_kpd'); ?>
		<?php echo $form->textField($model,'mo12_kpd',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_post_sag3mm'); ?>
		<?php echo $form->textField($model,'mo12_post_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_post_sag5mm'); ?>
		<?php echo $form->textField($model,'mo12_post_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_post_sag7mm'); ?>
		<?php echo $form->textField($model,'mo12_post_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_post_sag9mm'); ?>
		<?php echo $form->textField($model,'mo12_post_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_post_sag11mm'); ?>
		<?php echo $form->textField($model,'mo12_post_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_post_sag13mm'); ?>
		<?php echo $form->textField($model,'mo12_post_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_post_sag15mm'); ?>
		<?php echo $form->textField($model,'mo12_post_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_post_kpd'); ?>
		<?php echo $form->textField($model,'mo12_post_kpd',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_k1_f__d'); ?>
		<?php echo $form->textField($model,'mo12_k1_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_k2_f__d'); ?>
		<?php echo $form->textField($model,'mo12_k2_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_km_f__mm'); ?>
		<?php echo $form->textField($model,'mo12_km_f__mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_axis_f__flat'); ?>
		<?php echo $form->textField($model,'mo12_axis_f__flat',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_astig_f__d'); ?>
		<?php echo $form->textField($model,'mo12_astig_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_k1_b__d'); ?>
		<?php echo $form->textField($model,'mo12_k1_b__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_k2_b__d'); ?>
		<?php echo $form->textField($model,'mo12_k2_b__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_km_b__mm'); ?>
		<?php echo $form->textField($model,'mo12_km_b__mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_axis_b__flat'); ?>
		<?php echo $form->textField($model,'mo12_axis_b__flat',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_astig_b__d'); ?>
		<?php echo $form->textField($model,'mo12_astig_b__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_c_vol_d_3mm'); ?>
		<?php echo $form->textField($model,'mo12_c_vol_d_3mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_c_vol_d_5mm'); ?>
		<?php echo $form->textField($model,'mo12_c_vol_d_5mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_c_vol_d_7mm'); ?>
		<?php echo $form->textField($model,'mo12_c_vol_d_7mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_c_vol_d_10mm'); ?>
		<?php echo $form->textField($model,'mo12_c_vol_d_10mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mo12_isv__index_surface_variance'); ?>
		<?php echo $form->textField($model,'mo12_isv__index_surface_variance',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_rh'); ?>
		<?php echo $form->textField($model,'calc__last_rh',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_rv'); ?>
		<?php echo $form->textField($model,'calc__last_rv',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_axis__flat'); ?>
		<?php echo $form->textField($model,'calc__last_axis__flat',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_astig'); ?>
		<?php echo $form->textField($model,'calc__last_astig',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_ecc'); ?>
		<?php echo $form->textField($model,'calc__last_ecc',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_eccsph'); ?>
		<?php echo $form->textField($model,'calc__last_eccsph',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_c_height_endo'); ?>
		<?php echo $form->textField($model,'calc__last_c_height_endo',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_c_height_epi'); ?>
		<?php echo $form->textField($model,'calc__last_c_height_epi',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_pachy_apex'); ?>
		<?php echo $form->textField($model,'calc__last_pachy_apex',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_pachy_pupil'); ?>
		<?php echo $form->textField($model,'calc__last_pachy_pupil',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_pachy_sup'); ?>
		<?php echo $form->textField($model,'calc__last_pachy_sup',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_pachy_inf'); ?>
		<?php echo $form->textField($model,'calc__last_pachy_inf',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_pachy_nas'); ?>
		<?php echo $form->textField($model,'calc__last_pachy_nas',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_pachy_tem'); ?>
		<?php echo $form->textField($model,'calc__last_pachy_tem',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_pachy_min'); ?>
		<?php echo $form->textField($model,'calc__last_pachy_min',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_pachyminx'); ?>
		<?php echo $form->textField($model,'calc__last_pachyminx',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_pachyminy'); ?>
		<?php echo $form->textField($model,'calc__last_pachyminy',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_sag3mm'); ?>
		<?php echo $form->textField($model,'calc__last_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_sag5mm'); ?>
		<?php echo $form->textField($model,'calc__last_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_sag7mm'); ?>
		<?php echo $form->textField($model,'calc__last_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_sag9mm'); ?>
		<?php echo $form->textField($model,'calc__last_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_sag11mm'); ?>
		<?php echo $form->textField($model,'calc__last_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_sag13mm'); ?>
		<?php echo $form->textField($model,'calc__last_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_sag15mm'); ?>
		<?php echo $form->textField($model,'calc__last_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_kpd'); ?>
		<?php echo $form->textField($model,'calc__last_kpd',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_post_sag3mm'); ?>
		<?php echo $form->textField($model,'calc__last_post_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_post_sag5mm'); ?>
		<?php echo $form->textField($model,'calc__last_post_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_post_sag7mm'); ?>
		<?php echo $form->textField($model,'calc__last_post_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_post_sag9mm'); ?>
		<?php echo $form->textField($model,'calc__last_post_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_post_sag11mm'); ?>
		<?php echo $form->textField($model,'calc__last_post_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_post_sag13mm'); ?>
		<?php echo $form->textField($model,'calc__last_post_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_post_sag15mm'); ?>
		<?php echo $form->textField($model,'calc__last_post_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_post_kpd'); ?>
		<?php echo $form->textField($model,'calc__last_post_kpd',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_k1_f__d'); ?>
		<?php echo $form->textField($model,'calc__last_k1_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_k2_f__d'); ?>
		<?php echo $form->textField($model,'calc__last_k2_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_km_f__mm'); ?>
		<?php echo $form->textField($model,'calc__last_km_f__mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_axis_f__flat'); ?>
		<?php echo $form->textField($model,'calc__last_axis_f__flat',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_astig_f__d'); ?>
		<?php echo $form->textField($model,'calc__last_astig_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_k1_b__d'); ?>
		<?php echo $form->textField($model,'calc__last_k1_b__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_k2_b__d'); ?>
		<?php echo $form->textField($model,'calc__last_k2_b__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_km_b__mm'); ?>
		<?php echo $form->textField($model,'calc__last_km_b__mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_axis_b__flat'); ?>
		<?php echo $form->textField($model,'calc__last_axis_b__flat',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_astig_b__d'); ?>
		<?php echo $form->textField($model,'calc__last_astig_b__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_c_vol_d_3mm'); ?>
		<?php echo $form->textField($model,'calc__last_c_vol_d_3mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_c_vol_d_5mm'); ?>
		<?php echo $form->textField($model,'calc__last_c_vol_d_5mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_c_vol_d_7mm'); ?>
		<?php echo $form->textField($model,'calc__last_c_vol_d_7mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_c_vol_d_10mm'); ?>
		<?php echo $form->textField($model,'calc__last_c_vol_d_10mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__last_isv__index_surface_variance'); ?>
		<?php echo $form->textField($model,'calc__last_isv__index_surface_variance',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_rh'); ?>
		<?php echo $form->textField($model,'calc__delta_last_rh',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_rv'); ?>
		<?php echo $form->textField($model,'calc__delta_last_rv',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_axis__flat'); ?>
		<?php echo $form->textField($model,'calc__delta_last_axis__flat',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_astig'); ?>
		<?php echo $form->textField($model,'calc__delta_last_astig',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_ecc'); ?>
		<?php echo $form->textField($model,'calc__delta_last_ecc',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_eccsph'); ?>
		<?php echo $form->textField($model,'calc__delta_last_eccsph',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_c_height_endo'); ?>
		<?php echo $form->textField($model,'calc__delta_last_c_height_endo',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_c_height_epi'); ?>
		<?php echo $form->textField($model,'calc__delta_last_c_height_epi',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_pachy_apex'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachy_apex',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_pachy_pupil'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachy_pupil',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_pachy_sup'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachy_sup',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_pachy_inf'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachy_inf',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_pachy_nas'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachy_nas',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_pachy_tem'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachy_tem',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_pachy_min'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachy_min',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_pachyminx'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachyminx',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_pachyminy'); ?>
		<?php echo $form->textField($model,'calc__delta_last_pachyminy',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_sag3mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_sag5mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_sag7mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_sag9mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_sag11mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_sag13mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_sag15mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_kpd'); ?>
		<?php echo $form->textField($model,'calc__delta_last_kpd',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_post_sag3mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_sag3mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_post_sag5mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_sag5mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_post_sag7mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_sag7mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_post_sag9mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_sag9mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_post_sag11mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_sag11mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_post_sag13mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_sag13mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_post_sag15mm'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_sag15mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_last_post_kpd'); ?>
		<?php echo $form->textField($model,'calc__delta_last_post_kpd',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_k1_f__d'); ?>
		<?php echo $form->textField($model,'calc__delta_k1_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_k2_f__d'); ?>
		<?php echo $form->textField($model,'calc__delta_k2_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_km_f__mm'); ?>
		<?php echo $form->textField($model,'calc__delta_km_f__mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_axis_f__flat'); ?>
		<?php echo $form->textField($model,'calc__delta_axis_f__flat',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_astig_f__d'); ?>
		<?php echo $form->textField($model,'calc__delta_astig_f__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_k1_b__d'); ?>
		<?php echo $form->textField($model,'calc__delta_k1_b__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_k2_b__d'); ?>
		<?php echo $form->textField($model,'calc__delta_k2_b__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_km_b__mm'); ?>
		<?php echo $form->textField($model,'calc__delta_km_b__mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_axis_b__flat'); ?>
		<?php echo $form->textField($model,'calc__delta_axis_b__flat',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_astig_b__d'); ?>
		<?php echo $form->textField($model,'calc__delta_astig_b__d',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_c_vol_d_3mm'); ?>
		<?php echo $form->textField($model,'calc__delta_c_vol_d_3mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_c_vol_d_5mm'); ?>
		<?php echo $form->textField($model,'calc__delta_c_vol_d_5mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_c_vol_d_7mm'); ?>
		<?php echo $form->textField($model,'calc__delta_c_vol_d_7mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_c_vol_d_10mm'); ?>
		<?php echo $form->textField($model,'calc__delta_c_vol_d_10mm',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__delta_isv__index_surface_variance'); ?>
		<?php echo $form->textField($model,'calc__delta_isv__index_surface_variance',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__6_vs_12_m_k1_f'); ?>
		<?php echo $form->textField($model,'calc__6_vs_12_m_k1_f',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__6_vs_12_m_k2_f'); ?>
		<?php echo $form->textField($model,'calc__6_vs_12_m_k2_f',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__6_vs_12_m_k1_b'); ?>
		<?php echo $form->textField($model,'calc__6_vs_12_m_k1_b',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calc__6_vs_12_m_k2_b'); ?>
		<?php echo $form->textField($model,'calc__6_vs_12_m_k2_b',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated'); ?>
		<?php echo $form->textField($model,'updated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'edited_by'); ?>
		<?php echo $form->textField($model,'edited_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->