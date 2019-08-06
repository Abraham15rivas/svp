<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Permit;

class CreatePermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permits', function (Blueprint $table) {
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
            $table->integer('days');
            $table->unsignedBigInteger('reason_id');
            $table->foreign('reason_id')->references('id')->on('reasons');
            $table->char('turn',1)->nullable();
            $table->string('permit_type',20);
            $table->boolean('substitute_require');
            $table->text('observation')->nullable();
            $table->string('state',20)->default(Permit::PROCESO);
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
        Schema::dropIfExists('permits');
    }
}
