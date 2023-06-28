<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
    protected $table = 'Prestamo';
    protected $fillable = ['fecha_prestamo'];
    protected $hidden = ['created_at', 'updated_at'];
    
}
