<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'name' => 'Scottie Pippen',
            'team_id' => '4',
            'points_per_game' => '22',
            'blocks_per_game' => '18',
            'assists_per_game' => '9',
        ]);

        DB::table('players')->insert([
            'name' => 'Michael Jordan',
            'team_id' => '4',
            'points_per_game' => '39',
            'blocks_per_game' => '10',
            'assists_per_game' => '12',
        ]);


    }
}
