<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    
    protected $table = 'lokasi';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = true;
    public $incrementing = true;

    protected $guarded = ['id'];

    public function inventaris()
    {
        return $this->hasMany(Aset::class, 'lokasi_id');
    }
}
