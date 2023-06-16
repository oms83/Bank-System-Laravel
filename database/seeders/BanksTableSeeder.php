<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
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

        \DB::table('banks')->delete();

        \DB::table('banks')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Ziraat Bankasi',
                'picture' => '',
                'code' => 'TRZR',
                'created_at' => '2022-03-23 08:19:21',
                'updated_at' => '2022-03-23 08:19:21',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Vakifkatilim Bankasi',
                'picture' => '',
                'code' => 'TRVK',
                'created_at' => '2022-03-23 08:19:21',
                'updated_at' => '2022-03-23 08:19:21',
                'deleted_at' => NULL,
            ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Kuveyt Bankasi',
                    'picture' => '',
                    'code' => 'TRK',
                    'created_at' => '2023-03-23 08:19:21',
                    'updated_at' => '2023-03-23 08:19:21',
                    'deleted_at' => NULL,
                ),
        ));


    }
}
