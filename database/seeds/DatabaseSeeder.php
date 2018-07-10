<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entity\Currency::class, 10)->create();
        
        factory(App\Entity\User::class, 100)->create();
        
        factory(App\Entity\Wallet::class, 100)->create();

        factory(App\Entity\Money::class, 500)->create();
    }
}
