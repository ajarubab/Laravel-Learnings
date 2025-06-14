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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();   // have variable length
            $table->unsignedBigInteger('phone');    // need validation at controller ('phone' => ['required', 'digits:10', 'numeric'])
            $table->enum('gender', ['M', 'F', 'O']);
            $table->date('birth_date')->nullable();
            $table->decimal('wallet_balance', 8, 2)->default(0.00);
            $table->integer('total_visits');
            $table->float('customer_rating', 3, 2)->nullable()->check('rating >= 1 AND rating <= 5');
            $table->boolean('is_prime_customer')->default(false);
            $table->char('prime_customer_code', 3)->nullable();    // have fixed 3 char length
            $table->string('email')->unique()->nullable();
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
