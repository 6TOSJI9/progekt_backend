<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            $table->integer('position')->unsigned()->nullable();
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();

            // this will create the required columns to support nesting for this module
            $table->nestedSet();
        });

        Schema::create('service_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'service');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('service_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'service');
        });

        Schema::create('service_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'service');
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_revisions');
        Schema::dropIfExists('service_translations');
        Schema::dropIfExists('service_slugs');
        Schema::dropIfExists('services');
    }
};
