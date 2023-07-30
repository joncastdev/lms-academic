<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class CountrySeeder extends Seeder
{
	public function run()
	{		

		$data = [
			[
				'country' => '-None-',
				'lat' => 0.0000,
				'long' => -00.0000
			],
			[
				'country' => 'Argentina',
				'lat' => -34.0000000,
				'long' => -64.0000000
			],
			[
				'country' => 'Mexico',
				'lat' => 23.0000000,
				'long' => -102.0000000
			],
			[
				'country' => 'Venezuela',
				'lat' => 40.6643,
				'long' => -73.9385
			],
			[
				'country' => 'Colombia',
				'lat' => 4.570868,
				'long' => -74.297333
			],
			[
				'country' => 'Peru',
				'lat' => -9.189967,
				'long' => -75.015152
			],
			[
				'country' => 'España',
				'lat' => 40.463667,
				'long' => -3.74922
			],
			[
				'country' => 'Bolivia',
				'lat' => -16.290154,
				'long' => -63.588653
			],
		];

		
		$this->db->table('countrys')->insertBatch($data);

	}
}
