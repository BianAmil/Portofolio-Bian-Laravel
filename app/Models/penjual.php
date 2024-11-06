<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class penjual extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'jenis',
        'barang_id'
    ];
    public function barang(): BelongsTo
    {
        return $this->belongsTo(barang::class);
    }
}
