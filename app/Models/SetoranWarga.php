<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;
use Eloquent;

class SetoranWarga extends Model
{

    use HasFactory, UUID;
    protected $table = 'setoran_wargas';

    protected $fillable = ['warga_id', 'berat', 'stamp'];

    protected $casts = [
        'warga_id' => 'string',
    ];

}
