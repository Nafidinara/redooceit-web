<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\UUID;

class ItemPenukaran extends Model
{
    use HasFactory, UUID;

    protected $table = 'item_penukarans';

    protected $fillable = [
        'id',
        'nama',
        'harga',
        'stamp',
        'satuan'
    ];

    protected $casts = [
        'id' => 'string',
    ];  
}
