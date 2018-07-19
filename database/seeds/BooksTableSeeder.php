<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('branches')->insert([
        [
          'name' => 'tokyo',
        ],
        [
          'name' => 'fukuoka',
        ],
        [
         'name' => 'osaka',
        ],
      ]);
    }
}
