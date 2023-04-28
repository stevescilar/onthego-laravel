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
        Schema::table('customers', function (Blueprint $table) {
            $table->tinyText('name');
            $table->tinyText('company_name');
            $table->tinyText('contact');
            $table->tinyText('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
        Schema::dropColumns('customers',[
            'name', 'company_name', 'contact', 'email'
        ]);
    }
};
