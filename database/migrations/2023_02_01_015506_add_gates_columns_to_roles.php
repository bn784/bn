<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGatesColumnsToRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles', function (Blueprint $table) {
            $table->integer('management_access')->nullable()->default(0);
            $table->integer('user_access')->nullable()->default(0);
            $table->integer('user_create')->nullable()->default(0);
            $table->integer('user_edit')->nullable()->default(0);
            $table->integer('user_view')->nullable()->default(0);
            $table->integer('user_delete')->nullable()->default(0);
            $table->integer('role_access')->nullable()->default(0);
            $table->integer('role_create')->nullable()->default(0);
            $table->integer('role_edit')->nullable()->default(0);
            $table->integer('role_view')->nullable()->default(0);
            $table->integer('role_delete')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles', function (Blueprint $table) {
            $table->dropColumn(['management_access', 'user_access', 'user_create', 'user_edit', 'user_view', 'user_delete', 'role_access'
            , 'role_create', 'role_edit', 'role_view', 'role_delete']); 
        });
    }
}
