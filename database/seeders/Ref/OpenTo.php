<?php

namespace Database\Seeders\Ref;

use App\Models\Ref\RefYesNo;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OpenTo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin User
        RefYesNo::create([
            'name' => 'Bumiputera',
            'active' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        RefYesNo::create([
            'name' => 'Semua',
            'active' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
