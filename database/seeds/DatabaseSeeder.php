<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
        DB::table('Newsfeed')->insert([
            'title'   => 'Rebukes From White House Risk Buoying Netanyahu',
            'content'      => 'Tensions between Israel and the United States have soared, and even some who mainly blame Prime Minister Benjamin Netanyahu for antagonizing President Obama over the last six years now see the scales flipped.',
            'author'   => 'JODI RUDOREN',
            'published_at' => '2015-01-02 13:00:00',
        ]);

        DB::table('Newsfeed')->insert([
            'title'   => 'U.S. to Delay Pullout of Troops From Afghanistan to Aid Strikes',
            'content'      => 'President Obama’s decision to maintain troop levels in Afghanistan through 2015 is partly to bolster counterterrorism efforts in that country, including the C.I.A.’s ability to conduct drone strikes, administration officials said.',
            'author'   => 'MICHAEL D. SHEAR',
            'published_at' => '2015-01-02 13:00:00',
        ]);

        DB::table('Newsfeed')->insert([
            'title'   => 'Wall St. Stars Join Silicon Valley Gold Rush',
            'content'      => 'Ruth Porat, Morgan Stanley’s chief financial officer, is leaving for Google in the most visible example yet of the flow of talent from Wall Street to Silicon Valley.',
            'author'   => 'NATHANIEL POPPER',
            'published_at' => '2015-01-02 13:00:00',
        ]);

        DB::table('Newsfeed')->insert([
            'title'   => 'Atlanta Police Shooting Victim Tried to Follow ‘Sensible’ Path',
            'content'      => 'Long before two bullets from an officer’s gun tore through Anthony Hill’s chest, he had tattooed it with his grandfather’s advice: “Be sensible.” And he had done his best to heed that counsel.',
            'author'   => 'RICHARD FAUSSET',
            'published_at' => '2015-01-02 13:00:00',
        ]);

        DB::table('Newsfeed')->insert([
            'title'   => 'An Artistic Reinterpretation of China’s ‘Century of Humiliation’',
            'content'      => 'An exhibition in Hong Kong seeks to break down what the show’s co-curator calls a “monolithic vision” of the Chinese nation, while also suggesting strategies for creating alternative narratives.',
            'author'   => 'AMY QIN',
            'published_at' => '2015-01-02 13:00:00',
        ]);
    }
}

class ProjectTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('Projects')->insert([
            'title' => 'some project',
            'description' => 'now im the king of swingers, the jungle vip, i have reached the top, and had to stop, that is what is bothering me' ,
            'image_url' => '/css/images/beatles.png',
            'author' => 'first guy',
            'published_at' => '2015-01-02 16:00:00',
        ]);

        DB::table('Projects')->insert([
            'title' => 'another project',
            'description' => 'bllah bllah bllah' ,
            'image_url' => '/css/images/beatles.png',
            'author' => 'some guy',
            'published_at' => '2015-03-02 16:00:00',
        ]);

        DB::table('Projects')->insert([
            'title' => 'third in a row',
            'description' => 'bloub bloub bloub bloub bloub' ,
            'image_url' => '/css/images/beatles.png',
            'author' => 'second guy',
            'published_at' => '2015-03-02 19:00:00',
        ]);
    }
}

class VideoTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('Videos')->insert([
            'title' => 'some video',
            'description' => 'now im the king of swingers, the jungle vip, i have reached the top, and had to stop, that is what is bothering me' ,
            'author' => 'homer simpson',
            'image_url' => '/css/images/beatles.png',
            'image_url' => '/videos/vid1.mp4',
            'format_film' => true,
            'published_at' => '2015-01-02 16:00:00',
        ]);

        DB::table('Videos')->insert([
            'title' => 'video 1',
            'description' => 'now im the king of swingers, the jungle vip, i have reached the top, and had to stop, that is what is bothering me' ,
            'author' => 'homer simpson',
            'image_url' => '/css/images/beatles.png',
            'image_url' => '/videos/vid1.mp4',
            'format_film' => true,
            'published_at' => '2015-01-02 16:00:00',
        ]);

        DB::table('Videos')->insert([
            'title' => 'video dy',
            'description' => 'now im the king of swingers, the jungle vip, i have reached the top, and had to stop, that is what is bothering me' ,
            'author' => 'homer simpson',
            'image_url' => '/css/images/beatles.png',
            'image_url' => '/videos/vid1.mp4',
            'format_film' => false,
            'published_at' => '2015-01-02 16:00:00',
        ]);

    }
}