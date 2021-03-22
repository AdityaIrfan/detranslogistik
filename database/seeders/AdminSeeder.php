<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Carbon\Traits\Date;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = Carbon::now();

        User::insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => $time->toDateTimeString(),
        ]);
    }
}