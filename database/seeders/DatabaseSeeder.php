<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Label;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $company = Company::create([
            'name' => 'BIRZOOM'
        ]);
        Label::create([
            'company_id' => $company->id,
            'name' => 'Label 58x40',
            'width' => 58,
            'height' => 40
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@birzoom.uz',
            'password' => Hash::make('123456789'),
            'company_id' => $company->id
        ]);
    }
}
