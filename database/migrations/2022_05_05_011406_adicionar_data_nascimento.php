<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdicionarDataNascimento extends Migration
{
    public function up()
    {
        Schema::table('funcionarios', function (Blueprint $table) {
            $table->date('dataNascimento');
        });
    }

    public function down()
    {
        Schema::table('funcionarios', function (Blueprint $table) {
            $table->dropColumn('dataNascimento');
        });
    }
}
