<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSwbAdminPartners extends Migration
{
    public function up()
    {
        Schema::table('swb_admin_partners', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('desc');
        });
    }
    
    public function down()
    {
        Schema::table('swb_admin_partners', function($table)
        {
            $table->string('title', 100);
            $table->string('desc', 200);
        });
    }
}
