<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create(
            [
                'title' => 'TEST WEB',
                'content' => 'TEST PAGE FOR FIRST TEST',
            ]
        );
    }
}
