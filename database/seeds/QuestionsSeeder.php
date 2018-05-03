<?php

use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Question::class, 30)->create()
            ->each(function($q){
                $q->answers()->saveMany(factory(App\Answer::class, 4)->make());
            });
    }
}
