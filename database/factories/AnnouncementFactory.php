<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Generate an announcement with random name, date, and valid markdown body including a link
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \DavidBadura\FakerMarkdownGenerator\FakerProvider($faker));
        $search = $faker->word();

        return [
            'author_id' => Author::all()->random()->id,
            'date' => $faker->dateTimeThisYear(),
            'body' => $faker->markdown() . PHP_EOL . PHP_EOL . '[Find ' . $search . '](https://www.google.com/search?q=' . $search . ')',
        ];
    }
}
