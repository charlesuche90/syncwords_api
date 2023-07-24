<?php


// database/migrations/YYYY_MM_DD_HHMMSS_add_event_start_date_to_events_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEventStartDateToEventsTable extends Migration
{
    public function up()
    {
        // Check if the column doesn't exist before adding it
        if (!Schema::hasColumn('events', 'event_start_date')) {
            Schema::table('events', function (Blueprint $table) {
                $table->timestamp('event_start_date')->nullable();
            });
        }
    }

    public function down()
    {
        // No need to modify the "down" method as it will automatically handle rollback
    }
}
