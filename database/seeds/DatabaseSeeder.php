<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Tuita\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        factory(Tuita\Models\User::class, 10)->create();

        Model::reguard();
    }
}
