<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('currencies')->delete();

        \DB::table('currencies')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'US Dollars',
                'symbol' => '$',
                'created_at' => '2023-03-23 08:19:21',
                'updated_at' => '2023-03-23 08:19:21',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Turk Lira',
                'symbol' => '₺',
                'created_at' => '2023-03-23 08:19:21',
                'updated_at' => '2023-03-23 08:19:21',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Pound',
                'symbol' => '£',
                'created_at' => '2023-03-23 08:19:21',
                'updated_at' => '2023-03-23 08:19:21',
            ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Euro',
                    'symbol' => '€',
                    'created_at' => '2023-03-23 08:19:21',
                    'updated_at' => '2023-03-23 08:19:21',
                ),
        ));


    }
}
