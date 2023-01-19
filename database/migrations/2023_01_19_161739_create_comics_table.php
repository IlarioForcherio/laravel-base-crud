<?php
use App\Models\Comic;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // popolo la tabella associata al modello Comic costruendo le sue colonne
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->text('description')->nullable();
            $table->string('thumb');
            $table->string('price');
            $table->string('series');
            $table->string('sale_date');
            $table->string('type');
            // timestamps va sempre alla fine
            $table->timestamps();
        });

        //comando per creare a tutti gli effetti le colonne:  php artisan migrate
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
