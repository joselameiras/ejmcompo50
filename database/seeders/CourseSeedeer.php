<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ejmcompo50_tables;
use Faker\Factory as Faker;

class CourseSeedeer extends Seeder
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
             $o=new Ejmcompo50_tables();
           $o->name=$faker->name();
        $o->description=$faker->paragraph();
        $o->photo=$faker->imageUrl(640, 480, 'animals', true);
        $o->save();
        }
        
    }
}


