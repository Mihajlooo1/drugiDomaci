<?php

namespace Database\Seeders;

use App\Models\CreditRequest;
use Illuminate\Database\Seeder;

class CreditRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CreditRequest::factory(50)->create();
    }
}
