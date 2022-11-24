<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class PriceSeeder extends Seeder
{
    public function run()
    {        
        $data = [
            'price' => 10                              
        ];
        

        $this->db->table('prices')->insert($data);
        

    }
}
