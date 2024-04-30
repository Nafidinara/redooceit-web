<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;
use Eloquent;


class Warga extends Model
{
    use HasFactory, UUID;
    protected $table = 'wargas';
    protected $fillable = ['nama', 'alamat', 'no_hp'];

    protected $casts = [
        'warga_id' => 'string'
    ];


}
