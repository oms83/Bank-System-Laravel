<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BankTransactionsTableSeeder extends Seeder
{

    /*
     * Auto generated seed file
    Auto generated seed file
    إرسال البيانات بشكل تلقائي إلى قاعدة البيانات
    biligileri otomtik olarak database'e gönderiliyor
     */
    public function run()
    {


        \DB::table('bank_transactions')->delete();

        \DB::table('bank_transactions')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'transaction_code' => 'LMLSDW002',
                    'narration' => 'Test Credit',
                    'amount' => 190.0,
                    'user_id' => 1,
                    'bank_account_id' => 1,
                    'type' => 'credit',
                    'status' => 'successful',
                    'created_at' => '2023-03-23 08:19:21',
                    'updated_at' => '2023-03-23 08:19:21',
                    'deleted_at' => NULL,
                ),
            1 =>
                array (
                    'id' => 2,
                    'transaction_code' => 'LMLSDW0W323',
                    'narration' => 'Debit',
                    'amount' => 20.0,
                    'user_id' => 1,
                    'bank_account_id' => 1,
                    'type' => 'debit',
                    'status' => 'pending',
                    'created_at' => '2023-03-23 08:19:21',
                    'updated_at' => '2023-03-23 08:19:21',
                    'deleted_at' => NULL,
                ),
            2 =>
                array (
                    'id' => 3,
                    'transaction_code' => 'LMLSDW013323',
                    'narration' => 'Test Credit',
                    'amount' => 10.0,
                    'user_id' => 1,
                    'bank_account_id' => 1,
                    'type' => 'credit',
                    'status' => 'failed',
                    'created_at' => '2023-03-23 08:19:21',
                    'updated_at' => '2023-03-23 08:19:21',
                    'deleted_at' => NULL,
                ),
            3 =>
                array (
                    'id' => 4,
                    'transaction_code' => 'LMLSDW0WE02',
                    'narration' => 'Debit',
                    'amount' => 10.0,
                    'user_id' => 1,
                    'bank_account_id' => 1,
                    'type' => 'debit',
                    'status' => 'successful',
                    'created_at' => '2023-03-23 08:19:21',
                    'updated_at' => '2023-03-23 08:19:21',
                    'deleted_at' => NULL,
                ),
            4 =>
                array (
                    'id' => 5,
                    'transaction_code' => 'LMLSDW023323',
                    'narration' => 'Test Credit',
                    'amount' => 118.0,
                    'user_id' => 1,
                    'bank_account_id' => 2,
                    'type' => 'credit',
                    'status' => 'successful',
                    'created_at' => '2023-03-23 08:19:21',
                    'updated_at' => '2023-03-23 08:19:21',
                    'deleted_at' => NULL,
                ),
        ));


    }
}
