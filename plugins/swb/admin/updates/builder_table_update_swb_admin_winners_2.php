<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSwbAdminWinners2 extends Migration
{
    public function up()
    {
        Schema::table('swb_admin_winners', function($table)
        {
            $table->boolean('block_winners');
        });
    }
    
    public function down()
    {
        Schema::table('swb_admin_winners', function($table)
        {
            $table->dropColumn('block_winners');
        });
    }
}
