<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PQs extends Model
{
    use HasFactory;
    protected $table = 'p_qs';
    protected $fillable = ['pq_scan', 'pq_bar', 'pq_udise','state_id','district_id', 'pq_grade', 'pq_nasid', 'pq_section', 'pq_age', 'pq_min', 'pq_miny', 'pq_gender', 'pq_bpl', 'pq_cwsn', 'pq_q01', 'pq_q02', 'pq_q03', 'pq_q04', 'pq_q05', 'pq_q06', 'pq_q07', 'pq_q08', 'pq_q09', 'pq_q10', 'pq_q11', 'pq_q12', 'pq_q13', 'pq_q14', 'pq_q15', 'pq_q16', 'pq_q17', 'pq_q18', 'pq_q19', 'pq_q20', 'pq_q21', 'pq_q22', 'pq_q23', 'pq_q24a', 'pq_q24b', 'pq_q24c', 'pq_q24d', 'pq_q24e', 'pq_q24f', 'pq_q24g', 'pq_q24h', 'pq_q24i', 'pq_q25a', 'pq_q25b', 'pq_q25c', 'pq_q25d', 'pq_q25e', 'pq_q25f', 'pq_q25g', 'pq_q25h', 'pq_q25i', 'pq_q25j', 'pq_q26a', 'pq_q26b', 'pq_q26c', 'pq_q26d', 'pq_q26e', 'pq_q26f', 'pq_q26g', 'pq_q27a', 'pq_q27b', 'pq_q27c', 'pq_q27d', 'pq_q27e', 'pq_q27f', 'pq_q27g', 'pq_q28a', 'pq_q28b', 'pq_q28c', 'pq_q28d', 'pq_q28e', 'pq_q28f', 'pq_q28g', 'pq_q28h', 'pq_q29a', 'pq_q29b', 'pq_q29c', 'pq_q29d', 'pq_q29e', 'pq_q29f', 'pq_q29g', 'pq_q30', 'pq_q31', 'pq_q32', 'pq_q33', 'pq_q34', 'pq_q35', 'pq_q36', 'pq_q37', 'pq_q38', 'pq_q39', 'pq_q40','right_count','percentage'];
}
