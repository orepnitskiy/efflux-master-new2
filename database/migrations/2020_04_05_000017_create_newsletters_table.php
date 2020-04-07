<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewslettersTable extends Migration{
    public function up(){
        Schema::create('efflux.newsletters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
			$table->string('email')->unique();
			$table->rememberToken();
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('efflux.newsletters');
    }
}
