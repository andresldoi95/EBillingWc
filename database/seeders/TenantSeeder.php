<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenants = [
            [
                'domain' => 'andres-leon.localhost',
                'id' => 'andres_leon'
            ]
        ];
        foreach ($tenants as $tenant) {
            $newTenant = Tenant::create([
                'id' => $tenant['id']
            ]);
            $newTenant->domains()->create([
                'domain' => $tenant['domain']
            ]);
        }
    }
}
