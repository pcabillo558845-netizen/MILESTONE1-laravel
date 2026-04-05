<?php

namespace Database\Seeders;

use App\Models\EResource;
use Illuminate\Database\Seeder;

class EResourceSeeder extends Seeder
{
    public function run(): void
    {
        EResource::create([
            'title' => 'Laravel Documentation',
            'author' => 'Taylor Otwell',
            'isbn' => 'N/A',
            'date_added' => '2024-10-01',
        ]);

        EResource::create([
            'title' => 'Clean Code',
            'author' => 'Robert C. Martin',
            'isbn' => '978-0132350884',
            'date_added' => '2024-10-01',
        ]);

        EResource::create([
            'title' => 'PHP: The Right Way',
            'author' => 'Phil Sturgeon',
            'isbn' => 'N/A',
            'date_added' => '2024-10-01',
        ]);
    }
}

