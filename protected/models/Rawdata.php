<?php

/**
 * This is the model class for table "tbl_rawdata".
 *
 * The followings are the available columns in table 'tbl_rawdata':
 * @property string $date_of_surgery
 * @property string $first_name
 * @property string $last_name
 * @property string $eye
 * @property integer $age
 * @property string $dob
 * @property string $race
 * @property string $sex
 * @property string $mi
 * @property string $diagnosis
 * @property string $documented_target_refraction
 * @property string $holladay_ii_target_chosen
 * @property string $iol_model
 * @property string $iol_power
 * @property string $preop_date
 * @property string $presph
 * @property string $precyl
 * @property string $m_axis
 * @property string $prebcva
 * @property string $preiop
 * @property string $prepachy
 * @property string $axial_length
 * @property string $hor_w_t_w
 * @property string $phakic_lens_thickness
 * @property string $phakic_anterior_chamber_depth
 * @property string $k1
 * @property string $k1a
 * @property string $k2
 * @property string $k2a
 * @property string $sk1
 * @property string $sk1yes
 * @property string $sk2yes_w_mmc
 * @property string $calc_any_sk
 * @property string $comments
 * @property string $mo5_8__no_scheduled
 * @property string $uncorrected_va__udva__6
 * @property string $sph6
 * @property string $cyl6
 * @property string $m6_axis
 * @property string $bcva6
 * @property string $iop6
 * @property string $pachy6
 * @property string $ecd6
 * @property string $mo6_axial_length
 * @property string $anterior_chamber_depth
 * @property string $mo6_k1
 * @property string $mo6_k1a
 * @property string $mo6_k2
 * @property string $mo6_k2a
 * @property string $calc_achieved_se_6
 * @property string $calc_se_error
 * @property string $calc_change_in_pachy__preop_to_6
 * @property string $mos_9_14_no_appt
 * @property string $uncorrected_va__udva__12
 * @property string $momo12_m_sph
 * @property string $m12_cyl
 * @property string $m12_axis
 * @property string $bcva_mo12
 * @property string $iop
 * @property string $pachy_1_year
 * @property string $ecc1_year
 * @property string $mo12_axial_length
 * @property string $mo12_anterior_chamber_depth
 * @property string $m12_k1
 * @property string $m12_k1a
 * @property string $m12_k2
 * @property string $m12_k2a
 * @property string $calc_achieved_se_12
 * @property string $calc_se_error_12
 * @property string $calc_change_in_pachy__preop_to_12
 * @property string $calc_followup__6_or_12
 * @property string $calc_followup__6_and_12
 * @property string $calc_preop_se_if_fu__6__12
 * @property string $calc_mo6_se_if_fu__6__12
 * @property string $calc_mo12_se_if_fu__6__12
 * @property string $calc_length_of_followup__days
 * @property string $calc_length_of_followup__months
 * @property string $calc_difference_mo6_to_1_year_achieved_se
 * @property string $calc_mo6nth_avg_k___preop_avg_k
 * @property string $calc_mo12nth_avg_k___preop_avg_k
 * @property string $calc_last_avg_k___preop_avg_k
 * @property string $calc_preop_se
 * @property string $calc_last__se
 * @property string $calc_last_se_error
 * @property string $calc_last_change_in_pachy
 * @property string $calc_change_in_al
 * @property string $calc_target_refraction_if_se_error_known
 * @property string $calc_change_in_last_cdva
 * @property string $calc_last_cyl
 * @property string $calc_change_in_cyl
 * @property string $calc_last_cdva
 * @property string $calc_preop_cdva_if_last_cdva_known
 * @property string $calc_last_udva___distance_eyes_only
 * @property string $calc_missing_pentacam_mo6_data
 * @property string $calc_missing_pentacam_mo12_data
 * @property string $calc_missing_all_followup_pentacam_with_known_preop
 * @property string $preop_rh
 * @property string $preop_rv
 * @property string $preop_axis__flat
 * @property string $preop_astig
 * @property string $preop_ecc
 * @property string $preop_eccsph
 * @property string $preop_c_height_endo
 * @property string $preop_c_height_epi
 * @property string $preop_pachy_apex
 * @property string $preop_pachy_pupil
 * @property string $preop_pachy_sup
 * @property string $preop_pachy_inf
 * @property string $preop_pachy_nas
 * @property string $preop_pachy_tem
 * @property string $preop_pachy_min
 * @property string $preop_pachyminx
 * @property string $preop_pachyminy
 * @property string $preop_sag3mm
 * @property string $preop_sag5mm
 * @property string $preop_sag7mm
 * @property string $preop_sag9mm
 * @property string $preop_sag11mm
 * @property string $preop_sag13mm
 * @property string $preop_sag15mm
 * @property string $preop_kpd
 * @property string $preop_post_sag3mm
 * @property string $preop_post_sag5mm
 * @property string $preop_post_sag7mm
 * @property string $preop_post_sag9mm
 * @property string $preop_post_sag11mm
 * @property string $preop_post_sag13mm
 * @property string $preop_post_sag15mm
 * @property string $preop_post_kpd
 * @property string $preop_k1_f__d
 * @property string $preop_k2_f__d
 * @property string $preop_km_f__mm
 * @property string $preop_axis_f__flat
 * @property string $preop_astig_f__d
 * @property string $preop_k1_b__d
 * @property string $preop_k2_b__d
 * @property string $preop_km_b__mm
 * @property string $preop_axis_b__flat
 * @property string $preop_astig_b__d
 * @property string $preop_c_vol_d_3mm
 * @property string $preop_c_vol_d_5mm
 * @property string $preop_c_vol_d_7mm
 * @property string $preop_c_vol_d_10mm
 * @property string $preop_isv__index_surface_variance
 * @property string $mo6_rh
 * @property string $mo6_rv
 * @property string $mo6_axis__flat
 * @property string $mo6_astig
 * @property string $mo6_ecc
 * @property string $mo6_eccsph
 * @property string $mo6_c_height_endo
 * @property string $mo6_c_height_epi
 * @property string $mo6_pachy_apex
 * @property string $mo6_pachy_pupil
 * @property string $mo6_pachy_sup
 * @property string $mo6_pachy_inf
 * @property string $mo6_pachy_nas
 * @property string $mo6_pachy_tem
 * @property string $mo6_pachy_min
 * @property string $mo6_pachyminx
 * @property string $mo6_pachyminy
 * @property string $mo6_sag3mm
 * @property string $mo6_sag5mm
 * @property string $mo6_sag7mm
 * @property string $mo6_sag9mm
 * @property string $mo6_sag11mm
 * @property string $mo6_sag13mm
 * @property string $mo6_sag15mm
 * @property string $mo6_kpd
 * @property string $mo6_post_sag3mm
 * @property string $mo6_post_sag5mm
 * @property string $mo6_post_sag7mm
 * @property string $mo6_post_sag9mm
 * @property string $mo6_post_sag11mm
 * @property string $mo6_post_sag13mm
 * @property string $mo6_post_sag15mm
 * @property string $mo6_post_kpd
 * @property string $mo6_k1_f__d
 * @property string $mo6_k2_f__d
 * @property string $mo6_km_f__d
 * @property string $mo6_axis_f__flat
 * @property string $mo6_astig_f__d
 * @property string $mo6_k1_b__d
 * @property string $mo6_k2_b__d
 * @property string $mo6_km_b__mm
 * @property string $mo6_axis_b__flat
 * @property string $mo6_astig_b__d
 * @property string $mo6_c_vol_d_3mm
 * @property string $mo6_c_vol_d_5mm
 * @property string $mo6_c_vol_d_7mm
 * @property string $mo6_c_vol_d_10mm
 * @property string $mo6_isv__index_surface_variance
 * @property string $mo12_rh
 * @property string $mo12_rv
 * @property string $mo12_axis__flat
 * @property string $mo12_astig
 * @property string $mo12_ecc
 * @property string $mo12_eccsph
 * @property string $mo12_c_height_endo
 * @property string $mo12_c_height_epi
 * @property string $mo12_pachy_apex
 * @property string $mo12_pachy_pupil
 * @property string $mo12_pachy_sup
 * @property string $mo12_pachy_inf
 * @property string $mo12_pachy_nas
 * @property string $mo12_pachy_tem
 * @property string $mo12_pachy_min
 * @property string $mo12_pachyminx
 * @property string $mo12_pachyminy
 * @property string $mo12_sag3mm
 * @property string $mo12_sag5mm
 * @property string $mo12_sag7mm
 * @property string $mo12_sag9mm
 * @property string $mo12_sag11mm
 * @property string $mo12_sag13mm
 * @property string $mo12_sag15mm
 * @property string $mo12_kpd
 * @property string $mo12_post_sag3mm
 * @property string $mo12_post_sag5mm
 * @property string $mo12_post_sag7mm
 * @property string $mo12_post_sag9mm
 * @property string $mo12_post_sag11mm
 * @property string $mo12_post_sag13mm
 * @property string $mo12_post_sag15mm
 * @property string $mo12_post_kpd
 * @property string $mo12_k1_f__d
 * @property string $mo12_k2_f__d
 * @property string $mo12_km_f__mm
 * @property string $mo12_axis_f__flat
 * @property string $mo12_astig_f__d
 * @property string $mo12_k1_b__d
 * @property string $mo12_k2_b__d
 * @property string $mo12_km_b__mm
 * @property string $mo12_axis_b__flat
 * @property string $mo12_astig_b__d
 * @property string $mo12_c_vol_d_3mm
 * @property string $mo12_c_vol_d_5mm
 * @property string $mo12_c_vol_d_7mm
 * @property string $mo12_c_vol_d_10mm
 * @property string $mo12_isv__index_surface_variance
 * @property string $calc__last_rh
 * @property string $calc__last_rv
 * @property string $calc__last_axis__flat
 * @property string $calc__last_astig
 * @property string $calc__last_ecc
 * @property string $calc__last_eccsph
 * @property string $calc__last_c_height_endo
 * @property string $calc__last_c_height_epi
 * @property string $calc__last_pachy_apex
 * @property string $calc__last_pachy_pupil
 * @property string $calc__last_pachy_sup
 * @property string $calc__last_pachy_inf
 * @property string $calc__last_pachy_nas
 * @property string $calc__last_pachy_tem
 * @property string $calc__last_pachy_min
 * @property string $calc__last_pachyminx
 * @property string $calc__last_pachyminy
 * @property string $calc__last_sag3mm
 * @property string $calc__last_sag5mm
 * @property string $calc__last_sag7mm
 * @property string $calc__last_sag9mm
 * @property string $calc__last_sag11mm
 * @property string $calc__last_sag13mm
 * @property string $calc__last_sag15mm
 * @property string $calc__last_kpd
 * @property string $calc__last_post_sag3mm
 * @property string $calc__last_post_sag5mm
 * @property string $calc__last_post_sag7mm
 * @property string $calc__last_post_sag9mm
 * @property string $calc__last_post_sag11mm
 * @property string $calc__last_post_sag13mm
 * @property string $calc__last_post_sag15mm
 * @property string $calc__last_post_kpd
 * @property string $calc__last_k1_f__d
 * @property string $calc__last_k2_f__d
 * @property string $calc__last_km_f__mm
 * @property string $calc__last_axis_f__flat
 * @property string $calc__last_astig_f__d
 * @property string $calc__last_k1_b__d
 * @property string $calc__last_k2_b__d
 * @property string $calc__last_km_b__mm
 * @property string $calc__last_axis_b__flat
 * @property string $calc__last_astig_b__d
 * @property string $calc__last_c_vol_d_3mm
 * @property string $calc__last_c_vol_d_5mm
 * @property string $calc__last_c_vol_d_7mm
 * @property string $calc__last_c_vol_d_10mm
 * @property string $calc__last_isv__index_surface_variance
 * @property string $calc__delta_last_rh
 * @property string $calc__delta_last_rv
 * @property string $calc__delta_last_axis__flat
 * @property string $calc__delta_last_astig
 * @property string $calc__delta_last_ecc
 * @property string $calc__delta_last_eccsph
 * @property string $calc__delta_last_c_height_endo
 * @property string $calc__delta_last_c_height_epi
 * @property string $calc__delta_last_pachy_apex
 * @property string $calc__delta_last_pachy_pupil
 * @property string $calc__delta_last_pachy_sup
 * @property string $calc__delta_last_pachy_inf
 * @property string $calc__delta_last_pachy_nas
 * @property string $calc__delta_last_pachy_tem
 * @property string $calc__delta_last_pachy_min
 * @property string $calc__delta_last_pachyminx
 * @property string $calc__delta_last_pachyminy
 * @property string $calc__delta_last_sag3mm
 * @property string $calc__delta_last_sag5mm
 * @property string $calc__delta_last_sag7mm
 * @property string $calc__delta_last_sag9mm
 * @property string $calc__delta_last_sag11mm
 * @property string $calc__delta_last_sag13mm
 * @property string $calc__delta_last_sag15mm
 * @property string $calc__delta_last_kpd
 * @property string $calc__delta_last_post_sag3mm
 * @property string $calc__delta_last_post_sag5mm
 * @property string $calc__delta_last_post_sag7mm
 * @property string $calc__delta_last_post_sag9mm
 * @property string $calc__delta_last_post_sag11mm
 * @property string $calc__delta_last_post_sag13mm
 * @property string $calc__delta_last_post_sag15mm
 * @property string $calc__delta_last_post_kpd
 * @property string $calc__delta_k1_f__d
 * @property string $calc__delta_k2_f__d
 * @property string $calc__delta_km_f__mm
 * @property string $calc__delta_axis_f__flat
 * @property string $calc__delta_astig_f__d
 * @property string $calc__delta_k1_b__d
 * @property string $calc__delta_k2_b__d
 * @property string $calc__delta_km_b__mm
 * @property string $calc__delta_axis_b__flat
 * @property string $calc__delta_astig_b__d
 * @property string $calc__delta_c_vol_d_3mm
 * @property string $calc__delta_c_vol_d_5mm
 * @property string $calc__delta_c_vol_d_7mm
 * @property string $calc__delta_c_vol_d_10mm
 * @property string $calc__delta_isv__index_surface_variance
 * @property string $calc__6_vs_12_m_k1_f
 * @property string $calc__6_vs_12_m_k2_f
 * @property string $calc__6_vs_12_m_k1_b
 * @property string $calc__6_vs_12_m_k2_b
 * @property integer $id
 * @property string $created
 * @property string $updated
 * @property integer $user_id
 * @property integer $edited_by
 */
