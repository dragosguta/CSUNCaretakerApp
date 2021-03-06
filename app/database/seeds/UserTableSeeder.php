<?php

class UserTableSeeder extends Seeder {

    public function run()
    {   
        DB::table('users')->delete();

         User::create(array(
            'email'             => 'arvin.foroutan.1@my.csun.edu',
            'first_name'        => 'Arvin',
            'last_name'         => 'Foroutan',
            'password'          => Hash::make('arvin'),
            'opt_in'            => true,
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        User::create(array(
            'email'             => 'ursula.messick.95@my.csun.edu',
            'first_name'        => 'Ursula',
            'last_name'         => 'Messick',
            'password'          => Hash::make('ursula'),
            'opt_in'            => true,
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        User::create(array(
            'email'             => 'andranik.tonoyan.606@my.csun.edu',
            'first_name'        => 'Andranik',
            'last_name'         => 'Tonoyan',
            'opt_in'            => true,
            'password'          => Hash::make('andy'),
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        User::create(array(
            'email'             => 'ryan.chua.15@my.csun.edu',
            'first_name'        => 'Ryan',
            'last_name'         => 'Chua',
            'password'          => Hash::make('ryan'),
            'opt_in'            => true,
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        User::create(array(
            'email'             => 'dragossg@gmail.com',
            'first_name'        => 'Dragos',
            'last_name'         => 'Guta',
            'password'          => Hash::make('dragos'),
            'opt_in'            => true,
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        User::create(array(
            'email'             => 'v@osintra.com',
            'first_name'        => 'Victor',
            'last_name'         => 'Perez',
            'password'          => Hash::make('victor'),
            'opt_in'            => true,
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));

        User::create(array(
            'email'             => 'grandma@gmail.com',
            'first_name'        => 'Granny',
            'last_name'         => 'Smith',
            'password'          => Hash::make('grandma'),
            'opt_in'            => true,
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime
        ));
    }
}