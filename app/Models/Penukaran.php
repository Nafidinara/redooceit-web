<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Penukaran extends Model
{
    use HasFactory, UUID;

    protected $table = 'penukarans';

    protected $fillable = [
        'warga_id',
        'item_penukaran_id',
        'stamp'
    ];

    protected $casts = [
        'id' => 'string'
    ];
}
