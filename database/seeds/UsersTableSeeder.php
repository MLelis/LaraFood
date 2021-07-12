<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Marcus Jordhan',
            'email' => 'contato@marcusjordhan.com.br',
            'password' => bcrypt('123456'),
        ]);
    }
}
