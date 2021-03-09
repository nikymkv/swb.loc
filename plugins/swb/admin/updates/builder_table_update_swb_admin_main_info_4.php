<?php namespace Swb\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSwbAdminMainInfo4 extends Migration
{
    public function up()
    {
        Schema::table('swb_admin_main_info', function($table)
        {
            $table->string('title_btn', 100);
            $table->string('main_title_interest', 200);
            $table->string('form_name', 100);
            $table->string('form_email', 100);
            $table->string('form_phone', 100);
            $table->string('form_participant', 100);
            $table->string('form_partner', 100);
        });
    }
    
    public function down()
    {
        Schema::table('swb_admin_main_info', function($table)
        {
            $table->dropColumn('title_btn');
            $table->dropColumn('main_title_interest');
            $table->dropColumn('form_name');
            $table->dropColumn('form_email');
            $table->dropColumn('form_phone');
            $table->dropColumn('form_participant');
            $table->dropColumn('form_partner');
        });
    }
}
