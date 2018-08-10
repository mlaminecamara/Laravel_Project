<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => 'Chicago Bulls',
            'country' => 'USA',
            'flag' => 'photo.png',
            'points_per_game' => '35',
            'ball_possession' => '15',
            'team_ranking' => '9',
        ]);
        DB::table('teams')->insert([
            'name' => 'Sacramento Kings',
            'country' => 'USA',
            'flag' => 'photo.png',
            'points_per_game' => '30',
            'ball_possession' => '18',
            'team_ranking' => '10',
        ]);
    }
}
