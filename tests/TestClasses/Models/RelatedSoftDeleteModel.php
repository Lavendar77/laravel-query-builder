<?php

namespace Spatie\QueryBuilder\Tests\TestClasses\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class RelatedSoftDeleteModel extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function testModel(): BelongsTo
    {
        return $this->belongsTo(TestModel::class);
    }
}
