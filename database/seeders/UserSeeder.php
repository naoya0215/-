<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'ユーザー1',
                'email' => 'test@test.co.jp',
                'password' => Hash::make('password'),
                'created_at' => '2021/01/01 11:11:11'
            ],
            [
                'name' => 'ユーザー2',
                'email' => 'test2@test.co.jp',
                'password' => Hash::make('password'),
                'created_at' => '2021/01/01 11:11:11'
            ],
            [
                'name' => 'ユーザー3',
                'email' => 'test3@test.co.jp',
                'password' => Hash::make('password'),
                'created_at' => '2021/01/01 11:11:11'
            ]
        ]);
    }
}