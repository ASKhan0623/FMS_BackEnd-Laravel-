<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_sale_add', function (Blueprint $table) {
            $table->id();
            $table->string('customer');
            $table->string('company');
            $table->string('biller');
            $table->integer('otax');
            $table->string('odiscount');
            $table->integer('discount');
            $table->string('sstatus');
            $table->string('pstatus');
            $table->string('salenote');
            $table->string('staffnote');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_sale_add');
    }
};
