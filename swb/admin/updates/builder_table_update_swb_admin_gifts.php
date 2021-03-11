<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSwbAdminGifts extends Migration
{
    public function up()
    {
        Schema::table('swb_admin_gifts', function($table)
        {
            $table->dropColumn('url');
        });
    }
    
    public function down()
    {
        Schema::table('swb_admin_gifts', function($table)
        {
            $table->string('url', 200);
        });
    }
}
