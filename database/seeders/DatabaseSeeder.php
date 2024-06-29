<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Payment_proof;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\User;
use App\Models\Vaucher_detail;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        Customer::factory(20)->create();
        $this->call(CategorySeeder::class);
        Supplier::factory(7)->create();
        Employee::factory(5)->create();
        Product::factory(20)->create();
        Payment_proof::factory(20)->create();
        $this->call(Product_detailSeeder::class);
        Vaucher_detail::factory(20)->create();
    }
}
