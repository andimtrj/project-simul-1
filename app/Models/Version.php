<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_id',
        'ver_id',
        'description',
        'file'
    ];
    protected $table = 'version';
}
