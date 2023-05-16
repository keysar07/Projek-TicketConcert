<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_user = [
            ['name' => 'Admin', 'guard_name' => 'web'],
            ['name' => 'Pemesan', 'guard_name' => 'web'],
        ];

        foreach ($role_user as $role => $r) {
            DB::table('roles')->insert([
                'name' => $r['name'],
                'guard_name' => $r['guard_name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
