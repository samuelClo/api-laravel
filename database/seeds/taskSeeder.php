<?php

use App\task;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {
            $task = new Task;
            $task->description = $faker->realText();
            $task->save();
        }
    }
}
