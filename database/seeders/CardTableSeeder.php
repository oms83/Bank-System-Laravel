<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // note: عند تحديث قاعدة البيانات أولاً يتم حذف الجدول ثم يتم تعبئته بالمعلومات التي بالأسفل
        // note: database yenilediğimizde önce database'daki bilgiler silinir sonra aşağıdaki bilgilerle doldurulur

        \DB::table('cards')->delete();

        \DB::table('cards')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 1,
                'card_type_id' => 1,
                'currency_id' => 1,
                'available_balance' => 5.0,
                'ledger_balance' => 200.0,
                'name' => 'Osman Sultan',
                'number' => '4685881824504879',
                'month' => '07',
                'year' => '28',
                'cvv' => '506',
                'billing_address' => '34, Turkey Istanbul, Esenyurt',
                'zip_code' => '23401',
                'created_at' => '2023-03-30 12:16:11',
                'updated_at' => '2023-03-30 12:16:11',
                'deleted_at' => NULL,
            ),
        ));
    }
}
