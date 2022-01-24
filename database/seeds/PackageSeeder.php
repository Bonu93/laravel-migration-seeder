<?php

use Illuminate\Database\Seeder;
use App\Package;
use Faker\Generator as Faker;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newPackage = new Package();

            $newPackage->name = $faker->words(3, true);
            $newPackage->city = $faker->word();
            $newPackage->image = $faker->imageUrl(640, 480, true);
            $newPackage->description = $faker->paragraph(2, true);
            $newPackage->days = rand(2, 30);
            $newPackage->price = rand(100, 999);

            $newPackage->save();
        }
    }
}
