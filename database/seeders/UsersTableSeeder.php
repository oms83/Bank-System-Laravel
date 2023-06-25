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
                'id' => 1,
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
            1 =>
            array (
                'id' => 2,
                'picture' => 'https://cdn1.iconfinder.com/data/icons/bokbokstars-121-classic-stock-icons-1/512/person-man.png',
                'first_name' => 'Ömer',
                'middle_name' => 'Ahmed',
                'last_name' => 'MEMES',
                'email' => 'ali@gmail.com',
                'alt_email' => 'ali83@gmail.com',
                'username' => 'ali',
                'phone_number' => '05394654654',
                'email_verified_at' => NULL,
                'password' => bcrypt('#4#4'),
                'country_id' => +90,
                'description' => 'Customer',
                'address' => 'Turkiye Hatay 31, Antakya, Merkez',
                'remember_token' => NULL,
                'created_at' => '2023-05-03 19:43:36',
                'updated_at' => '2023-05-03 19:43:36',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'picture' => 'https://cdn1.iconfinder.com/data/icons/bokbokstars-121-classic-stock-icons-1/512/person-man.png',
                'first_name' => 'Shafiullah',
                'middle_name' => 'Mohammed Dawood',
                'last_name' => 'Mansori',
                'email' => 'shafiullah1@gmail.com',
                'alt_email' => 'shafiullah2@gmail.com',
                'username' => 'mansori1',
                'phone_number' => '05528127401',
                'email_verified_at' => NULL,
                'password' => bcrypt('#4#4'),
                'country_id' => +90,
                'description' => 'Customer Care Account',
                'address' => 'Turkiye Elazig 23, AtaSehir, Merkez',
                'remember_token' => NULL,
                'created_at' => '2023-05-03 19:43:36',
                'updated_at' => '2023-05-03 19:43:36',
                'deleted_at' => NULL,
            ),
        ));


    }
}
