<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModelHasPermissionsTableSeeder extends Seeder
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

        \DB::table('model_has_permissions')->delete();

        \DB::table('model_has_permissions')->insert(array (
            0 =>
            array (
                'permission_id' => 3,
                'model_type' => 'App\\Models\\User',
                'model_id' => 1,
            ),
            1 =>
            array (
                'permission_id' => 3,
                'model_type' => 'App\\Models\\User',
                'model_id' => 2,
            ),
            2 =>
            array (
                'permission_id' => 3,
                'model_type' => 'App\\Models\\User',
                'model_id' => 3,
            ),
        ));


    }
}
