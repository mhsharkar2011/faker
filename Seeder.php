<?php

namespace Database\Seeders;

use App\Models\ModelName;
use Illuminate\Database\Seeder;

class ModelNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
            ModelName::factory(10)->create();
    }

}
