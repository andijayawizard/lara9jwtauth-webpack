<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteSurvey>
 */
class SiteSurveyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $customer = Customer::all();
        $user = User::all();
        $tools = ['helm', 'palu', 'obeng'];
        $access = ['jalan berpasir', 'jalan berkerikil', 'jalan basah'];
        $duration = ['1 hari', '2 hari', '3 hari'];
        return [
            'name' => $this->faker->sentence(6),
            'tools' => $this->faker->randomElement($tools),
            'access' => $this->faker->randomElement($access),
            'duration' => $this->faker->randomElement($duration),
            'perbaikan' => $this->faker->sentence(4),
            'description' => $this->faker->sentence(4),
            'saran' => $this->faker->sentence(4),
            'date' => $this->faker->date(),
            'budget' => $this->faker->randomNumber(),
            'customer_id' => $this->faker->randomElement($customer),
            'user_id' => $this->faker->randomElement($user)
        ];
    }
}