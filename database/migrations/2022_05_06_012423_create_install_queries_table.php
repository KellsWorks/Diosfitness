<?php

use App\Models\Customers;
use App\Models\Manufacturers;
use App\Models\Products;
use App\Models\ShopOwners;
use App\Models\Technicians;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('install_queries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Products::class);
            $table->foreignIdFor(Customers::class);
            $table->foreignIdFor(ShopOwners::class);
            $table->foreignIdFor(Manufacturers::class);
            $table->foreignIdFor(Technicians::class)->default(0);
            $table->integer('total_price');
            $table->string('payment_method');
            $table->integer('payment_status')->default(0);
            $table->integer('pg_order_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('install_queries');
    }
};
