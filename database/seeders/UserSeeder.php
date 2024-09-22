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
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim porro minima obcaecati ad dicta id ducimus natus nihil commodi, rerum, optio aliquam blanditiis veritatis quibusdam ipsum mollitia error aspernatur repellat?',
            'email' => 'admin@admin.com',
            'email_verified_at' => null,
            'password' => password_hash('admin1234', CRYPT_BLOWFISH, ['cost' => 12]),
            'remember_token' => null
        ]);

        User::create([
            'name' => 'Admin Vanili',
            'role' => 'Admin',
            'nomor_telepon' => '082-337-341-446',
            'alamat' => 'Mastrip V',
            'deskripsi' => 'Saya adalah admin dari kebun vanili',
            'email' => 'admin@gmail.com',
            'email_verified_at' => null,
            'password' => password_hash('admin1234', CRYPT_BLOWFISH, ['cost' => 12]),
            'remember_token' => null
        ]);

        User::create([
            'name' => 'Manager Vanili',
            'role' => 'Manager',
            'nomor_telepon' => '083-473-665-221',
            'alamat' => 'Mastrip IV',
            'deskripsi' => 'Saya adalah manager dari kebun vanili',
            'email' => 'manager@gmail.com',
            'email_verified_at' => null,
            'password' => password_hash('admin1234', CRYPT_BLOWFISH, ['cost' => 12]),
            'remember_token' => null
        ]);

        User::create([
            'name' => 'Pengurus Kebun Vanili',
            'role' => 'Pengurus Kebun',
            'nomor_telepon' => '083-473-665-221',
            'alamat' => 'Batu Raden',
            'deskripsi' => 'Saya adalah pengurus kebun vanili',
            'email' => 'pengurus@gmail.com',
            'email_verified_at' => null,
            'password' => password_hash('admin1234', CRYPT_BLOWFISH, ['cost' => 12]),
            'remember_token' => null
        ]);
    }
}
