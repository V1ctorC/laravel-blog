<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $family = Category::create([
            'name'  => 'Family',
            'slug'  => 'family'
        ]);

        $work = Category::create([
            'name'  => 'Work',
            'slug'  => 'work'
        ]);

        $personal = Category::create([
            'name'  => 'Personal',
            'slug'  => 'personal'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My first post',
            'slug' => 'my-first-post',
            'excerpt' => '<p>Lorem ipsum foijfiojefs fdsf</p>',
            'body' => '<p>Lorem ipsum foisjfiodjs foijdsofijdso fijosdjfoidsjfoidjsf oijdso fijsdofifjd soifjodsij fosijf odis</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My second post',
            'slug' => 'my-second-post',
            'excerpt' => '<p>Lorem ipsum foijfiojefs fdsf</p>',
            'body' => '<p>Lorem ipsum foisjfiodjs foijdsofijdso fijosdjfoidsjfoidjsf oijdso fijsdofifjd soifjodsij fosijf odis</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My third post',
            'slug' => 'my-third-post',
            'excerpt' => '<p>Lorem ipsum foijfiojefs fdsf</p>',
            'body' => '<p>Lorem ipsum foisjfiodjs foijdsofijdso fijosdjfoidsjfoidjsf oijdso fijsdofifjd soifjodsij fosijf odis</p>'
        ]);
    }
}
