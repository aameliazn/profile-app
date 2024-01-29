<?php

use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        Setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Website Sederhana',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_location',
            'label' => 'Alamat Kantor',
            'value' => 'Bogor, Jawa Barat',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_github',
            'label' => 'Github',
            'value' => 'https://github.com/aameliazn',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://instagram.com/aameliazn',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_site_desc',
            'label' => 'Site Description',
            'value' => 'Website sederhana, dengan admin filament, untuk hidup sederhana',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
