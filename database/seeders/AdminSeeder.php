<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\App\Models\User::factory()->create([
			'name' => 'Admin',
			'email' => 'admin@vrom.com',
			'password' => bcrypt('123'),
			'roles' => 'ADMIN'
		]);
	}
}
