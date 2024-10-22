<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("bookshelfs")->insert([
            'code' => "BS001",
            'name' => 'Manga',
        ]);
        DB::table("bookshelfs")->insert([
            'code' => "BS002",
            'name' => 'novel',
        ]);
        DB::table("bookshelfs")->insert([
            'code' => "BS003",
            'name' => 'Manhwa',
        ]);
    }
}
