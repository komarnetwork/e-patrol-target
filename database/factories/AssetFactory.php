<?php

namespace Database\Factories;

use App\Models\Asset;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssetFactory extends Factory
{
   /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
   protected $model = Asset::class;

   /**
    * Define the model's default state.
    *
    * @return array
    */
   public function definition()
   {
      return [
         'nama_asset' => $this->faker->sentence(mt_rand(1, 1)),
         'lokasi_point' => $this->faker->sentence(mt_rand(2, 3)),
         'deskripsi' => $this->faker->sentence(mt_rand(3, 4)),
         'jenis_asset' => $this->faker->sentence(mt_rand(1, 1))
      ];
   }
}
