<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [ 'manufacturer_id', 'reference_number', 'name', 'description', 'image', 'installation_price', 'service_charge', 'status' ];
}
