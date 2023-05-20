<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 2,
                'picture' => 'https://cdn1.iconfinder.com/data/icons/bokbokstars-121-classic-stock-icons-1/512/person-man.png',
                'first_name' => 'Ömer',
                'middle_name' => 'Ahmed',
                'last_name' => 'MEMES',
                'email' => 'admin@gmail.com',
                'alt_email' => 'oms83@gmail.com',
                'username' => 'admin',
                'phone_number' => '05398914803',
                'email_verified_at' => NULL,
                'password' => bcrypt('#4#4'),
                'country_id' => +90,
                'description' => 'System Admin Account',
                'address' => 'Turkiye Hatay 31, Antakya, Merkez',
                'remember_token' => NULL,
                'created_at' => '2023-05-20 01:50:36',
                'updated_at' => '2023-05-20 01:50:36',
                'deleted_at' => NULL,
            ),
        ));


    }
}
