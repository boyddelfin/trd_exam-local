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
            ['skills' => 'js'],
            ['skills' => 'php'],
            ['skills' => 'html'],
            ['skills' => 'css']
        ]);
    }
}
