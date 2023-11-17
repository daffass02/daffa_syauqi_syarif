<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\Tv::factory()->create([
             "no_seri" => "A192e2ji",
             "merek" => "Aquos",
             "model" => "tv",
             "harga" => "100000000",
             "deskripsi" => "Sharp AQUOS TV LED 2T-C32DC1i bisa jadi rekomendasi TV LED yang patut kamu pertimbangkan. Tidak hanya memiliki layar HD saja.",
             "layar" => "32 Inch"
         ]);

        \App\Models\Ac::factory()->create([
            "nama" => "LG New Hercules AC H05TN4",
            "model" => "ac",
            "ukuran" => "1/5 Pk",
            "harga" => "3990000",
            "detail" => "LG New Hercules AC H05TN4 adalah AC Dinding bertenaga 1HP yang dibekali berbagai fitur menarik untuk maksimalkan fungsinya."
        ]);
    }
}
