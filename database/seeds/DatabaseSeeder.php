<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');
        $this->call('NewsfeedTableSeeder');
        $this->call('ProjectTableSeeder');
        $this->call('VideoTableSeeder');
    }
}

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@rebels.com',
            'password' => Hash::make('admin'),
        ]);
    }
}

class NewsfeedTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 50) as $index)
        {
            DB::table('Newsfeed')->insert([
                'title'   => $faker -> sentence(4),
                'content' => $faker -> paragraph(10),
                'author'   => $faker -> name,
                'published_at' => \Carbon\Carbon::now(),
            ]);
        }

    }
}

class ProjectTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 50) as $index) {
            DB::table('Projects')->insert([
                'title' => $faker -> sentence(3),
                'description' => $faker -> paragraph(10),
                'image_url' => '/css/images/photography.png',
                'author' => $faker -> name,
                'published_at' => \Carbon\Carbon::now(),
            ]);
        }

    }
}

class VideoTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 50) as $index) {
            DB::table('Videos')->insert([
                'title' => $faker -> sentence(3),
                'description' => $faker -> paragraph(10),
                'author' => $faker -> name,
                'image_url' => '/css/images/beatles.png',
                'video_url' => '/videos/vid1.mp4',
                'format_film' => $faker -> paragraph(1),
                'published_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}