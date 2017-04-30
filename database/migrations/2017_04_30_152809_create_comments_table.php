<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateCommentsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('comments',function(Blueprint $table){
            $table->increments("id");
            $table->string("id");
            $table->integer("user_id")->references("id")->on("user")->nullable();
            $table->integer("products_id")->references("id")->on("products")->nullable();
            $table->enum("showhide", ["show", "hide", ])->nullable();
            $table->text("content")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }

}