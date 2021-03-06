<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSwbAdminCondition extends Migration
{
    public function up()
    {
        Schema::table('swb_admin_condition', function($table)
        {
            $table->string('title_document', 200);
        });
    }
    
    public function down()
    {
        Schema::table('swb_admin_condition', function($table)
        {
            $table->dropColumn('title_document');
        });
    }
}
