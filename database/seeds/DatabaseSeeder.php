<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        echo "Creating 10 authors...\n";
        factory(App\Author::class,10)->create();
        echo "Creating 36 posts...\n";
        factory(App\Post::class,36)->create();
        echo "Creating 67 comments...\n";
        factory(App\Comment::class,67)->create();
    }
}
