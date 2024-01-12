<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $title = $faker->sentence();
            $newProject = new Project();
            $newProject->user_id = 1;
            $newProject->title = $title;
            $newProject->description = $faker->text();
            $newProject->creation_date = $faker->dateTime();
            $newProject->image = $faker->imageUrl();
            $newProject->slug = Str::slug($title, '-');
            $newProject->save();
        }
    }
}
