<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso_table;
use Faker\Factory as Faker;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 100; $i++) { 
             $o=new Curso_table();
           $o->name=$faker->name();
        $o->description=$faker->text(150);
        $o->photo=$faker->imageUrl(640, 480, 'animals', true);
        $o->save();
        }
    }
}
