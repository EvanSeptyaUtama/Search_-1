<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
                'name' => 'Hardik',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
        ],
       );
       User::create([
            'name' => 'Dona',
            'email' => 'dona@gmail.com',
            'password' => bcrypt('123456'),
        ],
    );
    User::create(
        [
            'name' => 'Jono',
            'email' => 'jono@gmail.com',
            'password' => bcrypt('123456'),
        ],
);
User::create(
    [
            'name' => 'Susil',
            'email' => 'jihan@gmail.com',
            'password' => bcrypt('123456'),
        ],
);
User::create(
    [
            'name' => 'Jordi',
            'email' => 'jordi@curang.com',
            'password' => bcrypt('123456'),
        ],
);
User::create(
    [
            'name' => 'Sinyal',
            'email' => 'Susah@curang.com',
            'password' => bcrypt('123456'),
        ],
);
User::create(
    [
            'name' => 'Susu',
            'email' => 'Enak@dencow.com',
            'password' => bcrypt('123456'),
        ],
);
User::create(
    [
            'name' => 'Vito',
            'email' => 'vito@gmail.com',
            'password' => bcrypt('123456'),
        ],
);
User::create(
    [
            'name' => 'Johanis',
            'email' => 'johanis@gmail.com',
            'password' => bcrypt('123456'),
        ],
);
User::create(
    [
            'name' => 'Orgil',
            'email' => 'orgil@gmail.com',
            'password' => bcrypt('123456'),
        ],
);
    }
}
