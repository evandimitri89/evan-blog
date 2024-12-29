<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Database\Factories\PostFactory;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {

    User::create([
      'name' => 'Evan Dimitri',
      'username' => 'evandimitri89',
      'email' => 'evandimitri89@gmail.com',
      'password' => bcrypt('12345')
    ]);

    User::factory(3)->create();

    // User::create([
    //     'name' => 'Feelixt Gevano',
    //     'email' => 'feelixtgevano@gmail.com',
    //     'password' => bcrypt('54321')
    // ]);

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
    // Post::create([
    //     'title' => 'Judul Pertama',
    //     'slug' => 'judul-pertama',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolorum soluta obcaecati excepturi debitis non quas harum rem, corrupti cum, libero minima officiis omnis numquam, quod pariatur qui. Voluptatibus molestias nostrum quaerat, rem dolorum est? Natus numquam modi consectetur inventore non placeat? Voluptate, officia sunt sit obcaecati porro incidunt. Veniam similique sequi, fugiat quasi perspiciatis saepe repellendus error consequuntur facere alias sint repellat vero reiciendis culpa harum cum consequatur quo amet. Sint aliquid quod officiis error deserunt aut cum necessitatibus, accusamus eos soluta quasi doloribus quos iure neque laboriosam facilis temporibus aspernatur odit alias. Voluptatum et consequuntur assumenda nobis sint repellendus dicta velit magni magnam saepe? Doloremque praesentium quod dolorem, pariatur odio ab ut quisquam nulla debitis voluptates suscipit labore.',
    //     'category_id' => 1,
    //     'user_id' => 1
    // ]);
  }
}
