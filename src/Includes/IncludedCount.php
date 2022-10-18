<?php

namespace Spatie\QueryBuilder\Includes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class IncludedCount implements IncludeInterface
{
    /** @var bool */
    public bool $withTrashed;

    public function __construct(bool $withTrashed = false)
    {
        $this->withTrashed = $withTrashed;
    }

    public function __invoke(Builder $query, string $count)
    {
        $query->withCount([
            Str::before($count, config('query-builder.count_suffix')) => fn ($query) => $query->when(
                $this->withTrashed,
                fn ($query) => $query->withTrashed(),
            )
        ]);
    }
}
