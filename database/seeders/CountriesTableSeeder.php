<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        // ctrl+alt+shift+j
        // note: عند تحديث قاعدة البيانات أولاً يتم حذف الجدول ثم يتم تعبئته بالمعلومات التي بالأسفل
        // note: database yenilediğimizde önce database'daki bilgiler silinir sonra aşağıdaki bilgilerle doldurulur

        \DB::table('countries')->delete();

        \DB::table('countries')->insert(array (
            0 =>
            array (
                'id' => 90,
                'code' => 'TR',
                'name' => 'Turkey',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
        ));


    }
}
