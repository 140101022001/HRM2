<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HRM extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'hrms';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'name_kana',
        'sex',
        'birthday',
        'age',
        'country',
        'first_interv_date',
        'first_interv_staff',
        'first_interv_result',
        'sec_interv_date',
        'sec_interv_staff',
        'sec_interv_result',
        'hire_date',
        'intern_department',
        'intern_result',
        'phone',
        'email',
        'skill_jlpt',
        'skill_hearing',
        'skill_speaking',
        'skill_reading',
        'skill_se',
        'graduate_4',
        'graduate_2',
        'graduate_school',
        'apply_department',
        'working_place',
        'current_status',
        'note'
    ];
}
