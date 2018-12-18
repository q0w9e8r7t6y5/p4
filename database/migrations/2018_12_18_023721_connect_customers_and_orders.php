<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectCustomersAndOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {

            # Remove the field associated with the old way we were storing authors
            # Can do this here, or update the original migration that creates the `books` table
//            $table->dropColumn('id');

            # Add a new INT field called `author_id` that has to be unsigned (i.e. positive)
            $table->integer('customer_id')->unsigned()->nullable();

            # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
            $table->foreign('customer_id')->references('id')->on('customers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {

            # ref: http://laravel.com/docs/migrations#dropping-indexes
            # combine tablename + fk field name + the word "foreign"
            $table->dropForeign('orders_customer_id_foreign');

            $table->dropColumn('customer_id');
        });
    }
}
