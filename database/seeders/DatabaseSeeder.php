<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use App\Models\Company;
use App\Models\Employee;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */



    public function run()
    {


      $this->call([
            AdminSeeder::class
          ]);

      $this->call([CompanySeeder::class]);
    }
}
