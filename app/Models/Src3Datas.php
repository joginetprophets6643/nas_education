<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Src3Datas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'grade3statetable';
    protected $fillable=[
    "id",
    "class",
    "state_code",
    "state",
    "state_n_schools",
    "state_n_teachers",
    "state_tq_q30",
    "state_tq_q33",
    "state_tq_q31",
    "state_tq_q32",
    "state_tq_q34",
    "state_tq_q36",
    "state_tq_q04",
    "state_tq_q28",
    "state_tq_q18",
    "state_tq_q17",
    "state_tq_q16",
    "state_sq_q31",
    "state_sq_q32",
    "state_sq_q34",
    "state_sq_q35",
    "state_sq_q14",
    "state_sq_q09",
    "state_n",
    "state_boy_n",
    "state_girl_n",
    "state_trans_n",
    "state_rural_n",
    "state_urban_n",
    "state_govt_n",
    "state_govtaid_n",
    "state_private_n",
    "state_centgovt_n",
    "state_sc_n",
    "state_st_n",
    "state_obc_n",
    "state_general_n",
    "state_ews_n",
    "state_la_pct",
    "state_la_pct_sd",
    "state_la_ss",
    "state_la_ss_sd",
    "state_la_pl1",
    "state_la_pl2",
    "state_la_pl3",
    "state_la_pl4",
    "state_la_pl12",
    "state_la_pl34",
    "state_la_psub3_1",
    "state_la_psub3_2",
    "state_ma_pct",
    "state_ma_pct_sd",
    "state_ma_ss",
    "state_ma_ss_sd",
    "state_ma_pl1",
    "state_ma_pl2",
    "state_ma_pl3",
    "state_ma_pl4",
    "state_ma_pl12",
    "state_ma_pl34",
    "state_ma_psub3_1",
    "state_ma_psub3_2",
    "state_ma_psub3_3",
    "state_ma_psub3_4",
    "state_ma_psub3_5",
    "state_ma_psub3_6",
    "state_ma_psub3_7",
    "state_ma_psub3_8",
    "state_ma_psub3_9",
    "state_ma_psub3_10",
    "state_ma_psub3_11",
    "state_ma_psub3_12",
    "state_ev_pct",
    "state_ev_pct_sd",
    "state_ev_ss",
    "state_ev_ss_sd",
    "state_ev_pl1",
    "state_ev_pl2",
    "state_ev_pl3",
    "state_ev_pl4",
    "state_ev_pl12",
    "state_ev_pl34",
    "state_ev_psub3_1",
    "state_ev_psub3_2",
    "state_ev_psub3_3",
    "state_ev_psub3_4",
    "state_ev_psub3_5",
    "state_ev_psub3_6",
    "state_ev_psub3_7",
    "state_ev_psub3_8",
    "state_ev_psub3_9",
    "state_ev_psub3_10",
    "state_pq_q14",
    "state_pq_q17",
    "state_pq_q32",
    "state_pq_q18",
    "state_pq_q29f",
    "state_la_boys_pct",
    "state_la_boys_pct_sd",
    "state_la_boys_ss",
    "state_la_boys_ss_sd",
    "state_la_boys_pl12",
    "state_la_boys_pl34",
    "state_ma_boys_pct",
    "state_ma_boys_pct_sd",
    "state_ma_boys_ss",
    "state_ma_boys_ss_sd",
    "state_ma_boys_pl12",
    "state_ma_boys_pl34",
    "state_ev_boys_pct",
    "state_ev_boys_pct_sd",
    "state_ev_boys_ss",
    "state_ev_boys_ss_sd",
    "state_ev_boys_pl12",
    "state_ev_boys_pl34",
    "state_la_girls_pct",
    "state_la_girls_pct_sd",
    "state_la_girls_ss",
    "state_la_girls_ss_sd",
    "state_la_girls_pl12",
    "state_la_girls_pl34",
    "state_ma_girls_pct",
    "state_ma_girls_pct_sd",
    "state_ma_girls_ss",
    "state_ma_girls_ss_sd",
    "state_ma_girls_pl12",
    "state_ma_girls_pl34",
    "state_ev_girls_pct",
    "state_ev_girls_pct_sd",
    "state_ev_girls_ss",
    "state_ev_girls_ss_sd",
    "state_ev_girls_pl12",
    "state_ev_girls_pl34",
    "state_la_rural_pct",
    "state_la_rural_pct_sd",
    "state_la_rural_ss",
    "state_la_rural_ss_sd",
    "state_la_rural_pl12",
    "state_la_rural_pl34",
    "state_ma_rural_pct",
    "state_ma_rural_pct_sd",
    "state_ma_rural_ss",
    "state_ma_rural_ss_sd",
    "state_ma_rural_pl12",
    "state_ma_rural_pl34",
    "state_ev_rural_pct",
    "state_ev_rural_pct_sd",
    "state_ev_rural_ss",
    "state_ev_rural_ss_sd",
    "state_ev_rural_pl12",
    "state_ev_rural_pl34",
    "state_la_urban_pct",
    "state_la_urban_pct_sd",
    "state_la_urban_ss",
    "state_la_urban_ss_sd",
    "state_la_urban_pl12",
    "state_la_urban_pl34",
    "state_ma_urban_pct",
    "state_ma_urban_pct_sd",
    "state_ma_urban_ss",
    "state_ma_urban_ss_sd",
    "state_ma_urban_pl12",
    "state_ma_urban_pl34",
    "state_ev_urban_pct",
    "state_ev_urban_pct_sd",
    "state_ev_urban_ss",
    "state_ev_urban_ss_sd",
    "state_ev_urban_pl12",
    "state_ev_urban_pl34",
    "state_la_govt_pct",
    "state_la_govt_pct_sd",
    "state_la_govt_ss",
    "state_la_govt_ss_sd",
    "state_la_govt_pl12",
    "state_la_govt_pl34",
    "state_ma_govt_pct",
    "state_ma_govt_pct_sd",
    "state_ma_govt_ss",
    "state_ma_govt_ss_sd",
    "state_ma_govt_pl12",
    "state_ma_govt_pl34",
    "state_ev_govt_pct",
    "state_ev_govt_pct_sd",
    "state_ev_govt_ss",
    "state_ev_govt_ss_sd",
    "state_ev_govt_pl12",
    "state_ev_govt_pl34",
    "state_la_govtaid_pct",
    "state_la_govtaid_pct_sd",
    "state_la_govtaid_ss",
    "state_la_govtaid_ss_sd",
    "state_la_govtaid_pl12",
    "state_la_govtaid_pl34",
    "state_ma_govtaid_pct",
    "state_ma_govtaid_pct_sd",
    "state_ma_govtaid_ss",
    "state_ma_govtaid_ss_sd",
    "state_ma_govtaid_pl12",
    "state_ma_govtaid_pl34",
    "state_ev_govtaid_pct",
    "state_ev_govtaid_pct_sd",
    "state_ev_govtaid_ss",
    "state_ev_govtaid_ss_sd",
    "state_ev_govtaid_pl12",
    "state_ev_govtaid_pl34",
    "state_la_private_pct",
    "state_la_private_pct_sd",
    "state_la_private_ss",
    "state_la_private_ss_sd",
    "state_la_private_pl12",
    "state_la_private_pl34",
    "state_ma_private_pct",
    "state_ma_private_pct_sd",
    "state_ma_private_ss",
    "state_ma_private_ss_sd",
    "state_ma_private_pl12",
    "state_ma_private_pl34",
    "state_ev_private_pct",
    "state_ev_private_pct_sd",
    "state_ev_private_ss",
    "state_ev_private_ss_sd",
    "state_ev_private_pl12",
    "state_ev_private_pl34",
    "state_la_centgovt_pct",
    "state_la_centgovt_pct_sd",
    "state_la_centgovt_ss",
    "state_la_centgovt_ss_sd",
    "state_la_centgovt_pl12",
    "state_la_centgovt_pl34",
    "state_ma_centgovt_pct",
    "state_ma_centgovt_pct_sd",
    "state_ma_centgovt_ss",
    "state_ma_centgovt_ss_sd",
    "state_ma_centgovt_pl12",
    "state_ma_centgovt_pl34",
    "state_ev_centgovt_pct",
    "state_ev_centgovt_pct_sd",
    "state_ev_centgovt_ss",
    "state_ev_centgovt_ss_sd",
    "state_ev_centgovt_pl12",
    "state_ev_centgovt_pl34",
    "state_la_sc_pct",
    "state_la_sc_pct_sd",
    "state_la_sc_ss",
    "state_la_sc_ss_sd",
    "state_la_sc_pl12",
    "state_la_sc_pl34",
    "state_ma_sc_pct",
    "state_ma_sc_pct_sd",
    "state_ma_sc_ss",
    "state_ma_sc_ss_sd",
    "state_ma_sc_pl12",
    "state_ma_sc_pl34",
    "state_ev_sc_pct",
    "state_ev_sc_pct_sd",
    "state_ev_sc_ss",
    "state_ev_sc_ss_sd",
    "state_ev_sc_pl12",
    "state_ev_sc_pl34",
    "state_la_st_pct",
    "state_la_st_pct_sd",
    "state_la_st_ss",
    "state_la_st_ss_sd",
    "state_la_st_pl12",
    "state_la_st_pl34",
    "state_ma_st_pct",
    "state_ma_st_pct_sd",
    "state_ma_st_ss",
    "state_ma_st_ss_sd",
    "state_ma_st_pl12",
    "state_ma_st_pl34",
    "state_ev_st_pct",
    "state_ev_st_pct_sd",
    "state_ev_st_ss",
    "state_ev_st_ss_sd",
    "state_ev_st_pl12",
    "state_ev_st_pl34",
    "state_la_obc_pct",
    "state_la_obc_pct_sd",
    "state_la_obc_ss",
    "state_la_obc_ss_sd",
    "state_la_obc_pl12",
    "state_la_obc_pl34",
    "state_ma_obc_pct",
    "state_ma_obc_pct_sd",
    "state_ma_obc_ss",
    "state_ma_obc_ss_sd",
    "state_ma_obc_pl12",
    "state_ma_obc_pl34",
    "state_ev_obc_pct",
    "state_ev_obc_pct_sd",
    "state_ev_obc_ss",
    "state_ev_obc_ss_sd",
    "state_ev_obc_pl12",
    "state_ev_obc_pl34",
    "state_la_general_pct",
    "state_la_general_pct_sd",
    "state_la_general_ss",
    "state_la_general_ss_sd",
    "state_la_general_pl12",
    "state_la_general_pl34",
    "state_ma_general_pct",
    "state_ma_general_pct_sd",
    "state_ma_general_ss",
    "state_ma_general_ss_sd",
    "state_ma_general_pl12",
    "state_ma_general_pl34",
    "state_ev_general_pct",
    "state_ev_general_pct_sd",
    "state_ev_general_ss",
    "state_ev_general_ss_sd",
    "state_ev_general_pl12",
    "state_ev_general_pl34",
    "state_la_ews_pct",
    "state_la_ews_pct_sd",
    "state_la_ews_ss",
    "state_la_ews_ss_sd",
    "state_la_ews_pl12",
    "state_la_ews_pl34",
    "state_ma_ews_pct",
    "state_ma_ews_pct_sd",
    "state_ma_ews_ss",
    "state_ma_ews_ss_sd",
    "state_ma_ews_pl12",
    "state_ma_ews_pl34",
    "state_ev_ews_pct",
    "state_ev_ews_pct_sd",
    "state_ev_ews_ss",
    "state_ev_ews_ss_sd",
    "state_ev_ews_pl12",
    "state_ev_ews_pl34",
    "india_la_pct",
    "india_la_pct_sd",
    "india_la_ss",
    "india_la_ss_sd",
    "india_la_pl1",
    "india_la_pl2",
    "india_la_pl3",
    "india_la_pl4",
    "india_la_pl12",
    "india_la_pl34",
    "india_la_psub3_1",
    "india_la_psub3_2",
    "india_ma_pct",
    "india_ma_pct_sd",
    "india_ma_ss",
    "india_ma_ss_sd",
    "india_ma_pl1",
    "india_ma_pl2",
    "india_ma_pl3",
    "india_ma_pl4",
    "india_ma_pl12",
    "india_ma_pl34",
    "india_ma_psub3_1",
    "india_ma_psub3_2",
    "india_ma_psub3_3",
    "india_ma_psub3_4",
    "india_ma_psub3_5",
    "india_ma_psub3_6",
    "india_ma_psub3_7",
    "india_ma_psub3_8",
    "india_ma_psub3_9",
    "india_ma_psub3_10",
    "india_ma_psub3_11",
    "india_ma_psub3_12",
    "india_ev_pct",
    "india_ev_pct_sd",
    "india_ev_ss",
    "india_ev_ss_sd",
    "india_ev_pl1",
    "india_ev_pl2",
    "india_ev_pl3",
    "india_ev_pl4",
    "india_ev_pl12",
    "india_ev_pl34",
    "india_ev_psub3_1",
    "india_ev_psub3_2",
    "india_ev_psub3_3",
    "india_ev_psub3_4",
    "india_ev_psub3_5",
    "india_ev_psub3_6",
    "india_ev_psub3_7",
    "india_ev_psub3_8",
    "india_ev_psub3_9",
    "india_ev_psub3_10",
    "india_la_boys_pct",
    "india_la_boys_pct_sd",
    "india_la_boys_ss",
    "india_la_boys_ss_sd",
    "india_la_boys_pl12",
    "india_la_boys_pl34",
    "india_ma_boys_pct",
    "india_ma_boys_pct_sd",
    "india_ma_boys_ss",
    "india_ma_boys_ss_sd",
    "india_ma_boys_pl12",
    "india_ma_boys_pl34",
    "india_ev_boys_pct",
    "india_ev_boys_pct_sd",
    "india_ev_boys_ss",
    "india_ev_boys_ss_sd",
    "india_ev_boys_pl12",
    "india_ev_boys_pl34",
    "india_la_girls_pct",
    "india_la_girls_pct_sd",
    "india_la_girls_ss",
    "india_la_girls_ss_sd",
    "india_la_girls_pl12",
    "india_la_girls_pl34",
    "india_ma_girls_pct",
    "india_ma_girls_pct_sd",
    "india_ma_girls_ss",
    "india_ma_girls_ss_sd",
    "india_ma_girls_pl12",
    "india_ma_girls_pl34",
    "india_ev_girls_pct",
    "india_ev_girls_pct_sd",
    "india_ev_girls_ss",
    "india_ev_girls_ss_sd",
    "india_ev_girls_pl12",
    "india_ev_girls_pl34",
    "india_la_rural_pct",
    "india_la_rural_pct_sd",
    "india_la_rural_ss",
    "india_la_rural_ss_sd",
    "india_la_rural_pl12",
    "india_la_rural_pl34",
    "india_ma_rural_pct",
    "india_ma_rural_pct_sd",
    "india_ma_rural_ss",
    "india_ma_rural_ss_sd",
    "india_ma_rural_pl12",
    "india_ma_rural_pl34",
    "india_ev_rural_pct",
    "india_ev_rural_pct_sd",
    "india_ev_rural_ss",
    "india_ev_rural_ss_sd",
    "india_ev_rural_pl12",
    "india_ev_rural_pl34",
    "india_la_urban_pct",
    "india_la_urban_pct_sd",
    "india_la_urban_ss",
    "india_la_urban_ss_sd",
    "india_la_urban_pl12",
    "india_la_urban_pl34",
    "india_ma_urban_pct",
    "india_ma_urban_pct_sd",
    "india_ma_urban_ss",
    "india_ma_urban_ss_sd",
    "india_ma_urban_pl12",
    "india_ma_urban_pl34",
    "india_ev_urban_pct",
    "india_ev_urban_pct_sd",
    "india_ev_urban_ss",
    "india_ev_urban_ss_sd",
    "india_ev_urban_pl12",
    "india_ev_urban_pl34",
    "india_la_govt_pct",
    "india_la_govt_pct_sd",
    "india_la_govt_ss",
    "india_la_govt_ss_sd",
    "india_la_govt_pl12",
    "india_la_govt_pl34",
    "india_ma_govt_pct",
    "india_ma_govt_pct_sd",
    "india_ma_govt_ss",
    "india_ma_govt_ss_sd",
    "india_ma_govt_pl12",
    "india_ma_govt_pl34",
    "india_ev_govt_pct",
    "india_ev_govt_pct_sd",
    "india_ev_govt_ss",
    "india_ev_govt_ss_sd",
    "india_ev_govt_pl12",
    "india_ev_govt_pl34",
    "india_la_govtaid_pct",
    "india_la_govtaid_pct_sd",
    "india_la_govtaid_ss",
    "india_la_govtaid_ss_sd",
    "india_la_govtaid_pl12",
    "india_la_govtaid_pl34",
    "india_ma_govtaid_pct",
    "india_ma_govtaid_pct_sd",
    "india_ma_govtaid_ss",
    "india_ma_govtaid_ss_sd",
    "india_ma_govtaid_pl12",
    "india_ma_govtaid_pl34",
    "india_ev_govtaid_pct",
    "india_ev_govtaid_pct_sd",
    "india_ev_govtaid_ss",
    "india_ev_govtaid_ss_sd",
    "india_ev_govtaid_pl12",
    "india_ev_govtaid_pl34",
    "india_la_private_pct",
    "india_la_private_pct_sd",
    "india_la_private_ss",
    "india_la_private_ss_sd",
    "india_la_private_pl12",
    "india_la_private_pl34",
    "india_ma_private_pct",
    "india_ma_private_pct_sd",
    "india_ma_private_ss",
    "india_ma_private_ss_sd",
    "india_ma_private_pl12",
    "india_ma_private_pl34",
    "india_ev_private_pct",
    "india_ev_private_pct_sd",
    "india_ev_private_ss",
    "india_ev_private_ss_sd",
    "india_ev_private_pl12",
    "india_ev_private_pl34",
    "india_la_centgovt_pct",
    "india_la_centgovt_pct_sd",
    "india_la_centgovt_ss",
    "india_la_centgovt_ss_sd",
    "india_la_centgovt_pl12",
    "india_la_centgovt_pl34",
    "india_ma_centgovt_pct",
    "india_ma_centgovt_pct_sd",
    "india_ma_centgovt_ss",
    "india_ma_centgovt_ss_sd",
    "india_ma_centgovt_pl12",
    "india_ma_centgovt_pl34",
    "india_ev_centgovt_pct",
    "india_ev_centgovt_pct_sd",
    "india_ev_centgovt_ss",
    "india_ev_centgovt_ss_sd",
    "india_ev_centgovt_pl12",
    "india_ev_centgovt_pl34",
    "india_la_sc_pct",
    "india_la_sc_pct_sd",
    "india_la_sc_ss",
    "india_la_sc_ss_sd",
    "india_la_sc_pl12",
    "india_la_sc_pl34",
    "india_ma_sc_pct",
    "india_ma_sc_pct_sd",
    "india_ma_sc_ss",
    "india_ma_sc_ss_sd",
    "india_ma_sc_pl12",
    "india_ma_sc_pl34",
    "india_ev_sc_pct",
    "india_ev_sc_pct_sd",
    "india_ev_sc_ss",
    "india_ev_sc_ss_sd",
    "india_ev_sc_pl12",
    "india_ev_sc_pl34",
    "india_la_st_pct",
    "india_la_st_pct_sd",
    "india_la_st_ss",
    "india_la_st_ss_sd",
    "india_la_st_pl12",
    "india_la_st_pl34",
    "india_ma_st_pct",
    "india_ma_st_pct_sd",
    "india_ma_st_ss",
    "india_ma_st_ss_sd",
    "india_ma_st_pl12",
    "india_ma_st_pl34",
    "india_ev_st_pct",
    "india_ev_st_pct_sd",
    "india_ev_st_ss",
    "india_ev_st_ss_sd",
    "india_ev_st_pl12",
    "india_ev_st_pl34",
    "india_la_obc_pct",
    "india_la_obc_pct_sd",
    "india_la_obc_ss",
    "india_la_obc_ss_sd",
    "india_la_obc_pl12",
    "india_la_obc_pl34",
    "india_ma_obc_pct",
    "india_ma_obc_pct_sd",
    "india_ma_obc_ss",
    "india_ma_obc_ss_sd",
    "india_ma_obc_pl12",
    "india_ma_obc_pl34",
    "india_ev_obc_pct",
    "india_ev_obc_pct_sd",
    "india_ev_obc_ss",
    "india_ev_obc_ss_sd",
    "india_ev_obc_pl12",
    "india_ev_obc_pl34",
    "india_la_general_pct",
    "india_la_general_pct_sd",
    "india_la_general_ss",
    "india_la_general_ss_sd",
    "india_la_general_pl12",
    "india_la_general_pl34",
    "india_ma_general_pct",
    "india_ma_general_pct_sd",
    "india_ma_general_ss",
    "india_ma_general_ss_sd",
    "india_ma_general_pl12",
    "india_ma_general_pl34",
    "india_ev_general_pct",
    "india_ev_general_pct_sd",
    "india_ev_general_ss",
    "india_ev_general_ss_sd",
    "india_ev_general_pl12",
    "india_ev_general_pl34",
    "india_la_ews_pct",
    "india_la_ews_pct_sd",
    "india_la_ews_ss",
    "india_la_ews_ss_sd",
    "india_la_ews_pl12",
    "india_la_ews_pl34",
    "india_ma_ews_pct",
    "india_ma_ews_pct_sd",
    "india_ma_ews_ss",
    "india_ma_ews_ss_sd",
    "india_ma_ews_pl12",
    "india_ma_ews_pl34",
    "india_ev_ews_pct",
    "india_ev_ews_pct_sd",
    "india_ev_ews_ss",
    "india_ev_ews_ss_sd",
    "india_ev_ews_pl12",
    "india_ev_ews_pl34",
    'state_pq_q26',
    'state_pq_q27_a_d',
    'state_pq_q27_e_g',
    'state_pq_q27f',
    'state_pq_q28a',
    'state_pq_q28c',
    'state_pq_q28f',
    ];
}
