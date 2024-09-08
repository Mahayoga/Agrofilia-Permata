<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mahayoga Ksatria Hanafi Bahtiar',
            'role' => 'Super Admin',
            'nomor_telepon' => '082337341446',
            'alamat' => 'Mastrip V',
            'email' => 'admin@admin.com',
            'email_verified_at' => null,
            'password' => password_hash('admin1234', CRYPT_BLOWFISH, ['cost' => 12]),
            'remember_token' => null
        ]);
    }
}
