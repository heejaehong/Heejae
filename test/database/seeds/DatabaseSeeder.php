<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Thumbnail::class, 30)->create();
        factory(App\Menu::class, 10)->create();
        factory(App\Info::class, 2)->create();
        factory(App\Image::class, 10)->create();
    }
}
