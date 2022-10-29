<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'zahrah puspita',
            'role'=>'pelayan',
            'foto_profile'=>'/static/avatars/005f.jpg',
            'email'=>'zahrahp@gmail.com',
            'password'=>'$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky',
        ]);
        DB::table('users')->insert([
            'name'=>'boy will I am',
            'role'=>'pelayan',
            'foto_profile'=>'/static/avatars/004m.jpg',
            'email'=>'william@gmail.com',
            'password'=>'$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky',
        ]);
        DB::table('users')->insert([
            'name'=>'Petty Dona',
            'role'=>'pelayan',
            'foto_profile'=>'/static/avatars/006f.jpg',
            'email'=>'dona@gmail.com',
            'password'=>'$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky',
        ]);
        DB::table('users')->insert([
            'name'=>'Jhonny Dafoe',
            'role'=>'kasir',
            'foto_profile'=>'/static/avatars/008m.jpg',
            'email'=>'dafoe@gmail.com',
            'password'=>'$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky',
        ]);
        DB::table('users')->insert([
            'name'=>'Pevita sweet',
            'role'=>'kasir',
            'foto_profile'=>'/static/avatars/009f.jpg',
            'email'=>'sweetpevita@gmail.com',
            'password'=>'$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky',
        ]);
        DB::table('users')->insert([
            'name'=>'Jane Darlin',
            'role'=>'pelayan',
            'foto_profile'=>'/static/avatars/020f.jpg',
            'email'=>'ohdarlin@gmail.com',
            'password'=>'$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky',
        ]);
        DB::table('users')->insert([
            'name'=>'jonathan smile',
            'role'=>'pelayan',
            'foto_profile'=>'/static/avatars/016m.jpg',
            'email'=>'iwantyoutosmile@gmail.com',
            'password'=>'$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky',
        ]);
        DB::table('users')->insert([
            'name'=>'mona sweet mom',
            'role'=>'pelayan',
            'foto_profile'=>'/static/avatars/019f.jpg',
            'email'=>'sweetmom@gmail.com',
            'password'=>'$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky',
        ]);
    }
}
