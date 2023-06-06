<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CardType extends Seeder
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

        \DB::table('card_types')->delete();

        \DB::table('card_types')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Mastercard',
                'picture' => 'https://www.mastercard.us/content/dam/mccom/global/logos/logo-mastercard-mobile.svg',
                'style' => 'bg-card-mastercard',
                'created_at' => '2023-03-30 13:16:19',
                'updated_at' => '2023-03-30 13:16:19',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'VISA',
                'picture' => 'https://i.pinimg.com/originals/55/a3/c2/55a3c2e6e01843e209cf2c2b279363b9.png',
                'style' => 'bg-card-visa',
                'created_at' => '2023-03-30 13:16:19',
                'updated_at' => '2023-03-30 13:16:19',
            ),

            2 =>
                array (
                    'id' => 3,
                    'name' => 'Paypal',
                    'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/PayPal.svg/1200px-PayPal.svg.png?20230314142951',
                    'style' => 'bg-card-paypal',
                    'created_at' => '2023-03-30 13:16:19',
                    'updated_at' => '2023-03-30 13:16:19',
                ),

        ));


    }
}
