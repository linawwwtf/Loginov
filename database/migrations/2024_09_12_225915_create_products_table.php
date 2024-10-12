<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreateProductsTable extends Migration
=======
class CreateProductTable extends Migration
>>>>>>> 0a2e759ca8698ffe29fa595633d4fc4631eb6230
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
<<<<<<< HEAD
            $table->string('cost');
            $table->string('amount');
=======
            $table->decimal('cost', 8, 2);
            $table->decimal('amount');
>>>>>>> 0a2e759ca8698ffe29fa595633d4fc4631eb6230
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
