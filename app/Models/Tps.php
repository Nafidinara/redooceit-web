<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;
use Eloquent;

/**
 * App\Models\Tps
 *
 * @method static Builder|Tps newModelQuery()
 * @method static Builder|Tps newQuery()
 * @method static Builder|Tps query()
 * @mixin Eloquent
 */
class Tps extends Model
{
    use HasFactory, UUID;
    protected $table = 'tps';

    protected $fillable = ['name', 'address', 'type', 'latitude', 'longitude'];
    protected $casts = [
        'id' => 'string'
    ];
}
