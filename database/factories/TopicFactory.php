<?php

namespace Harishdurga\LaravelQuiz\Database\Factories;

use Illuminate\Support\Str;
use Harishdurga\LaravelQuiz\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    protected $model = Topic::class;

    public function definition()
    {
        $topic = $this->faker->words(4, true);
        return [
            'topic' => $topic,
            'slug' => Str::slug($topic, '-'),
            'parent_id' => null,
            'is_active' => $this->faker->numberBetween(0, 1)
        ];
    }
}
