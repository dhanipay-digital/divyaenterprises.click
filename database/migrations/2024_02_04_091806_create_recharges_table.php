<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recharges', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('operator_id');
            $table->string('customer_number');
            $table->double('amount',11,2)->default(0);
            $table->string('transaction_id');
            $table->enum('debit_from',['WALLET','UPI',''])->default('');
            $table->char('mode',15);
            $table->char('api_status',15)->nullable();
            $table->char('recharge_status',15)->default('PROCESSING');
            $table->enum('admin_approve',['YES','NO',''])->default('');
            $table->text('api_request')->nullable();
            $table->text('api_response')->nullable();
            $table->text('other')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recharges');
    }
};
