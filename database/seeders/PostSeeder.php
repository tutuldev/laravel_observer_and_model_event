<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // method ---> 1

          // Fetch all user IDs
        //   $userIds = DB::table('users')->pluck('id');

        //   // Seeding Posts
        //   collect([
        //       ['title' => 'First Post', 'description' => 'This is the first post.'],
        //       ['title' => 'Second Post', 'description' => 'This is the second post.'],
        //       ['title' => 'Third Post', 'description' => 'This is the third post.'],
        //       ['title' => 'Fourth Post', 'description' => 'This is the fourth post.'],
        //       ['title' => 'Fifth Post', 'description' => 'This is the fifth post.'],
        //       ['title' => 'Sixth Post', 'description' => 'This is the sixth post.'],
        //       ['title' => 'Seventh Post', 'description' => 'This is the seventh post.'],
        //       ['title' => 'Eighth Post', 'description' => 'This is the eighth post.'],
        //   ])->each(function ($post) use ($userIds) {
        //       DB::table('posts')->insert([
        //           'title' => $post['title'],
        //           'slug' => Str::slug($post['title']),
        //           'description' => $post['description'],
        //           'counter' => 0,
        //           'user_id' => $userIds->random(),
        //           'created_at' => now(),
        //           'updated_at' => now(),
        //       ]);
        //   });


        // method ---> 2

        // $userIds = User::pluck('id');

        // // Seeding Posts
        // collect([
        //     ['title' => 'First Post', 'description' => 'This is the first post.'],
        //     ['title' => 'Second Post', 'description' => 'This is the second post.'],
        //     ['title' => 'Third Post', 'description' => 'This is the third post.'],
        //     ['title' => 'Fourth Post', 'description' => 'This is the fourth post.'],
        //     ['title' => 'Fifth Post', 'description' => 'This is the fifth post.'],
        //     ['title' => 'Sixth Post', 'description' => 'This is the sixth post.'],
        //     ['title' => 'Seventh Post', 'description' => 'This is the seventh post.'],
        //     ['title' => 'Eighth Post', 'description' => 'This is the eighth post.'],
        // ])->each(function ($post) use ($userIds) {
        //     Post::create([
        //         'title' => $post['title'],
        //         'slug' => Str::slug($post['title']),
        //         'description' => $post['description'],
        //         'counter' => 0,
        //         'user_id' => $userIds->random(),
        //     ]);
        // });

        // method 3 -->

        $userIds = User::pluck('id')->toArray();

        // Seeding Posts
        collect([
            [
                'title' => 'News Title One',
                'slug' => 'news-title-one',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'user_id' => $userIds[0] ?? 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Title Two',
                'slug' => 'news-title-two',
                'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'user_id' => $userIds[1] ?? 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Title Three',
                'slug' => 'news-title-three',
                'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.',
                'user_id' => $userIds[0] ?? 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Title Four',
                'slug' => 'news-title-four',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.',
                'user_id' => $userIds[2] ?? 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Title Five',
                'slug' => 'news-title-five',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa.',
                'user_id' => $userIds[2] ?? 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Title Six',
                'slug' => 'news-title-six',
                'description' => 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit.',
                'user_id' => $userIds[0] ?? 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Title Seven',
                'slug' => 'news-title-seven',
                'description' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.',
                'user_id' => $userIds[2] ?? 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Title Eight',
                'slug' => 'news-title-eight',
                'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui.',
                'user_id' => $userIds[1] ?? 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ])->each(function ($post) {
            Post::create($post);
        });

    }
}
