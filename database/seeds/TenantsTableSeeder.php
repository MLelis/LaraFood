<?php

use App\Models\{
    Plan,
    Tenant
};
use Illuminate\Database\Seeder;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan = Plan::first();

        $plan->tenants()->create([
            'cnpj' => '12554897444120',
            'name' => 'MarcusJordhan',
            'url' => 'marcusjordhan',
            'email' => 'contato@marcusjordhan.com.br',
        ]);
    }
}
