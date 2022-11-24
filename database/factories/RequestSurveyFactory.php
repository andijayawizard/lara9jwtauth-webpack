<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RequestSurvey>
 */
class RequestSurveyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $customer = Customer::all();
        return [
            'name' => $this->faker->sentence(4),
            'note' => $this->faker->sentence(10),
            'date' => $this->faker->date(),
            'customer_id' => $this->faker->randomElement($customer)
        ];
    }
}