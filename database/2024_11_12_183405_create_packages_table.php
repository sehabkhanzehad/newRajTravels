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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->enum('locale', ['en', 'bn'])->default('bn');
            $table->string('package_name');
            $table->string('package_type');
            $table->string('package_price');
            $table->string('currency', 3)->default('BDT'); // Currency for price
            $table->string('package_discount')->nullable();
            $table->enum('discount_type', ['percentage', 'fixed', 'none'])->default('none'); // Discount type
            $table->string('year')->nullable();
            $table->string('package_duration')->nullable();
            $table->longText('package_short_description')->nullable();
            $table->longText('package_description')->nullable();
            $table->string('package_image')->nullable();
            $table->json('features')->nullable(); // Additional package features
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->enum('package_status', ['active', 'inactive'])->default('active');
            $table->enum('visibility', ['public', 'private'])->default('public'); // Visibility status
            $table->enum('billing_type', ['installment', 'one-time'])->default('installment'); // Billing type
            $table->string('slug')->unique(); // SEO-friendly slug
            $table->softDeletes(); // Soft delete feature
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
