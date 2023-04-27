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
        Schema::table('products', function (Blueprint $table) {
            $table->tinyText('item');
            $table->tinyText('desc');

            $table->unsignedTinyInteger('quantity');
            $table->unsignedInteger('unitPrice');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropColumns('products',[
            'item', 'desc', 'quantity', 'unitPrice'
        ]);
    }
};
