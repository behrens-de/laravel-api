<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Erlaubt dem Model die Felder zu befüllen
    protected $fillable = ['name','slug','description','price'];
}