class Rawdata extends fmActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_rawdata';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created', 'required'),
			array('age, user_id, edited_by', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name', 'length', 'max'=>60),
			array('eye, race, sex', 'length', 'max'=>2),
			array('mi, diagnosis, sk1, sk1yes, sk2yes_w_mmc, calc_any_sk, comments', 'length', 'max'=>20),
			array('documented_target_refraction, holladay_ii_target_chosen, iol_power, preop_date, presph, precyl, m_axis, prebcva, preiop, prepachy, axial_length, hor_w_t_w, phakic_lens_thickness, phakic_anterior_chamber_depth, k1, k1a, k2, k2a, mo5_8__no_scheduled, uncorrected_va__udva__6, sph6, cyl6, m6_axis, bcva6, iop6, pachy6, ecd6, mo6_axial_length, anterior_chamber_depth, mo6_k1, mo6_k1a, mo6_k2, mo6_k2a, calc_achieved_se_6, calc_se_error, calc_change_in_pachy__preop_to_6, mos_9_14_no_appt, uncorrected_va__udva__12, momo12_m_sph, m12_cyl, m12_axis, bcva_mo12, iop, pachy_1_year, ecc1_year, mo12_axial_length, mo12_anterior_chamber_depth, m12_k1, m12_k1a, m12_k2, m12_k2a, calc_achieved_se_12, calc_se_error_12, calc_change_in_pachy__preop_to_12, calc_followup__6_or_12, calc_followup__6_and_12, calc_preop_se_if_fu__6__12, calc_mo6_se_if_fu__6__12, calc_mo12_se_if_fu__6__12, calc_length_of_followup__days, calc_length_of_followup__months, calc_difference_mo6_to_1_year_achieved_se, calc_mo6nth_avg_k___preop_avg_k, calc_mo12nth_avg_k___preop_avg_k, calc_last_avg_k___preop_avg_k, calc_preop_se, calc_last__se, calc_last_se_error, calc_last_change_in_pachy, calc_change_in_al, calc_target_refraction_if_se_error_known, calc_change_in_last_cdva, calc_last_cyl, calc_change_in_cyl, calc_last_cdva, calc_preop_cdva_if_last_cdva_known, calc_last_udva___distance_eyes_only, calc_missing_pentacam_mo6_data, calc_missing_pentacam_mo12_data, calc_missing_all_followup_pentacam_with_known_preop, preop_rh, preop_rv, preop_axis__flat, preop_astig, preop_ecc, preop_eccsph, preop_c_height_endo, preop_c_height_epi, preop_pachy_apex, preop_pachy_pupil, preop_pachy_sup, preop_pachy_inf, preop_pachy_nas, preop_pachy_tem, preop_pachy_min, preop_pachyminx, preop_pachyminy, preop_sag3mm, preop_sag5mm, preop_sag7mm, preop_sag9mm, preop_sag11mm, preop_sag13mm, preop_sag15mm, preop_kpd, preop_post_sag3mm, preop_post_sag5mm, preop_post_sag7mm, preop_post_sag9mm, preop_post_sag11mm, preop_post_sag13mm, preop_post_sag15mm, preop_post_kpd, preop_k1_f__d, preop_k2_f__d, preop_km_f__mm, preop_axis_f__flat, preop_astig_f__d, preop_k1_b__d, preop_k2_b__d, preop_km_b__mm, preop_axis_b__flat, preop_astig_b__d, preop_c_vol_d_3mm, preop_c_vol_d_5mm, preop_c_vol_d_7mm, preop_c_vol_d_10mm, preop_isv__index_surface_variance, mo6_rh, mo6_rv, mo6_axis__flat, mo6_astig, mo6_ecc, mo6_eccsph, mo6_c_height_endo, mo6_c_height_epi, mo6_pachy_apex, mo6_pachy_pupil, mo6_pachy_sup, mo6_pachy_inf, mo6_pachy_nas, mo6_pachy_tem, mo6_pachy_min, mo6_pachyminx, mo6_pachyminy, mo6_sag3mm, mo6_sag5mm, mo6_sag7mm, mo6_sag9mm, mo6_sag11mm, mo6_sag13mm, mo6_sag15mm, mo6_kpd, mo6_post_sag3mm, mo6_post_sag5mm, mo6_post_sag7mm, mo6_post_sag9mm, mo6_post_sag11mm, mo6_post_sag13mm, mo6_post_sag15mm, mo6_post_kpd, mo6_k1_f__d, mo6_k2_f__d, mo6_km_f__d, mo6_axis_f__flat, mo6_astig_f__d, mo6_k1_b__d, mo6_k2_b__d, mo6_km_b__mm, mo6_axis_b__flat, mo6_astig_b__d, mo6_c_vol_d_3mm, mo6_c_vol_d_5mm, mo6_c_vol_d_7mm, mo6_c_vol_d_10mm, mo6_isv__index_surface_variance, mo12_rh, mo12_rv, mo12_axis__flat, mo12_astig, mo12_ecc, mo12_eccsph, mo12_c_height_endo, mo12_c_height_epi, mo12_pachy_apex, mo12_pachy_pupil, mo12_pachy_sup, mo12_pachy_inf, mo12_pachy_nas, mo12_pachy_tem, mo12_pachy_min, mo12_pachyminx, mo12_pachyminy, mo12_sag3mm, mo12_sag5mm, mo12_sag7mm, mo12_sag9mm, mo12_sag11mm, mo12_sag13mm, mo12_sag15mm, mo12_kpd, mo12_post_sag3mm, mo12_post_sag5mm, mo12_post_sag7mm, mo12_post_sag9mm, mo12_post_sag11mm, mo12_post_sag13mm, mo12_post_sag15mm, mo12_post_kpd, mo12_k1_f__d, mo12_k2_f__d, mo12_km_f__mm, mo12_axis_f__flat, mo12_astig_f__d, mo12_k1_b__d, mo12_k2_b__d, mo12_km_b__mm, mo12_axis_b__flat, mo12_astig_b__d, mo12_c_vol_d_3mm, mo12_c_vol_d_5mm, mo12_c_vol_d_7mm, mo12_c_vol_d_10mm, mo12_isv__index_surface_variance, calc__last_rh, calc__last_rv, calc__last_axis__flat, calc__last_astig, calc__last_ecc, calc__last_eccsph, calc__last_c_height_endo, calc__last_c_height_epi, calc__last_pachy_apex, calc__last_pachy_pupil, calc__last_pachy_sup, calc__last_pachy_inf, calc__last_pachy_nas, calc__last_pachy_tem, calc__last_pachy_min, calc__last_pachyminx, calc__last_pachyminy, calc__last_sag3mm, calc__last_sag5mm, calc__last_sag7mm, calc__last_sag9mm, calc__last_sag11mm, calc__last_sag13mm, calc__last_sag15mm, calc__last_kpd, calc__last_post_sag3mm, calc__last_post_sag5mm, calc__last_post_sag7mm, calc__last_post_sag9mm, calc__last_post_sag11mm, calc__last_post_sag13mm, calc__last_post_sag15mm, calc__last_post_kpd, calc__last_k1_f__d, calc__last_k2_f__d, calc__last_km_f__mm, calc__last_axis_f__flat, calc__last_astig_f__d, calc__last_k1_b__d, calc__last_k2_b__d, calc__last_km_b__mm, calc__last_axis_b__flat, calc__last_astig_b__d, calc__last_c_vol_d_3mm, calc__last_c_vol_d_5mm, calc__last_c_vol_d_7mm, calc__last_c_vol_d_10mm, calc__last_isv__index_surface_variance, calc__delta_last_rh, calc__delta_last_rv, calc__delta_last_axis__flat, calc__delta_last_astig, calc__delta_last_ecc, calc__delta_last_eccsph, calc__delta_last_c_height_endo, calc__delta_last_c_height_epi, calc__delta_last_pachy_apex, calc__delta_last_pachy_pupil, calc__delta_last_pachy_sup, calc__delta_last_pachy_inf, calc__delta_last_pachy_nas, calc__delta_last_pachy_tem, calc__delta_last_pachy_min, calc__delta_last_pachyminx, calc__delta_last_pachyminy, calc__delta_last_sag3mm, calc__delta_last_sag5mm, calc__delta_last_sag7mm, calc__delta_last_sag9mm, calc__delta_last_sag11mm, calc__delta_last_sag13mm, calc__delta_last_sag15mm, calc__delta_last_kpd, calc__delta_last_post_sag3mm, calc__delta_last_post_sag5mm, calc__delta_last_post_sag7mm, calc__delta_last_post_sag9mm, calc__delta_last_post_sag11mm, calc__delta_last_post_sag13mm, calc__delta_last_post_sag15mm, calc__delta_last_post_kpd, calc__delta_k1_f__d, calc__delta_k2_f__d, calc__delta_km_f__mm, calc__delta_axis_f__flat, calc__delta_astig_f__d, calc__delta_k1_b__d, calc__delta_k2_b__d, calc__delta_km_b__mm, calc__delta_axis_b__flat, calc__delta_astig_b__d, calc__delta_c_vol_d_3mm, calc__delta_c_vol_d_5mm, calc__delta_c_vol_d_7mm, calc__delta_c_vol_d_10mm, calc__delta_isv__index_surface_variance, calc__6_vs_12_m_k1_f, calc__6_vs_12_m_k2_f, calc__6_vs_12_m_k1_b, calc__6_vs_12_m_k2_b', 'length', 'max'=>8),
			array('iol_model', 'length', 'max'=>40),
			array('date_of_surgery, dob, updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('date_of_surgery, first_name, last_name, eye, age, dob, race, sex, mi, diagnosis, documented_target_refraction, holladay_ii_target_chosen, iol_model, iol_power, preop_date, presph, precyl, m_axis, prebcva, preiop, prepachy, axial_length, hor_w_t_w, phakic_lens_thickness, phakic_anterior_chamber_depth, k1, k1a, k2, k2a, sk1, sk1yes, sk2yes_w_mmc, calc_any_sk, comments, mo5_8__no_scheduled, uncorrected_va__udva__6, sph6, cyl6, m6_axis, bcva6, iop6, pachy6, ecd6, mo6_axial_length, anterior_chamber_depth, mo6_k1, mo6_k1a, mo6_k2, mo6_k2a, calc_achieved_se_6, calc_se_error, calc_change_in_pachy__preop_to_6, mos_9_14_no_appt, uncorrected_va__udva__12, momo12_m_sph, m12_cyl, m12_axis, bcva_mo12, iop, pachy_1_year, ecc1_year, mo12_axial_length, mo12_anterior_chamber_depth, m12_k1, m12_k1a, m12_k2, m12_k2a, calc_achieved_se_12, calc_se_error_12, calc_change_in_pachy__preop_to_12, calc_followup__6_or_12, calc_followup__6_and_12, calc_preop_se_if_fu__6__12, calc_mo6_se_if_fu__6__12, calc_mo12_se_if_fu__6__12, calc_length_of_followup__days, calc_length_of_followup__months, calc_difference_mo6_to_1_year_achieved_se, calc_mo6nth_avg_k___preop_avg_k, calc_mo12nth_avg_k___preop_avg_k, calc_last_avg_k___preop_avg_k, calc_preop_se, calc_last__se, calc_last_se_error, calc_last_change_in_pachy, calc_change_in_al, calc_target_refraction_if_se_error_known, calc_change_in_last_cdva, calc_last_cyl, calc_change_in_cyl, calc_last_cdva, calc_preop_cdva_if_last_cdva_known, calc_last_udva___distance_eyes_only, calc_missing_pentacam_mo6_data, calc_missing_pentacam_mo12_data, calc_missing_all_followup_pentacam_with_known_preop, preop_rh, preop_rv, preop_axis__flat, preop_astig, preop_ecc, preop_eccsph, preop_c_height_endo, preop_c_height_epi, preop_pachy_apex, preop_pachy_pupil, preop_pachy_sup, preop_pachy_inf, preop_pachy_nas, preop_pachy_tem, preop_pachy_min, preop_pachyminx, preop_pachyminy, preop_sag3mm, preop_sag5mm, preop_sag7mm, preop_sag9mm, preop_sag11mm, preop_sag13mm, preop_sag15mm, preop_kpd, preop_post_sag3mm, preop_post_sag5mm, preop_post_sag7mm, preop_post_sag9mm, preop_post_sag11mm, preop_post_sag13mm, preop_post_sag15mm, preop_post_kpd, preop_k1_f__d, preop_k2_f__d, preop_km_f__mm, preop_axis_f__flat, preop_astig_f__d, preop_k1_b__d, preop_k2_b__d, preop_km_b__mm, preop_axis_b__flat, preop_astig_b__d, preop_c_vol_d_3mm, preop_c_vol_d_5mm, preop_c_vol_d_7mm, preop_c_vol_d_10mm, preop_isv__index_surface_variance, mo6_rh, mo6_rv, mo6_axis__flat, mo6_astig, mo6_ecc, mo6_eccsph, mo6_c_height_endo, mo6_c_height_epi, mo6_pachy_apex, mo6_pachy_pupil, mo6_pachy_sup, mo6_pachy_inf, mo6_pachy_nas, mo6_pachy_tem, mo6_pachy_min, mo6_pachyminx, mo6_pachyminy, mo6_sag3mm, mo6_sag5mm, mo6_sag7mm, mo6_sag9mm, mo6_sag11mm, mo6_sag13mm, mo6_sag15mm, mo6_kpd, mo6_post_sag3mm, mo6_post_sag5mm, mo6_post_sag7mm, mo6_post_sag9mm, mo6_post_sag11mm, mo6_post_sag13mm, mo6_post_sag15mm, mo6_post_kpd, mo6_k1_f__d, mo6_k2_f__d, mo6_km_f__d, mo6_axis_f__flat, mo6_astig_f__d, mo6_k1_b__d, mo6_k2_b__d, mo6_km_b__mm, mo6_axis_b__flat, mo6_astig_b__d, mo6_c_vol_d_3mm, mo6_c_vol_d_5mm, mo6_c_vol_d_7mm, mo6_c_vol_d_10mm, mo6_isv__index_surface_variance, mo12_rh, mo12_rv, mo12_axis__flat, mo12_astig, mo12_ecc, mo12_eccsph, mo12_c_height_endo, mo12_c_height_epi, mo12_pachy_apex, mo12_pachy_pupil, mo12_pachy_sup, mo12_pachy_inf, mo12_pachy_nas, mo12_pachy_tem, mo12_pachy_min, mo12_pachyminx, mo12_pachyminy, mo12_sag3mm, mo12_sag5mm, mo12_sag7mm, mo12_sag9mm, mo12_sag11mm, mo12_sag13mm, mo12_sag15mm, mo12_kpd, mo12_post_sag3mm, mo12_post_sag5mm, mo12_post_sag7mm, mo12_post_sag9mm, mo12_post_sag11mm, mo12_post_sag13mm, mo12_post_sag15mm, mo12_post_kpd, mo12_k1_f__d, mo12_k2_f__d, mo12_km_f__mm, mo12_axis_f__flat, mo12_astig_f__d, mo12_k1_b__d, mo12_k2_b__d, mo12_km_b__mm, mo12_axis_b__flat, mo12_astig_b__d, mo12_c_vol_d_3mm, mo12_c_vol_d_5mm, mo12_c_vol_d_7mm, mo12_c_vol_d_10mm, mo12_isv__index_surface_variance, calc__last_rh, calc__last_rv, calc__last_axis__flat, calc__last_astig, calc__last_ecc, calc__last_eccsph, calc__last_c_height_endo, calc__last_c_height_epi, calc__last_pachy_apex, calc__last_pachy_pupil, calc__last_pachy_sup, calc__last_pachy_inf, calc__last_pachy_nas, calc__last_pachy_tem, calc__last_pachy_min, calc__last_pachyminx, calc__last_pachyminy, calc__last_sag3mm, calc__last_sag5mm, calc__last_sag7mm, calc__last_sag9mm, calc__last_sag11mm, calc__last_sag13mm, calc__last_sag15mm, calc__last_kpd, calc__last_post_sag3mm, calc__last_post_sag5mm, calc__last_post_sag7mm, calc__last_post_sag9mm, calc__last_post_sag11mm, calc__last_post_sag13mm, calc__last_post_sag15mm, calc__last_post_kpd, calc__last_k1_f__d, calc__last_k2_f__d, calc__last_km_f__mm, calc__last_axis_f__flat, calc__last_astig_f__d, calc__last_k1_b__d, calc__last_k2_b__d, calc__last_km_b__mm, calc__last_axis_b__flat, calc__last_astig_b__d, calc__last_c_vol_d_3mm, calc__last_c_vol_d_5mm, calc__last_c_vol_d_7mm, calc__last_c_vol_d_10mm, calc__last_isv__index_surface_variance, calc__delta_last_rh, calc__delta_last_rv, calc__delta_last_axis__flat, calc__delta_last_astig, calc__delta_last_ecc, calc__delta_last_eccsph, calc__delta_last_c_height_endo, calc__delta_last_c_height_epi, calc__delta_last_pachy_apex, calc__delta_last_pachy_pupil, calc__delta_last_pachy_sup, calc__delta_last_pachy_inf, calc__delta_last_pachy_nas, calc__delta_last_pachy_tem, calc__delta_last_pachy_min, calc__delta_last_pachyminx, calc__delta_last_pachyminy, calc__delta_last_sag3mm, calc__delta_last_sag5mm, calc__delta_last_sag7mm, calc__delta_last_sag9mm, calc__delta_last_sag11mm, calc__delta_last_sag13mm, calc__delta_last_sag15mm, calc__delta_last_kpd, calc__delta_last_post_sag3mm, calc__delta_last_post_sag5mm, calc__delta_last_post_sag7mm, calc__delta_last_post_sag9mm, calc__delta_last_post_sag11mm, calc__delta_last_post_sag13mm, calc__delta_last_post_sag15mm, calc__delta_last_post_kpd, calc__delta_k1_f__d, calc__delta_k2_f__d, calc__delta_km_f__mm, calc__delta_axis_f__flat, calc__delta_astig_f__d, calc__delta_k1_b__d, calc__delta_k2_b__d, calc__delta_km_b__mm, calc__delta_axis_b__flat, calc__delta_astig_b__d, calc__delta_c_vol_d_3mm, calc__delta_c_vol_d_5mm, calc__delta_c_vol_d_7mm, calc__delta_c_vol_d_10mm, calc__delta_isv__index_surface_variance, calc__6_vs_12_m_k1_f, calc__6_vs_12_m_k2_f, calc__6_vs_12_m_k1_b, calc__6_vs_12_m_k2_b, id, created, updated, user_id, edited_by', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'date_of_surgery' => 'Date Of Surgery',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'eye' => 'Eye',
			'age' => 'Age',
			'dob' => 'Dob',
			'race' => 'Race',
			'sex' => 'Sex',
			'mi' => 'Mi',
			'diagnosis' => 'Diagnosis',
			'documented_target_refraction' => 'Documented Target Refraction',
			'holladay_ii_target_chosen' => 'Holladay Ii Target Chosen',
			'iol_model' => 'Iol Model',
			'iol_power' => 'Iol Power',
			'preop_date' => 'Preop Date',
			'presph' => 'Presph',
			'precyl' => 'Precyl',
			'm_axis' => 'M Axis',
			'prebcva' => 'Prebcva',
			'preiop' => 'Preiop',
			'prepachy' => 'Prepachy',
			'axial_length' => 'Axial Length',
			'hor_w_t_w' => 'Hor W T W',
			'phakic_lens_thickness' => 'Phakic Lens Thickness',
			'phakic_anterior_chamber_depth' => 'Phakic Anterior Chamber Depth',
			'k1' => 'K1',
			'k1a' => 'K1a',
			'k2' => 'K2',
			'k2a' => 'K2a',
			'sk1' => 'Sk1',
			'sk1yes' => 'Sk1yes',
			'sk2yes_w_mmc' => 'Sk2yes W Mmc',
			'calc_any_sk' => 'Calc Any Sk',
			'comments' => 'Comments',
			'mo5_8__no_scheduled' => 'Mo5 8 No Scheduled',
			'uncorrected_va__udva__6' => 'Uncorrected Va Udva 6',
			'sph6' => 'Sph6',
			'cyl6' => 'Cyl6',
			'm6_axis' => 'M6 Axis',
			'bcva6' => 'Bcva6',
			'iop6' => 'Iop6',
			'pachy6' => 'Pachy6',
			'ecd6' => 'Ecd6',
			'mo6_axial_length' => 'Mo6 Axial Length',
			'anterior_chamber_depth' => 'Anterior Chamber Depth',
			'mo6_k1' => 'Mo6 K1',
			'mo6_k1a' => 'Mo6 K1a',
			'mo6_k2' => 'Mo6 K2',
			'mo6_k2a' => 'Mo6 K2a',
			'calc_achieved_se_6' => 'Calc Achieved Se 6',
			'calc_se_error' => 'Calc Se Error',
			'calc_change_in_pachy__preop_to_6' => 'Calc Change In Pachy Preop To 6',
			'mos_9_14_no_appt' => 'Mos 9 14 No Appt',
			'uncorrected_va__udva__12' => 'Uncorrected Va Udva 12',
			'momo12_m_sph' => 'Momo12 M Sph',
			'm12_cyl' => 'M12 Cyl',
			'm12_axis' => 'M12 Axis',
			'bcva_mo12' => 'Bcva Mo12',
			'iop' => 'Iop',
			'pachy_1_year' => 'Pachy 1 Year',
			'ecc1_year' => 'Ecc1 Year',
			'mo12_axial_length' => 'Mo12 Axial Length',
			'mo12_anterior_chamber_depth' => 'Mo12 Anterior Chamber Depth',
			'm12_k1' => 'M12 K1',
			'm12_k1a' => 'M12 K1a',
			'm12_k2' => 'M12 K2',
			'm12_k2a' => 'M12 K2a',
			'calc_achieved_se_12' => 'Calc Achieved Se 12',
			'calc_se_error_12' => 'Calc Se Error 12',
			'calc_change_in_pachy__preop_to_12' => 'Calc Change In Pachy Preop To 12',
			'calc_followup__6_or_12' => 'Calc Followup 6 Or 12',
			'calc_followup__6_and_12' => 'Calc Followup 6 And 12',
			'calc_preop_se_if_fu__6__12' => 'Calc Preop Se If Fu 6 12',
			'calc_mo6_se_if_fu__6__12' => 'Calc Mo6 Se If Fu 6 12',
			'calc_mo12_se_if_fu__6__12' => 'Calc Mo12 Se If Fu 6 12',
			'calc_length_of_followup__days' => 'Calc Length Of Followup Days',
			'calc_length_of_followup__months' => 'Calc Length Of Followup Months',
			'calc_difference_mo6_to_1_year_achieved_se' => 'Calc Difference Mo6 To 1 Year Achieved Se',
			'calc_mo6nth_avg_k___preop_avg_k' => 'Calc Mo6nth Avg K Preop Avg K',
			'calc_mo12nth_avg_k___preop_avg_k' => 'Calc Mo12nth Avg K Preop Avg K',
			'calc_last_avg_k___preop_avg_k' => 'Calc Last Avg K Preop Avg K',
			'calc_preop_se' => 'Calc Preop Se',
			'calc_last__se' => 'Calc Last Se',
			'calc_last_se_error' => 'Calc Last Se Error',
			'calc_last_change_in_pachy' => 'Calc Last Change In Pachy',
			'calc_change_in_al' => 'Calc Change In Al',
			'calc_target_refraction_if_se_error_known' => 'Calc Target Refraction If Se Error Known',
			'calc_change_in_last_cdva' => 'Calc Change In Last Cdva',
			'calc_last_cyl' => 'Calc Last Cyl',
			'calc_change_in_cyl' => 'Calc Change In Cyl',
			'calc_last_cdva' => 'Calc Last Cdva',
			'calc_preop_cdva_if_last_cdva_known' => 'Calc Preop Cdva If Last Cdva Known',
			'calc_last_udva___distance_eyes_only' => 'Calc Last Udva Distance Eyes Only',
			'calc_missing_pentacam_mo6_data' => 'Calc Missing Pentacam Mo6 Data',
			'calc_missing_pentacam_mo12_data' => 'Calc Missing Pentacam Mo12 Data',
			'calc_missing_all_followup_pentacam_with_known_preop' => 'Calc Missing All Followup Pentacam With Known Preop',
			'preop_rh' => 'Preop Rh',
			'preop_rv' => 'Preop Rv',
			'preop_axis__flat' => 'Preop Axis Flat',
			'preop_astig' => 'Preop Astig',
			'preop_ecc' => 'Preop Ecc',
			'preop_eccsph' => 'Preop Eccsph',
			'preop_c_height_endo' => 'Preop C Height Endo',
			'preop_c_height_epi' => 'Preop C Height Epi',
			'preop_pachy_apex' => 'Preop Pachy Apex',
			'preop_pachy_pupil' => 'Preop Pachy Pupil',
			'preop_pachy_sup' => 'Preop Pachy Sup',
			'preop_pachy_inf' => 'Preop Pachy Inf',
			'preop_pachy_nas' => 'Preop Pachy Nas',
			'preop_pachy_tem' => 'Preop Pachy Tem',
			'preop_pachy_min' => 'Preop Pachy Min',
			'preop_pachyminx' => 'Preop Pachyminx',
			'preop_pachyminy' => 'Preop Pachyminy',
			'preop_sag3mm' => 'Preop Sag3mm',
			'preop_sag5mm' => 'Preop Sag5mm',
			'preop_sag7mm' => 'Preop Sag7mm',
			'preop_sag9mm' => 'Preop Sag9mm',
			'preop_sag11mm' => 'Preop Sag11mm',
			'preop_sag13mm' => 'Preop Sag13mm',
			'preop_sag15mm' => 'Preop Sag15mm',
			'preop_kpd' => 'Preop Kpd',
			'preop_post_sag3mm' => 'Preop Post Sag3mm',
			'preop_post_sag5mm' => 'Preop Post Sag5mm',
			'preop_post_sag7mm' => 'Preop Post Sag7mm',
			'preop_post_sag9mm' => 'Preop Post Sag9mm',
			'preop_post_sag11mm' => 'Preop Post Sag11mm',
			'preop_post_sag13mm' => 'Preop Post Sag13mm',
			'preop_post_sag15mm' => 'Preop Post Sag15mm',
			'preop_post_kpd' => 'Preop Post Kpd',
			'preop_k1_f__d' => 'Preop K1 F D',
			'preop_k2_f__d' => 'Preop K2 F D',
			'preop_km_f__mm' => 'Preop Km F Mm',
			'preop_axis_f__flat' => 'Preop Axis F Flat',
			'preop_astig_f__d' => 'Preop Astig F D',
			'preop_k1_b__d' => 'Preop K1 B D',
			'preop_k2_b__d' => 'Preop K2 B D',
			'preop_km_b__mm' => 'Preop Km B Mm',
			'preop_axis_b__flat' => 'Preop Axis B Flat',
			'preop_astig_b__d' => 'Preop Astig B D',
			'preop_c_vol_d_3mm' => 'Preop C Vol D 3mm',
			'preop_c_vol_d_5mm' => 'Preop C Vol D 5mm',
			'preop_c_vol_d_7mm' => 'Preop C Vol D 7mm',
			'preop_c_vol_d_10mm' => 'Preop C Vol D 10mm',
			'preop_isv__index_surface_variance' => 'Preop Isv Index Surface Variance',
			'mo6_rh' => 'Mo6 Rh',
			'mo6_rv' => 'Mo6 Rv',
			'mo6_axis__flat' => 'Mo6 Axis Flat',
			'mo6_astig' => 'Mo6 Astig',
			'mo6_ecc' => 'Mo6 Ecc',
			'mo6_eccsph' => 'Mo6 Eccsph',
			'mo6_c_height_endo' => 'Mo6 C Height Endo',
			'mo6_c_height_epi' => 'Mo6 C Height Epi',
			'mo6_pachy_apex' => 'Mo6 Pachy Apex',
			'mo6_pachy_pupil' => 'Mo6 Pachy Pupil',
			'mo6_pachy_sup' => 'Mo6 Pachy Sup',
			'mo6_pachy_inf' => 'Mo6 Pachy Inf',
			'mo6_pachy_nas' => 'Mo6 Pachy Nas',
			'mo6_pachy_tem' => 'Mo6 Pachy Tem',
			'mo6_pachy_min' => 'Mo6 Pachy Min',
			'mo6_pachyminx' => 'Mo6 Pachyminx',
			'mo6_pachyminy' => 'Mo6 Pachyminy',
			'mo6_sag3mm' => 'Mo6 Sag3mm',
			'mo6_sag5mm' => 'Mo6 Sag5mm',
			'mo6_sag7mm' => 'Mo6 Sag7mm',
			'mo6_sag9mm' => 'Mo6 Sag9mm',
			'mo6_sag11mm' => 'Mo6 Sag11mm',
			'mo6_sag13mm' => 'Mo6 Sag13mm',
			'mo6_sag15mm' => 'Mo6 Sag15mm',
			'mo6_kpd' => 'Mo6 Kpd',
			'mo6_post_sag3mm' => 'Mo6 Post Sag3mm',
			'mo6_post_sag5mm' => 'Mo6 Post Sag5mm',
			'mo6_post_sag7mm' => 'Mo6 Post Sag7mm',
			'mo6_post_sag9mm' => 'Mo6 Post Sag9mm',
			'mo6_post_sag11mm' => 'Mo6 Post Sag11mm',
			'mo6_post_sag13mm' => 'Mo6 Post Sag13mm',
			'mo6_post_sag15mm' => 'Mo6 Post Sag15mm',
			'mo6_post_kpd' => 'Mo6 Post Kpd',
			'mo6_k1_f__d' => 'Mo6 K1 F D',
			'mo6_k2_f__d' => 'Mo6 K2 F D',
			'mo6_km_f__d' => 'Mo6 Km F D',
			'mo6_axis_f__flat' => 'Mo6 Axis F Flat',
			'mo6_astig_f__d' => 'Mo6 Astig F D',
			'mo6_k1_b__d' => 'Mo6 K1 B D',
			'mo6_k2_b__d' => 'Mo6 K2 B D',
			'mo6_km_b__mm' => 'Mo6 Km B Mm',
			'mo6_axis_b__flat' => 'Mo6 Axis B Flat',
			'mo6_astig_b__d' => 'Mo6 Astig B D',
			'mo6_c_vol_d_3mm' => 'Mo6 C Vol D 3mm',
			'mo6_c_vol_d_5mm' => 'Mo6 C Vol D 5mm',
			'mo6_c_vol_d_7mm' => 'Mo6 C Vol D 7mm',
			'mo6_c_vol_d_10mm' => 'Mo6 C Vol D 10mm',
			'mo6_isv__index_surface_variance' => 'Mo6 Isv Index Surface Variance',
			'mo12_rh' => 'Mo12 Rh',
			'mo12_rv' => 'Mo12 Rv',
			'mo12_axis__flat' => 'Mo12 Axis Flat',
			'mo12_astig' => 'Mo12 Astig',
			'mo12_ecc' => 'Mo12 Ecc',
			'mo12_eccsph' => 'Mo12 Eccsph',
			'mo12_c_height_endo' => 'Mo12 C Height Endo',
			'mo12_c_height_epi' => 'Mo12 C Height Epi',
			'mo12_pachy_apex' => 'Mo12 Pachy Apex',
			'mo12_pachy_pupil' => 'Mo12 Pachy Pupil',
			'mo12_pachy_sup' => 'Mo12 Pachy Sup',
			'mo12_pachy_inf' => 'Mo12 Pachy Inf',
			'mo12_pachy_nas' => 'Mo12 Pachy Nas',
			'mo12_pachy_tem' => 'Mo12 Pachy Tem',
			'mo12_pachy_min' => 'Mo12 Pachy Min',
			'mo12_pachyminx' => 'Mo12 Pachyminx',
			'mo12_pachyminy' => 'Mo12 Pachyminy',
			'mo12_sag3mm' => 'Mo12 Sag3mm',
			'mo12_sag5mm' => 'Mo12 Sag5mm',
			'mo12_sag7mm' => 'Mo12 Sag7mm',
			'mo12_sag9mm' => 'Mo12 Sag9mm',
			'mo12_sag11mm' => 'Mo12 Sag11mm',
			'mo12_sag13mm' => 'Mo12 Sag13mm',
			'mo12_sag15mm' => 'Mo12 Sag15mm',
			'mo12_kpd' => 'Mo12 Kpd',
			'mo12_post_sag3mm' => 'Mo12 Post Sag3mm',
			'mo12_post_sag5mm' => 'Mo12 Post Sag5mm',
			'mo12_post_sag7mm' => 'Mo12 Post Sag7mm',
			'mo12_post_sag9mm' => 'Mo12 Post Sag9mm',
			'mo12_post_sag11mm' => 'Mo12 Post Sag11mm',
			'mo12_post_sag13mm' => 'Mo12 Post Sag13mm',
			'mo12_post_sag15mm' => 'Mo12 Post Sag15mm',
			'mo12_post_kpd' => 'Mo12 Post Kpd',
			'mo12_k1_f__d' => 'Mo12 K1 F D',
			'mo12_k2_f__d' => 'Mo12 K2 F D',
			'mo12_km_f__mm' => 'Mo12 Km F Mm',
			'mo12_axis_f__flat' => 'Mo12 Axis F Flat',
			'mo12_astig_f__d' => 'Mo12 Astig F D',
			'mo12_k1_b__d' => 'Mo12 K1 B D',
			'mo12_k2_b__d' => 'Mo12 K2 B D',
			'mo12_km_b__mm' => 'Mo12 Km B Mm',
			'mo12_axis_b__flat' => 'Mo12 Axis B Flat',
			'mo12_astig_b__d' => 'Mo12 Astig B D',
			'mo12_c_vol_d_3mm' => 'Mo12 C Vol D 3mm',
			'mo12_c_vol_d_5mm' => 'Mo12 C Vol D 5mm',
			'mo12_c_vol_d_7mm' => 'Mo12 C Vol D 7mm',
			'mo12_c_vol_d_10mm' => 'Mo12 C Vol D 10mm',
			'mo12_isv__index_surface_variance' => 'Mo12 Isv Index Surface Variance',
			'calc__last_rh' => 'Calc Last Rh',
			'calc__last_rv' => 'Calc Last Rv',
			'calc__last_axis__flat' => 'Calc Last Axis Flat',
			'calc__last_astig' => 'Calc Last Astig',
			'calc__last_ecc' => 'Calc Last Ecc',
			'calc__last_eccsph' => 'Calc Last Eccsph',
			'calc__last_c_height_endo' => 'Calc Last C Height Endo',
			'calc__last_c_height_epi' => 'Calc Last C Height Epi',
			'calc__last_pachy_apex' => 'Calc Last Pachy Apex',
			'calc__last_pachy_pupil' => 'Calc Last Pachy Pupil',
			'calc__last_pachy_sup' => 'Calc Last Pachy Sup',
			'calc__last_pachy_inf' => 'Calc Last Pachy Inf',
			'calc__last_pachy_nas' => 'Calc Last Pachy Nas',
			'calc__last_pachy_tem' => 'Calc Last Pachy Tem',
			'calc__last_pachy_min' => 'Calc Last Pachy Min',
			'calc__last_pachyminx' => 'Calc Last Pachyminx',
			'calc__last_pachyminy' => 'Calc Last Pachyminy',
			'calc__last_sag3mm' => 'Calc Last Sag3mm',
			'calc__last_sag5mm' => 'Calc Last Sag5mm',
			'calc__last_sag7mm' => 'Calc Last Sag7mm',
			'calc__last_sag9mm' => 'Calc Last Sag9mm',
			'calc__last_sag11mm' => 'Calc Last Sag11mm',
			'calc__last_sag13mm' => 'Calc Last Sag13mm',
			'calc__last_sag15mm' => 'Calc Last Sag15mm',
			'calc__last_kpd' => 'Calc Last Kpd',
			'calc__last_post_sag3mm' => 'Calc Last Post Sag3mm',
			'calc__last_post_sag5mm' => 'Calc Last Post Sag5mm',
			'calc__last_post_sag7mm' => 'Calc Last Post Sag7mm',
			'calc__last_post_sag9mm' => 'Calc Last Post Sag9mm',
			'calc__last_post_sag11mm' => 'Calc Last Post Sag11mm',
			'calc__last_post_sag13mm' => 'Calc Last Post Sag13mm',
			'calc__last_post_sag15mm' => 'Calc Last Post Sag15mm',
			'calc__last_post_kpd' => 'Calc Last Post Kpd',
			'calc__last_k1_f__d' => 'Calc Last K1 F D',
			'calc__last_k2_f__d' => 'Calc Last K2 F D',
			'calc__last_km_f__mm' => 'Calc Last Km F Mm',
			'calc__last_axis_f__flat' => 'Calc Last Axis F Flat',
			'calc__last_astig_f__d' => 'Calc Last Astig F D',
			'calc__last_k1_b__d' => 'Calc Last K1 B D',
			'calc__last_k2_b__d' => 'Calc Last K2 B D',
			'calc__last_km_b__mm' => 'Calc Last Km B Mm',
			'calc__last_axis_b__flat' => 'Calc Last Axis B Flat',
			'calc__last_astig_b__d' => 'Calc Last Astig B D',
			'calc__last_c_vol_d_3mm' => 'Calc Last C Vol D 3mm',
			'calc__last_c_vol_d_5mm' => 'Calc Last C Vol D 5mm',
			'calc__last_c_vol_d_7mm' => 'Calc Last C Vol D 7mm',
			'calc__last_c_vol_d_10mm' => 'Calc Last C Vol D 10mm',
			'calc__last_isv__index_surface_variance' => 'Calc Last Isv Index Surface Variance',
			'calc__delta_last_rh' => 'Calc Delta Last Rh',
			'calc__delta_last_rv' => 'Calc Delta Last Rv',
			'calc__delta_last_axis__flat' => 'Calc Delta Last Axis Flat',
			'calc__delta_last_astig' => 'Calc Delta Last Astig',
			'calc__delta_last_ecc' => 'Calc Delta Last Ecc',
			'calc__delta_last_eccsph' => 'Calc Delta Last Eccsph',
			'calc__delta_last_c_height_endo' => 'Calc Delta Last C Height Endo',
			'calc__delta_last_c_height_epi' => 'Calc Delta Last C Height Epi',
			'calc__delta_last_pachy_apex' => 'Calc Delta Last Pachy Apex',
			'calc__delta_last_pachy_pupil' => 'Calc Delta Last Pachy Pupil',
			'calc__delta_last_pachy_sup' => 'Calc Delta Last Pachy Sup',
			'calc__delta_last_pachy_inf' => 'Calc Delta Last Pachy Inf',
			'calc__delta_last_pachy_nas' => 'Calc Delta Last Pachy Nas',
			'calc__delta_last_pachy_tem' => 'Calc Delta Last Pachy Tem',
			'calc__delta_last_pachy_min' => 'Calc Delta Last Pachy Min',
			'calc__delta_last_pachyminx' => 'Calc Delta Last Pachyminx',
			'calc__delta_last_pachyminy' => 'Calc Delta Last Pachyminy',
			'calc__delta_last_sag3mm' => 'Calc Delta Last Sag3mm',
			'calc__delta_last_sag5mm' => 'Calc Delta Last Sag5mm',
			'calc__delta_last_sag7mm' => 'Calc Delta Last Sag7mm',
			'calc__delta_last_sag9mm' => 'Calc Delta Last Sag9mm',
			'calc__delta_last_sag11mm' => 'Calc Delta Last Sag11mm',
			'calc__delta_last_sag13mm' => 'Calc Delta Last Sag13mm',
			'calc__delta_last_sag15mm' => 'Calc Delta Last Sag15mm',
			'calc__delta_last_kpd' => 'Calc Delta Last Kpd',
			'calc__delta_last_post_sag3mm' => 'Calc Delta Last Post Sag3mm',
			'calc__delta_last_post_sag5mm' => 'Calc Delta Last Post Sag5mm',
			'calc__delta_last_post_sag7mm' => 'Calc Delta Last Post Sag7mm',
			'calc__delta_last_post_sag9mm' => 'Calc Delta Last Post Sag9mm',
			'calc__delta_last_post_sag11mm' => 'Calc Delta Last Post Sag11mm',
			'calc__delta_last_post_sag13mm' => 'Calc Delta Last Post Sag13mm',
			'calc__delta_last_post_sag15mm' => 'Calc Delta Last Post Sag15mm',
			'calc__delta_last_post_kpd' => 'Calc Delta Last Post Kpd',
			'calc__delta_k1_f__d' => 'Calc Delta K1 F D',
			'calc__delta_k2_f__d' => 'Calc Delta K2 F D',
			'calc__delta_km_f__mm' => 'Calc Delta Km F Mm',
			'calc__delta_axis_f__flat' => 'Calc Delta Axis F Flat',
			'calc__delta_astig_f__d' => 'Calc Delta Astig F D',
			'calc__delta_k1_b__d' => 'Calc Delta K1 B D',
			'calc__delta_k2_b__d' => 'Calc Delta K2 B D',
			'calc__delta_km_b__mm' => 'Calc Delta Km B Mm',
			'calc__delta_axis_b__flat' => 'Calc Delta Axis B Flat',
			'calc__delta_astig_b__d' => 'Calc Delta Astig B D',
			'calc__delta_c_vol_d_3mm' => 'Calc Delta C Vol D 3mm',
			'calc__delta_c_vol_d_5mm' => 'Calc Delta C Vol D 5mm',
			'calc__delta_c_vol_d_7mm' => 'Calc Delta C Vol D 7mm',
			'calc__delta_c_vol_d_10mm' => 'Calc Delta C Vol D 10mm',
			'calc__delta_isv__index_surface_variance' => 'Calc Delta Isv Index Surface Variance',
			'calc__6_vs_12_m_k1_f' => 'Calc 6 Vs 12 M K1 F',
			'calc__6_vs_12_m_k2_f' => 'Calc 6 Vs 12 M K2 F',
			'calc__6_vs_12_m_k1_b' => 'Calc 6 Vs 12 M K1 B',
			'calc__6_vs_12_m_k2_b' => 'Calc 6 Vs 12 M K2 B',
			'id' => 'ID',
			'created' => 'Created',
			'updated' => 'Updated',
			'user_id' => 'User',
			'edited_by' => 'Edited By',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('date_of_surgery',$this->date_of_surgery,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('eye',$this->eye,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('race',$this->race,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('mi',$this->mi,true);
		$criteria->compare('diagnosis',$this->diagnosis,true);
		$criteria->compare('documented_target_refraction',$this->documented_target_refraction,true);
		$criteria->compare('holladay_ii_target_chosen',$this->holladay_ii_target_chosen,true);
		$criteria->compare('iol_model',$this->iol_model,true);
		$criteria->compare('iol_power',$this->iol_power,true);
		$criteria->compare('preop_date',$this->preop_date,true);
		$criteria->compare('presph',$this->presph,true);
		$criteria->compare('precyl',$this->precyl,true);
		$criteria->compare('m_axis',$this->m_axis,true);
		$criteria->compare('prebcva',$this->prebcva,true);
		$criteria->compare('preiop',$this->preiop,true);
		$criteria->compare('prepachy',$this->prepachy,true);
		$criteria->compare('axial_length',$this->axial_length,true);
		$criteria->compare('hor_w_t_w',$this->hor_w_t_w,true);
		$criteria->compare('phakic_lens_thickness',$this->phakic_lens_thickness,true);
		$criteria->compare('phakic_anterior_chamber_depth',$this->phakic_anterior_chamber_depth,true);
		$criteria->compare('k1',$this->k1,true);
		$criteria->compare('k1a',$this->k1a,true);
		$criteria->compare('k2',$this->k2,true);
		$criteria->compare('k2a',$this->k2a,true);
		$criteria->compare('sk1',$this->sk1,true);
		$criteria->compare('sk1yes',$this->sk1yes,true);
		$criteria->compare('sk2yes_w_mmc',$this->sk2yes_w_mmc,true);
		$criteria->compare('calc_any_sk',$this->calc_any_sk,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('mo5_8__no_scheduled',$this->mo5_8__no_scheduled,true);
		$criteria->compare('uncorrected_va__udva__6',$this->uncorrected_va__udva__6,true);
		$criteria->compare('sph6',$this->sph6,true);
		$criteria->compare('cyl6',$this->cyl6,true);
		$criteria->compare('m6_axis',$this->m6_axis,true);
		$criteria->compare('bcva6',$this->bcva6,true);
		$criteria->compare('iop6',$this->iop6,true);
		$criteria->compare('pachy6',$this->pachy6,true);
		$criteria->compare('ecd6',$this->ecd6,true);
		$criteria->compare('mo6_axial_length',$this->mo6_axial_length,true);
		$criteria->compare('anterior_chamber_depth',$this->anterior_chamber_depth,true);
		$criteria->compare('mo6_k1',$this->mo6_k1,true);
		$criteria->compare('mo6_k1a',$this->mo6_k1a,true);
		$criteria->compare('mo6_k2',$this->mo6_k2,true);
		$criteria->compare('mo6_k2a',$this->mo6_k2a,true);
		$criteria->compare('calc_achieved_se_6',$this->calc_achieved_se_6,true);
		$criteria->compare('calc_se_error',$this->calc_se_error,true);
		$criteria->compare('calc_change_in_pachy__preop_to_6',$this->calc_change_in_pachy__preop_to_6,true);
		$criteria->compare('mos_9_14_no_appt',$this->mos_9_14_no_appt,true);
		$criteria->compare('uncorrected_va__udva__12',$this->uncorrected_va__udva__12,true);
		$criteria->compare('momo12_m_sph',$this->momo12_m_sph,true);
		$criteria->compare('m12_cyl',$this->m12_cyl,true);
		$criteria->compare('m12_axis',$this->m12_axis,true);
		$criteria->compare('bcva_mo12',$this->bcva_mo12,true);
		$criteria->compare('iop',$this->iop,true);
		$criteria->compare('pachy_1_year',$this->pachy_1_year,true);
		$criteria->compare('ecc1_year',$this->ecc1_year,true);
		$criteria->compare('mo12_axial_length',$this->mo12_axial_length,true);
		$criteria->compare('mo12_anterior_chamber_depth',$this->mo12_anterior_chamber_depth,true);
		$criteria->compare('m12_k1',$this->m12_k1,true);
		$criteria->compare('m12_k1a',$this->m12_k1a,true);
		$criteria->compare('m12_k2',$this->m12_k2,true);
		$criteria->compare('m12_k2a',$this->m12_k2a,true);
		$criteria->compare('calc_achieved_se_12',$this->calc_achieved_se_12,true);
		$criteria->compare('calc_se_error_12',$this->calc_se_error_12,true);
		$criteria->compare('calc_change_in_pachy__preop_to_12',$this->calc_change_in_pachy__preop_to_12,true);
		$criteria->compare('calc_followup__6_or_12',$this->calc_followup__6_or_12,true);
		$criteria->compare('calc_followup__6_and_12',$this->calc_followup__6_and_12,true);
		$criteria->compare('calc_preop_se_if_fu__6__12',$this->calc_preop_se_if_fu__6__12,true);
		$criteria->compare('calc_mo6_se_if_fu__6__12',$this->calc_mo6_se_if_fu__6__12,true);
		$criteria->compare('calc_mo12_se_if_fu__6__12',$this->calc_mo12_se_if_fu__6__12,true);
		$criteria->compare('calc_length_of_followup__days',$this->calc_length_of_followup__days,true);
		$criteria->compare('calc_length_of_followup__months',$this->calc_length_of_followup__months,true);
		$criteria->compare('calc_difference_mo6_to_1_year_achieved_se',$this->calc_difference_mo6_to_1_year_achieved_se,true);
		$criteria->compare('calc_mo6nth_avg_k___preop_avg_k',$this->calc_mo6nth_avg_k___preop_avg_k,true);
		$criteria->compare('calc_mo12nth_avg_k___preop_avg_k',$this->calc_mo12nth_avg_k___preop_avg_k,true);
		$criteria->compare('calc_last_avg_k___preop_avg_k',$this->calc_last_avg_k___preop_avg_k,true);
		$criteria->compare('calc_preop_se',$this->calc_preop_se,true);
		$criteria->compare('calc_last__se',$this->calc_last__se,true);
		$criteria->compare('calc_last_se_error',$this->calc_last_se_error,true);
		$criteria->compare('calc_last_change_in_pachy',$this->calc_last_change_in_pachy,true);
		$criteria->compare('calc_change_in_al',$this->calc_change_in_al,true);
		$criteria->compare('calc_target_refraction_if_se_error_known',$this->calc_target_refraction_if_se_error_known,true);
		$criteria->compare('calc_change_in_last_cdva',$this->calc_change_in_last_cdva,true);
		$criteria->compare('calc_last_cyl',$this->calc_last_cyl,true);
		$criteria->compare('calc_change_in_cyl',$this->calc_change_in_cyl,true);
		$criteria->compare('calc_last_cdva',$this->calc_last_cdva,true);
		$criteria->compare('calc_preop_cdva_if_last_cdva_known',$this->calc_preop_cdva_if_last_cdva_known,true);
		$criteria->compare('calc_last_udva___distance_eyes_only',$this->calc_last_udva___distance_eyes_only,true);
		$criteria->compare('calc_missing_pentacam_mo6_data',$this->calc_missing_pentacam_mo6_data,true);
		$criteria->compare('calc_missing_pentacam_mo12_data',$this->calc_missing_pentacam_mo12_data,true);
		$criteria->compare('calc_missing_all_followup_pentacam_with_known_preop',$this->calc_missing_all_followup_pentacam_with_known_preop,true);
		$criteria->compare('preop_rh',$this->preop_rh,true);
		$criteria->compare('preop_rv',$this->preop_rv,true);
		$criteria->compare('preop_axis__flat',$this->preop_axis__flat,true);
		$criteria->compare('preop_astig',$this->preop_astig,true);
		$criteria->compare('preop_ecc',$this->preop_ecc,true);
		$criteria->compare('preop_eccsph',$this->preop_eccsph,true);
		$criteria->compare('preop_c_height_endo',$this->preop_c_height_endo,true);
		$criteria->compare('preop_c_height_epi',$this->preop_c_height_epi,true);
		$criteria->compare('preop_pachy_apex',$this->preop_pachy_apex,true);
		$criteria->compare('preop_pachy_pupil',$this->preop_pachy_pupil,true);
		$criteria->compare('preop_pachy_sup',$this->preop_pachy_sup,true);
		$criteria->compare('preop_pachy_inf',$this->preop_pachy_inf,true);
		$criteria->compare('preop_pachy_nas',$this->preop_pachy_nas,true);
		$criteria->compare('preop_pachy_tem',$this->preop_pachy_tem,true);
		$criteria->compare('preop_pachy_min',$this->preop_pachy_min,true);
		$criteria->compare('preop_pachyminx',$this->preop_pachyminx,true);
		$criteria->compare('preop_pachyminy',$this->preop_pachyminy,true);
		$criteria->compare('preop_sag3mm',$this->preop_sag3mm,true);
		$criteria->compare('preop_sag5mm',$this->preop_sag5mm,true);
		$criteria->compare('preop_sag7mm',$this->preop_sag7mm,true);
		$criteria->compare('preop_sag9mm',$this->preop_sag9mm,true);
		$criteria->compare('preop_sag11mm',$this->preop_sag11mm,true);
		$criteria->compare('preop_sag13mm',$this->preop_sag13mm,true);
		$criteria->compare('preop_sag15mm',$this->preop_sag15mm,true);
		$criteria->compare('preop_kpd',$this->preop_kpd,true);
		$criteria->compare('preop_post_sag3mm',$this->preop_post_sag3mm,true);
		$criteria->compare('preop_post_sag5mm',$this->preop_post_sag5mm,true);
		$criteria->compare('preop_post_sag7mm',$this->preop_post_sag7mm,true);
		$criteria->compare('preop_post_sag9mm',$this->preop_post_sag9mm,true);
		$criteria->compare('preop_post_sag11mm',$this->preop_post_sag11mm,true);
		$criteria->compare('preop_post_sag13mm',$this->preop_post_sag13mm,true);
		$criteria->compare('preop_post_sag15mm',$this->preop_post_sag15mm,true);
		$criteria->compare('preop_post_kpd',$this->preop_post_kpd,true);
		$criteria->compare('preop_k1_f__d',$this->preop_k1_f__d,true);
		$criteria->compare('preop_k2_f__d',$this->preop_k2_f__d,true);
		$criteria->compare('preop_km_f__mm',$this->preop_km_f__mm,true);
		$criteria->compare('preop_axis_f__flat',$this->preop_axis_f__flat,true);
		$criteria->compare('preop_astig_f__d',$this->preop_astig_f__d,true);
		$criteria->compare('preop_k1_b__d',$this->preop_k1_b__d,true);
		$criteria->compare('preop_k2_b__d',$this->preop_k2_b__d,true);
		$criteria->compare('preop_km_b__mm',$this->preop_km_b__mm,true);
		$criteria->compare('preop_axis_b__flat',$this->preop_axis_b__flat,true);
		$criteria->compare('preop_astig_b__d',$this->preop_astig_b__d,true);
		$criteria->compare('preop_c_vol_d_3mm',$this->preop_c_vol_d_3mm,true);
		$criteria->compare('preop_c_vol_d_5mm',$this->preop_c_vol_d_5mm,true);
		$criteria->compare('preop_c_vol_d_7mm',$this->preop_c_vol_d_7mm,true);
		$criteria->compare('preop_c_vol_d_10mm',$this->preop_c_vol_d_10mm,true);
		$criteria->compare('preop_isv__index_surface_variance',$this->preop_isv__index_surface_variance,true);
		$criteria->compare('mo6_rh',$this->mo6_rh,true);
		$criteria->compare('mo6_rv',$this->mo6_rv,true);
		$criteria->compare('mo6_axis__flat',$this->mo6_axis__flat,true);
		$criteria->compare('mo6_astig',$this->mo6_astig,true);
		$criteria->compare('mo6_ecc',$this->mo6_ecc,true);
		$criteria->compare('mo6_eccsph',$this->mo6_eccsph,true);
		$criteria->compare('mo6_c_height_endo',$this->mo6_c_height_endo,true);
		$criteria->compare('mo6_c_height_epi',$this->mo6_c_height_epi,true);
		$criteria->compare('mo6_pachy_apex',$this->mo6_pachy_apex,true);
		$criteria->compare('mo6_pachy_pupil',$this->mo6_pachy_pupil,true);
		$criteria->compare('mo6_pachy_sup',$this->mo6_pachy_sup,true);
		$criteria->compare('mo6_pachy_inf',$this->mo6_pachy_inf,true);
		$criteria->compare('mo6_pachy_nas',$this->mo6_pachy_nas,true);
		$criteria->compare('mo6_pachy_tem',$this->mo6_pachy_tem,true);
		$criteria->compare('mo6_pachy_min',$this->mo6_pachy_min,true);
		$criteria->compare('mo6_pachyminx',$this->mo6_pachyminx,true);
		$criteria->compare('mo6_pachyminy',$this->mo6_pachyminy,true);
		$criteria->compare('mo6_sag3mm',$this->mo6_sag3mm,true);
		$criteria->compare('mo6_sag5mm',$this->mo6_sag5mm,true);
		$criteria->compare('mo6_sag7mm',$this->mo6_sag7mm,true);
		$criteria->compare('mo6_sag9mm',$this->mo6_sag9mm,true);
		$criteria->compare('mo6_sag11mm',$this->mo6_sag11mm,true);
		$criteria->compare('mo6_sag13mm',$this->mo6_sag13mm,true);
		$criteria->compare('mo6_sag15mm',$this->mo6_sag15mm,true);
		$criteria->compare('mo6_kpd',$this->mo6_kpd,true);
		$criteria->compare('mo6_post_sag3mm',$this->mo6_post_sag3mm,true);
		$criteria->compare('mo6_post_sag5mm',$this->mo6_post_sag5mm,true);
		$criteria->compare('mo6_post_sag7mm',$this->mo6_post_sag7mm,true);
		$criteria->compare('mo6_post_sag9mm',$this->mo6_post_sag9mm,true);
		$criteria->compare('mo6_post_sag11mm',$this->mo6_post_sag11mm,true);
		$criteria->compare('mo6_post_sag13mm',$this->mo6_post_sag13mm,true);
		$criteria->compare('mo6_post_sag15mm',$this->mo6_post_sag15mm,true);
		$criteria->compare('mo6_post_kpd',$this->mo6_post_kpd,true);
		$criteria->compare('mo6_k1_f__d',$this->mo6_k1_f__d,true);
		$criteria->compare('mo6_k2_f__d',$this->mo6_k2_f__d,true);
		$criteria->compare('mo6_km_f__d',$this->mo6_km_f__d,true);
		$criteria->compare('mo6_axis_f__flat',$this->mo6_axis_f__flat,true);
		$criteria->compare('mo6_astig_f__d',$this->mo6_astig_f__d,true);
		$criteria->compare('mo6_k1_b__d',$this->mo6_k1_b__d,true);
		$criteria->compare('mo6_k2_b__d',$this->mo6_k2_b__d,true);
		$criteria->compare('mo6_km_b__mm',$this->mo6_km_b__mm,true);
		$criteria->compare('mo6_axis_b__flat',$this->mo6_axis_b__flat,true);
		$criteria->compare('mo6_astig_b__d',$this->mo6_astig_b__d,true);
		$criteria->compare('mo6_c_vol_d_3mm',$this->mo6_c_vol_d_3mm,true);
		$criteria->compare('mo6_c_vol_d_5mm',$this->mo6_c_vol_d_5mm,true);
		$criteria->compare('mo6_c_vol_d_7mm',$this->mo6_c_vol_d_7mm,true);
		$criteria->compare('mo6_c_vol_d_10mm',$this->mo6_c_vol_d_10mm,true);
		$criteria->compare('mo6_isv__index_surface_variance',$this->mo6_isv__index_surface_variance,true);
		$criteria->compare('mo12_rh',$this->mo12_rh,true);
		$criteria->compare('mo12_rv',$this->mo12_rv,true);
		$criteria->compare('mo12_axis__flat',$this->mo12_axis__flat,true);
		$criteria->compare('mo12_astig',$this->mo12_astig,true);
		$criteria->compare('mo12_ecc',$this->mo12_ecc,true);
		$criteria->compare('mo12_eccsph',$this->mo12_eccsph,true);
		$criteria->compare('mo12_c_height_endo',$this->mo12_c_height_endo,true);
		$criteria->compare('mo12_c_height_epi',$this->mo12_c_height_epi,true);
		$criteria->compare('mo12_pachy_apex',$this->mo12_pachy_apex,true);
		$criteria->compare('mo12_pachy_pupil',$this->mo12_pachy_pupil,true);
		$criteria->compare('mo12_pachy_sup',$this->mo12_pachy_sup,true);
		$criteria->compare('mo12_pachy_inf',$this->mo12_pachy_inf,true);
		$criteria->compare('mo12_pachy_nas',$this->mo12_pachy_nas,true);
		$criteria->compare('mo12_pachy_tem',$this->mo12_pachy_tem,true);
		$criteria->compare('mo12_pachy_min',$this->mo12_pachy_min,true);
		$criteria->compare('mo12_pachyminx',$this->mo12_pachyminx,true);
		$criteria->compare('mo12_pachyminy',$this->mo12_pachyminy,true);
		$criteria->compare('mo12_sag3mm',$this->mo12_sag3mm,true);
		$criteria->compare('mo12_sag5mm',$this->mo12_sag5mm,true);
		$criteria->compare('mo12_sag7mm',$this->mo12_sag7mm,true);
		$criteria->compare('mo12_sag9mm',$this->mo12_sag9mm,true);
		$criteria->compare('mo12_sag11mm',$this->mo12_sag11mm,true);
		$criteria->compare('mo12_sag13mm',$this->mo12_sag13mm,true);
		$criteria->compare('mo12_sag15mm',$this->mo12_sag15mm,true);
		$criteria->compare('mo12_kpd',$this->mo12_kpd,true);
		$criteria->compare('mo12_post_sag3mm',$this->mo12_post_sag3mm,true);
		$criteria->compare('mo12_post_sag5mm',$this->mo12_post_sag5mm,true);
		$criteria->compare('mo12_post_sag7mm',$this->mo12_post_sag7mm,true);
		$criteria->compare('mo12_post_sag9mm',$this->mo12_post_sag9mm,true);
		$criteria->compare('mo12_post_sag11mm',$this->mo12_post_sag11mm,true);
		$criteria->compare('mo12_post_sag13mm',$this->mo12_post_sag13mm,true);
		$criteria->compare('mo12_post_sag15mm',$this->mo12_post_sag15mm,true);
		$criteria->compare('mo12_post_kpd',$this->mo12_post_kpd,true);
		$criteria->compare('mo12_k1_f__d',$this->mo12_k1_f__d,true);
		$criteria->compare('mo12_k2_f__d',$this->mo12_k2_f__d,true);
		$criteria->compare('mo12_km_f__mm',$this->mo12_km_f__mm,true);
		$criteria->compare('mo12_axis_f__flat',$this->mo12_axis_f__flat,true);
		$criteria->compare('mo12_astig_f__d',$this->mo12_astig_f__d,true);
		$criteria->compare('mo12_k1_b__d',$this->mo12_k1_b__d,true);
		$criteria->compare('mo12_k2_b__d',$this->mo12_k2_b__d,true);
		$criteria->compare('mo12_km_b__mm',$this->mo12_km_b__mm,true);
		$criteria->compare('mo12_axis_b__flat',$this->mo12_axis_b__flat,true);
		$criteria->compare('mo12_astig_b__d',$this->mo12_astig_b__d,true);
		$criteria->compare('mo12_c_vol_d_3mm',$this->mo12_c_vol_d_3mm,true);
		$criteria->compare('mo12_c_vol_d_5mm',$this->mo12_c_vol_d_5mm,true);
		$criteria->compare('mo12_c_vol_d_7mm',$this->mo12_c_vol_d_7mm,true);
		$criteria->compare('mo12_c_vol_d_10mm',$this->mo12_c_vol_d_10mm,true);
		$criteria->compare('mo12_isv__index_surface_variance',$this->mo12_isv__index_surface_variance,true);
		$criteria->compare('calc__last_rh',$this->calc__last_rh,true);
		$criteria->compare('calc__last_rv',$this->calc__last_rv,true);
		$criteria->compare('calc__last_axis__flat',$this->calc__last_axis__flat,true);
		$criteria->compare('calc__last_astig',$this->calc__last_astig,true);
		$criteria->compare('calc__last_ecc',$this->calc__last_ecc,true);
		$criteria->compare('calc__last_eccsph',$this->calc__last_eccsph,true);
		$criteria->compare('calc__last_c_height_endo',$this->calc__last_c_height_endo,true);
		$criteria->compare('calc__last_c_height_epi',$this->calc__last_c_height_epi,true);
		$criteria->compare('calc__last_pachy_apex',$this->calc__last_pachy_apex,true);
		$criteria->compare('calc__last_pachy_pupil',$this->calc__last_pachy_pupil,true);
		$criteria->compare('calc__last_pachy_sup',$this->calc__last_pachy_sup,true);
		$criteria->compare('calc__last_pachy_inf',$this->calc__last_pachy_inf,true);
		$criteria->compare('calc__last_pachy_nas',$this->calc__last_pachy_nas,true);
		$criteria->compare('calc__last_pachy_tem',$this->calc__last_pachy_tem,true);
		$criteria->compare('calc__last_pachy_min',$this->calc__last_pachy_min,true);
		$criteria->compare('calc__last_pachyminx',$this->calc__last_pachyminx,true);
		$criteria->compare('calc__last_pachyminy',$this->calc__last_pachyminy,true);
		$criteria->compare('calc__last_sag3mm',$this->calc__last_sag3mm,true);
		$criteria->compare('calc__last_sag5mm',$this->calc__last_sag5mm,true);
		$criteria->compare('calc__last_sag7mm',$this->calc__last_sag7mm,true);
		$criteria->compare('calc__last_sag9mm',$this->calc__last_sag9mm,true);
		$criteria->compare('calc__last_sag11mm',$this->calc__last_sag11mm,true);
		$criteria->compare('calc__last_sag13mm',$this->calc__last_sag13mm,true);
		$criteria->compare('calc__last_sag15mm',$this->calc__last_sag15mm,true);
		$criteria->compare('calc__last_kpd',$this->calc__last_kpd,true);
		$criteria->compare('calc__last_post_sag3mm',$this->calc__last_post_sag3mm,true);
		$criteria->compare('calc__last_post_sag5mm',$this->calc__last_post_sag5mm,true);
		$criteria->compare('calc__last_post_sag7mm',$this->calc__last_post_sag7mm,true);
		$criteria->compare('calc__last_post_sag9mm',$this->calc__last_post_sag9mm,true);
		$criteria->compare('calc__last_post_sag11mm',$this->calc__last_post_sag11mm,true);
		$criteria->compare('calc__last_post_sag13mm',$this->calc__last_post_sag13mm,true);
		$criteria->compare('calc__last_post_sag15mm',$this->calc__last_post_sag15mm,true);
		$criteria->compare('calc__last_post_kpd',$this->calc__last_post_kpd,true);
		$criteria->compare('calc__last_k1_f__d',$this->calc__last_k1_f__d,true);
		$criteria->compare('calc__last_k2_f__d',$this->calc__last_k2_f__d,true);
		$criteria->compare('calc__last_km_f__mm',$this->calc__last_km_f__mm,true);
		$criteria->compare('calc__last_axis_f__flat',$this->calc__last_axis_f__flat,true);
		$criteria->compare('calc__last_astig_f__d',$this->calc__last_astig_f__d,true);
		$criteria->compare('calc__last_k1_b__d',$this->calc__last_k1_b__d,true);
		$criteria->compare('calc__last_k2_b__d',$this->calc__last_k2_b__d,true);
		$criteria->compare('calc__last_km_b__mm',$this->calc__last_km_b__mm,true);
		$criteria->compare('calc__last_axis_b__flat',$this->calc__last_axis_b__flat,true);
		$criteria->compare('calc__last_astig_b__d',$this->calc__last_astig_b__d,true);
		$criteria->compare('calc__last_c_vol_d_3mm',$this->calc__last_c_vol_d_3mm,true);
		$criteria->compare('calc__last_c_vol_d_5mm',$this->calc__last_c_vol_d_5mm,true);
		$criteria->compare('calc__last_c_vol_d_7mm',$this->calc__last_c_vol_d_7mm,true);
		$criteria->compare('calc__last_c_vol_d_10mm',$this->calc__last_c_vol_d_10mm,true);
		$criteria->compare('calc__last_isv__index_surface_variance',$this->calc__last_isv__index_surface_variance,true);
		$criteria->compare('calc__delta_last_rh',$this->calc__delta_last_rh,true);
		$criteria->compare('calc__delta_last_rv',$this->calc__delta_last_rv,true);
		$criteria->compare('calc__delta_last_axis__flat',$this->calc__delta_last_axis__flat,true);
		$criteria->compare('calc__delta_last_astig',$this->calc__delta_last_astig,true);
		$criteria->compare('calc__delta_last_ecc',$this->calc__delta_last_ecc,true);
		$criteria->compare('calc__delta_last_eccsph',$this->calc__delta_last_eccsph,true);
		$criteria->compare('calc__delta_last_c_height_endo',$this->calc__delta_last_c_height_endo,true);
		$criteria->compare('calc__delta_last_c_height_epi',$this->calc__delta_last_c_height_epi,true);
		$criteria->compare('calc__delta_last_pachy_apex',$this->calc__delta_last_pachy_apex,true);
		$criteria->compare('calc__delta_last_pachy_pupil',$this->calc__delta_last_pachy_pupil,true);
		$criteria->compare('calc__delta_last_pachy_sup',$this->calc__delta_last_pachy_sup,true);
		$criteria->compare('calc__delta_last_pachy_inf',$this->calc__delta_last_pachy_inf,true);
		$criteria->compare('calc__delta_last_pachy_nas',$this->calc__delta_last_pachy_nas,true);
		$criteria->compare('calc__delta_last_pachy_tem',$this->calc__delta_last_pachy_tem,true);
		$criteria->compare('calc__delta_last_pachy_min',$this->calc__delta_last_pachy_min,true);
		$criteria->compare('calc__delta_last_pachyminx',$this->calc__delta_last_pachyminx,true);
		$criteria->compare('calc__delta_last_pachyminy',$this->calc__delta_last_pachyminy,true);
		$criteria->compare('calc__delta_last_sag3mm',$this->calc__delta_last_sag3mm,true);
		$criteria->compare('calc__delta_last_sag5mm',$this->calc__delta_last_sag5mm,true);
		$criteria->compare('calc__delta_last_sag7mm',$this->calc__delta_last_sag7mm,true);
		$criteria->compare('calc__delta_last_sag9mm',$this->calc__delta_last_sag9mm,true);
		$criteria->compare('calc__delta_last_sag11mm',$this->calc__delta_last_sag11mm,true);
		$criteria->compare('calc__delta_last_sag13mm',$this->calc__delta_last_sag13mm,true);
		$criteria->compare('calc__delta_last_sag15mm',$this->calc__delta_last_sag15mm,true);
		$criteria->compare('calc__delta_last_kpd',$this->calc__delta_last_kpd,true);
		$criteria->compare('calc__delta_last_post_sag3mm',$this->calc__delta_last_post_sag3mm,true);
		$criteria->compare('calc__delta_last_post_sag5mm',$this->calc__delta_last_post_sag5mm,true);
		$criteria->compare('calc__delta_last_post_sag7mm',$this->calc__delta_last_post_sag7mm,true);
		$criteria->compare('calc__delta_last_post_sag9mm',$this->calc__delta_last_post_sag9mm,true);
		$criteria->compare('calc__delta_last_post_sag11mm',$this->calc__delta_last_post_sag11mm,true);
		$criteria->compare('calc__delta_last_post_sag13mm',$this->calc__delta_last_post_sag13mm,true);
		$criteria->compare('calc__delta_last_post_sag15mm',$this->calc__delta_last_post_sag15mm,true);
		$criteria->compare('calc__delta_last_post_kpd',$this->calc__delta_last_post_kpd,true);
		$criteria->compare('calc__delta_k1_f__d',$this->calc__delta_k1_f__d,true);
		$criteria->compare('calc__delta_k2_f__d',$this->calc__delta_k2_f__d,true);
		$criteria->compare('calc__delta_km_f__mm',$this->calc__delta_km_f__mm,true);
		$criteria->compare('calc__delta_axis_f__flat',$this->calc__delta_axis_f__flat,true);
		$criteria->compare('calc__delta_astig_f__d',$this->calc__delta_astig_f__d,true);
		$criteria->compare('calc__delta_k1_b__d',$this->calc__delta_k1_b__d,true);
		$criteria->compare('calc__delta_k2_b__d',$this->calc__delta_k2_b__d,true);
		$criteria->compare('calc__delta_km_b__mm',$this->calc__delta_km_b__mm,true);
		$criteria->compare('calc__delta_axis_b__flat',$this->calc__delta_axis_b__flat,true);
		$criteria->compare('calc__delta_astig_b__d',$this->calc__delta_astig_b__d,true);
		$criteria->compare('calc__delta_c_vol_d_3mm',$this->calc__delta_c_vol_d_3mm,true);
		$criteria->compare('calc__delta_c_vol_d_5mm',$this->calc__delta_c_vol_d_5mm,true);
		$criteria->compare('calc__delta_c_vol_d_7mm',$this->calc__delta_c_vol_d_7mm,true);
		$criteria->compare('calc__delta_c_vol_d_10mm',$this->calc__delta_c_vol_d_10mm,true);
		$criteria->compare('calc__delta_isv__index_surface_variance',$this->calc__delta_isv__index_surface_variance,true);
		$criteria->compare('calc__6_vs_12_m_k1_f',$this->calc__6_vs_12_m_k1_f,true);
		$criteria->compare('calc__6_vs_12_m_k2_f',$this->calc__6_vs_12_m_k2_f,true);
		$criteria->compare('calc__6_vs_12_m_k1_b',$this->calc__6_vs_12_m_k1_b,true);
		$criteria->compare('calc__6_vs_12_m_k2_b',$this->calc__6_vs_12_m_k2_b,true);
		$criteria->compare('id',$this->id);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('edited_by',$this->edited_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rawdata the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
