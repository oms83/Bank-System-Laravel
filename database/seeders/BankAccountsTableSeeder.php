<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BankAccountsTableSeeder extends Seeder
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

        \DB::table('bank_accounts')->delete();

        \DB::table('bank_accounts')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Omer MEMES',
                'number' => 'TRO00112231',
                'available_balance' => -195.0,
                'ledger_balance' => 1100.0,
                'user_id' => 1,
                'bank_id' => 1,
                'bank_location_id' => 1,
                'created_at' => '2023-03-23 08:19:21',
                'updated_at' => '2023-03-24 10:10:29',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Shafiullah Mansori',
                'number' => 'TRO00112232',
                'available_balance' => 5.0,
                'ledger_balance' => 1340.0,
                'user_id' => 1,
                'bank_id' => 2,
                'bank_location_id' => 2,
                'created_at' => '2023-03-05 08:19:21',
                'updated_at' => '2023-03-05 22:21:22',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Ali Sultan',
                'number' => 'TRO00112233',
                'available_balance' => 500000.0,
                'ledger_balance' => 4000000.0,
                'user_id' => 1,
                'bank_id' => 1,
                'bank_location_id' => 1,
                'created_at' => '2023-03-05 20:59:26',
                'updated_at' => '2023-03-05 22:21:23',
                'deleted_at' => NULL,
            ),
        ));


    }
}
