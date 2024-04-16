<?php

namespace Database\Seeders;

use App\Models\Convention;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConventionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $convs = [
            [
                "title" => "12th International Conference of Web Developers",
                "venue" => "Metrocentre Hotel, Tagbilaran city, Bohol",
                "date_from" => '2024-03-20',
                "date_to" => '2024-03-23',
                "theme" => "Inspiring Others to Dev the Web!"
            ],
            [
                "title" => "9th Benigno Aquino Arts Festival",
                "venue" => "Cebu International Convention Center, Cebu city",
                "date_from" => '2024-03-27',
                "date_to" => '2024-03-30',
            ],
            [
                "title" => "Masaganang Pag-usapan - 2024",
                "venue" => "Bohol Tropics",
                "date_from" => "2024-04-02"
            ]
        ];

        foreach($convs as $conv) {
            Convention::create($conv);
        }
    }
}
