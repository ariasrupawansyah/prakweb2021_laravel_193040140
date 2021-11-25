<?php

namespace Database\Seeders;

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

         User::create([
             'name' => 'Aria Rupawansyah',
             'username' => 'Marquis',
             'email' => '193040140.aria@mail.unpas.ac.id',
             'password' => bcrypt('12345')
         ]);

        // User::create([
        //     'name' => 'Prettier Lynn',
        //     'email' => 'prettier@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

         User::factory(3)->create();

         Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
         ]);

         Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
         ]);

         Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
         ]);

        Post::factory(20)->create();

        //  Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sapiente alias repellendus iusto odit voluptatibus possimus minima rerum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sapiente alias repellendus iusto odit voluptatibus possimus minima rerum. dignissimos error ut placeat earum atque est minus culpa assumenda mollitia blanditiis excepturi autem magni veniam odio dolores! Quasi tempora laboriosam eligendi magni, reprehenderit velit itaque, voluptates suscipit aperiam eum, quam facilis eos mollitia dignissimos cupiditate consectetur. Debitis qui id ratione. Nulla nisi esse atque voluptas saepe, illum quo impedit perferendis ipsa eaque non iure maxime nemo unde inventore ratione repellendus dolorum reprehenderit eum sapiente labore! Asperiores, sit. Voluptatem omnis temporibus enim consequuntur unde, quas beatae culpa. Ex assumenda in ipsa sequi!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        //  Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sapiente alias repellendus iusto odit voluptatibus possimus minima rerum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sapiente alias repellendus iusto odit voluptatibus possimus minima rerum. dignissimos error ut placeat earum atque est minus culpa assumenda mollitia blanditiis excepturi autem magni veniam odio dolores! Quasi tempora laboriosam eligendi magni, reprehenderit velit itaque, voluptates suscipit aperiam eum, quam facilis eos mollitia dignissimos cupiditate consectetur. Debitis qui id ratione. Nulla nisi esse atque voluptas saepe, illum quo impedit perferendis ipsa eaque non iure maxime nemo unde inventore ratione repellendus dolorum reprehenderit eum sapiente labore! Asperiores, sit. Voluptatem omnis temporibus enim consequuntur unde, quas beatae culpa. Ex assumenda in ipsa sequi!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        //  Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sapiente alias repellendus iusto odit voluptatibus possimus minima rerum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sapiente alias repellendus iusto odit voluptatibus possimus minima rerum. dignissimos error ut placeat earum atque est minus culpa assumenda mollitia blanditiis excepturi autem magni veniam odio dolores! Quasi tempora laboriosam eligendi magni, reprehenderit velit itaque, voluptates suscipit aperiam eum, quam facilis eos mollitia dignissimos cupiditate consectetur. Debitis qui id ratione. Nulla nisi esse atque voluptas saepe, illum quo impedit perferendis ipsa eaque non iure maxime nemo unde inventore ratione repellendus dolorum reprehenderit eum sapiente labore! Asperiores, sit. Voluptatem omnis temporibus enim consequuntur unde, quas beatae culpa. Ex assumenda in ipsa sequi!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sapiente alias repellendus iusto odit voluptatibus possimus minima rerum.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt sapiente alias repellendus iusto odit voluptatibus possimus minima rerum. dignissimos error ut placeat earum atque est minus culpa assumenda mollitia blanditiis excepturi autem magni veniam odio dolores! Quasi tempora laboriosam eligendi magni, reprehenderit velit itaque, voluptates suscipit aperiam eum, quam facilis eos mollitia dignissimos cupiditate consectetur. Debitis qui id ratione. Nulla nisi esse atque voluptas saepe, illum quo impedit perferendis ipsa eaque non iure maxime nemo unde inventore ratione repellendus dolorum reprehenderit eum sapiente labore! Asperiores, sit. Voluptatem omnis temporibus enim consequuntur unde, quas beatae culpa. Ex assumenda in ipsa sequi!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
