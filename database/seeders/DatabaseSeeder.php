<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// berguna untuk insert data tanpa melalui form, misal ingin menambahkan database user 
// agar dapat login tanpa menggunakan form register
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'title' => 'Personal Microsite',
        //     'description' => 'Personal Microsite in Axure RP',
        //     'image_file_url' => 'https://4wvth8.axshare.com'
        // ]);

        $this->call(UsersTableSeeder::class);
    }
}
