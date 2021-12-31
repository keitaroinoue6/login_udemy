<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => '田中',
                'email' => 'p@p',
                'password' => Hash::make('098098098'),
                'created_at' => '2021/12/30 11:11:11'
            ],
            [
                'name' => '佐藤',
                'email' => 't@t',
                'password' => Hash::make('098098098'),
                'created_at' => '2021/12/30 11:11:11'
            ],
            [
                'name' => '山田',
                'email' => 'y@y',
                'password' => Hash::make('098098098'),
                'created_at' => '2021/12/30 11:11:11'
            ],

        ]);

    }
}
