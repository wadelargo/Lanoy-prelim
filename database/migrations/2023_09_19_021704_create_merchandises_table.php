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
        Schema::create('merchandises', function (Blueprint $table) {
            $table->id();
            $table->string("brand_name");
            $table->string("product_name"); 
            $table->decimal("retail_price", 10,2);    
            $table->decimal("wholesale_price", 10,2);
            $table->decimal("wholesale_qty", 10,2);
            $table->integer("qty_stock");
            $table->foreignId("category_id")->constrained(); 
            $table->foreignId("unit_id")->constrained();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchandises');
    }
};
