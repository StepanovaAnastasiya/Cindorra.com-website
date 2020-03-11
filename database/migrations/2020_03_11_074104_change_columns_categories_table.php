<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('categories', function (Blueprint $table)
      {
    $table->renameColumn('title', 'cat_title');
    $table->renameColumn('slug', 'cat_slug');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('categories', function (Blueprint $table)
      {
    $table->renameColumn('cat_title', 'title');
    $table->renameColumn('cat_slug', 'slug');
      });
    }
}
