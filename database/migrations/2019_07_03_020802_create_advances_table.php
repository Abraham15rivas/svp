<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Advance;

class CreateAdvancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('users');
            $table->unsignedBigInteger('supervisor_id');
            $table->foreign('supervisor_id')->references('id')->on('users');
            $table->unsignedBigInteger('directorl_id');
            $table->foreign('directorl_id')->references('id')->on('users');
            $table->unsignedBigInteger('directorg_id');
            $table->foreign('directorg_id')->references('id')->on('users');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('refund_date');
            $table->integer('available_days');
            $table->integer('enjoyed_days');
            $table->string('state')->default(Advance::PROCESO);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advances');
    }
}
