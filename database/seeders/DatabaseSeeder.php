<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\Builder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Recipe::create([
           'name'=>'Pesto makaronai',
           'preparation_time'=>'00:20:00',
           'url'=>'',
           'total_price'=>5,
           'vegetarian'=>'Yes'
       ]);

        Recipe::create([
            'name'=>'Chili sriuba',
            'preparation_time'=>'01:00:00',
            'url'=>'',
            'total_price'=>6,
            'vegetarian'=>'Yes'
        ]);

        Recipe::create([
            'name'=>'Butter chicken',
            'preparation_time'=>'01:00:00',
            'url'=>'',
            'total_price'=>8,
            'vegetarian'=>'No'
        ]);

        Recipe::create([
            'name'=>'Butter chicken',
            'preparation_time'=>'01:00:00',
            'url'=>'',
            'total_price'=>8,
            'vegetarian'=>'No'
        ]);

        Recipe::create([
            'name'=>'Butter chicken',
            'preparation_time'=>'01:00:00',
            'url'=>'',
            'total_price'=>8,
            'vegetarian'=>'No'
        ]);

        Recipe::create([
            'name'=>'Butter chicken',
            'preparation_time'=>'01:00:00',
            'url'=>'',
            'total_price'=>8,
            'vegetarian'=>'No'
        ]);

        Recipe::create([
            'name'=>'Butter chicken',
            'preparation_time'=>'01:00:00',
            'url'=>'',
            'total_price'=>8,
            'vegetarian'=>'No'
        ]);
    }
}
