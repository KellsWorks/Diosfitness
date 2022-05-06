<?php

use App\Models\Customers;
use App\Models\InstallQueries;
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
        Schema::create('customers_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customers::class);
            $table->foreignIdFor(InstallQueries::class);
            $table->integer('star')->default(0);
            $table->string('review_text');
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
        Schema::dropIfExists('customers_reviews');
    }
};
