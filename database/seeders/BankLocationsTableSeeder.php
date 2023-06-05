<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BankLocationsTableSeeder extends Seeder
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

        \DB::table('bank_locations')->delete();

        \DB::table('bank_locations')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Turkey',
                'bank_id' => 1,
                'currency_id' => 2,
                'created_at' => '2023-03-23 08:03:21',
                'updated_at' => '2023-03-23 08:03:21',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Turkey',
                'bank_id' => 2,
                'currency_id' => 1,
                'created_at' => '2023-03-23 08:03:21',
                'updated_at' => '2023-03-23 08:03:21',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Turkey',
                'bank_id' => 1,
                'currency_id' => 2,
                'created_at' => '2023-03-23 08:03:21',
                'updated_at' => '2023-03-23 08:03:21',
                'deleted_at' => NULL,
            ),
        ));


    }
}
