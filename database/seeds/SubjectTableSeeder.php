<?php

use Illuminate\Database\Seeder;
use SON\Models\Subject;
use Faker\Factory as Faker;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Subject::class, 10)->create();
    }
}
