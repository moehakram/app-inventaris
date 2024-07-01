<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsetNonaktif extends Model
{
    use HasFactory;
    protected $table = 'inventaris';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = true;
    public $incrementing = true;
    

    protected  $guarded = [
        'id'
    ];
}
