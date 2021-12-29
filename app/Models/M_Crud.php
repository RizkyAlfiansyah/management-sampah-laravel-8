<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class M_Crud extends Model
{
    use SoftDeletes;
    protected $table = 'product';
    protected $fillbale = [
        'name',
        'type'
    ];

    protected $hidden;
}
