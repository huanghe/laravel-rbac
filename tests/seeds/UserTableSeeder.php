<?php

namespace Tests\Seeds;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        factory(\Tests\Models\User::class, 50)
            ->create();
    }
}
