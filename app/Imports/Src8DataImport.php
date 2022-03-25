<?php

namespace App\Imports;

use App\Models\Src8Datas;
use Maatwebsite\Excel\Concerns\ToModel;

class Src8DataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Src8Datas([
        'class'=>$row['0'],
        'state_code'=>$row['1'],
        'state'=>$row['2'],
        'state_n_schools'=>$row['3'],
        'state_n_teachers'=>$row['4'],
        'state_tq_q30'=>$row['5'],
        'state_tq_q33'=>$row['6'],
        'state_tq_q31'=>$row['7'],
        'state_tq_q32'=>$row['8'],
        'state_tq_q34'=>$row['9'],
        'state_tq_q36'=>$row['10'],
        'state_tq_q04'=>$row['11'],
        'state_tq_q28'=>$row['12'],
        'state_tq_q18'=>$row['13'],
        'state_tq_q17'=>$row['14'],
        'state_tq_q16'=>$row['15'],
        'state_sq_q31'=>$row['16'],
        'state_sq_q32'=>$row['17'],
        'state_sq_q34'=>$row['18'],
        'state_sq_q35'=>$row['19'],
        'state_sq_q14'=>$row['20'],
        'state_sq_q09'=>$row['21'],
        'state_n'=>$row['22'],
        'state_boy_n'=>$row['23'],
        'state_girl_n'=>$row['24'],
        'state_trans_n'=>$row['25'],
        'state_rural_n'=>$row['26'],
        'state_urban_n'=>$row['27'],
        'state_govt_n'=>$row['28'],
        'state_govtaid_n'=>$row['29'],
        'state_private_n'=>$row['30'],
        'state_centgovt_n'=>$row['31'],
        'state_sc_n'=>$row['32'],
        'state_st_n'=>$row['33'],
        'state_obc_n'=>$row['34'],
        'state_general_n'=>$row['35'],
        'state_ews_n'=>$row['36'],
        'state_la_pct'=>$row['37'],
        'state_la_pct_sd'=>$row['38'],
        'state_la_ss'=>$row['39'],
        'state_la_ss_sd'=>$row['40'],
        'state_la_pl1'=>$row['41'],
        'state_la_pl2'=>$row['42'],
        'state_la_pl3'=>$row['43'],
        'state_la_pl4'=>$row['44'],
        'state_la_pl12'=>$row['45'],
        'state_la_pl34'=>$row['46'],
        'state_la_psub3_1'=>$row['47'],
        'state_la_pq_q14'=>$row['48'],
        'state_la_pq_q17'=>$row['49'],
        'state_la_pq_q32'=>$row['50'],
        'state_la_pq_q18'=>$row['51'],
        'state_la_pq_q29f'=>$row['52'],
        'state_la_boys_pct'=>$row['53'],
        'state_la_boys_pct_sd'=>$row['54'],
        'state_la_boys_ss'=>$row['55'],
        'state_la_boys_ss_sd'=>$row['56'],
        'state_la_boys_pl12'=>$row['57'],
        'state_la_boys_pl34'=>$row['58'],
        'state_la_girls_pct'=>$row['59'],
        'state_la_girls_pct_sd'=>$row['60'],
        'state_la_girls_ss'=>$row['61'],
        'state_la_girls_ss_sd'=>$row['62'],
        'state_la_girls_pl12'=>$row['63'],
        'state_la_girls_pl34'=>$row['64'],
        'state_la_rural_pct'=>$row['65'],
        'state_la_rural_pct_sd'=>$row['66'],
        'state_la_rural_ss'=>$row['67'],
        'state_la_rural_ss_sd'=>$row['68'],
        'state_la_rural_pl12'=>$row['69'],
        'state_la_rural_pl34'=>$row['70'],
        'state_la_urban_pct'=>$row['71'],
        'state_la_urban_pct_sd'=>$row['72'],
        'state_la_urban_ss'=>$row['73'],
        'state_la_urban_ss_sd'=>$row['74'],
        'state_la_urban_pl12'=>$row['75'],
        'state_la_urban_pl34'=>$row['76'],
        'state_la_govt_pct'=>$row['77'],
        'state_la_govt_pct_sd'=>$row['78'],
        'state_la_govt_ss'=>$row['79'],
        'state_la_govt_ss_sd'=>$row['80'],
        'state_la_govt_pl12'=>$row['81'],
        'state_la_govt_pl34'=>$row['82'],
        'state_la_govtaid_pct'=>$row['83'],
        'state_la_govtaid_pct_sd'=>$row['84'],
        'state_la_govtaid_ss'=>$row['85'],
        'state_la_govtaid_ss_sd'=>$row['86'],
        'state_la_govtaid_pl12'=>$row['87'],
        'state_la_govtaid_pl34'=>$row['88'],
        'state_la_private_pct'=>$row['89'],
        'state_la_private_pct_sd'=>$row['90'],
        'state_la_private_ss'=>$row['91'],
        'state_la_private_ss_sd'=>$row['92'],
        'state_la_private_pl12'=>$row['93'],
        'state_la_private_pl34'=>$row['94'],
        'state_la_centgovt_pct'=>$row['95'],
        'state_la_centgovt_pct_sd'=>$row['96'],
        'state_la_centgovt_ss'=>$row['97'],
        'state_la_centgovt_ss_sd'=>$row['98'],
        'state_la_centgovt_pl12'=>$row['99'],
        'state_la_centgovt_pl34'=>$row['100'],
        'state_la_sc_pct'=>$row['101'],
        'state_la_sc_pct_sd'=>$row['102'],
        'state_la_sc_ss'=>$row['103'],
        'state_la_sc_ss_sd'=>$row['104'],
        'state_la_sc_pl12'=>$row['105'],
        'state_la_sc_pl34'=>$row['106'],
        'state_la_st_pct'=>$row['107'],
        'state_la_st_pct_sd'=>$row['108'],
        'state_la_st_ss'=>$row['109'],
        'state_la_st_ss_sd'=>$row['110'],
        'state_la_st_pl12'=>$row['111'],
        'state_la_st_pl34'=>$row['112'],
        'state_la_obc_pct'=>$row['113'],
        'state_la_obc_pct_sd'=>$row['114'],
        'state_la_obc_ss'=>$row['115'],
        'state_la_obc_ss_sd'=>$row['116'],
        'state_la_obc_pl12'=>$row['117'],
        'state_la_obc_pl34'=>$row['118'],
        'state_la_general_pct'=>$row['119'],
        'state_la_general_pct_sd'=>$row['120'],
        'state_la_general_ss'=>$row['121'],
        'state_la_general_ss_sd'=>$row['122'],
        'state_la_general_pl12'=>$row['123'],
        'state_la_general_pl34'=>$row['124'],
        'state_la_ews_pct'=>$row['125'],
        'state_la_ews_pct_sd'=>$row['126'],
        'state_la_ews_ss'=>$row['127'],
        'state_la_ews_ss_sd'=>$row['128'],
        'state_la_ews_pl12'=>$row['129'],
        'state_la_ews_pl34'=>$row['130'],
        'india_la_pct'=>$row['131'],
        'india_la_pct_sd'=>$row['132'],
        'india_la_ss'=>$row['133'],
        'india_la_ss_sd'=>$row['134'],
        'india_la_pl1'=>$row['135'],
        'india_la_pl2'=>$row['136'],
        'india_la_pl3'=>$row['137'],
        'india_la_pl4'=>$row['138'],
        'india_la_pl12'=>$row['139'],
        'india_la_pl34'=>$row['140'],
        'india_la_psub3_1'=>$row['141'],
        'india_la_boys_pct'=>$row['142'],
        'india_la_boys_pct_sd'=>$row['143'],
        'india_la_boys_ss'=>$row['144'],
        'india_la_boys_ss_sd'=>$row['145'],
        'india_la_boys_pl12'=>$row['146'],
        'india_la_boys_pl34'=>$row['147'],
        'india_la_girls_pct'=>$row['148'],
        'india_la_girls_pct_sd'=>$row['149'],
        'india_la_girls_ss'=>$row['150'],
        'india_la_girls_ss_sd'=>$row['151'],
        'india_la_girls_pl12'=>$row['152'],
        'india_la_girls_pl34'=>$row['153'],
        'india_la_rural_pct'=>$row['154'],
        'india_la_rural_pct_sd'=>$row['155'],
        'india_la_rural_ss'=>$row['156'],
        'india_la_rural_ss_sd'=>$row['157'],
        'india_la_rural_pl12'=>$row['158'],
        'india_la_rural_pl34'=>$row['159'],
        'india_la_urban_pct'=>$row['160'],
        'india_la_urban_pct_sd'=>$row['161'],
        'india_la_urban_ss'=>$row['162'],
        'india_la_urban_ss_sd'=>$row['163'],
        'india_la_urban_pl12'=>$row['164'],
        'india_la_urban_pl34'=>$row['165'],
        'india_la_govt_pct'=>$row['166'],
        'india_la_govt_pct_sd'=>$row['167'],
        'india_la_govt_ss'=>$row['168'],
        'india_la_govt_ss_sd'=>$row['169'],
        'india_la_govt_pl12'=>$row['170'],
        'india_la_govt_pl34'=>$row['171'],
        'india_la_govtaid_pct'=>$row['172'],
        'india_la_govtaid_pct_sd'=>$row['173'],
        'india_la_govtaid_ss'=>$row['174'],
        'india_la_govtaid_ss_sd'=>$row['175'],
        'india_la_govtaid_pl12'=>$row['176'],
        'india_la_govtaid_pl34'=>$row['177'],
        'india_la_private_pct'=>$row['178'],
        'india_la_private_pct_sd'=>$row['179'],
        'india_la_private_ss'=>$row['180'],
        'india_la_private_ss_sd'=>$row['181'],
        'india_la_private_pl12'=>$row['182'],
        'india_la_private_pl34'=>$row['183'],
        'india_la_centgovt_pct'=>$row['184'],
        'india_la_centgovt_pct_sd'=>$row['185'],
        'india_la_centgovt_ss'=>$row['186'],
        'india_la_centgovt_ss_sd'=>$row['187'],
        'india_la_centgovt_pl12'=>$row['188'],
        'india_la_centgovt_pl34'=>$row['189'],
        'india_la_sc_pct'=>$row['190'],
        'india_la_sc_pct_sd'=>$row['191'],
        'india_la_sc_ss'=>$row['192'],
        'india_la_sc_ss_sd'=>$row['193'],
        'india_la_sc_pl12'=>$row['194'],
        'india_la_sc_pl34'=>$row['195'],
        'india_la_st_pct'=>$row['196'],
        'india_la_st_pct_sd'=>$row['197'],
        'india_la_st_ss'=>$row['198'],
        'india_la_st_ss_sd'=>$row['199'],
        'india_la_st_pl12'=>$row['200'],
        'india_la_st_pl34'=>$row['201'],
        'india_la_obc_pct'=>$row['202'],
        'india_la_obc_pct_sd'=>$row['203'],
        'india_la_obc_ss'=>$row['204'],
        'india_la_obc_ss_sd'=>$row['205'],
        'india_la_obc_pl12'=>$row['206'],
        'india_la_obc_pl34'=>$row['207'],
        'india_la_general_pct'=>$row['208'],
        'india_la_general_pct_sd'=>$row['209'],
        'india_la_general_ss'=>$row['210'],
        'india_la_general_ss_sd'=>$row['211'],
        'india_la_general_pl12'=>$row['212'],
        'india_la_general_pl34'=>$row['213'],
        'india_la_ews_pct'=>$row['214'],
        'india_la_ews_pct_sd'=>$row['215'],
        'india_la_ews_ss'=>$row['216'],
        'india_la_ews_ss_sd'=>$row['217'],
        'india_la_ews_pl12'=>$row['218'],
        'india_la_ews_pl34'=>$row['219'],
        'state_ma_pct'=>$row['220'],
        'state_ma_pct_sd'=>$row['221'],
        'state_ma_ss'=>$row['222'],
        'state_ma_ss_sd'=>$row['223'],
        'state_ma_pl1'=>$row['224'],
        'state_ma_pl2'=>$row['225'],
        'state_ma_pl3'=>$row['226'],
        'state_ma_pl4'=>$row['227'],
        'state_ma_pl12'=>$row['228'],
        'state_ma_pl34'=>$row['229'],
        'state_ma_psub3_1'=>$row['230'],
        'state_ma_psub3_2'=>$row['231'],
        'state_ma_psub3_3'=>$row['232'],
        'state_ma_psub3_4'=>$row['233'],
        'state_ma_psub3_5'=>$row['234'],
        'state_ma_psub3_6'=>$row['235'],
        'state_ma_psub3_7'=>$row['236'],
        'state_ma_psub3_8'=>$row['237'],
        'state_ma_psub3_9'=>$row['238'],
        'state_ma_psub3_10'=>$row['239'],
        'state_ma_psub3_11'=>$row['240'],
        'state_ma_psub3_12'=>$row['241'],
        'state_ma_psub3_13'=>$row['242'],
        'state_ma_psub3_14'=>$row['243'],
        'state_ma_psub3_15'=>$row['244'],
        'state_ma_psub3_16'=>$row['245'],
        'state_ma_psub3_17'=>$row['246'],
        'state_ma_psub3_18'=>$row['247'],
        'state_ma_psub3_19'=>$row['248'],
        'state_ma_psub3_20'=>$row['249'],
        'state_ma_pq_q14'=>$row['250'],
        'state_ma_pq_q17'=>$row['251'],
        'state_ma_pq_q32'=>$row['252'],
        'state_ma_pq_q18'=>$row['253'],
        'state_ma_pq_q29f'=>$row['254'],
        'state_ma_boys_pct'=>$row['255'],
        'state_ma_boys_pct_sd'=>$row['256'],
        'state_ma_boys_ss'=>$row['257'],
        'state_ma_boys_ss_sd'=>$row['258'],
        'state_ma_boys_pl12'=>$row['259'],
        'state_ma_boys_pl34'=>$row['260'],
        'state_ma_girls_pct'=>$row['261'],
        'state_ma_girls_pct_sd'=>$row['262'],
        'state_ma_girls_ss'=>$row['263'],
        'state_ma_girls_ss_sd'=>$row['264'],
        'state_ma_girls_pl12'=>$row['265'],
        'state_ma_girls_pl34'=>$row['266'],
        'state_ma_rural_pct'=>$row['267'],
        'state_ma_rural_pct_sd'=>$row['268'],
        'state_ma_rural_ss'=>$row['269'],
        'state_ma_rural_ss_sd'=>$row['270'],
        'state_ma_rural_pl12'=>$row['271'],
        'state_ma_rural_pl34'=>$row['272'],
        'state_ma_urban_pct'=>$row['273'],
        'state_ma_urban_pct_sd'=>$row['274'],
        'state_ma_urban_ss'=>$row['275'],
        'state_ma_urban_ss_sd'=>$row['276'],
        'state_ma_urban_pl12'=>$row['277'],
        'state_ma_urban_pl34'=>$row['278'],
        'state_ma_govt_pct'=>$row['279'],
        'state_ma_govt_pct_sd'=>$row['280'],
        'state_ma_govt_ss'=>$row['281'],
        'state_ma_govt_ss_sd'=>$row['282'],
        'state_ma_govt_pl12'=>$row['283'],
        'state_ma_govt_pl34'=>$row['284'],
        'state_ma_govtaid_pct'=>$row['285'],
        'state_ma_govtaid_pct_sd'=>$row['286'],
        'state_ma_govtaid_ss'=>$row['287'],
        'state_ma_govtaid_ss_sd'=>$row['288'],
        'state_ma_govtaid_pl12'=>$row['289'],
        'state_ma_govtaid_pl34'=>$row['290'],
        'state_ma_private_pct'=>$row['291'],
        'state_ma_private_pct_sd'=>$row['292'],
        'state_ma_private_ss'=>$row['293'],
        'state_ma_private_ss_sd'=>$row['294'],
        'state_ma_private_pl12'=>$row['295'],
        'state_ma_private_pl34'=>$row['296'],
        'state_ma_centgovt_pct'=>$row['297'],
        'state_ma_centgovt_pct_sd'=>$row['298'],
        'state_ma_centgovt_ss'=>$row['299'],
        'state_ma_centgovt_ss_sd'=>$row['300'],
        'state_ma_centgovt_pl12'=>$row['301'],
        'state_ma_centgovt_pl34'=>$row['302'],
        'state_ma_sc_pct'=>$row['303'],
        'state_ma_sc_pct_sd'=>$row['304'],
        'state_ma_sc_ss'=>$row['305'],
        'state_ma_sc_ss_sd'=>$row['306'],
        'state_ma_sc_pl12'=>$row['307'],
        'state_ma_sc_pl34'=>$row['308'],
        'state_ma_st_pct'=>$row['309'],
        'state_ma_st_pct_sd'=>$row['310'],
        'state_ma_st_ss'=>$row['311'],
        'state_ma_st_ss_sd'=>$row['312'],
        'state_ma_st_pl12'=>$row['313'],
        'state_ma_st_pl34'=>$row['314'],
        'state_ma_obc_pct'=>$row['315'],
        'state_ma_obc_pct_sd'=>$row['316'],
        'state_ma_obc_ss'=>$row['317'],
        'state_ma_obc_ss_sd'=>$row['318'],
        'state_ma_obc_pl12'=>$row['319'],
        'state_ma_obc_pl34'=>$row['320'],
        'state_ma_general_pct'=>$row['321'],
        'state_ma_general_pct_sd'=>$row['322'],
        'state_ma_general_ss'=>$row['323'],
        'state_ma_general_ss_sd'=>$row['324'],
        'state_ma_general_pl12'=>$row['325'],
        'state_ma_general_pl34'=>$row['326'],
        'state_ma_ews_pct'=>$row['327'],
        'state_ma_ews_pct_sd'=>$row['328'],
        'state_ma_ews_ss'=>$row['329'],
        'state_ma_ews_ss_sd'=>$row['330'],
        'state_ma_ews_pl12'=>$row['331'],
        'state_ma_ews_pl34'=>$row['332'],
        'india_ma_pct'=>$row['333'],
        'india_ma_pct_sd'=>$row['334'],
        'india_ma_ss'=>$row['335'],
        'india_ma_ss_sd'=>$row['336'],
        'india_ma_pl1'=>$row['337'],
        'india_ma_pl2'=>$row['338'],
        'india_ma_pl3'=>$row['339'],
        'india_ma_pl4'=>$row['340'],
        'india_ma_pl12'=>$row['341'],
        'india_ma_pl34'=>$row['342'],
        'india_ma_psub3_1'=>$row['343'],
        'india_ma_psub3_2'=>$row['344'],
        'india_ma_psub3_3'=>$row['345'],
        'india_ma_psub3_4'=>$row['346'],
        'india_ma_psub3_5'=>$row['347'],
        'india_ma_psub3_6'=>$row['348'],
        'india_ma_psub3_7'=>$row['349'],
        'india_ma_psub3_8'=>$row['350'],
        'india_ma_psub3_9'=>$row['351'],
        'india_ma_psub3_10'=>$row['352'],
        'india_ma_psub3_11'=>$row['353'],
        'india_ma_psub3_12'=>$row['354'],
        'india_ma_psub3_13'=>$row['355'],
        'india_ma_psub3_14'=>$row['356'],
        'india_ma_psub3_15'=>$row['357'],
        'india_ma_psub3_16'=>$row['358'],
        'india_ma_psub3_17'=>$row['359'],
        'india_ma_psub3_18'=>$row['360'],
        'india_ma_psub3_19'=>$row['361'],
        'india_ma_psub3_20'=>$row['362'],
        'india_ma_boys_pct'=>$row['363'],
        'india_ma_boys_pct_sd'=>$row['364'],
        'india_ma_boys_ss'=>$row['365'],
        'india_ma_boys_ss_sd'=>$row['366'],
        'india_ma_boys_pl12'=>$row['367'],
        'india_ma_boys_pl34'=>$row['368'],
        'india_ma_girls_pct'=>$row['369'],
        'india_ma_girls_pct_sd'=>$row['370'],
        'india_ma_girls_ss'=>$row['371'],
        'india_ma_girls_ss_sd'=>$row['372'],
        'india_ma_girls_pl12'=>$row['373'],
        'india_ma_girls_pl34'=>$row['374'],
        'india_ma_rural_pct'=>$row['375'],
        'india_ma_rural_pct_sd'=>$row['376'],
        'india_ma_rural_ss'=>$row['377'],
        'india_ma_rural_ss_sd'=>$row['378'],
        'india_ma_rural_pl12'=>$row['379'],
        'india_ma_rural_pl34'=>$row['380'],
        'india_ma_urban_pct'=>$row['381'],
        'india_ma_urban_pct_sd'=>$row['382'],
        'india_ma_urban_ss'=>$row['383'],
        'india_ma_urban_ss_sd'=>$row['384'],
        'india_ma_urban_pl12'=>$row['385'],
        'india_ma_urban_pl34'=>$row['386'],
        'india_ma_govt_pct'=>$row['387'],
        'india_ma_govt_pct_sd'=>$row['388'],
        'india_ma_govt_ss'=>$row['389'],
        'india_ma_govt_ss_sd'=>$row['390'],
        'india_ma_govt_pl12'=>$row['391'],
        'india_ma_govt_pl34'=>$row['392'],
        'india_ma_govtaid_pct'=>$row['393'],
        'india_ma_govtaid_pct_sd'=>$row['394'],
        'india_ma_govtaid_ss'=>$row['395'],
        'india_ma_govtaid_ss_sd'=>$row['396'],
        'india_ma_govtaid_pl12'=>$row['397'],
        'india_ma_govtaid_pl34'=>$row['398'],
        'india_ma_private_pct'=>$row['399'],
        'india_ma_private_pct_sd'=>$row['400'],
        'india_ma_private_ss'=>$row['401'],
        'india_ma_private_ss_sd'=>$row['402'],
        'india_ma_private_pl12'=>$row['403'],
        'india_ma_private_pl34'=>$row['404'],
        'india_ma_centgovt_pct'=>$row['405'],
        'india_ma_centgovt_pct_sd'=>$row['406'],
        'india_ma_centgovt_ss'=>$row['407'],
        'india_ma_centgovt_ss_sd'=>$row['408'],
        'india_ma_centgovt_pl12'=>$row['409'],
        'india_ma_centgovt_pl34'=>$row['410'],
        'india_ma_sc_pct'=>$row['411'],
        'india_ma_sc_pct_sd'=>$row['412'],
        'india_ma_sc_ss'=>$row['413'],
        'india_ma_sc_ss_sd'=>$row['414'],
        'india_ma_sc_pl12'=>$row['415'],
        'india_ma_sc_pl34'=>$row['416'],
        'india_ma_st_pct'=>$row['417'],
        'india_ma_st_pct_sd'=>$row['418'],
        'india_ma_st_ss'=>$row['419'],
        'india_ma_st_ss_sd'=>$row['420'],
        'india_ma_st_pl12'=>$row['421'],
        'india_ma_st_pl34'=>$row['422'],
        'india_ma_obc_pct'=>$row['423'],
        'india_ma_obc_pct_sd'=>$row['424'],
        'india_ma_obc_ss'=>$row['425'],
        'india_ma_obc_ss_sd'=>$row['426'],
        'india_ma_obc_pl12'=>$row['427'],
        'india_ma_obc_pl34'=>$row['428'],
        'india_ma_general_pct'=>$row['429'],
        'india_ma_general_pct_sd'=>$row['430'],
        'india_ma_general_ss'=>$row['431'],
        'india_ma_general_ss_sd'=>$row['432'],
        'india_ma_general_pl12'=>$row['433'],
        'india_ma_general_pl34'=>$row['434'],
        'india_ma_ews_pct'=>$row['435'],
        'india_ma_ews_pct_sd'=>$row['436'],
        'india_ma_ews_ss'=>$row['437'],
        'india_ma_ews_ss_sd'=>$row['438'],
        'india_ma_ews_pl12'=>$row['439'],
        'india_ma_ews_pl34'=>$row['440'],
        'state_sc_pct'=>$row['441'],
        'state_sc_pct_sd'=>$row['442'],
        'state_sc_ss'=>$row['443'],
        'state_sc_ss_sd'=>$row['444'],
        'state_sc_pl1'=>$row['445'],
        'state_sc_pl2'=>$row['446'],
        'state_sc_pl3'=>$row['447'],
        'state_sc_pl4'=>$row['448'],
        'state_sc_pl12'=>$row['449'],
        'state_sc_pl34'=>$row['450'],
        'state_sc_psub3_1'=>$row['451'],
        'state_sc_psub3_2'=>$row['452'],
        'state_sc_psub3_3'=>$row['453'],
        'state_sc_psub3_4'=>$row['454'],
        'state_sc_psub3_5'=>$row['455'],
        'state_sc_psub3_6'=>$row['456'],
        'state_sc_psub3_7'=>$row['457'],
        'state_sc_psub3_8'=>$row['458'],
        'state_sc_psub3_9'=>$row['459'],
        'state_sc_psub3_10'=>$row['460'],
        'state_sc_psub3_11'=>$row['461'],
        'state_sc_psub3_12'=>$row['462'],
        'state_sc_pq_q14'=>$row['463'],
        'state_sc_pq_q17'=>$row['464'],
        'state_sc_pq_q32'=>$row['465'],
        'state_sc_pq_q18'=>$row['466'],
        'state_sc_pq_q29f'=>$row['467'],
        'state_sc_boys_pct'=>$row['468'],
        'state_sc_boys_pct_sd'=>$row['469'],
        'state_sc_boys_ss'=>$row['470'],
        'state_sc_boys_ss_sd'=>$row['471'],
        'state_sc_boys_pl12'=>$row['472'],
        'state_sc_boys_pl34'=>$row['473'],
        'state_sc_girls_pct'=>$row['474'],
        'state_sc_girls_pct_sd'=>$row['475'],
        'state_sc_girls_ss'=>$row['476'],
        'state_sc_girls_ss_sd'=>$row['477'],
        'state_sc_girls_pl12'=>$row['478'],
        'state_sc_girls_pl34'=>$row['479'],
        'state_sc_rural_pct'=>$row['480'],
        'state_sc_rural_pct_sd'=>$row['481'],
        'state_sc_rural_ss'=>$row['482'],
        'state_sc_rural_ss_sd'=>$row['483'],
        'state_sc_rural_pl12'=>$row['484'],
        'state_sc_rural_pl34'=>$row['485'],
        'state_sc_urban_pct'=>$row['486'],
        'state_sc_urban_pct_sd'=>$row['487'],
        'state_sc_urban_ss'=>$row['488'],
        'state_sc_urban_ss_sd'=>$row['489'],
        'state_sc_urban_pl12'=>$row['490'],
        'state_sc_urban_pl34'=>$row['491'],
        'state_sc_govt_pct'=>$row['492'],
        'state_sc_govt_pct_sd'=>$row['493'],
        'state_sc_govt_ss'=>$row['494'],
        'state_sc_govt_ss_sd'=>$row['495'],
        'state_sc_govt_pl12'=>$row['496'],
        'state_sc_govt_pl34'=>$row['497'],
        'state_sc_govtaid_pct'=>$row['498'],
        'state_sc_govtaid_pct_sd'=>$row['499'],
        'state_sc_govtaid_ss'=>$row['500'],
        'state_sc_govtaid_ss_sd'=>$row['501'],
        'state_sc_govtaid_pl12'=>$row['502'],
        'state_sc_govtaid_pl34'=>$row['503'],
        'state_sc_private_pct'=>$row['504'],
        'state_sc_private_pct_sd'=>$row['505'],
        'state_sc_private_ss'=>$row['506'],
        'state_sc_private_ss_sd'=>$row['507'],
        'state_sc_private_pl12'=>$row['508'],
        'state_sc_private_pl34'=>$row['509'],
        'state_sc_centgovt_pct'=>$row['510'],
        'state_sc_centgovt_pct_sd'=>$row['511'],
        'state_sc_centgovt_ss'=>$row['512'],
        'state_sc_centgovt_ss_sd'=>$row['513'],
        'state_sc_centgovt_pl12'=>$row['514'],
        'state_sc_centgovt_pl34'=>$row['515'],
        'state_sc_sc_pct'=>$row['516'],
        'state_sc_sc_pct_sd'=>$row['517'],
        'state_sc_sc_ss'=>$row['518'],
        'state_sc_sc_ss_sd'=>$row['519'],
        'state_sc_sc_pl12'=>$row['520'],
        'state_sc_sc_pl34'=>$row['521'],
        'state_sc_st_pct'=>$row['522'],
        'state_sc_st_pct_sd'=>$row['523'],
        'state_sc_st_ss'=>$row['524'],
        'state_sc_st_ss_sd'=>$row['525'],
        'state_sc_st_pl12'=>$row['526'],
        'state_sc_st_pl34'=>$row['527'],
        'state_sc_obc_pct'=>$row['528'],
        'state_sc_obc_pct_sd'=>$row['529'],
        'state_sc_obc_ss'=>$row['530'],
        'state_sc_obc_ss_sd'=>$row['531'],
        'state_sc_obc_pl12'=>$row['532'],
        'state_sc_obc_pl34'=>$row['533'],
        'state_sc_general_pct'=>$row['534'],
        'state_sc_general_pct_sd'=>$row['535'],
        'state_sc_general_ss'=>$row['536'],
        'state_sc_general_ss_sd'=>$row['537'],
        'state_sc_general_pl12'=>$row['538'],
        'state_sc_general_pl34'=>$row['539'],
        'state_sc_ews_pct'=>$row['540'],
        'state_sc_ews_pct_sd'=>$row['541'],
        'state_sc_ews_ss'=>$row['542'],
        'state_sc_ews_ss_sd'=>$row['543'],
        'state_sc_ews_pl12'=>$row['544'],
        'state_sc_ews_pl34'=>$row['545'],
        'india_sc_pct'=>$row['546'],
        'india_sc_pct_sd'=>$row['547'],
        'india_sc_ss'=>$row['548'],
        'india_sc_ss_sd'=>$row['549'],
        'india_sc_pl1'=>$row['550'],
        'india_sc_pl2'=>$row['551'],
        'india_sc_pl3'=>$row['552'],
        'india_sc_pl4'=>$row['553'],
        'india_sc_pl12'=>$row['554'],
        'india_sc_pl34'=>$row['555'],
        'india_sc_psub3_1'=>$row['556'],
        'india_sc_psub3_2'=>$row['557'],
        'india_sc_psub3_3'=>$row['558'],
        'india_sc_psub3_4'=>$row['559'],
        'india_sc_psub3_5'=>$row['560'],
        'india_sc_psub3_6'=>$row['561'],
        'india_sc_psub3_7'=>$row['562'],
        'india_sc_psub3_8'=>$row['563'],
        'india_sc_psub3_9'=>$row['564'],
        'india_sc_psub3_10'=>$row['565'],
        'india_sc_psub3_11'=>$row['566'],
        'india_sc_psub3_12'=>$row['567'],
        'india_sc_boys_pct'=>$row['568'],
        'india_sc_boys_pct_sd'=>$row['569'],
        'india_sc_boys_ss'=>$row['570'],
        'india_sc_boys_ss_sd'=>$row['571'],
        'india_sc_boys_pl12'=>$row['572'],
        'india_sc_boys_pl34'=>$row['573'],
        'india_sc_girls_pct'=>$row['574'],
        'india_sc_girls_pct_sd'=>$row['575'],
        'india_sc_girls_ss'=>$row['576'],
        'india_sc_girls_ss_sd'=>$row['577'],
        'india_sc_girls_pl12'=>$row['578'],
        'india_sc_girls_pl34'=>$row['579'],
        'india_sc_rural_pct'=>$row['580'],
        'india_sc_rural_pct_sd'=>$row['581'],
        'india_sc_rural_ss'=>$row['582'],
        'india_sc_rural_ss_sd'=>$row['583'],
        'india_sc_rural_pl12'=>$row['584'],
        'india_sc_rural_pl34'=>$row['585'],
        'india_sc_urban_pct'=>$row['586'],
        'india_sc_urban_pct_sd'=>$row['587'],
        'india_sc_urban_ss'=>$row['588'],
        'india_sc_urban_ss_sd'=>$row['589'],
        'india_sc_urban_pl12'=>$row['590'],
        'india_sc_urban_pl34'=>$row['591'],
        'india_sc_govt_pct'=>$row['592'],
        'india_sc_govt_pct_sd'=>$row['593'],
        'india_sc_govt_ss'=>$row['594'],
        'india_sc_govt_ss_sd'=>$row['595'],
        'india_sc_govt_pl12'=>$row['596'],
        'india_sc_govt_pl34'=>$row['597'],
        'india_sc_govtaid_pct'=>$row['598'],
        'india_sc_govtaid_pct_sd'=>$row['599'],
        'india_sc_govtaid_ss'=>$row['600'],
        'india_sc_govtaid_ss_sd'=>$row['601'],
        'india_sc_govtaid_pl12'=>$row['602'],
        'india_sc_govtaid_pl34'=>$row['603'],
        'india_sc_private_pct'=>$row['604'],
        'india_sc_private_pct_sd'=>$row['605'],
        'india_sc_private_ss'=>$row['606'],
        'india_sc_private_ss_sd'=>$row['607'],
        'india_sc_private_pl12'=>$row['608'],
        'india_sc_private_pl34'=>$row['609'],
        'india_sc_centgovt_pct'=>$row['610'],
        'india_sc_centgovt_pct_sd'=>$row['611'],
        'india_sc_centgovt_ss'=>$row['612'],
        'india_sc_centgovt_ss_sd'=>$row['613'],
        'india_sc_centgovt_pl12'=>$row['614'],
        'india_sc_centgovt_pl34'=>$row['615'],
        'india_sc_sc_pct'=>$row['616'],
        'india_sc_sc_pct_sd'=>$row['617'],
        'india_sc_sc_ss'=>$row['618'],
        'india_sc_sc_ss_sd'=>$row['619'],
        'india_sc_sc_pl12'=>$row['620'],
        'india_sc_sc_pl34'=>$row['621'],
        'india_sc_st_pct'=>$row['622'],
        'india_sc_st_pct_sd'=>$row['623'],
        'india_sc_st_ss'=>$row['624'],
        'india_sc_st_ss_sd'=>$row['625'],
        'india_sc_st_pl12'=>$row['626'],
        'india_sc_st_pl34'=>$row['627'],
        'india_sc_obc_pct'=>$row['628'],
        'india_sc_obc_pct_sd'=>$row['629'],
        'india_sc_obc_ss'=>$row['630'],
        'india_sc_obc_ss_sd'=>$row['631'],
        'india_sc_obc_pl12'=>$row['632'],
        'india_sc_obc_pl34'=>$row['633'],
        'india_sc_general_pct'=>$row['634'],
        'india_sc_general_pct_sd'=>$row['635'],
        'india_sc_general_ss'=>$row['636'],
        'india_sc_general_ss_sd'=>$row['637'],
        'india_sc_general_pl12'=>$row['638'],
        'india_sc_general_pl34'=>$row['639'],
        'india_sc_ews_pct'=>$row['640'],
        'india_sc_ews_pct_sd'=>$row['641'],
        'india_sc_ews_ss'=>$row['642'],
        'india_sc_ews_ss_sd'=>$row['643'],
        'india_sc_ews_pl12'=>$row['644'],
        'india_sc_ews_pl34'=>$row['645'],
        'state_ss_pct'=>$row['646'],
        'state_ss_pct_sd'=>$row['647'],
        'state_ss_ss'=>$row['648'],
        'state_ss_ss_sd'=>$row['649'],
        'state_ss_pl1'=>$row['650'],
        'state_ss_pl2'=>$row['651'],
        'state_ss_pl3'=>$row['652'],
        'state_ss_pl4'=>$row['653'],
        'state_ss_pl12'=>$row['654'],
        'state_ss_pl34'=>$row['655'],
        'state_ss_psub3_1'=>$row['656'],
        'state_ss_psub3_2'=>$row['657'],
        'state_ss_psub3_3'=>$row['658'],
        'state_ss_psub3_4'=>$row['659'],
        'state_ss_psub3_5'=>$row['660'],
        'state_ss_psub3_6'=>$row['661'],
        'state_ss_psub3_7'=>$row['662'],
        'state_ss_psub3_8'=>$row['663'],
        'state_ss_psub3_9'=>$row['664'],
        'state_ss_psub3_10'=>$row['665'],
        'state_ss_psub3_11'=>$row['666'],
        'state_ss_psub3_12'=>$row['667'],
        'state_ss_psub3_13'=>$row['668'],
        'state_ss_psub3_14'=>$row['669'],
        'state_ss_psub3_15'=>$row['670'],
        'state_ss_psub3_16'=>$row['671'],
        'state_ss_psub3_17'=>$row['672'],
        'state_ss_psub3_18'=>$row['673'],
        'state_ss_psub3_19'=>$row['674'],
        'state_ss_psub3_20'=>$row['675'],
        'state_ss_psub3_21'=>$row['676'],
        'state_ss_psub3_22'=>$row['677'],
        'state_ss_pq_q14'=>$row['678'],
        'state_ss_pq_q17'=>$row['679'],
        'state_ss_pq_q32'=>$row['680'],
        'state_ss_pq_q18'=>$row['681'],
        'state_ss_pq_q29f'=>$row['682'],
        'state_ss_boys_pct'=>$row['683'],
        'state_ss_boys_pct_sd'=>$row['684'],
        'state_ss_boys_ss'=>$row['685'],
        'state_ss_boys_ss_sd'=>$row['686'],
        'state_ss_boys_pl12'=>$row['687'],
        'state_ss_boys_pl34'=>$row['688'],
        'state_ss_girls_pct'=>$row['689'],
        'state_ss_girls_pct_sd'=>$row['690'],
        'state_ss_girls_ss'=>$row['691'],
        'state_ss_girls_ss_sd'=>$row['692'],
        'state_ss_girls_pl12'=>$row['693'],
        'state_ss_girls_pl34'=>$row['694'],
        'state_ss_rural_pct'=>$row['695'],
        'state_ss_rural_pct_sd'=>$row['696'],
        'state_ss_rural_ss'=>$row['697'],
        'state_ss_rural_ss_sd'=>$row['698'],
        'state_ss_rural_pl12'=>$row['699'],
        'state_ss_rural_pl34'=>$row['700'],
        'state_ss_urban_pct'=>$row['701'],
        'state_ss_urban_pct_sd'=>$row['702'],
        'state_ss_urban_ss'=>$row['703'],
        'state_ss_urban_ss_sd'=>$row['704'],
        'state_ss_urban_pl12'=>$row['705'],
        'state_ss_urban_pl34'=>$row['706'],
        'state_ss_govt_pct'=>$row['707'],
        'state_ss_govt_pct_sd'=>$row['708'],
        'state_ss_govt_ss'=>$row['709'],
        'state_ss_govt_ss_sd'=>$row['710'],
        'state_ss_govt_pl12'=>$row['711'],
        'state_ss_govt_pl34'=>$row['712'],
        'state_ss_govtaid_pct'=>$row['713'],
        'state_ss_govtaid_pct_sd'=>$row['714'],
        'state_ss_govtaid_ss'=>$row['715'],
        'state_ss_govtaid_ss_sd'=>$row['716'],
        'state_ss_govtaid_pl12'=>$row['717'],
        'state_ss_govtaid_pl34'=>$row['718'],
        'state_ss_private_pct'=>$row['719'],
        'state_ss_private_pct_sd'=>$row['720'],
        'state_ss_private_ss'=>$row['721'],
        'state_ss_private_ss_sd'=>$row['722'],
        'state_ss_private_pl12'=>$row['723'],
        'state_ss_private_pl34'=>$row['724'],
        'state_ss_centgovt_pct'=>$row['725'],
        'state_ss_centgovt_pct_sd'=>$row['726'],
        'state_ss_centgovt_ss'=>$row['727'],
        'state_ss_centgovt_ss_sd'=>$row['728'],
        'state_ss_centgovt_pl12'=>$row['729'],
        'state_ss_centgovt_pl34'=>$row['730'],
        'state_ss_sc_pct'=>$row['731'],
        'state_ss_sc_pct_sd'=>$row['732'],
        'state_ss_sc_ss'=>$row['733'],
        'state_ss_sc_ss_sd'=>$row['734'],
        'state_ss_sc_pl12'=>$row['735'],
        'state_ss_sc_pl34'=>$row['736'],
        'state_ss_st_pct'=>$row['737'],
        'state_ss_st_pct_sd'=>$row['738'],
        'state_ss_st_ss'=>$row['739'],
        'state_ss_st_ss_sd'=>$row['740'],
        'state_ss_st_pl12'=>$row['741'],
        'state_ss_st_pl34'=>$row['742'],
        'state_ss_obc_pct'=>$row['743'],
        'state_ss_obc_pct_sd'=>$row['744'],
        'state_ss_obc_ss'=>$row['745'],
        'state_ss_obc_ss_sd'=>$row['746'],
        'state_ss_obc_pl12'=>$row['747'],
        'state_ss_obc_pl34'=>$row['748'],
        'state_ss_general_pct'=>$row['749'],
        'state_ss_general_pct_sd'=>$row['750'],
        'state_ss_general_ss'=>$row['751'],
        'state_ss_general_ss_sd'=>$row['752'],
        'state_ss_general_pl12'=>$row['753'],
        'state_ss_general_pl34'=>$row['754'],
        'state_ss_ews_pct'=>$row['755'],
        'state_ss_ews_pct_sd'=>$row['756'],
        'state_ss_ews_ss'=>$row['757'],
        'state_ss_ews_ss_sd'=>$row['758'],
        'state_ss_ews_pl12'=>$row['759'],
        'state_ss_ews_pl34'=>$row['760'],
        'india_ss_pct'=>$row['761'],
        'india_ss_pct_sd'=>$row['762'],
        'india_ss_ss'=>$row['763'],
        'india_ss_ss_sd'=>$row['764'],
        'india_ss_pl1'=>$row['765'],
        'india_ss_pl2'=>$row['766'],
        'india_ss_pl3'=>$row['767'],
        'india_ss_pl4'=>$row['768'],
        'india_ss_pl12'=>$row['769'],
        'india_ss_pl34'=>$row['770'],
        'india_ss_psub3_1'=>$row['771'],
        'india_ss_psub3_2'=>$row['772'],
        'india_ss_psub3_3'=>$row['773'],
        'india_ss_psub3_4'=>$row['774'],
        'india_ss_psub3_5'=>$row['775'],
        'india_ss_psub3_6'=>$row['776'],
        'india_ss_psub3_7'=>$row['777'],
        'india_ss_psub3_8'=>$row['778'],
        'india_ss_psub3_9'=>$row['779'],
        'india_ss_psub3_10'=>$row['780'],
        'india_ss_psub3_11'=>$row['781'],
        'india_ss_psub3_12'=>$row['782'],
        'india_ss_psub3_13'=>$row['783'],
        'india_ss_psub3_14'=>$row['784'],
        'india_ss_psub3_15'=>$row['785'],
        'india_ss_psub3_16'=>$row['786'],
        'india_ss_psub3_17'=>$row['787'],
        'india_ss_psub3_18'=>$row['788'],
        'india_ss_psub3_19'=>$row['789'],
        'india_ss_psub3_20'=>$row['790'],
        'india_ss_psub3_21'=>$row['791'],
        'india_ss_psub3_22'=>$row['792'],
        'india_ss_boys_pct'=>$row['793'],
        'india_ss_boys_pct_sd'=>$row['794'],
        'india_ss_boys_ss'=>$row['795'],
        'india_ss_boys_ss_sd'=>$row['796'],
        'india_ss_boys_pl12'=>$row['797'],
        'india_ss_boys_pl34'=>$row['798'],
        'india_ss_girls_pct'=>$row['799'],
        'india_ss_girls_pct_sd'=>$row['800'],
        'india_ss_girls_ss'=>$row['801'],
        'india_ss_girls_ss_sd'=>$row['802'],
        'india_ss_girls_pl12'=>$row['803'],
        'india_ss_girls_pl34'=>$row['804'],
        'india_ss_rural_pct'=>$row['805'],
        'india_ss_rural_pct_sd'=>$row['806'],
        'india_ss_rural_ss'=>$row['807'],
        'india_ss_rural_ss_sd'=>$row['808'],
        'india_ss_rural_pl12'=>$row['809'],
        'india_ss_rural_pl34'=>$row['810'],
        'india_ss_urban_pct'=>$row['811'],
        'india_ss_urban_pct_sd'=>$row['812'],
        'india_ss_urban_ss'=>$row['813'],
        'india_ss_urban_ss_sd'=>$row['814'],
        'india_ss_urban_pl12'=>$row['815'],
        'india_ss_urban_pl34'=>$row['816'],
        'india_ss_govt_pct'=>$row['817'],
        'india_ss_govt_pct_sd'=>$row['818'],
        'india_ss_govt_ss'=>$row['819'],
        'india_ss_govt_ss_sd'=>$row['820'],
        'india_ss_govt_pl12'=>$row['821'],
        'india_ss_govt_pl34'=>$row['822'],
        'india_ss_govtaid_pct'=>$row['823'],
        'india_ss_govtaid_pct_sd'=>$row['824'],
        'india_ss_govtaid_ss'=>$row['825'],
        'india_ss_govtaid_ss_sd'=>$row['826'],
        'india_ss_govtaid_pl12'=>$row['827'],
        'india_ss_govtaid_pl34'=>$row['828'],
        'india_ss_private_pct'=>$row['829'],
        'india_ss_private_pct_sd'=>$row['830'],
        'india_ss_private_ss'=>$row['831'],
        'india_ss_private_ss_sd'=>$row['832'],
        'india_ss_private_pl12'=>$row['833'],
        'india_ss_private_pl34'=>$row['834'],
        'india_ss_centgovt_pct'=>$row['835'],
        'india_ss_centgovt_pct_sd'=>$row['836'],
        'india_ss_centgovt_ss'=>$row['837'],
        'india_ss_centgovt_ss_sd'=>$row['838'],
        'india_ss_centgovt_pl12'=>$row['839'],
        'india_ss_centgovt_pl34'=>$row['840'],
        'india_ss_sc_pct'=>$row['841'],
        'india_ss_sc_pct_sd'=>$row['842'],
        'india_ss_sc_ss'=>$row['843'],
        'india_ss_sc_ss_sd'=>$row['844'],
        'india_ss_sc_pl12'=>$row['845'],
        'india_ss_sc_pl34'=>$row['846'],
        'india_ss_st_pct'=>$row['847'],
        'india_ss_st_pct_sd'=>$row['848'],
        'india_ss_st_ss'=>$row['849'],
        'india_ss_st_ss_sd'=>$row['850'],
        'india_ss_st_pl12'=>$row['851'],
        'india_ss_st_pl34'=>$row['852'],
        'india_ss_obc_pct'=>$row['853'],
        'india_ss_obc_pct_sd'=>$row['854'],
        'india_ss_obc_ss'=>$row['855'],
        'india_ss_obc_ss_sd'=>$row['856'],
        'india_ss_obc_pl12'=>$row['857'],
        'india_ss_obc_pl34'=>$row['858'],
        'india_ss_general_pct'=>$row['859'],
        'india_ss_general_pct_sd'=>$row['860'],
        'india_ss_general_ss'=>$row['861'],
        'india_ss_general_ss_sd'=>$row['862'],
        'india_ss_general_pl12'=>$row['863'],
        'india_ss_general_pl34'=>$row['864'],
        'india_ss_ews_pct'=>$row['865'],
        'india_ss_ews_pct_sd'=>$row['866'],
        'india_ss_ews_ss'=>$row['867'],
        'india_ss_ews_ss_sd'=>$row['868'],
        'india_ss_ews_pl12'=>$row['869'],
        'india_ss_ews_pl34'=>$row['870']

        ]);
    }
}
