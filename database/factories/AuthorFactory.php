<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Author;
class AuthorFactory extends Factory
{
    protected $model=Author::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone_no'=>$this->faker->phoneNumber,
            'biography'=>$this->faker->text,
            'profile_image'=>$this->faker->name,
            'education_level'=>$this->faker->name,
            'married_status'=>$this->faker->name,
            
        ];
    }
}
