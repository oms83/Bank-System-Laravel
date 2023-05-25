<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
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

        \DB::table('roles')->delete();

        \DB::table('roles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Customer',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 05:23:00',
                'updated_at' => '2023-05-25 05:23:00',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'System-Admin',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 05:23:00',
                'updated_at' => '2023-05-25 05:23:00',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'customer-care',
                'guard_name' => 'web',
                'created_at' => '2023-05-25 05:23:00',
                'updated_at' => '2023-05-25 05:23:00',
            ),
        ));


    }
}
