<?php

use App\Models\Activities;
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
        Schema::create('install_queries_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(InstallQueries::class);
            $table->foreignIdFor(Activities::class);
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
        Schema::dropIfExists('install_queries_activities');
    }
};
