<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });

        //ADICIONAR O RELACIONAMENTO COM A TABELA PRODUTOS
        Schema::table('produtos', function (Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('inidades');
        });
        //ADICIONAR O RELACIONAMENTO COM A TABELA PRODUTOS_DETALHES
        Schema::table('produto_detalhes', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        // remover o relacionamento com a tabela produto_detalhes
            //remover a fk
            Schema::table('produto_detalhes', function(Blueprint $table){
                $table->dropForeign('produto_detalhes_unidade_id_foreing'); //[table]_[colunm]_foreing
            //remover a coluna unidade_id
                $table->dropColumn('unidade_id');
            });
        // remover o relacionamento com a tabela produtos
            Schema::table('produtos', function(Blueprint $table){
            //remover a fk
                $table->dropForeing('produtos_unidade_id_foreing');
            //remover a coluna unidade_id
                $table->dropColumn('unidade_id');
            });
        Schema::dropIfExists('unidades');
    }
}
