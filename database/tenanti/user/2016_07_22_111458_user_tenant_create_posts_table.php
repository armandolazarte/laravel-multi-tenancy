<?php

use Orchestra\Tenanti\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class UserTenantCreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @param  string|int  $id
     * @param  \Illuminate\Database\Eloquent\Model  $model
     *
     * @return void
     */
    public function up($id, Model $model)
    {
        Schema::table("user_{$id}_posts", function (Blueprint $table) {
            $table->increments('id');
            $table->string('post_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @param  string|int  $id
     * @param  \Illuminate\Database\Eloquent\Model  $model
     *
     * @return void
     */
    public function down($id, Model $model)
    {
        Schema::table("user_{$id}_posts", function (Blueprint $table) {

        });
    }
}
