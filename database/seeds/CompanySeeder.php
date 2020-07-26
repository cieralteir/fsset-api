<?php

use App\Models\Company\Company;
use App\User;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class, 5)->create()->each(function ($company) {
            factory(User::class)->create([
                'company_id' => $company->id,
            ]);
        });
    }
}
