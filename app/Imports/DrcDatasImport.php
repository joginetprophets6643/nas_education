<?php

namespace App\Imports;

use App\Models\DrcDatas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DrcDatasImport implements ToModel,WithStartRow
{

    public function startRow(): int
    {
        return 2;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
    
        return new DrcDatas([
            'udise_state_code'=>$row[0],
            'state_name'=>$row[1],
            'udise_district_code'=>$row[2],
            'district_name'=>$row[3],
            'drc_area_tot'=>$row[4],
            'drc_pop_tot'=>$row[5],
            'drc_pop_rur'=>$row[6],
            'drc_pop_urb'=>$row[7],
            'drc_den_tot'=>$row[8],
            'drc_lit_tot'=>$row[9],
            'drc_csr_tot'=>$row[10],
            'drc_sch_tot'=>$row[11],
            'drc_sch_sgov'=>$row[12],
            'drc_sch_agov'=>$row[13],
            'drc_sch_pvt'=>$row[14],
            'drc_sch_cgov'=>$row[15],
            'drc_trs_tot'=>$row[16],
            'drc_trs_sgov'=>$row[17],
            'drc_trs_agov'=>$row[18],
            'drc_trs_pvt'=>$row[19],
            'drc_trs_cgov'=>$row[20],
            'drc_gr3_nsch_tot'=>$row[21],
            'drc_gr3_nstu_tot'=>$row[22],
            'drc_gr3_ntrs_tot'=>$row[23],
            'drc_gr3_ps_boys'=>$row[24],
            'drc_gr3_ps_girls'=>$row[25],
            'drc_gr3_ps_ru'=>$row[26],
            'drc_gr3_ps_ur'=>$row[27],
            'drc_gr3_ps_go'=>$row[28],
            'drc_gr3_ps_ga'=>$row[29],
            'drc_gr3_ps_priv'=>$row[30],
            'drc_gr3_ps_cg'=>$row[31],
            'drc_gr3_ps_sc'=>$row[32],
            'drc_gr3_ps_st'=>$row[33],
            'drc_gr3_ps_obc'=>$row[34],
            'drc_gr3_ps_gen'=>$row[35],
            'drc_gr3_pclang_tot'=>$row[36],
            'drc_gr3_pclang_boys'=>$row[37],
            'drc_gr3_pclang_girls'=>$row[38],
            'drc_gr3_pclang_ru'=>$row[39],
            'drc_gr3_pclang_ur'=>$row[40],
            'drc_gr3_pclang_go'=>$row[41],
            'drc_gr3_pclang_ga'=>$row[42],
            'drc_gr3_pclang_priv'=>$row[43],
            'drc_gr3_pclang_cg'=>$row[44],
            'drc_gr3_pclang_sc'=>$row[45],
            'drc_gr3_pclang_st'=>$row[46],
            'drc_gr3_pclang_obc'=>$row[47],
            'drc_gr3_pclang_gen'=>$row[48],
            'drc_gr3_pcmath_tot'=>$row[49],
            'drc_gr3_pcmath_boys'=>$row[50],
            'drc_gr3_pcmath_girls'=>$row[51],
            'drc_gr3_pcmath_ru'=>$row[52],
            'drc_gr3_pcmath_ur'=>$row[53],
            'drc_gr3_pcmath_go'=>$row[54],
            'drc_gr3_pcmath_ga'=>$row[55],
            'drc_gr3_pcmath_priv'=>$row[56],
            'drc_gr3_pcmath_cg'=>$row[57],
            'drc_gr3_pcmath_sc'=>$row[58],
            'drc_gr3_pcmath_st'=>$row[59],
            'drc_gr3_pcmath_obc'=>$row[60],
            'drc_gr3_pcmath_gen'=>$row[61],
            'drc_gr3_pcevs_tot'=>$row[62],
            'drc_gr3_pcevs_boys'=>$row[63],
            'drc_gr3_pcevs_girls'=>$row[64],
            'drc_gr3_pcevs_ru'=>$row[65],
            'drc_gr3_pcevs_ur'=>$row[66],
            'drc_gr3_pcevs_go'=>$row[67],
            'drc_gr3_pcevs_ga'=>$row[68],
            'drc_gr3_pcevs_priv'=>$row[69],
            'drc_gr3_pcevs_cg'=>$row[70],
            'drc_gr3_pcevs_sc'=>$row[71],
            'drc_gr3_pcevs_st'=>$row[72],
            'drc_gr3_pcevs_obc'=>$row[73],
            'drc_gr3_pcevs_gen'=>$row[74],
            'drc_gr3_perlang_bba'=>$row[75],
            'drc_gr3_perlang_bas'=>$row[76],
            'drc_gr3_perlang_pro'=>$row[77],
            'drc_gr3_perlang_adv'=>$row[78],
            'drc_gr3_permath_bba'=>$row[79],
            'drc_gr3_permath_bas'=>$row[80],
            'drc_gr3_permath_pro'=>$row[81],
            'drc_gr3_permath_adv'=>$row[82],
            'drc_gr3_perevs_bba'=>$row[83],
            'drc_gr3_perevs_bas'=>$row[84],
            'drc_gr3_perevs_pro'=>$row[85],
            'drc_gr3_perevs_adv'=>$row[86],
            'drc_gr3_lang_l304'=>$row[87],
            'drc_gr3_lang_l312'=>$row[88],
            'drc_gr3_maths_m301'=>$row[89],
            'drc_gr3_maths_m302'=>$row[90],
            'drc_gr3_maths_m303'=>$row[91],
            'drc_gr3_maths_m304'=>$row[92],
            'drc_gr3_maths_m305'=>$row[93],
            'drc_gr3_maths_m306'=>$row[94],
            'drc_gr3_maths_m309'=>$row[95],
            'drc_gr3_maths_m311'=>$row[96],
            'drc_gr3_maths_m312'=>$row[97],
            'drc_gr3_maths_m317'=>$row[98],
            'drc_gr3_maths_m318'=>$row[99],
            'drc_gr3_maths_m319'=>$row[100],
            'drc_gr3_evs_e302'=>$row[101],
            'drc_gr3_evs_e303'=>$row[102],
            'drc_gr3_evs_e304'=>$row[103],
            'drc_gr3_evs_e305'=>$row[104],
            'drc_gr3_evs_e307'=>$row[105],
            'drc_gr3_evs_e309'=>$row[106],
            'drc_gr3_evs_e310'=>$row[107],
            'drc_gr3_evs_e311'=>$row[108],
            'drc_gr3_evs_e313'=>$row[109],
            'drc_gr3_evs_e314'=>$row[110],
            'drc_gr3_chi_lik'=>$row[111],
            'drc_gr3_chi_hlang'=>$row[112],
            'drc_gr3_chi_teach'=>$row[113],
            'drc_gr3_chi_play'=>$row[114],
            'drc_gr3_chi_dig'=>$row[115],
            'drc_gr3_chi_lab'=>$row[116],
            'drc_gr3_chi_inter'=>$row[117],
            'drc_gr3_chi_par'=>$row[118],
            'drc_gr3_trs_inst'=>$row[119],
            'drc_gr3_trs_wosp'=>$row[120],
            'drc_gr3_trs_over'=>$row[121],
            'drc_gr3_trs_rep'=>$row[122],
            'drc_gr3_trs_dwt'=>$row[123],
            'drc_gr3_trs_toi'=>$row[124],
            'drc_gr3_trs_pdev'=>$row[125],
            'drc_gr3_trs_pint'=>$row[126],
            'drc_gr3_sch_qsta'=>$row[127],
            'drc_gr3_sch_sups'=>$row[128],
            'drc_gr3_sch_avr'=>$row[129],
            'drc_gr3_sch_lib'=>$row[130],
            'drc_gr3_sch_spo'=>$row[131],
            'drc_gr3_sch_libf'=>$row[132],
            'drc_gr5_nsch_tot'=>$row[133],
            'drc_gr5_nstu_tot'=>$row[134],
            'drc_gr5_ntrs_tot'=>$row[135],
            'drc_gr5_ps_boys'=>$row[136],
            'drc_gr5_ps_girls'=>$row[137],
            'drc_gr5_ps_ru'=>$row[138],
            'drc_gr5_ps_ur'=>$row[139],
            'drc_gr5_ps_go'=>$row[140],
            'drc_gr5_ps_ga'=>$row[141],
            'drc_gr5_ps_priv'=>$row[142],
            'drc_gr5_ps_cg'=>$row[143],
            'drc_gr5_ps_sc'=>$row[144],
            'drc_gr5_ps_st'=>$row[145],
            'drc_gr5_ps_obc'=>$row[146],
            'drc_gr5_ps_gen'=>$row[147],
            'drc_gr5_pclang_tot'=>$row[148],
            'drc_gr5_pclang_boys'=>$row[149],
            'drc_gr5_pclang_girls'=>$row[150],
            'drc_gr5_pclang_ru'=>$row[151],
            'drc_gr5_pclang_ur'=>$row[152],
            'drc_gr5_pclang_go'=>$row[153],
            'drc_gr5_pclang_ga'=>$row[154],
            'drc_gr5_pclang_priv'=>$row[155],
            'drc_gr5_pclang_cg'=>$row[156],
            'drc_gr5_pclang_sc'=>$row[157],
            'drc_gr5_pclang_st'=>$row[158],
            'drc_gr5_pclang_obc'=>$row[159],
            'drc_gr5_pclang_gen'=>$row[160],
            'drc_gr5_pcmath_tot'=>$row[161],
            'drc_gr5_pcmath_boys'=>$row[162],
            'drc_gr5_pcmath_girls'=>$row[163],
            'drc_gr5_pcmath_ru'=>$row[164],
            'drc_gr5_pcmath_ur'=>$row[165],
            'drc_gr5_pcmath_go'=>$row[166],
            'drc_gr5_pcmath_ga'=>$row[167],
            'drc_gr5_pcmath_priv'=>$row[168],
            'drc_gr5_pcmath_cg'=>$row[169],
            'drc_gr5_pcmath_sc'=>$row[170],
            'drc_gr5_pcmath_st'=>$row[171],
            'drc_gr5_pcmath_obc'=>$row[172],
            'drc_gr5_pcmath_gen'=>$row[173],
            'drc_gr5_pcevs_tot'=>$row[174],
            'drc_gr5_pcevs_boys'=>$row[175],
            'drc_gr5_pcevs_girls'=>$row[176],
            'drc_gr5_pcevs_ru'=>$row[177],
            'drc_gr5_pcevs_ur'=>$row[178],
            'drc_gr5_pcevs_go'=>$row[179],
            'drc_gr5_pcevs_ga'=>$row[180],
            'drc_gr5_pcevs_priv'=>$row[181],
            'drc_gr5_pcevs_cg'=>$row[182],
            'drc_gr5_pcevs_sc'=>$row[183],
            'drc_gr5_pcevs_st'=>$row[184],
            'drc_gr5_pcevs_obc'=>$row[185],
            'drc_gr5_pcevs_gen'=>$row[186],
            'drc_gr5_perlang_bba'=>$row[187],
            'drc_gr5_perlang_bas'=>$row[188],
            'drc_gr5_perlang_pro'=>$row[189],
            'drc_gr5_perlang_adv'=>$row[190],
            'drc_gr5_permath_bba'=>$row[191],
            'drc_gr5_permath_bas'=>$row[192],
            'drc_gr5_permath_pro'=>$row[193],
            'drc_gr5_permath_adv'=>$row[194],
            'drc_gr5_perevs_bba'=>$row[195],
            'drc_gr5_perevs_bas'=>$row[196],
            'drc_gr5_perevs_pro'=>$row[197],
            'drc_gr5_perevs_adv'=>$row[198],
            'drc_gr5_lang_l504'=>$row[199],
            'drc_gr5_lang_l508'=>$row[200],
            'drc_gr5_maths_m401'=>$row[201],
            'drc_gr5_maths_m412'=>$row[202],
            'drc_gr5_maths_m418'=>$row[203],
            'drc_gr5_maths_m421'=>$row[204],
            'drc_gr5_maths_m501'=>$row[205],
            'drc_gr5_maths_m504'=>$row[206],
            'drc_gr5_maths_m505'=>$row[207],
            'drc_gr5_maths_m506'=>$row[208],
            'drc_gr5_maths_m508'=>$row[209],
            'drc_gr5_maths_m509'=>$row[210],
            'drc_gr5_maths_m512'=>$row[211],
            'drc_gr5_maths_m513'=>$row[212],
            'drc_gr5_maths_m514'=>$row[213],
            'drc_gr5_maths_m515'=>$row[214],
            'drc_gr5_maths_m516'=>$row[215],
            'drc_gr5_evs_e403'=>$row[216],
            'drc_gr5_evs_e410'=>$row[217],
            'drc_gr5_evs_e501'=>$row[218],
            'drc_gr5_evs_e503'=>$row[219],
            'drc_gr5_evs_e504'=>$row[220],
            'drc_gr5_evs_e505'=>$row[221],
            'drc_gr5_evs_e506'=>$row[222],
            'drc_gr5_evs_e507'=>$row[223],
            'drc_gr5_evs_e508'=>$row[224],
            'drc_gr5_evs_e509'=>$row[225],
            'drc_gr5_evs_e510'=>$row[226],
            'drc_gr5_evs_e512'=>$row[227],
            'drc_gr5_evs_e513'=>$row[228],
            'drc_gr5_chi_lik'=>$row[229],
            'drc_gr5_chi_hlang'=>$row[230],
            'drc_gr5_chi_teach'=>$row[231],
            'drc_gr5_chi_play'=>$row[232],
            'drc_gr5_chi_dig'=>$row[233],
            'drc_gr5_chi_lab'=>$row[234],
            'drc_gr5_chi_inter'=>$row[235],
            'drc_gr5_chi_par'=>$row[236],
            'drc_gr5_trs_inst'=>$row[237],
            'drc_gr5_trs_wosp'=>$row[238],
            'drc_gr5_trs_over'=>$row[239],
            'drc_gr5_trs_rep'=>$row[240],
            'drc_gr5_trs_dwt'=>$row[241],
            'drc_gr5_trs_toi'=>$row[242],
            'drc_gr5_trs_pdev'=>$row[243],
            'drc_gr5_trs_pint'=>$row[244],
            'drc_gr5_sch_qsta'=>$row[245],
            'drc_gr5_sch_sups'=>$row[246],
            'drc_gr5_sch_avr'=>$row[247],
            'drc_gr5_sch_lib'=>$row[248],
            'drc_gr5_sch_spo'=>$row[249],
            'drc_gr5_sch_libf'=>$row[250],
            'drc_gr8_nsch_tot'=>$row[251],
            'drc_gr8_nstu_tot'=>$row[252],
            'drc_gr8_ntrs_tot'=>$row[253],
            'drc_gr8_ps_boys'=>$row[254],
            'drc_gr8_ps_girls'=>$row[255],
            'drc_gr8_ps_ru'=>$row[256],
            'drc_gr8_ps_ur'=>$row[257],
            'drc_gr8_ps_go'=>$row[258],
            'drc_gr8_ps_ga'=>$row[259],
            'drc_gr8_ps_priv'=>$row[260],
            'drc_gr8_ps_cg'=>$row[261],
            'drc_gr8_ps_sc'=>$row[262],
            'drc_gr8_ps_st'=>$row[263],
            'drc_gr8_ps_obc'=>$row[264],
            'drc_gr8_ps_gen'=>$row[265],
            'drc_gr8_pclang_tot'=>$row[266],
            'drc_gr8_pclang_boys'=>$row[267],
            'drc_gr8_pclang_girls'=>$row[268],
            'drc_gr8_pclang_ru'=>$row[269],
            'drc_gr8_pclang_ur'=>$row[270],
            'drc_gr8_pclang_go'=>$row[271],
            'drc_gr8_pclang_ga'=>$row[272],
            'drc_gr8_pclang_priv'=>$row[273],
            'drc_gr8_pclang_cg'=>$row[274],
            'drc_gr8_pclang_sc'=>$row[275],
            'drc_gr8_pclang_st'=>$row[276],
            'drc_gr8_pclang_obc'=>$row[277],
            'drc_gr8_pclang_gen'=>$row[278],
            'drc_gr8_pcmath_tot'=>$row[279],
            'drc_gr8_pcmath_boys'=>$row[280],
            'drc_gr8_pcmath_girls'=>$row[281],
            'drc_gr8_pcmath_ru'=>$row[282],
            'drc_gr8_pcmath_ur'=>$row[283],
            'drc_gr8_pcmath_go'=>$row[284],
            'drc_gr8_pcmath_ga'=>$row[285],
            'drc_gr8_pcmath_priv'=>$row[286],
            'drc_gr8_pcmath_cg'=>$row[287],
            'drc_gr8_pcmath_sc'=>$row[288],
            'drc_gr8_pcmath_st'=>$row[289],
            'drc_gr8_pcmath_obc'=>$row[290],
            'drc_gr8_pcmath_gen'=>$row[291],
            'drc_gr8_pcsc_tot'=>$row[292],
            'drc_gr8_pcsc_boys'=>$row[293],
            'drc_gr8_pcsc_girls'=>$row[294],
            'drc_gr8_pcsc_ru'=>$row[295],
            'drc_gr8_pcsc_ur'=>$row[296],
            'drc_gr8_pcsc_go'=>$row[297],
            'drc_gr8_pcsc_ga'=>$row[298],
            'drc_gr8_pcsc_priv'=>$row[299],
            'drc_gr8_pcsc_cg'=>$row[300],
            'drc_gr8_pcsc_sc'=>$row[301],
            'drc_gr8_pcsc_st'=>$row[302],
            'drc_gr8_pcsc_obc'=>$row[303],
            'drc_gr8_pcsc_gen'=>$row[304],
            'drc_gr8_pcsst_tot'=>$row[305],
            'drc_gr8_pcsst_boys'=>$row[306],
            'drc_gr8_pcsst_girls'=>$row[307],
            'drc_gr8_pcsst_ru'=>$row[308],
            'drc_gr8_pcsst_ur'=>$row[309],
            'drc_gr8_pcsst_go'=>$row[310],
            'drc_gr8_pcsst_ga'=>$row[311],
            'drc_gr8_pcsst_priv'=>$row[312],
            'drc_gr8_pcsst_cg'=>$row[313],
            'drc_gr8_pcsst_sc'=>$row[314],
            'drc_gr8_pcsst_st'=>$row[315],
            'drc_gr8_pcsst_obc'=>$row[316],
            'drc_gr8_pcsst_gen'=>$row[317],
            'drc_gr8_perlang_bba'=>$row[318],
            'drc_gr8_perlang_bas'=>$row[319],
            'drc_gr8_perlang_pro'=>$row[320],
            'drc_gr8_perlang_adv'=>$row[321],
            'drc_gr8_permath_bba'=>$row[322],
            'drc_gr8_permath_bas'=>$row[323],
            'drc_gr8_permath_pro'=>$row[324],
            'drc_gr8_permath_adv'=>$row[325],
            'drc_gr8_persc_bba'=>$row[326],
            'drc_gr8_persc_bas'=>$row[327],
            'gr8_persc_pro'=>$row[328],
            'gr8_persc_adv'=>$row[329],
            'gr8_persst_bba'=>$row[330],
            'gr8_persst_bas'=>$row[331],
            'gr8_persst_pro'=>$row[332],
            'gr8_persst_adv'=>$row[333],
            'gr8_lang_l813'=>$row[334],
            'gr8_maths_m601'=>$row[335],
            'gr8_maths_m606'=>$row[336],
            'gr8_maths_m620'=>$row[337],
            'gr8_maths_m621'=>$row[338],
            'gr8_maths_m702'=>$row[339],
            'gr8_maths_m705'=>$row[340],
            'gr8_maths_m706'=>$row[341],
            'gr8_maths_m707'=>$row[342],
            'gr8_maths_m710'=>$row[343],
            'gr8_maths_m717'=>$row[344],
            'gr8_maths_m719'=>$row[345],
            'gr8_maths_m721'=>$row[346],
            'gr8_maths_m801'=>$row[347],
            'gr8_maths_m802'=>$row[348],
            'gr8_maths_m803'=>$row[349],
            'gr8_maths_m804'=>$row[350],
            'gr8_maths_m808'=>$row[351],
            'gr8_maths_m812'=>$row[352],
            'gr8_maths_m818'=>$row[353],
            'gr8_maths_m819'=>$row[354],
            'gr8_sc_sci703'=>$row[355],
            'gr8_sc_sci704'=>$row[356],
            'gr8_sc_sci705'=>$row[357],
            'gr8_sc_sci708'=>$row[358],
            'gr8_sc_sci710'=>$row[359],
            'gr8_sc_sci711'=>$row[360],
            'gr8_sc_sci801'=>$row[361],
            'gr8_sc_sci804'=>$row[362],
            'gr8_sc_sci805'=>$row[363],
            'gr8_sc_sci807'=>$row[364],
            'gr8_sc_sci811'=>$row[365],
            'gr8_sc_sci813'=>$row[366],
            'gr8_sst_sst605'=>$row[367],
            'gr8_sst_sst610'=>$row[368],
            'gr8_sst_sst625'=>$row[369],
            'gr8_sst_sst703'=>$row[370],
            'gr8_sst_sst704'=>$row[371],
            'gr8_sst_sst722'=>$row[372],
            'gr8_sst_sst726'=>$row[373],
            'gr8_sst_sst731'=>$row[374],
            'gr8_sst_sst733'=>$row[375],
            'gr8_sst_sst734'=>$row[376],
            'gr8_sst_sst802'=>$row[377],
            'gr8_sst_sst805'=>$row[378],
            'gr8_sst_sst807'=>$row[379],
            'gr8_sst_sst809'=>$row[380],
            'gr8_sst_sst810'=>$row[381],
            'gr8_sst_sst815'=>$row[382],
            'gr8_sst_sst816'=>$row[383],
            'gr8_sst_sst818'=>$row[384],
            'gr8_sst_sst823'=>$row[385],
            'gr8_sst_sst827'=>$row[386],
            'gr8_sst_sst831'=>$row[387],
            'gr8_sst_sst833'=>$row[388],
            'gr8_chi_lik'=>$row[389],
            'gr8_chi_hlang'=>$row[390],
            'gr8_chi_teach'=>$row[391],
            'gr8_chi_play'=>$row[392],
            'gr8_chi_dig'=>$row[393],
            'gr8_chi_lab'=>$row[394],
            'gr8_chi_inter'=>$row[395],
            'gr8_chi_par'=>$row[396],
            'gr8_trs_inst'=>$row[397],
            'gr8_trs_wosp'=>$row[398],
            'gr8_trs_over'=>$row[399],
            'gr8_trs_rep'=>$row[400],
            'gr8_trs_dwt'=>$row[401],
            'gr8_trs_toi'=>$row[402],
            'gr8_trs_pdev'=>$row[403],
            'gr8_trs_pint'=>$row[404],
            'gr8_sch_qsta'=>$row[405],
            'gr8_sch_sups'=>$row[406],
            'gr8_sch_avr'=>$row[407],
            'gr8_sch_lib'=>$row[408],
            'gr8_sch_spo'=>$row[409],
            'gr8_sch_libf'=>$row[410],
            'drc_gr1_nsch_tot'=>$row[411],
            'drc_gr1_nstu_tot'=>$row[412],
            'drc_gr1_ntrs_tot'=>$row[413],
            'drc_gr1_ps_boys'=>$row[414],
            'drc_gr1_ps_girls'=>$row[415],
            'drc_gr1_ps_ru'=>$row[416],
            'drc_gr1_ps_ur'=>$row[417],
            'drc_gr1_ps_go'=>$row[418],
            'drc_gr1_ps_ga'=>$row[419],
            'drc_gr1_ps_priv'=>$row[420],
            'drc_gr1_ps_cg'=>$row[421],
            'drc_gr1_ps_sc'=>$row[422],
            'drc_gr1_ps_st'=>$row[423],
            'drc_gr1_ps_obc'=>$row[424],
            'drc_gr1_ps_gen'=>$row[425],
            'drc_gr1_pcmil_tot'=>$row[426],
            'drc_gr1_pcmil_boys'=>$row[427],
            'drc_gr1_pcmil_girls'=>$row[428],
            'drc_gr1_pcmil_ru'=>$row[429],
            'drc_gr1_pcmil_ur'=>$row[430],
            'drc_gr1_pcmil_go'=>$row[431],
            'drc_gr1_pcmil_ga'=>$row[432],
            'drc_gr1_pcmil_priv'=>$row[433],
            'drc_gr1_pcmil_cg'=>$row[434],
            'drc_gr1_pcmil_sc'=>$row[435],
            'drc_gr1_pcmil_st'=>$row[436],
            'drc_gr1_pcmil_obc'=>$row[437],
            'drc_gr1_pcmil_gen'=>$row[438],
            'drc_gr1_pcmath_tot'=>$row[439],
            'drc_gr1_pcmath_boys'=>$row[440],
            'drc_gr1_pcmath_girls'=>$row[441],
            'drc_gr1_pcmath_ru'=>$row[442],
            'drc_gr1_pcmath_ur'=>$row[443],
            'drc_gr1_pcmath_go'=>$row[444],
            'drc_gr1_pcmath_ga'=>$row[445],
            'drc_gr1_pcmath_priv'=>$row[446],
            'drc_gr1_pcmath_cg'=>$row[447],
            'drc_gr1_pcmath_sc'=>$row[448],
            'drc_gr1_pcmath_st'=>$row[449],
            'drc_gr1_pcmath_obc'=>$row[450],
            'drc_gr1_pcmath_gen'=>$row[451],
            'drc_gr1_pcsc_tot'=>$row[452],
            'drc_gr1_pcsc_boys'=>$row[453],
            'drc_gr1_pcsc_girls'=>$row[454],
            'drc_gr1_pcsc_ru'=>$row[455],
            'drc_gr1_pcsc_ur'=>$row[456],
            'drc_gr1_pcsc_go'=>$row[457],
            'drc_gr1_pcsc_ga'=>$row[458],
            'drc_gr1_pcsc_priv'=>$row[459],
            'drc_gr1_pcsc_cg'=>$row[460],
            'drc_gr1_pcsc_sc'=>$row[461],
            'drc_gr1_pcsc_st'=>$row[462],
            'drc_gr1_pcsc_obc'=>$row[463],
            'drc_gr1_pcsc_gen'=>$row[464],
            'drc_gr1_pcsst_tot'=>$row[465],
            'drc_gr1_pcsst_boys'=>$row[466],
            'drc_gr1_pcsst_girls'=>$row[467],
            'drc_gr1_pcsst_ru'=>$row[468],
            'drc_gr1_pcsst_ur'=>$row[469],
            'drc_gr1_pcsst_go'=>$row[470],
            'drc_gr1_pcsst_ga'=>$row[471],
            'drc_gr1_pcsst_priv'=>$row[472],
            'drc_gr1_pcsst_cg'=>$row[473],
            'drc_gr1_pcsst_sc'=>$row[474],
            'drc_gr1_pcsst_st'=>$row[475],
            'drc_gr1_pcsst_obc'=>$row[476],
            'drc_gr1_pcsst_gen'=>$row[477],
            'drc_gr1_pceng_tot'=>$row[478],
            'drc_gr1_pceng_boys'=>$row[479],
            'drc_gr1_pceng_girls'=>$row[480],
            'drc_gr1_pceng_ru'=>$row[481],
            'drc_gr1_pceng_ur'=>$row[482],
            'drc_gr1_pceng_go'=>$row[483],
            'drc_gr1_pceng_ga'=>$row[484],
            'drc_gr1_pceng_priv'=>$row[485],
            'drc_gr1_pceng_cg'=>$row[486],
            'drc_gr1_pceng_sc'=>$row[487],
            'drc_gr1_pceng_st'=>$row[488],
            'drc_gr1_pceng_obc'=>$row[489],
            'drc_gr1_pceng_gen'=>$row[490],
            'drc_gr1_permil_bba'=>$row[491],
            'drc_gr1_permil_bas'=>$row[492],
            'drc_gr1_permil_pro'=>$row[493],
            'drc_gr1_permil_adv'=>$row[494],
            'drc_gr1_permath_bba'=>$row[495],
            'drc_gr1_permath_bas'=>$row[496],
            'drc_gr1_permath_pro'=>$row[497],
            'drc_gr1_permath_adv'=>$row[498],
            'drc_gr1_persc_bba'=>$row[499],
            'drc_gr1_persc_bas'=>$row[500],
            'drc_gr1_persc_pro'=>$row[501],
            'drc_gr1_persc_adv'=>$row[502],
            'drc_gr1_persst_bba'=>$row[503],
            'drc_gr1_persst_bas'=>$row[504],
            'drc_gr1_persst_pro'=>$row[505],
            'drc_gr1_persst_adv'=>$row[506],
            'drc_gr1_pereng_bba'=>$row[507],
            'drc_gr1_pereng_bas'=>$row[508],
            'drc_gr1_pereng_pro'=>$row[509],
            'drc_gr1_pereng_adv'=>$row[510],
            'drc_gr1_mil_li_1011'=>$row[511],
            'drc_gr1_maths_m1001'=>$row[512],
            'drc_gr1_maths_m1002'=>$row[513],
            'drc_gr1_maths_m1003'=>$row[514],
            'drc_gr1_maths_m1004'=>$row[515],
            'drc_gr1_maths_m1005'=>$row[516],
            'drc_gr1_maths_m1006'=>$row[517],
            'drc_gr1_maths_m1007'=>$row[518],
            'drc_gr1_maths_m1008'=>$row[519],
            'drc_gr1_maths_m1009'=>$row[520],
            'drc_gr1_maths_m1011'=>$row[521],
            'drc_gr1_maths_m1012'=>$row[522],
            'drc_gr1_sc_sci1001'=>$row[523],
            'drc_gr1_sc_sci1002'=>$row[524],
            'drc_gr1_sc_sci1003'=>$row[525],
            'drc_gr1_sc_sci1004'=>$row[526],
            'drc_gr1_sc_sci1005'=>$row[527],
            'drc_gr1_sc_sci1006'=>$row[528],
            'drc_gr1_sc_sci1007'=>$row[529],
            'drc_gr1_sc_sci1008'=>$row[530],
            'drc_gr1_sc_sci1009'=>$row[531],
            'drc_gr1_sc_sci1010'=>$row[532],
            'drc_gr1_sst_sst1001'=>$row[533],
            'drc_gr1_sst_sst1002'=>$row[534],
            'drc_gr1_sst_sst1003'=>$row[535],
            'drc_gr1_sst_sst1004'=>$row[536],
            'drc_gr1_sst_sst1005'=>$row[537],
            'drc_gr1_sst_sst1006'=>$row[538],
            'drc_gr1_sst_sst1007'=>$row[539],
            'drc_gr1_sst_sst1008'=>$row[540],
            'drc_gr1_sst_sst1009'=>$row[541],
            'drc_gr1_sst_sst1010'=>$row[542],
            'drc_gr1_sst_sst1011'=>$row[543],
            'drc_gr1_sst_sst1012'=>$row[544],
            'drc_gr1_eng_lii1007'=>$row[545],
            'drc_gr1_chi_lik'=>$row[546],
            'drc_gr1_chi_hlang'=>$row[547],
            'drc_gr1_chi_teach'=>$row[548],
            'drc_gr1_chi_play'=>$row[549],
            'drc_gr1_chi_dig'=>$row[550],
            'drc_gr1_chi_lab'=>$row[551],
            'drc_gr1_chi_inter'=>$row[552],
            'drc_gr1_chi_par'=>$row[553],
            'drc_gr1_trs_inst'=>$row[554],
            'drc_gr1_trs_wosp'=>$row[555],
            'drc_gr1_trs_over'=>$row[556],
            'drc_gr1_trs_rep'=>$row[557],
            'drc_gr1_trs_dwt'=>$row[558],
            'drc_gr1_trs_toi'=>$row[559],
            'drc_gr1_trs_pdev'=>$row[560],
            'drc_gr1_trs_pint'=>$row[561],
            'drc_gr1_sch_qsta'=>$row[562],
            'drc_gr1_sch_sups'=>$row[563],
            'drc_gr1_sch_avr'=>$row[564],
            'drc_gr1_sch_lib'=>$row[565],
            'drc_gr1_sch_spo'=>$row[566],
            'drc_gr1_sch_libf'=>$row[567]
        ]);
    }

}
