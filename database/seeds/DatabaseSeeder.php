<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
		DB::table('users')->truncate();
		DB::table('profesiones')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        $this->call(ProfesionesSeeder::class);
        $this->call(Users::class);
    }
}
