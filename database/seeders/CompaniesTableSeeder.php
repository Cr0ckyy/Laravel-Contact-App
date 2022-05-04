<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // this would remove all records and resert the auto incrmenting ID to 0
        DB::table('companies')->truncate();


        foreach (range(1, 10) as $index) {

            $companies[] = [
                'name' => $name = "Company $index",
                'address' => "Address $index",
                'website' => "Website $index",
                'email' => "Email $index",
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('companies')->insert($companies);
    }
}
