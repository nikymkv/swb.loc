<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSwbAdminWinners extends Migration
{
    public function up()
    {
        Schema::table('swb_admin_winners', function($table)
        {
            $table->string('url_winner', 200);
        });
    }
    
    public function down()
    {
        Schema::table('swb_admin_winners', function($table)
        {
            $table->dropColumn('url_winner');
        });
    }
}
