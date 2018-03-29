<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Usman Akram';
        $user->email = 'usman.akram@gmail.com';
        $user->password = bcrypt('usman');
        $user->save();

        $saad = new \App\User();
        $saad->name = 'Saad Shahid';
        $saad->email = 'saad@gmail.com';
        $saad->password = bcrypt('saad');
        $saad->save();

        $teacher = new \App\Role();
        $teacher->name         = 'teacher';
        $teacher->display_name = 'School Teacher'; // optional
        $teacher->description  = 'User is the teacher of a given class'; // optional
        $teacher->save();

        $admin = new \App\Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();

        $user->attachRole($teacher);
        $user->attachRole($admin);
        $saad->attachRole($teacher);
    }
}
