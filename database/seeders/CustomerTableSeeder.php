<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        Customer::create([
            'nama' => 'Jessica Gallu',
            'email' => 'jessica@gmail.com',
            'alamat' => 'Sumba Barat',
        ]);

        Customer::create([
            'nama' => 'Mentari Gallu',
            'email' => 'mentari@gmail.com',
            'alamat' => 'Sumba Barat Daya',
        ]);
        
        
    }
}
