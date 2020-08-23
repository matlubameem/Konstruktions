<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Developer', 'Administrator', 'Manager', 'Project Manager', 'Accountant', 'Client', 'Supplier', 'Engineer', 'Machine', 'Labour', 'Helper'];
        $slugs = ['developer', 'administrator', 'manager', 'project_manager', 'accountant', 'client', 'supplier', 'engineer', 'machine', 'labour', 'helper'];
        $ability = ['777','775','755','555','755','222','222','222','222','222','222'];


        foreach ($names as $index => $name) {
            DB::table('roles')->insert([
                'role_name' => $name,
                'ability'=> $ability[$index],
                'slug' => $slugs[$index]
            ]);
        }
    }
}
