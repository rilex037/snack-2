<?php

use Snack\App;
use Snack\Db\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {d($this->db);
        $this->db->foreignKeyCkecks(1);/*
        $this->call(PartnersSeeder::class);
        $this->call(ProductCltplSeeder::class);
        $this->call(ProductsCanvaSeeder::class);
        $this->call(ProductsPriceSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(OrdersCltplSeeder::class);*/
        $this->db->foreignKeyCkecks(0);
    }
}
