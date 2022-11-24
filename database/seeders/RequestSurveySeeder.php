<?php

namespace Database\Seeders;

use App\Models\RequestSurvey;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequestSurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RequestSurvey::factory()->count(3)->create();
    }
}