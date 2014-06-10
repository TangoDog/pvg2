<?php
/* @var $this RawdataController */
/* @var $data Rawdata */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_surgery')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_surgery); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eye')); ?>:</b>
	<?php echo CHtml::encode($data->eye); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('age')); ?>:</b>
	<?php echo CHtml::encode($data->age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dob')); ?>:</b>
	<?php echo CHtml::encode($data->dob); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('race')); ?>:</b>
	<?php echo CHtml::encode($data->race); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mi')); ?>:</b>
	<?php echo CHtml::encode($data->mi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnosis')); ?>:</b>
	<?php echo CHtml::encode($data->diagnosis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documented_target_refraction')); ?>:</b>
	<?php echo CHtml::encode($data->documented_target_refraction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('holladay_ii_target_chosen')); ?>:</b>
	<?php echo CHtml::encode($data->holladay_ii_target_chosen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iol_model')); ?>:</b>
	<?php echo CHtml::encode($data->iol_model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iol_power')); ?>:</b>
	<?php echo CHtml::encode($data->iol_power); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_date')); ?>:</b>
	<?php echo CHtml::encode($data->preop_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presph')); ?>:</b>
	<?php echo CHtml::encode($data->presph); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precyl')); ?>:</b>
	<?php echo CHtml::encode($data->precyl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_axis')); ?>:</b>
	<?php echo CHtml::encode($data->m_axis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prebcva')); ?>:</b>
	<?php echo CHtml::encode($data->prebcva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preiop')); ?>:</b>
	<?php echo CHtml::encode($data->preiop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prepachy')); ?>:</b>
	<?php echo CHtml::encode($data->prepachy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('axial_length')); ?>:</b>
	<?php echo CHtml::encode($data->axial_length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hor_w_t_w')); ?>:</b>
	<?php echo CHtml::encode($data->hor_w_t_w); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phakic_lens_thickness')); ?>:</b>
	<?php echo CHtml::encode($data->phakic_lens_thickness); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phakic_anterior_chamber_depth')); ?>:</b>
	<?php echo CHtml::encode($data->phakic_anterior_chamber_depth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('k1')); ?>:</b>
	<?php echo CHtml::encode($data->k1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('k1a')); ?>:</b>
	<?php echo CHtml::encode($data->k1a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('k2')); ?>:</b>
	<?php echo CHtml::encode($data->k2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('k2a')); ?>:</b>
	<?php echo CHtml::encode($data->k2a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sk1')); ?>:</b>
	<?php echo CHtml::encode($data->sk1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sk1yes')); ?>:</b>
	<?php echo CHtml::encode($data->sk1yes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sk2yes_w_mmc')); ?>:</b>
	<?php echo CHtml::encode($data->sk2yes_w_mmc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_any_sk')); ?>:</b>
	<?php echo CHtml::encode($data->calc_any_sk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo5_8__no_scheduled')); ?>:</b>
	<?php echo CHtml::encode($data->mo5_8__no_scheduled); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uncorrected_va__udva__6')); ?>:</b>
	<?php echo CHtml::encode($data->uncorrected_va__udva__6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sph6')); ?>:</b>
	<?php echo CHtml::encode($data->sph6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cyl6')); ?>:</b>
	<?php echo CHtml::encode($data->cyl6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m6_axis')); ?>:</b>
	<?php echo CHtml::encode($data->m6_axis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bcva6')); ?>:</b>
	<?php echo CHtml::encode($data->bcva6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iop6')); ?>:</b>
	<?php echo CHtml::encode($data->iop6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pachy6')); ?>:</b>
	<?php echo CHtml::encode($data->pachy6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecd6')); ?>:</b>
	<?php echo CHtml::encode($data->ecd6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_axial_length')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_axial_length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anterior_chamber_depth')); ?>:</b>
	<?php echo CHtml::encode($data->anterior_chamber_depth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_k1')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_k1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_k1a')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_k1a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_k2')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_k2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_k2a')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_k2a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_achieved_se_6')); ?>:</b>
	<?php echo CHtml::encode($data->calc_achieved_se_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_se_error')); ?>:</b>
	<?php echo CHtml::encode($data->calc_se_error); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_change_in_pachy__preop_to_6')); ?>:</b>
	<?php echo CHtml::encode($data->calc_change_in_pachy__preop_to_6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mos_9_14_no_appt')); ?>:</b>
	<?php echo CHtml::encode($data->mos_9_14_no_appt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uncorrected_va__udva__12')); ?>:</b>
	<?php echo CHtml::encode($data->uncorrected_va__udva__12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('momo12_m_sph')); ?>:</b>
	<?php echo CHtml::encode($data->momo12_m_sph); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m12_cyl')); ?>:</b>
	<?php echo CHtml::encode($data->m12_cyl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m12_axis')); ?>:</b>
	<?php echo CHtml::encode($data->m12_axis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bcva_mo12')); ?>:</b>
	<?php echo CHtml::encode($data->bcva_mo12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iop')); ?>:</b>
	<?php echo CHtml::encode($data->iop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pachy_1_year')); ?>:</b>
	<?php echo CHtml::encode($data->pachy_1_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecc1_year')); ?>:</b>
	<?php echo CHtml::encode($data->ecc1_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_axial_length')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_axial_length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_anterior_chamber_depth')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_anterior_chamber_depth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m12_k1')); ?>:</b>
	<?php echo CHtml::encode($data->m12_k1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m12_k1a')); ?>:</b>
	<?php echo CHtml::encode($data->m12_k1a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m12_k2')); ?>:</b>
	<?php echo CHtml::encode($data->m12_k2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m12_k2a')); ?>:</b>
	<?php echo CHtml::encode($data->m12_k2a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_achieved_se_12')); ?>:</b>
	<?php echo CHtml::encode($data->calc_achieved_se_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_se_error_12')); ?>:</b>
	<?php echo CHtml::encode($data->calc_se_error_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_change_in_pachy__preop_to_12')); ?>:</b>
	<?php echo CHtml::encode($data->calc_change_in_pachy__preop_to_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_followup__6_or_12')); ?>:</b>
	<?php echo CHtml::encode($data->calc_followup__6_or_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_followup__6_and_12')); ?>:</b>
	<?php echo CHtml::encode($data->calc_followup__6_and_12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_preop_se_if_fu__6__12')); ?>:</b>
	<?php echo CHtml::encode($data->calc_preop_se_if_fu__6__12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_mo6_se_if_fu__6__12')); ?>:</b>
	<?php echo CHtml::encode($data->calc_mo6_se_if_fu__6__12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_mo12_se_if_fu__6__12')); ?>:</b>
	<?php echo CHtml::encode($data->calc_mo12_se_if_fu__6__12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_length_of_followup__days')); ?>:</b>
	<?php echo CHtml::encode($data->calc_length_of_followup__days); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_length_of_followup__months')); ?>:</b>
	<?php echo CHtml::encode($data->calc_length_of_followup__months); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_difference_mo6_to_1_year_achieved_se')); ?>:</b>
	<?php echo CHtml::encode($data->calc_difference_mo6_to_1_year_achieved_se); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_mo6nth_avg_k___preop_avg_k')); ?>:</b>
	<?php echo CHtml::encode($data->calc_mo6nth_avg_k___preop_avg_k); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_mo12nth_avg_k___preop_avg_k')); ?>:</b>
	<?php echo CHtml::encode($data->calc_mo12nth_avg_k___preop_avg_k); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_last_avg_k___preop_avg_k')); ?>:</b>
	<?php echo CHtml::encode($data->calc_last_avg_k___preop_avg_k); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_preop_se')); ?>:</b>
	<?php echo CHtml::encode($data->calc_preop_se); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_last__se')); ?>:</b>
	<?php echo CHtml::encode($data->calc_last__se); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_last_se_error')); ?>:</b>
	<?php echo CHtml::encode($data->calc_last_se_error); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_last_change_in_pachy')); ?>:</b>
	<?php echo CHtml::encode($data->calc_last_change_in_pachy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_change_in_al')); ?>:</b>
	<?php echo CHtml::encode($data->calc_change_in_al); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_target_refraction_if_se_error_known')); ?>:</b>
	<?php echo CHtml::encode($data->calc_target_refraction_if_se_error_known); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_change_in_last_cdva')); ?>:</b>
	<?php echo CHtml::encode($data->calc_change_in_last_cdva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_last_cyl')); ?>:</b>
	<?php echo CHtml::encode($data->calc_last_cyl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_change_in_cyl')); ?>:</b>
	<?php echo CHtml::encode($data->calc_change_in_cyl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_last_cdva')); ?>:</b>
	<?php echo CHtml::encode($data->calc_last_cdva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_preop_cdva_if_last_cdva_known')); ?>:</b>
	<?php echo CHtml::encode($data->calc_preop_cdva_if_last_cdva_known); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_last_udva___distance_eyes_only')); ?>:</b>
	<?php echo CHtml::encode($data->calc_last_udva___distance_eyes_only); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_missing_pentacam_mo6_data')); ?>:</b>
	<?php echo CHtml::encode($data->calc_missing_pentacam_mo6_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_missing_pentacam_mo12_data')); ?>:</b>
	<?php echo CHtml::encode($data->calc_missing_pentacam_mo12_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc_missing_all_followup_pentacam_with_known_preop')); ?>:</b>
	<?php echo CHtml::encode($data->calc_missing_all_followup_pentacam_with_known_preop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_rh')); ?>:</b>
	<?php echo CHtml::encode($data->preop_rh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_rv')); ?>:</b>
	<?php echo CHtml::encode($data->preop_rv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_axis__flat')); ?>:</b>
	<?php echo CHtml::encode($data->preop_axis__flat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_astig')); ?>:</b>
	<?php echo CHtml::encode($data->preop_astig); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_ecc')); ?>:</b>
	<?php echo CHtml::encode($data->preop_ecc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_eccsph')); ?>:</b>
	<?php echo CHtml::encode($data->preop_eccsph); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_c_height_endo')); ?>:</b>
	<?php echo CHtml::encode($data->preop_c_height_endo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_c_height_epi')); ?>:</b>
	<?php echo CHtml::encode($data->preop_c_height_epi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_pachy_apex')); ?>:</b>
	<?php echo CHtml::encode($data->preop_pachy_apex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_pachy_pupil')); ?>:</b>
	<?php echo CHtml::encode($data->preop_pachy_pupil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_pachy_sup')); ?>:</b>
	<?php echo CHtml::encode($data->preop_pachy_sup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_pachy_inf')); ?>:</b>
	<?php echo CHtml::encode($data->preop_pachy_inf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_pachy_nas')); ?>:</b>
	<?php echo CHtml::encode($data->preop_pachy_nas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_pachy_tem')); ?>:</b>
	<?php echo CHtml::encode($data->preop_pachy_tem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_pachy_min')); ?>:</b>
	<?php echo CHtml::encode($data->preop_pachy_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_pachyminx')); ?>:</b>
	<?php echo CHtml::encode($data->preop_pachyminx); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_pachyminy')); ?>:</b>
	<?php echo CHtml::encode($data->preop_pachyminy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_sag3mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_sag3mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_sag5mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_sag5mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_sag7mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_sag7mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_sag9mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_sag9mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_sag11mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_sag11mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_sag13mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_sag13mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_sag15mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_sag15mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_kpd')); ?>:</b>
	<?php echo CHtml::encode($data->preop_kpd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_post_sag3mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_post_sag3mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_post_sag5mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_post_sag5mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_post_sag7mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_post_sag7mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_post_sag9mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_post_sag9mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_post_sag11mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_post_sag11mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_post_sag13mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_post_sag13mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_post_sag15mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_post_sag15mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_post_kpd')); ?>:</b>
	<?php echo CHtml::encode($data->preop_post_kpd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_k1_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->preop_k1_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_k2_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->preop_k2_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_km_f__mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_km_f__mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_axis_f__flat')); ?>:</b>
	<?php echo CHtml::encode($data->preop_axis_f__flat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_astig_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->preop_astig_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_k1_b__d')); ?>:</b>
	<?php echo CHtml::encode($data->preop_k1_b__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_k2_b__d')); ?>:</b>
	<?php echo CHtml::encode($data->preop_k2_b__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_km_b__mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_km_b__mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_axis_b__flat')); ?>:</b>
	<?php echo CHtml::encode($data->preop_axis_b__flat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_astig_b__d')); ?>:</b>
	<?php echo CHtml::encode($data->preop_astig_b__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_c_vol_d_3mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_c_vol_d_3mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_c_vol_d_5mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_c_vol_d_5mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_c_vol_d_7mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_c_vol_d_7mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_c_vol_d_10mm')); ?>:</b>
	<?php echo CHtml::encode($data->preop_c_vol_d_10mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preop_isv__index_surface_variance')); ?>:</b>
	<?php echo CHtml::encode($data->preop_isv__index_surface_variance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_rh')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_rh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_rv')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_rv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_axis__flat')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_axis__flat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_astig')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_astig); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_ecc')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_ecc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_eccsph')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_eccsph); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_c_height_endo')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_c_height_endo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_c_height_epi')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_c_height_epi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_pachy_apex')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_pachy_apex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_pachy_pupil')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_pachy_pupil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_pachy_sup')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_pachy_sup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_pachy_inf')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_pachy_inf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_pachy_nas')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_pachy_nas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_pachy_tem')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_pachy_tem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_pachy_min')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_pachy_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_pachyminx')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_pachyminx); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_pachyminy')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_pachyminy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_sag3mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_sag3mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_sag5mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_sag5mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_sag7mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_sag7mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_sag9mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_sag9mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_sag11mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_sag11mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_sag13mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_sag13mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_sag15mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_sag15mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_kpd')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_kpd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_post_sag3mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_post_sag3mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_post_sag5mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_post_sag5mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_post_sag7mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_post_sag7mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_post_sag9mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_post_sag9mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_post_sag11mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_post_sag11mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_post_sag13mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_post_sag13mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_post_sag15mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_post_sag15mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_post_kpd')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_post_kpd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_k1_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_k1_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_k2_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_k2_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_km_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_km_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_axis_f__flat')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_axis_f__flat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_astig_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_astig_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_k1_b__d')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_k1_b__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_k2_b__d')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_k2_b__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_km_b__mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_km_b__mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_axis_b__flat')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_axis_b__flat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_astig_b__d')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_astig_b__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_c_vol_d_3mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_c_vol_d_3mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_c_vol_d_5mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_c_vol_d_5mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_c_vol_d_7mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_c_vol_d_7mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_c_vol_d_10mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_c_vol_d_10mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo6_isv__index_surface_variance')); ?>:</b>
	<?php echo CHtml::encode($data->mo6_isv__index_surface_variance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_rh')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_rh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_rv')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_rv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_axis__flat')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_axis__flat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_astig')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_astig); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_ecc')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_ecc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_eccsph')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_eccsph); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_c_height_endo')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_c_height_endo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_c_height_epi')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_c_height_epi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_pachy_apex')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_pachy_apex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_pachy_pupil')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_pachy_pupil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_pachy_sup')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_pachy_sup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_pachy_inf')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_pachy_inf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_pachy_nas')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_pachy_nas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_pachy_tem')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_pachy_tem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_pachy_min')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_pachy_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_pachyminx')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_pachyminx); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_pachyminy')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_pachyminy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_sag3mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_sag3mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_sag5mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_sag5mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_sag7mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_sag7mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_sag9mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_sag9mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_sag11mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_sag11mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_sag13mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_sag13mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_sag15mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_sag15mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_kpd')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_kpd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_post_sag3mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_post_sag3mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_post_sag5mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_post_sag5mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_post_sag7mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_post_sag7mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_post_sag9mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_post_sag9mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_post_sag11mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_post_sag11mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_post_sag13mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_post_sag13mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_post_sag15mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_post_sag15mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_post_kpd')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_post_kpd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_k1_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_k1_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_k2_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_k2_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_km_f__mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_km_f__mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_axis_f__flat')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_axis_f__flat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_astig_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_astig_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_k1_b__d')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_k1_b__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_k2_b__d')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_k2_b__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_km_b__mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_km_b__mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_axis_b__flat')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_axis_b__flat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_astig_b__d')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_astig_b__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_c_vol_d_3mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_c_vol_d_3mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_c_vol_d_5mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_c_vol_d_5mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_c_vol_d_7mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_c_vol_d_7mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_c_vol_d_10mm')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_c_vol_d_10mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo12_isv__index_surface_variance')); ?>:</b>
	<?php echo CHtml::encode($data->mo12_isv__index_surface_variance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_rh')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_rh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_rv')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_rv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_axis__flat')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_axis__flat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_astig')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_astig); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_ecc')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_ecc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_eccsph')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_eccsph); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_c_height_endo')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_c_height_endo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_c_height_epi')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_c_height_epi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_pachy_apex')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_pachy_apex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_pachy_pupil')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_pachy_pupil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_pachy_sup')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_pachy_sup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_pachy_inf')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_pachy_inf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_pachy_nas')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_pachy_nas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_pachy_tem')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_pachy_tem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_pachy_min')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_pachy_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_pachyminx')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_pachyminx); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_pachyminy')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_pachyminy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_sag3mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_sag3mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_sag5mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_sag5mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_sag7mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_sag7mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_sag9mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_sag9mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_sag11mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_sag11mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_sag13mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_sag13mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_sag15mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_sag15mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_kpd')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_kpd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_post_sag3mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_post_sag3mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_post_sag5mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_post_sag5mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_post_sag7mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_post_sag7mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_post_sag9mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_post_sag9mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_post_sag11mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_post_sag11mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_post_sag13mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_post_sag13mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_post_sag15mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_post_sag15mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_post_kpd')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_post_kpd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_k1_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_k1_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_k2_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_k2_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_km_f__mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_km_f__mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_axis_f__flat')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_axis_f__flat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_astig_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_astig_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_k1_b__d')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_k1_b__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_k2_b__d')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_k2_b__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_km_b__mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_km_b__mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_axis_b__flat')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_axis_b__flat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_astig_b__d')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_astig_b__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_c_vol_d_3mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_c_vol_d_3mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_c_vol_d_5mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_c_vol_d_5mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_c_vol_d_7mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_c_vol_d_7mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_c_vol_d_10mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_c_vol_d_10mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__last_isv__index_surface_variance')); ?>:</b>
	<?php echo CHtml::encode($data->calc__last_isv__index_surface_variance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_rh')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_rh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_rv')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_rv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_axis__flat')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_axis__flat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_astig')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_astig); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_ecc')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_ecc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_eccsph')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_eccsph); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_c_height_endo')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_c_height_endo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_c_height_epi')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_c_height_epi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_pachy_apex')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_pachy_apex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_pachy_pupil')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_pachy_pupil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_pachy_sup')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_pachy_sup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_pachy_inf')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_pachy_inf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_pachy_nas')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_pachy_nas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_pachy_tem')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_pachy_tem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_pachy_min')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_pachy_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_pachyminx')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_pachyminx); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_pachyminy')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_pachyminy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_sag3mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_sag3mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_sag5mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_sag5mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_sag7mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_sag7mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_sag9mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_sag9mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_sag11mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_sag11mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_sag13mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_sag13mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_sag15mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_sag15mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_kpd')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_kpd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_post_sag3mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_post_sag3mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_post_sag5mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_post_sag5mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_post_sag7mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_post_sag7mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_post_sag9mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_post_sag9mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_post_sag11mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_post_sag11mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_post_sag13mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_post_sag13mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_post_sag15mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_post_sag15mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_last_post_kpd')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_last_post_kpd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_k1_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_k1_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_k2_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_k2_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_km_f__mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_km_f__mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_axis_f__flat')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_axis_f__flat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_astig_f__d')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_astig_f__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_k1_b__d')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_k1_b__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_k2_b__d')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_k2_b__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_km_b__mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_km_b__mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_axis_b__flat')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_axis_b__flat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_astig_b__d')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_astig_b__d); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_c_vol_d_3mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_c_vol_d_3mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_c_vol_d_5mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_c_vol_d_5mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_c_vol_d_7mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_c_vol_d_7mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_c_vol_d_10mm')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_c_vol_d_10mm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__delta_isv__index_surface_variance')); ?>:</b>
	<?php echo CHtml::encode($data->calc__delta_isv__index_surface_variance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__6_vs_12_m_k1_f')); ?>:</b>
	<?php echo CHtml::encode($data->calc__6_vs_12_m_k1_f); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__6_vs_12_m_k2_f')); ?>:</b>
	<?php echo CHtml::encode($data->calc__6_vs_12_m_k2_f); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__6_vs_12_m_k1_b')); ?>:</b>
	<?php echo CHtml::encode($data->calc__6_vs_12_m_k1_b); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calc__6_vs_12_m_k2_b')); ?>:</b>
	<?php echo CHtml::encode($data->calc__6_vs_12_m_k2_b); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated')); ?>:</b>
	<?php echo CHtml::encode($data->updated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edited_by')); ?>:</b>
	<?php echo CHtml::encode($data->edited_by); ?>
	<br />

	*/ ?>

</div>