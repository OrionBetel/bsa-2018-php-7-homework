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
        factory(App\Entity\Currency::class, 5)->create();
        
        factory(App\Entity\User::class, 10)->create();
        
        factory(App\Entity\Wallet::class, 10)->create();

        factory(App\Entity\Money::class, 50)->create();
    }
}
