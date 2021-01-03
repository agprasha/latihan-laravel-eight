<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Ali';
		$user->email = 'ali@gmail.com';
		$user->email_verified_at = now();
		$user->password = Hash::make('password');
		$user->remember_token = Str::random(10);
		$user->save();

		$user->assignRole('manager');



		$aldi = new User();
        $aldi->name = 'Aldi';
		$aldi->email = 'aldi@gmail.com';
		$aldi->email_verified_at = now();
		$aldi->password = Hash::make('password');
		$aldi->remember_token = Str::random(10);
		$aldi->save();

		$aldi->assignRole('staff');
    }
}
