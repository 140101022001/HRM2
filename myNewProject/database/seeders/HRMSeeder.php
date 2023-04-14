<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HRM;

class HRMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $hrm = [[
            'name' => 'Nguyen Van Hung',
            'name_kana' => 'グエン　ヴァン　フン',
            'sex' => '0',
            'birthday' => '2023-03-28',
            'age' => '23',
            'country' => 'ベトナム',
            'first_interv_date' => '2023-04-05',
            'first_interv_staff' => '成田',
            'first_interv_result' => '0',
            'sec_interv_date' => '2023-04-05',
            'sec_interv_staff' => '成田',
            'sec_interv_result' => '0',
            'hire_date' => '2023-04-05',
            'intern_department' => 'SE',
            'intern_result' => '0',
            'phone' => '08043900311',
            'email' => 'hung@gmail.com',
            'skill_jlpt' => '2',
            'skill_hearing' => '2',
            'skill_speaking' => '2',
            'skill_reading' => '2',
            'skill_se' => 'Java, HTML, CSS, Swift, C++',
            'graduate_4' => '0',
            'graduate_2' => '1',
            'graduate_school' => '専門学校',
            'apply_department' => 'SE',
            'working_place' => '大阪',
            'current_status' => '卒業済み',
            'note' => 'SEになりたいです。',
        ]];
        HRM::insert($hrm);
    }
}
