<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;


class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->company();

        return [
            'company_name' => $name,
            'email' => $this->faker->unique()->safeEmail(),
            'website' => $this->faker->url(),
            'logo' => $this->faker->image('storage/app/public/images',100,100, null, false),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
