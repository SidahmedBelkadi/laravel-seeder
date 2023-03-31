<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\FactoryHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        $users = User::factory(15)->create();

        foreach ($users as $user)
        {
            foreach ($users as $user)
            {
                $user->roles()->sync(FactoryHelper::getRandomModelId(Role::class));
            }
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
