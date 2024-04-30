<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Sampah extends Model
{
    use HasFactory, UUID;
    protected $table = 'sampahs';

    protected $fillable = ['tps_id', 'keterangan', 'volume', 'jenis'];

    protected $casts = [
        'id' => 'string'
    ];
}
