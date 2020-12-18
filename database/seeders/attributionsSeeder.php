<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class attributionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributions')->insert([
            'ordinateur_id' => Random_int(1,3),
            'client_id' => Random_int(1,5),
            'date' => date("ymd")+random_int(0,3),
            'horraire' =>  Random_int(8,19)
        ]);
    }
}