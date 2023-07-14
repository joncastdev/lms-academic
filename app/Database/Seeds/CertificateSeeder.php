<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class CertificateSeeder extends Seeder
{
    public function run()
    { 

        $created_at = date('y-m-d');

        $updated_at = date('y-m-d');

        $data = [
            'id_course' => 2,
            'created_at' => $created_at,
            'updated_at' => $updated_at                                   
        ];
       

        $this->db->table('certificates')->insert($data);
        

    }
}
