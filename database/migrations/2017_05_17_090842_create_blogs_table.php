<?php
/**
 * Migration genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Dwij\Laraadmin\Models\Module;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Blogs", 'blogs', 'blog', 'fa-cube', [
            ["blog_title", "Blog Title", "Textarea", false, "", 0, 1000, false],
            ["blog", "Blog", "Textarea", false, "", 0, 1000, false],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('blogs')) {
            Schema::drop('blogs');
        }
    }
}
