<?php

namespace App\Imports;

use App\Models\Drc5Datas;
use Maatwebsite\Excel\Concerns\ToModel;

class Drc5DataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Drc5Datas([
            'class'=>$row['0'],
            'state_code'=>$row['1'],
            'dist_code'=>$row['2'],
            'state'=>$row['3'],
            'district'=>$row['4'],
            'dist_n_schools'=>$row['5'],
            'dist_n_teachers'=>$row['6'],
            'dist_tq_q30'=>$row['7'],
            'dist_tq_q33'=>$row['8'],
            'dist_tq_q31'=>$row['9'],
            'dist_tq_q32'=>$row['10'],
            'dist_tq_q34'=>$row['11'],
            'dist_tq_q36'=>$row['12'],
            'dist_tq_q04'=>$row['13'],
            'dist_tq_q28'=>$row['14'],
            'dist_tq_q18'=>$row['15'],
            'dist_tq_q17'=>$row['16'],
            'dist_tq_q16'=>$row['17'],
            'dist_sq_q31'=>$row['18'],
            'dist_sq_q32'=>$row['19'],
            'dist_sq_q34'=>$row['20'],
            'dist_sq_q35'=>$row['21'],
            'dist_sq_q14'=>$row['22'],
            'dist_sq_q09'=>$row['23'],
            'dist_n'=>$row['24'],
            'dist_boy_n'=>$row['25'],
            'dist_girl_n'=>$row['26'],
            'dist_trans_n'=>$row['27'],
            'dist_rural_n'=>$row['28'],
            'dist_urban_n'=>$row['29'],
            'dist_govt_n'=>$row['30'],
            'dist_govtaid_n'=>$row['31'],
            'dist_private_n'=>$row['32'],
            'dist_centgovt_n'=>$row['33'],
            'dist_sc_n'=>$row['34'],
            'dist_st_n'=>$row['35'],
            'dist_obc_n'=>$row['36'],
            'dist_general_n'=>$row['37'],
            'dist_ews_n'=>$row['38'],
            'dist_la_pct'=>$row['39'],
            'dist_la_pct_sd'=>$row['40'],
            'dist_la_pl1'=>$row['41'],
            'dist_la_pl2'=>$row['42'],
            'dist_la_pl3'=>$row['43'],
            'dist_la_pl4'=>$row['44'],
            'dist_la_pl12'=>$row['45'],
            'dist_la_pl34'=>$row['46'],
            'dist_la_psub3_1'=>$row['47'],
            'dist_ma_pct'=>$row['48'],
            'dist_ma_pct_sd'=>$row['49'],
            'dist_ma_pl1'=>$row['50'],
            'dist_ma_pl2'=>$row['51'],
            'dist_ma_pl3'=>$row['52'],
            'dist_ma_pl4'=>$row['53'],
            'dist_ma_pl12'=>$row['54'],
            'dist_ma_pl34'=>$row['55'],
            'dist_ma_psub3_1'=>$row['56'],
            'dist_ma_psub3_2'=>$row['57'],
            'dist_ma_psub3_3'=>$row['58'],
            'dist_ma_psub3_4'=>$row['59'],
            'dist_ma_psub3_5'=>$row['60'],
            'dist_ma_psub3_6'=>$row['61'],
            'dist_ma_psub3_7'=>$row['62'],
            'dist_ma_psub3_8'=>$row['63'],
            'dist_ma_psub3_9'=>$row['64'],
            'dist_ma_psub3_10'=>$row['65'],
            'dist_ma_psub3_11'=>$row['66'],
            'dist_ma_psub3_12'=>$row['67'],
            'dist_ma_psub3_13'=>$row['68'],
            'dist_ma_psub3_14'=>$row['69'],
            'dist_ma_psub3_15'=>$row['70'],
            'dist_ev_pct'=>$row['71'],
            'dist_ev_pct_sd'=>$row['72'],
            'dist_ev_pl1'=>$row['73'],
            'dist_ev_pl2'=>$row['74'],
            'dist_ev_pl3'=>$row['75'],
            'dist_ev_pl4'=>$row['76'],
            'dist_ev_pl12'=>$row['77'],
            'dist_ev_pl34'=>$row['78'],
            'dist_ev_psub3_1'=>$row['79'],
            'dist_ev_psub3_2'=>$row['80'],
            'dist_ev_psub3_3'=>$row['81'],
            'dist_ev_psub3_4'=>$row['82'],
            'dist_ev_psub3_5'=>$row['83'],
            'dist_ev_psub3_6'=>$row['84'],
            'dist_ev_psub3_7'=>$row['85'],
            'dist_ev_psub3_8'=>$row['86'],
            'dist_ev_psub3_9'=>$row['87'],
            'dist_ev_psub3_10'=>$row['88'],
            'dist_ev_psub3_11'=>$row['89'],
            'dist_ev_psub3_12'=>$row['90'],
            'dist_ev_psub3_13'=>$row['91'],
            'dist_pq_q14'=>$row['92'],
            'dist_pq_q17'=>$row['93'],
            'dist_pq_q18'=>$row['94'],
            'dist_pq_q10'=>$row['95'],
            'dist_pq_q08'=>$row['96'],
            'dist_pq_q30'=>$row['97'],
            'dist_pq_q27g'=>$row['98'],
            'dist_pq_q29f'=>$row['99'],
            'dist_la_boys_pct'=>$row['100'],
            'dist_la_boys_pct_sd'=>$row['101'],
            'dist_la_boys_pl12'=>$row['102'],
            'dist_la_boys_pl34'=>$row['103'],
            'dist_ma_boys_pct'=>$row['104'],
            'dist_ma_boys_pct_sd'=>$row['105'],
            'dist_ma_boys_pl12'=>$row['106'],
            'dist_ma_boys_pl34'=>$row['107'],
            'dist_ev_boys_pct'=>$row['108'],
            'dist_ev_boys_pct_sd'=>$row['109'],
            'dist_ev_boys_pl12'=>$row['110'],
            'dist_ev_boys_pl34'=>$row['111'],
            'dist_la_girls_pct'=>$row['112'],
            'dist_la_girls_pct_sd'=>$row['113'],
            'dist_la_girls_pl12'=>$row['114'],
            'dist_la_girls_pl34'=>$row['115'],
            'dist_ma_girls_pct'=>$row['116'],
            'dist_ma_girls_pct_sd'=>$row['117'],
            'dist_ma_girls_pl12'=>$row['118'],
            'dist_ma_girls_pl34'=>$row['119'],
            'dist_ev_girls_pct'=>$row['120'],
            'dist_ev_girls_pct_sd'=>$row['121'],
            'dist_ev_girls_pl12'=>$row['122'],
            'dist_ev_girls_pl34'=>$row['123'],
            'dist_la_rural_pct'=>$row['124'],
            'dist_la_rural_pct_sd'=>$row['125'],
            'dist_la_rural_pl12'=>$row['126'],
            'dist_la_rural_pl34'=>$row['127'],
            'dist_ma_rural_pct'=>$row['128'],
            'dist_ma_rural_pct_sd'=>$row['129'],
            'dist_ma_rural_pl12'=>$row['130'],
            'dist_ma_rural_pl34'=>$row['131'],
            'dist_ev_rural_pct'=>$row['132'],
            'dist_ev_rural_pct_sd'=>$row['133'],
            'dist_ev_rural_pl12'=>$row['134'],
            'dist_ev_rural_pl34'=>$row['135'],
            'dist_la_urban_pct'=>$row['136'],
            'dist_la_urban_pct_sd'=>$row['137'],
            'dist_la_urban_pl12'=>$row['138'],
            'dist_la_urban_pl34'=>$row['139'],
            'dist_ma_urban_pct'=>$row['140'],
            'dist_ma_urban_pct_sd'=>$row['141'],
            'dist_ma_urban_pl12'=>$row['142'],
            'dist_ma_urban_pl34'=>$row['143'],
            'dist_ev_urban_pct'=>$row['144'],
            'dist_ev_urban_pct_sd'=>$row['145'],
            'dist_ev_urban_pl12'=>$row['146'],
            'dist_ev_urban_pl34'=>$row['147'],
            'dist_la_govt_pct'=>$row['148'],
            'dist_la_govt_pct_sd'=>$row['149'],
            'dist_la_govt_pl12'=>$row['150'],
            'dist_la_govt_pl34'=>$row['151'],
            'dist_ma_govt_pct'=>$row['152'],
            'dist_ma_govt_pct_sd'=>$row['153'],
            'dist_ma_govt_pl12'=>$row['154'],
            'dist_ma_govt_pl34'=>$row['155'],
            'dist_ev_govt_pct'=>$row['156'],
            'dist_ev_govt_pct_sd'=>$row['157'],
            'dist_ev_govt_pl12'=>$row['158'],
            'dist_ev_govt_pl34'=>$row['159'],
            'dist_la_govtaid_pct'=>$row['160'],
            'dist_la_govtaid_pct_sd'=>$row['161'],
            'dist_la_govtaid_pl12'=>$row['162'],
            'dist_la_govtaid_pl34'=>$row['163'],
            'dist_ma_govtaid_pct'=>$row['164'],
            'dist_ma_govtaid_pct_sd'=>$row['165'],
            'dist_ma_govtaid_pl12'=>$row['166'],
            'dist_ma_govtaid_pl34'=>$row['167'],
            'dist_ev_govtaid_pct'=>$row['168'],
            'dist_ev_govtaid_pct_sd'=>$row['169'],
            'dist_ev_govtaid_pl12'=>$row['170'],
            'dist_ev_govtaid_pl34'=>$row['171'],
            'dist_la_private_pct'=>$row['172'],
            'dist_la_private_pct_sd'=>$row['173'],
            'dist_la_private_pl12'=>$row['174'],
            'dist_la_private_pl34'=>$row['175'],
            'dist_ma_private_pct'=>$row['176'],
            'dist_ma_private_pct_sd'=>$row['177'],
            'dist_ma_private_pl12'=>$row['178'],
            'dist_ma_private_pl34'=>$row['179'],
            'dist_ev_private_pct'=>$row['180'],
            'dist_ev_private_pct_sd'=>$row['181'],
            'dist_ev_private_pl12'=>$row['182'],
            'dist_ev_private_pl34'=>$row['183'],
            'dist_la_centgovt_pct'=>$row['184'],
            'dist_la_centgovt_pct_sd'=>$row['185'],
            'dist_la_centgovt_pl12'=>$row['186'],
            'dist_la_centgovt_pl34'=>$row['187'],
            'dist_ma_centgovt_pct'=>$row['188'],
            'dist_ma_centgovt_pct_sd'=>$row['189'],
            'dist_ma_centgovt_pl12'=>$row['190'],
            'dist_ma_centgovt_pl34'=>$row['191'],
            'dist_ev_centgovt_pct'=>$row['192'],
            'dist_ev_centgovt_pct_sd'=>$row['193'],
            'dist_ev_centgovt_pl12'=>$row['194'],
            'dist_ev_centgovt_pl34'=>$row['195'],
            'dist_la_sc_pct'=>$row['196'],
            'dist_la_sc_pct_sd'=>$row['197'],
            'dist_la_sc_pl12'=>$row['198'],
            'dist_la_sc_pl34'=>$row['199'],
            'dist_ma_sc_pct'=>$row['200'],
            'dist_ma_sc_pct_sd'=>$row['201'],
            'dist_ma_sc_pl12'=>$row['202'],
            'dist_ma_sc_pl34'=>$row['203'],
            'dist_ev_sc_pct'=>$row['204'],
            'dist_ev_sc_pct_sd'=>$row['205'],
            'dist_ev_sc_pl12'=>$row['206'],
            'dist_ev_sc_pl34'=>$row['207'],
            'dist_la_st_pct'=>$row['208'],
            'dist_la_st_pct_sd'=>$row['209'],
            'dist_la_st_pl12'=>$row['210'],
            'dist_la_st_pl34'=>$row['211'],
            'dist_ma_st_pct'=>$row['212'],
            'dist_ma_st_pct_sd'=>$row['213'],
            'dist_ma_st_pl12'=>$row['214'],
            'dist_ma_st_pl34'=>$row['215'],
            'dist_ev_st_pct'=>$row['216'],
            'dist_ev_st_pct_sd'=>$row['217'],
            'dist_ev_st_pl12'=>$row['218'],
            'dist_ev_st_pl34'=>$row['219'],
            'dist_la_obc_pct'=>$row['220'],
            'dist_la_obc_pct_sd'=>$row['221'],
            'dist_la_obc_pl12'=>$row['222'],
            'dist_la_obc_pl34'=>$row['223'],
            'dist_ma_obc_pct'=>$row['224'],
            'dist_ma_obc_pct_sd'=>$row['225'],
            'dist_ma_obc_pl12'=>$row['226'],
            'dist_ma_obc_pl34'=>$row['227'],
            'dist_ev_obc_pct'=>$row['228'],
            'dist_ev_obc_pct_sd'=>$row['229'],
            'dist_ev_obc_pl12'=>$row['230'],
            'dist_ev_obc_pl34'=>$row['231'],
            'dist_la_general_pct'=>$row['232'],
            'dist_la_general_pct_sd'=>$row['233'],
            'dist_la_general_pl12'=>$row['234'],
            'dist_la_general_pl34'=>$row['235'],
            'dist_ma_general_pct'=>$row['236'],
            'dist_ma_general_pct_sd'=>$row['237'],
            'dist_ma_general_pl12'=>$row['238'],
            'dist_ma_general_pl34'=>$row['239'],
            'dist_ev_general_pct'=>$row['240'],
            'dist_ev_general_pct_sd'=>$row['241'],
            'dist_ev_general_pl12'=>$row['242'],
            'dist_ev_general_pl34'=>$row['243'],
            'dist_la_ews_pct'=>$row['244'],
            'dist_la_ews_pct_sd'=>$row['245'],
            'dist_la_ews_pl12'=>$row['246'],
            'dist_la_ews_pl34'=>$row['247'],
            'dist_ma_ews_pct'=>$row['248'],
            'dist_ma_ews_pct_sd'=>$row['249'],
            'dist_ma_ews_pl12'=>$row['250'],
            'dist_ma_ews_pl34'=>$row['251'],
            'dist_ev_ews_pct'=>$row['252'],
            'dist_ev_ews_pct_sd'=>$row['253'],
            'dist_ev_ews_pl12'=>$row['254'],
            'dist_ev_ews_pl34'=>$row['255'],
            'state_la_pct'=>$row['256'],
            'state_la_pct_sd'=>$row['257'],
            'state_la_pl1'=>$row['258'],
            'state_la_pl2'=>$row['259'],
            'state_la_pl3'=>$row['260'],
            'state_la_pl4'=>$row['261'],
            'state_la_pl12'=>$row['262'],
            'state_la_pl34'=>$row['263'],
            'state_la_psub3_1'=>$row['264'],
            'state_ma_pct'=>$row['265'],
            'state_ma_pct_sd'=>$row['266'],
            'state_ma_pl1'=>$row['267'],
            'state_ma_pl2'=>$row['268'],
            'state_ma_pl3'=>$row['269'],
            'state_ma_pl4'=>$row['270'],
            'state_ma_pl12'=>$row['271'],
            'state_ma_pl34'=>$row['272'],
            'state_ma_psub3_1'=>$row['273'],
            'state_ma_psub3_2'=>$row['274'],
            'state_ma_psub3_3'=>$row['275'],
            'state_ma_psub3_4'=>$row['276'],
            'state_ma_psub3_5'=>$row['277'],
            'state_ma_psub3_6'=>$row['278'],
            'state_ma_psub3_7'=>$row['279'],
            'state_ma_psub3_8'=>$row['280'],
            'state_ma_psub3_9'=>$row['281'],
            'state_ma_psub3_10'=>$row['282'],
            'state_ma_psub3_11'=>$row['283'],
            'state_ma_psub3_12'=>$row['284'],
            'state_ma_psub3_13'=>$row['285'],
            'state_ma_psub3_14'=>$row['286'],
            'state_ma_psub3_15'=>$row['287'],
            'state_ev_pct'=>$row['288'],
            'state_ev_pct_sd'=>$row['289'],
            'state_ev_pl1'=>$row['290'],
            'state_ev_pl2'=>$row['291'],
            'state_ev_pl3'=>$row['292'],
            'state_ev_pl4'=>$row['293'],
            'state_ev_pl12'=>$row['294'],
            'state_ev_pl34'=>$row['295'],
            'state_ev_psub3_1'=>$row['296'],
            'state_ev_psub3_2'=>$row['297'],
            'state_ev_psub3_3'=>$row['298'],
            'state_ev_psub3_4'=>$row['299'],
            'state_ev_psub3_5'=>$row['300'],
            'state_ev_psub3_6'=>$row['301'],
            'state_ev_psub3_7'=>$row['302'],
            'state_ev_psub3_8'=>$row['303'],
            'state_ev_psub3_9'=>$row['304'],
            'state_ev_psub3_10'=>$row['305'],
            'state_ev_psub3_11'=>$row['306'],
            'state_ev_psub3_12'=>$row['307'],
            'state_ev_psub3_13'=>$row['308'],
            'state_la_boys_pct'=>$row['309'],
            'state_la_boys_pct_sd'=>$row['310'],
            'state_la_boys_pl12'=>$row['311'],
            'state_la_boys_pl34'=>$row['312'],
            'state_ma_boys_pct'=>$row['313'],
            'state_ma_boys_pct_sd'=>$row['314'],
            'state_ma_boys_pl12'=>$row['315'],
            'state_ma_boys_pl34'=>$row['316'],
            'state_ev_boys_pct'=>$row['317'],
            'state_ev_boys_pct_sd'=>$row['318'],
            'state_ev_boys_pl12'=>$row['319'],
            'state_ev_boys_pl34'=>$row['320'],
            'state_la_girls_pct'=>$row['321'],
            'state_la_girls_pct_sd'=>$row['322'],
            'state_la_girls_pl12'=>$row['323'],
            'state_la_girls_pl34'=>$row['324'],
            'state_ma_girls_pct'=>$row['325'],
            'state_ma_girls_pct_sd'=>$row['326'],
            'state_ma_girls_pl12'=>$row['327'],
            'state_ma_girls_pl34'=>$row['328'],
            'state_ev_girls_pct'=>$row['329'],
            'state_ev_girls_pct_sd'=>$row['330'],
            'state_ev_girls_pl12'=>$row['331'],
            'state_ev_girls_pl34'=>$row['332'],
            'state_la_rural_pct'=>$row['333'],
            'state_la_rural_pct_sd'=>$row['334'],
            'state_la_rural_pl12'=>$row['335'],
            'state_la_rural_pl34'=>$row['336'],
            'state_ma_rural_pct'=>$row['337'],
            'state_ma_rural_pct_sd'=>$row['338'],
            'state_ma_rural_pl12'=>$row['339'],
            'state_ma_rural_pl34'=>$row['340'],
            'state_ev_rural_pct'=>$row['341'],
            'state_ev_rural_pct_sd'=>$row['342'],
            'state_ev_rural_pl12'=>$row['343'],
            'state_ev_rural_pl34'=>$row['344'],
            'state_la_urban_pct'=>$row['345'],
            'state_la_urban_pct_sd'=>$row['346'],
            'state_la_urban_pl12'=>$row['347'],
            'state_la_urban_pl34'=>$row['348'],
            'state_ma_urban_pct'=>$row['349'],
            'state_ma_urban_pct_sd'=>$row['350'],
            'state_ma_urban_pl12'=>$row['351'],
            'state_ma_urban_pl34'=>$row['352'],
            'state_ev_urban_pct'=>$row['353'],
            'state_ev_urban_pct_sd'=>$row['354'],
            'state_ev_urban_pl12'=>$row['355'],
            'state_ev_urban_pl34'=>$row['356'],
            'state_la_govt_pct'=>$row['357'],
            'state_la_govt_pct_sd'=>$row['358'],
            'state_la_govt_pl12'=>$row['359'],
            'state_la_govt_pl34'=>$row['360'],
            'state_ma_govt_pct'=>$row['361'],
            'state_ma_govt_pct_sd'=>$row['362'],
            'state_ma_govt_pl12'=>$row['363'],
            'state_ma_govt_pl34'=>$row['364'],
            'state_ev_govt_pct'=>$row['365'],
            'state_ev_govt_pct_sd'=>$row['366'],
            'state_ev_govt_pl12'=>$row['367'],
            'state_ev_govt_pl34'=>$row['368'],
            'state_la_govtaid_pct'=>$row['369'],
            'state_la_govtaid_pct_sd'=>$row['370'],
            'state_la_govtaid_pl12'=>$row['371'],
            'state_la_govtaid_pl34'=>$row['372'],
            'state_ma_govtaid_pct'=>$row['373'],
            'state_ma_govtaid_pct_sd'=>$row['374'],
            'state_ma_govtaid_pl12'=>$row['375'],
            'state_ma_govtaid_pl34'=>$row['376'],
            'state_ev_govtaid_pct'=>$row['377'],
            'state_ev_govtaid_pct_sd'=>$row['378'],
            'state_ev_govtaid_pl12'=>$row['379'],
            'state_ev_govtaid_pl34'=>$row['380'],
            'state_la_private_pct'=>$row['381'],
            'state_la_private_pct_sd'=>$row['382'],
            'state_la_private_pl12'=>$row['383'],
            'state_la_private_pl34'=>$row['384'],
            'state_ma_private_pct'=>$row['385'],
            'state_ma_private_pct_sd'=>$row['386'],
            'state_ma_private_pl12'=>$row['387'],
            'state_ma_private_pl34'=>$row['388'],
            'state_ev_private_pct'=>$row['389'],
            'state_ev_private_pct_sd'=>$row['390'],
            'state_ev_private_pl12'=>$row['391'],
            'state_ev_private_pl34'=>$row['392'],
            'state_la_centgovt_pct'=>$row['393'],
            'state_la_centgovt_pct_sd'=>$row['394'],
            'state_la_centgovt_pl12'=>$row['395'],
            'state_la_centgovt_pl34'=>$row['396'],
            'state_ma_centgovt_pct'=>$row['397'],
            'state_ma_centgovt_pct_sd'=>$row['398'],
            'state_ma_centgovt_pl12'=>$row['399'],
            'state_ma_centgovt_pl34'=>$row['400'],
            'state_ev_centgovt_pct'=>$row['401'],
            'state_ev_centgovt_pct_sd'=>$row['402'],
            'state_ev_centgovt_pl12'=>$row['403'],
            'state_ev_centgovt_pl34'=>$row['404'],
            'state_la_sc_pct'=>$row['405'],
            'state_la_sc_pct_sd'=>$row['406'],
            'state_la_sc_pl12'=>$row['407'],
            'state_la_sc_pl34'=>$row['408'],
            'state_ma_sc_pct'=>$row['409'],
            'state_ma_sc_pct_sd'=>$row['410'],
            'state_ma_sc_pl12'=>$row['411'],
            'state_ma_sc_pl34'=>$row['412'],
            'state_ev_sc_pct'=>$row['413'],
            'state_ev_sc_pct_sd'=>$row['414'],
            'state_ev_sc_pl12'=>$row['415'],
            'state_ev_sc_pl34'=>$row['416'],
            'state_la_st_pct'=>$row['417'],
            'state_la_st_pct_sd'=>$row['418'],
            'state_la_st_pl12'=>$row['419'],
            'state_la_st_pl34'=>$row['420'],
            'state_ma_st_pct'=>$row['421'],
            'state_ma_st_pct_sd'=>$row['422'],
            'state_ma_st_pl12'=>$row['423'],
            'state_ma_st_pl34'=>$row['424'],
            'state_ev_st_pct'=>$row['425'],
            'state_ev_st_pct_sd'=>$row['426'],
            'state_ev_st_pl12'=>$row['427'],
            'state_ev_st_pl34'=>$row['428'],
            'state_la_obc_pct'=>$row['429'],
            'state_la_obc_pct_sd'=>$row['430'],
            'state_la_obc_pl12'=>$row['431'],
            'state_la_obc_pl34'=>$row['432'],
            'state_ma_obc_pct'=>$row['433'],
            'state_ma_obc_pct_sd'=>$row['434'],
            'state_ma_obc_pl12'=>$row['435'],
            'state_ma_obc_pl34'=>$row['436'],
            'state_ev_obc_pct'=>$row['437'],
            'state_ev_obc_pct_sd'=>$row['438'],
            'state_ev_obc_pl12'=>$row['439'],
            'state_ev_obc_pl34'=>$row['440'],
            'state_la_general_pct'=>$row['441'],
            'state_la_general_pct_sd'=>$row['442'],
            'state_la_general_pl12'=>$row['443'],
            'state_la_general_pl34'=>$row['444'],
            'state_ma_general_pct'=>$row['445'],
            'state_ma_general_pct_sd'=>$row['446'],
            'state_ma_general_pl12'=>$row['447'],
            'state_ma_general_pl34'=>$row['448'],
            'state_ev_general_pct'=>$row['449'],
            'state_ev_general_pct_sd'=>$row['450'],
            'state_ev_general_pl12'=>$row['451'],
            'state_ev_general_pl34'=>$row['452'],
            'state_la_ews_pct'=>$row['453'],
            'state_la_ews_pct_sd'=>$row['454'],
            'state_la_ews_pl12'=>$row['455'],
            'state_la_ews_pl34'=>$row['456'],
            'state_ma_ews_pct'=>$row['457'],
            'state_ma_ews_pct_sd'=>$row['458'],
            'state_ma_ews_pl12'=>$row['459'],
            'state_ma_ews_pl34'=>$row['460'],
            'state_ev_ews_pct'=>$row['461'],
            'state_ev_ews_pct_sd'=>$row['462'],
            'state_ev_ews_pl12'=>$row['463'],
            'state_ev_ews_pl34'=>$row['464'],
            'india_la_pct'=>$row['465'],
            'india_la_pct_sd'=>$row['466'],
            'india_la_pl1'=>$row['467'],
            'india_la_pl2'=>$row['468'],
            'india_la_pl3'=>$row['469'],
            'india_la_pl4'=>$row['470'],
            'india_la_pl12'=>$row['471'],
            'india_la_pl34'=>$row['472'],
            'india_la_psub3_1'=>$row['473'],
            'india_ma_pct'=>$row['474'],
            'india_ma_pct_sd'=>$row['475'],
            'india_ma_pl1'=>$row['476'],
            'india_ma_pl2'=>$row['477'],
            'india_ma_pl3'=>$row['478'],
            'india_ma_pl4'=>$row['479'],
            'india_ma_pl12'=>$row['480'],
            'india_ma_pl34'=>$row['481'],
            'india_ma_psub3_1'=>$row['482'],
            'india_ma_psub3_2'=>$row['483'],
            'india_ma_psub3_3'=>$row['484'],
            'india_ma_psub3_4'=>$row['485'],
            'india_ma_psub3_5'=>$row['486'],
            'india_ma_psub3_6'=>$row['487'],
            'india_ma_psub3_7'=>$row['488'],
            'india_ma_psub3_8'=>$row['489'],
            'india_ma_psub3_9'=>$row['490'],
            'india_ma_psub3_10'=>$row['491'],
            'india_ma_psub3_11'=>$row['492'],
            'india_ma_psub3_12'=>$row['493'],
            'india_ma_psub3_13'=>$row['494'],
            'india_ma_psub3_14'=>$row['495'],
            'india_ma_psub3_15'=>$row['496'],
            'india_ev_pct'=>$row['497'],
            'india_ev_pct_sd'=>$row['498'],
            'india_ev_pl1'=>$row['499'],
            'india_ev_pl2'=>$row['500'],
            'india_ev_pl3'=>$row['501'],
            'india_ev_pl4'=>$row['502'],
            'india_ev_pl12'=>$row['503'],
            'india_ev_pl34'=>$row['504'],
            'india_ev_psub3_1'=>$row['505'],
            'india_ev_psub3_2'=>$row['506'],
            'india_ev_psub3_3'=>$row['507'],
            'india_ev_psub3_4'=>$row['508'],
            'india_ev_psub3_5'=>$row['509'],
            'india_ev_psub3_6'=>$row['510'],
            'india_ev_psub3_7'=>$row['511'],
            'india_ev_psub3_8'=>$row['512'],
            'india_ev_psub3_9'=>$row['513'],
            'india_ev_psub3_10'=>$row['514'],
            'india_ev_psub3_11'=>$row['515'],
            'india_ev_psub3_12'=>$row['516'],
            'india_ev_psub3_13'=>$row['517'],
            'india_la_boys_pct'=>$row['518'],
            'india_la_boys_pct_sd'=>$row['519'],
            'india_la_boys_pl12'=>$row['520'],
            'india_la_boys_pl34'=>$row['521'],
            'india_ma_boys_pct'=>$row['522'],
            'india_ma_boys_pct_sd'=>$row['523'],
            'india_ma_boys_pl12'=>$row['524'],
            'india_ma_boys_pl34'=>$row['525'],
            'india_ev_boys_pct'=>$row['526'],
            'india_ev_boys_pct_sd'=>$row['527'],
            'india_ev_boys_pl12'=>$row['528'],
            'india_ev_boys_pl34'=>$row['529'],
            'india_la_girls_pct'=>$row['530'],
            'india_la_girls_pct_sd'=>$row['531'],
            'india_la_girls_pl12'=>$row['532'],
            'india_la_girls_pl34'=>$row['533'],
            'india_ma_girls_pct'=>$row['534'],
            'india_ma_girls_pct_sd'=>$row['535'],
            'india_ma_girls_pl12'=>$row['536'],
            'india_ma_girls_pl34'=>$row['537'],
            'india_ev_girls_pct'=>$row['538'],
            'india_ev_girls_pct_sd'=>$row['539'],
            'india_ev_girls_pl12'=>$row['540'],
            'india_ev_girls_pl34'=>$row['541'],
            'india_la_rural_pct'=>$row['542'],
            'india_la_rural_pct_sd'=>$row['543'],
            'india_la_rural_pl12'=>$row['544'],
            'india_la_rural_pl34'=>$row['545'],
            'india_ma_rural_pct'=>$row['546'],
            'india_ma_rural_pct_sd'=>$row['547'],
            'india_ma_rural_pl12'=>$row['548'],
            'india_ma_rural_pl34'=>$row['549'],
            'india_ev_rural_pct'=>$row['550'],
            'india_ev_rural_pct_sd'=>$row['551'],
            'india_ev_rural_pl12'=>$row['552'],
            'india_ev_rural_pl34'=>$row['553'],
            'india_la_urban_pct'=>$row['554'],
            'india_la_urban_pct_sd'=>$row['555'],
            'india_la_urban_pl12'=>$row['556'],
            'india_la_urban_pl34'=>$row['557'],
            'india_ma_urban_pct'=>$row['558'],
            'india_ma_urban_pct_sd'=>$row['559'],
            'india_ma_urban_pl12'=>$row['560'],
            'india_ma_urban_pl34'=>$row['561'],
            'india_ev_urban_pct'=>$row['562'],
            'india_ev_urban_pct_sd'=>$row['563'],
            'india_ev_urban_pl12'=>$row['564'],
            'india_ev_urban_pl34'=>$row['565'],
            'india_la_govt_pct'=>$row['566'],
            'india_la_govt_pct_sd'=>$row['567'],
            'india_la_govt_pl12'=>$row['568'],
            'india_la_govt_pl34'=>$row['569'],
            'india_ma_govt_pct'=>$row['570'],
            'india_ma_govt_pct_sd'=>$row['571'],
            'india_ma_govt_pl12'=>$row['572'],
            'india_ma_govt_pl34'=>$row['573'],
            'india_ev_govt_pct'=>$row['574'],
            'india_ev_govt_pct_sd'=>$row['575'],
            'india_ev_govt_pl12'=>$row['576'],
            'india_ev_govt_pl34'=>$row['577'],
            'india_la_govtaid_pct'=>$row['578'],
            'india_la_govtaid_pct_sd'=>$row['579'],
            'india_la_govtaid_pl12'=>$row['580'],
            'india_la_govtaid_pl34'=>$row['581'],
            'india_ma_govtaid_pct'=>$row['582'],
            'india_ma_govtaid_pct_sd'=>$row['583'],
            'india_ma_govtaid_pl12'=>$row['584'],
            'india_ma_govtaid_pl34'=>$row['585'],
            'india_ev_govtaid_pct'=>$row['586'],
            'india_ev_govtaid_pct_sd'=>$row['587'],
            'india_ev_govtaid_pl12'=>$row['588'],
            'india_ev_govtaid_pl34'=>$row['589'],
            'india_la_private_pct'=>$row['590'],
            'india_la_private_pct_sd'=>$row['591'],
            'india_la_private_pl12'=>$row['592'],
            'india_la_private_pl34'=>$row['593'],
            'india_ma_private_pct'=>$row['594'],
            'india_ma_private_pct_sd'=>$row['595'],
            'india_ma_private_pl12'=>$row['596'],
            'india_ma_private_pl34'=>$row['597'],
            'india_ev_private_pct'=>$row['598'],
            'india_ev_private_pct_sd'=>$row['599'],
            'india_ev_private_pl12'=>$row['600'],
            'india_ev_private_pl34'=>$row['601'],
            'india_la_centgovt_pct'=>$row['602'],
            'india_la_centgovt_pct_sd'=>$row['603'],
            'india_la_centgovt_pl12'=>$row['604'],
            'india_la_centgovt_pl34'=>$row['605'],
            'india_ma_centgovt_pct'=>$row['606'],
            'india_ma_centgovt_pct_sd'=>$row['607'],
            'india_ma_centgovt_pl12'=>$row['608'],
            'india_ma_centgovt_pl34'=>$row['609'],
            'india_ev_centgovt_pct'=>$row['610'],
            'india_ev_centgovt_pct_sd'=>$row['611'],
            'india_ev_centgovt_pl12'=>$row['612'],
            'india_ev_centgovt_pl34'=>$row['613'],
            'india_la_sc_pct'=>$row['614'],
            'india_la_sc_pct_sd'=>$row['615'],
            'india_la_sc_pl12'=>$row['616'],
            'india_la_sc_pl34'=>$row['617'],
            'india_ma_sc_pct'=>$row['618'],
            'india_ma_sc_pct_sd'=>$row['619'],
            'india_ma_sc_pl12'=>$row['620'],
            'india_ma_sc_pl34'=>$row['621'],
            'india_ev_sc_pct'=>$row['622'],
            'india_ev_sc_pct_sd'=>$row['623'],
            'india_ev_sc_pl12'=>$row['624'],
            'india_ev_sc_pl34'=>$row['625'],
            'india_la_st_pct'=>$row['626'],
            'india_la_st_pct_sd'=>$row['627'],
            'india_la_st_pl12'=>$row['628'],
            'india_la_st_pl34'=>$row['629'],
            'india_ma_st_pct'=>$row['630'],
            'india_ma_st_pct_sd'=>$row['631'],
            'india_ma_st_pl12'=>$row['632'],
            'india_ma_st_pl34'=>$row['633'],
            'india_ev_st_pct'=>$row['634'],
            'india_ev_st_pct_sd'=>$row['635'],
            'india_ev_st_pl12'=>$row['636'],
            'india_ev_st_pl34'=>$row['637'],
            'india_la_obc_pct'=>$row['638'],
            'india_la_obc_pct_sd'=>$row['639'],
            'india_la_obc_pl12'=>$row['640'],
            'india_la_obc_pl34'=>$row['641'],
            'india_ma_obc_pct'=>$row['642'],
            'india_ma_obc_pct_sd'=>$row['643'],
            'india_ma_obc_pl12'=>$row['644'],
            'india_ma_obc_pl34'=>$row['645'],
            'india_ev_obc_pct'=>$row['646'],
            'india_ev_obc_pct_sd'=>$row['647'],
            'india_ev_obc_pl12'=>$row['648'],
            'india_ev_obc_pl34'=>$row['649'],
            'india_la_general_pct'=>$row['650'],
            'india_la_general_pct_sd'=>$row['651'],
            'india_la_general_pl12'=>$row['652'],
            'india_la_general_pl34'=>$row['653'],
            'india_ma_general_pct'=>$row['654'],
            'india_ma_general_pct_sd'=>$row['655'],
            'india_ma_general_pl12'=>$row['656'],
            'india_ma_general_pl34'=>$row['657'],
            'india_ev_general_pct'=>$row['658'],
            'india_ev_general_pct_sd'=>$row['659'],
            'india_ev_general_pl12'=>$row['660'],
            'india_ev_general_pl34'=>$row['661'],
            'india_la_ews_pct'=>$row['662'],
            'india_la_ews_pct_sd'=>$row['663'],
            'india_la_ews_pl12'=>$row['664'],
            'india_la_ews_pl34'=>$row['665'],
            'india_ma_ews_pct'=>$row['666'],
            'india_ma_ews_pct_sd'=>$row['667'],
            'india_ma_ews_pl12'=>$row['668'],
            'india_ma_ews_pl34'=>$row['669'],
            'india_ev_ews_pct'=>$row['670'],
            'india_ev_ews_pct_sd'=>$row['671'],
            'india_ev_ews_pl12'=>$row['672'],
            'india_ev_ews_pl34'=>$row['673']

        ]);
    }
}