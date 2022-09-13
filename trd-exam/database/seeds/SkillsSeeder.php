<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            ['skill' => 'js', 'user_id' => 0],
            ['skill' => 'php', 'user_id' => 0],
            ['skill' => 'html', 'user_id' => 0],
            ['skill' => 'css', 'user_id' => 0]
        ]);
    }
}
