<?php
/**
 * Migration genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Dwij\Laraadmin\Models\Module;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Faqs", 'faqs', 'questions', 'fa-cube', [
            ["questions", "Questions", "Textarea", false, "", 0, 1000, false],
            ["answers", "Answers", "Textarea", false, "", 0, 1000, false],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('faqs')) {
            Schema::drop('faqs');
        }
    }
}
