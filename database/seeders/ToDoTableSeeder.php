<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToDoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ToDo')->insert([
            [
                'title' => 'Сделать домашку',
                'description' => 'Сделать приложение ToDo на Laravel',
                'user_id' => 11,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'title' => 'Вынести мусор',
                'description' => 'Вынести скопившийся дома мусор',
                'user_id' => 11,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'title' => 'Сходить в магазин',
                'description' => 'Купить продуктов на неделю',
                'user_id' => 11,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
