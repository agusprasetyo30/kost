<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fas_umum extends Model
{
    protected $table = 'fas_umum';
    protected $primaryKey = 'id_fas_umum';
    protected $fillable = ['fasilitas'];
}
