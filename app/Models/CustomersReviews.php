<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersReviews extends Model
{
    use HasFactory;

    protected $fillable = [ 'star', 'customers_id', 'install_queries_id','review_text' ];
}
