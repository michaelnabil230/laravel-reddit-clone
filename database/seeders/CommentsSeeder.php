<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::withoutEvents(function () {
            Comment::factory()->times(1000)->create();
        });
    }
}
