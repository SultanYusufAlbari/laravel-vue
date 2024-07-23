<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'), // Default password for testing
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'headline' => $this->faker->sentence,
            'about_me' => $this->faker->paragraph,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'postal_code' => $this->faker->postcode,
            'phone_number' => $this->faker->phoneNumber,
            'profile_pic' => 'default.jpg',
            'confirmation_code' => Str::random(40),
            'timezone' => $this->faker->timezone,
            'active' => true,
            'confirmed' => true, // Assume confirmed for testing
            'status' => true,
            'password_changed_at' => null,
            'deleted_at' => null,
            'last_login_at' => now(),
            'mobile_notification' => true,
            'email_notification' => true,
            'email_verified_at' => now(),
            'last_login_ip' => $this->faker->ipv4,
        ];
    }
}
