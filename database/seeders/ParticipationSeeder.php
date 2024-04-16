<?php

namespace Database\Seeders;

use App\Models\Participation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i<100; $i++) {
            $conventionId = rand(1,3);
            $memberId = rand(1,50);

            $p = Participation::where('convention_id', $conventionId)->where('member_id',$memberId)->first();

            if(!$p) {
                $types = ['participant','presentor','sponsor'];

                $rndKey = array_rand($types);

                Participation::create([
                    'member_id' => $memberId,
                    'convention_id' => $conventionId,
                    'type' => $types[$rndKey]
                ]);

            }
        }
    }
}
