<?php


namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         //$imageurl=$this->faker->imageUrl(640, 480, 'animals', true)
        // fetch this image and store it locally
        // get the local path to the stored i;ma

        return [
            'title' => $this->faker->sentence(),
            'image_path'=> 'https://placeimg.com/100/100/any?'>image(storage_path('images'), 50, 50),


            'description' => $this->faker->text(),
            'user_id' => 1,
        ];
    }
}
