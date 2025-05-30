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
    Schema::create('payments', function (Blueprint $table) {
        $table->id();
        $table->string('payer_name');
        $table->unsignedBigInteger('book_id');
        $table->decimal('amount_paid', 10,2);
        $table->timestamp('paid_at')->nullable();
        $table->timestamps();

        $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
