<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ModelName_Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ModelName::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $owners = User::where('role','Owner')->get();
        $var = ModelName::all();
        static $sl_no = "s";
        static $model = "m";
        static $license_no = "dha-";
                return [
                    'owner_id' => $this->faker->randomElement($owners->pluck('id')),
                    'var_type_id' => $this->faker->randomElement($var->pluck('id')),
                    'sl_no' => $sl_no."-".rand(6,10000),
                    // 'name' => $this->faker->name,
                    'name' => $this->faker->unique()->randomElement([
                        "Toyota Corolla",
                        "Honda Civic",
                        "Toyota Camry",
                        "Honda CR-V",
                        "Toyota RAV4",
                        "Nissan Rogue",
                        "Ford F-150",
                        "Chevrolet Silverado",
                        "Ram 1500",
                        "Hyundai Sonata"
                    ]),
                    'model' => $model."-".Str::random(4),
                    'tank_capacity' => '200',
                    'license_no' => $license_no.rand(8,100000000)
                ];
    }
}
