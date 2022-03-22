<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;

class BookFactory extends Factory
{
    protected $model = Book::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'author' => $this->faker->name,
            'description' => $this->faker->text,
            'category' =>$this->faker->realText(rand(10,20)),
            'publisher'=>$this->faker->name,
            'publishing_time'=>rand(0,10),
            'cover_image'=>$this->faker->name,
            'price'=>rand(5000,10000),
            'qty'=>rand(0,10),
            'published_date'=>$this->faker->dateTimeThisCentury($max = 'now', $timezone = null),
            'promotion_discount'=>rand(0,100),
            
        ];
    }
}
