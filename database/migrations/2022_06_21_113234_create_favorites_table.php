<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); //カラム追加
            $table->foreign('user_id') //外部キー制約
                ->references('id')->on('users') //ｕｓｅｒｓテーブルのidを参照する
                ->onDelete('cascade');  //ユーザーが削除されたら紐付くpostsも削除
            $table->string('title', 100);
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
