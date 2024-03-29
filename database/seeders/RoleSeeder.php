<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * #############################
         * ####     ADMIN SEEDER    ####
         * #############################
         */
        DB::table('roles')->insert([
            'name' => 'Administrator',
            'slug' => 'admin',
        ]);
    }
}
