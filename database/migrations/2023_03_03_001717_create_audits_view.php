<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement( $this->dropView());
        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement( $this->dropView());
    }


    private function createView(): string
    {
        return <<<SQL
            CREATE VIEW `view_log_app` AS
            SELECT audits.id,
            users.name, users.last_name,
            CASE audits.event 
                WHEN 'updated' THEN 'Actualización' 
                WHEN 'created' THEN 'Creación' 
                ELSE 'Eliminación' END 'accion',
            audits.auditable_type,
            audits.url, 
            audits.user_agent as 'dispositivo', 
            audits.old_values as 'antes', 
            audits.new_values as 'despues', 
            audits.created_at as 'fecha_accion' 
            FROM `audits` INNER JOIN `users` on audits.user_id = users.id;
            SQL;
    }

    private function dropView(): string
    {
        return <<<SQL
            DROP VIEW IF EXISTS `view_log_app`;
        SQL;
    }
};
