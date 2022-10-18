<?php

namespace Spatie\QueryBuilder\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\QueryBuilder\Tests\TestClasses\Models\RelatedSoftDeleteModel;

class RelatedSoftDeleteModelFactory extends Factory
{
    protected $model = RelatedSoftDeleteModel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
