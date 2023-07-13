<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GeneralUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::transaction(function () {

            $user = User::create([
                'name' => 'Superadmin',
                'email' => 'superadmin22@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
            $user->addRole('superadministrator');
            $user = User::create([
                'name' => 'Superadmin2222',
                'email' => 'superadmin2222@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
            $user->addRole('superadministrator');


            $user = User::create([
                'name' => 'admin',
                'email' => 'admin22@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
            $user->addRole('administrator');


            $user = User::create([
                'name' => 'admin2222',
                'email' => 'admin2222@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
            $user->addRole('administrator');

            $user = User::create([
                'name' => 'supervisor',
                'email' => 'supervisor@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
            $user->addRole('supervisor');
            $user = User::create([
                'name' => 'supervisor22',
                'email' => 'supervisor22@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
            $user->addRole('supervisor');

            $user = User::create([
                'name' => 'factory_operator',
                'email' => 'factoryop@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
            $user->addRole('factory_operator');

            $user = User::create([
                'name' => 'factory_operator22',
                'email' => 'factoryop22@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
            $user->addRole('factory_operator');


            $user = User::create([
                'name' => 'truck_operator',
                'email' => 'truckop@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
            $user->addRole('truck_operator');
            $user = User::create([
                'name' => 'truck_operator22',
                'email' => 'truckop22@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
            $user->addRole('truck_operator');

            $user = User::create([
                'name' => 'labour',
                'email' => 'labour@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
            $user->addRole('labour');

            $user = User::create([
                'name' => 'labour22',
                'email' => 'labour22@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
            $user->addRole('labour');
        });
        
        //
    }
}
