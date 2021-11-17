<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicidadModel extends Model
{
    use HasFactory;
    protected $table='publicidad';
    protected $primaryKey='id';
    protected $fillable=['titulo','anuncio','celular','autor','fecha','fechalmit','estado'];
}
