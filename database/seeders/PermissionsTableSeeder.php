<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        // note: عند تحديث قاعدة البيانات أولاً يتم حذف الجدول ثم يتم تعبئته بالمعلومات التي بالأسفل
        // note: database yenilediğimizde önce database'daki bilgiler silinir sonra aşağıdaki bilgilerle doldurulur

        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'can-send-message',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 05:23:00',
                'updated_at' => '2023-05-25 05:23:00',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'can-reply-message',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 05:23:00',
                'updated_at' => '2023-05-25 05:23:00',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'login',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 05:23:00',
                'updated_at' => '2023-05-25 05:23:00',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'view-all-cards',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 05:23:00',
                'updated_at' => '2023-05-25 05:23:00',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'add-card',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 05:23:00',
                'updated_at' => '2023-05-25 05:23:00',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'edit-cards',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 05:23:00',
                'updated_at' => '2023-05-25 05:23:00',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'view-all-accounts',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 05:23:00',
                'updated_at' => '2023-05-25 05:23:00',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'add-account',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 05:23:00',
                'updated_at' => '2023-05-25 05:23:00',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'edit-account',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 05:23:00',
                'updated_at' => '2023-05-25 05:23:00',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'view-bank-transactions',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 05:23:00',
                'updated_at' => '2023-05-25 05:23:00',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'add-bank-transactions',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 05:23:00',
                'updated_at' => '2023-05-25 05:23:00',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'view-all-transactions',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 05:23:00',
                'updated_at' => '2023-05-25 05:23:00',
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'delete-account',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 06:16:00',
                'updated_at' => '2023-05-25 06:16:00',
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'restore-account',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 03:22:00',
                'updated_at' => '2023-05-25 03:22:00',
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'view-all-cards',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 07:24:25',
                'updated_at' => '2023-05-25 07:24:25',
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'add-card',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 07:24:25',
                'updated_at' => '2023-05-25 07:24:25',
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'edit-card',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 07:24:25',
                'updated_at' => '2023-05-25 07:24:25',
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'delete-card',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 07:24:25',
                'updated_at' => '2023-05-25 07:24:25',
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'restore-card',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 07:24:25',
                'updated_at' => '2023-05-25 07:24:25',
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'view-card-transactions',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 10:28:18',
                'updated_at' => '2023-05-25 10:28:18',
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'add-card-transaction',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 10:15:10',
                'updated_at' => '2023-05-25 10:15:10',
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'list-users',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 07:23:18',
                'updated_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'add-user',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 07:23:18',
                'updated_at' => '2023-05-25 07:23:18',
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'delete-user',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 07:23:18',
                'updated_at' => '2023-05-25 07:23:18',
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'restore-user',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 07:23:18',
                'updated_at' => '2023-05-25 07:23:18',
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'edit-user',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 07:23:18',
                'updated_at' => '2023-05-25 07:23:18',
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'list-currencies',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'add-currency',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'edit-currency',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'delete-currency',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            30 =>
            array (
                'id' => 31,
                'name' => 'restore-currency',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            31 =>
            array (
                'id' => 32,
                'name' => 'list-card-types',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            32 =>
            array (
                'id' => 33,
                'name' => 'add-card-type',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            33 =>
            array (
                'id' => 34,
                'name' => 'delete-card-type',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            34 =>
            array (
                'id' => 35,
                'name' => 'edit-card-type',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            35 =>
            array (
                'id' => 36,
                'name' => 'restore-card-type',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            36 =>
            array (
                'id' => 37,
                'name' => 'list-banks',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            37 =>
            array (
                'id' => 38,
                'name' => 'add-bank',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            38 =>
            array (
                'id' => 39,
                'name' => 'delete-bank',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            39 =>
            array (
                'id' => 40,
                'name' => 'edit-bank',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            40 =>
            array (
                'id' => 41,
                'name' => 'restore-bank',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            41 =>
            array (
                'id' => 42,
                'name' => 'list-bank-locations',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            42 =>
            array (
                'id' => 43,
                'name' => 'add-bank-location',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            43 =>
            array (
                'id' => 44,
                'name' => 'delete-bank-location',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            44 =>
            array (
                'id' => 45,
                'name' => 'edit-bank-location',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            45 =>
            array (
                'id' => 46,
                'name' => 'restore-bank-location',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
            46 =>
            array (
                'id' => 47,
                'name' => 'change-password',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 13:22:20',
                'updated_at' => '2023-05-25 13:22:20',
            ),
        ));


    }
}
