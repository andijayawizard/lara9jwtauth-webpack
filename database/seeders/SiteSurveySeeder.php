<?php

namespace Database\Seeders;

use App\Models\SiteSurvey;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteSurvey::factory()->count(3)->create();
    }
}