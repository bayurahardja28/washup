<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('vouchers', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->decimal('discount_percent', 5, 2)->default(0.00);
        $table->integer('points_required');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::dropIfExists('vouchers');
}
};
