<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('organization_contacts', function (Blueprint $table) {
    $table->id();
    $table->foreignId('organization_id')->constrained()->onDelete('cascade');
    $table->foreignId('contact_id')->constrained()->onDelete('cascade');
    $table->timestamps();
    });

}
    public function down()
{
    Schema::dropIfExists('organization_contacts');
}
};
