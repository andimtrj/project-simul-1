<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'version',
        'file'
    ];
    protected $table = 'document';
    protected $primaryKey = 'file_id';
}
