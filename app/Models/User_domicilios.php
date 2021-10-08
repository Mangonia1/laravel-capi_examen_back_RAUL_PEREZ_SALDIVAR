<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_domicilios extends Model
{
    use HasFactory;

    public $fillable = [
        'domicilio',
        'numero_exterior',
        'colonia',
        'cp',
        'ciudad',
    ];

    public function user()
{
    return $this->belongsTo("App\User"); 
}
}
