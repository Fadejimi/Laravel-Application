<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 3/10/2016
 * Time: 6:40 PM
 */

class PaintingsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        Paintings::truncate();

        for ($i = 0; $i < 50; $i++) {
            $paintings = Paintings::create(array(
                'title' => $faker->realText(rand(20,40)),
                'artist' => $faker->name,
                'year' => $faker->year
            ));
            $paintings->save();
        }
    }
}