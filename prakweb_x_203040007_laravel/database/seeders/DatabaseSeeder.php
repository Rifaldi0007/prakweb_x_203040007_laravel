<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Falz',
            'email' => 'faldiarsan524@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Indra',
            'email' => 'indragta@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name'=> 'Programming',
            'slug'=> 'Programming'
        ]);

        Category::create([
            'name'=> 'Personal',
            'slug'=> 'Personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'Judul_Pertama',
            'excerpt' => 'Programming adalah kegiatan membuat set kode instruksi untuk program (sofware) yang dijalankan oleh komputer. ',
            'body' => ' Programming adalah kegiatan membuat set kode instruksi untuk program (sofware) yang dijalankan oleh komputer. Agar program tersebut bisa berjalan dengan baik, programming juga melibatkan proses menulis, menguji, memperbaiki, dan melakukan pengecekan ulang pada kode instruksi yang sudah dibuat.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul kedua',
            'slug' => 'Judul_kedua',
            'excerpt' => 'Nama saya Indra gta saya lahir dibandung. ',
            'body' => ' Nama saya Indra gta saya lahir dibandung tgl 15 may 2000 saya menjadi mahasiswa itb dan sudah menginjak tingkat 3.',
            'category_id' => 2,
            'user_id' => 2
        ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
