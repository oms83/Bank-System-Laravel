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
                'id' => 1,
                'code' => 'AF',
                'name' => 'Afghanistan',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            1 =>
            array (
                'id' => 2,
                'code' => 'AL',
                'name' => 'Albania',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            2 =>
            array (
                'id' => 3,
                'code' => 'DZ',
                'name' => 'Algeria',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            3 =>
            array (
                'id' => 4,
                'code' => 'DS',
                'name' => 'American Samoa',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            4 =>
            array (
                'id' => 5,
                'code' => 'AD',
                'name' => 'Andorra',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            5 =>
            array (
                'id' => 6,
                'code' => 'AO',
                'name' => 'Angola',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            6 =>
            array (
                'id' => 7,
                'code' => 'AI',
                'name' => 'Anguilla',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            7 =>
            array (
                'id' => 8,
                'code' => 'AQ',
                'name' => 'Antarctica',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            8 =>
            array (
                'id' => 9,
                'code' => 'AG',
                'name' => 'Antigua and Barbuda',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            9 =>
            array (
                'id' => 10,
                'code' => 'AR',
                'name' => 'Argentina',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            10 =>
            array (
                'id' => 11,
                'code' => 'AM',
                'name' => 'Armenia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            11 =>
            array (
                'id' => 12,
                'code' => 'AW',
                'name' => 'Aruba',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            12 =>
            array (
                'id' => 13,
                'code' => 'AU',
                'name' => 'Australia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            13 =>
            array (
                'id' => 14,
                'code' => 'AT',
                'name' => 'Austria',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            14 =>
            array (
                'id' => 15,
                'code' => 'AZ',
                'name' => 'Azerbaijan',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            15 =>
            array (
                'id' => 16,
                'code' => 'BS',
                'name' => 'Bahamas',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            16 =>
            array (
                'id' => 17,
                'code' => 'BH',
                'name' => 'Bahrain',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            17 =>
            array (
                'id' => 18,
                'code' => 'BD',
                'name' => 'Bangladesh',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            18 =>
            array (
                'id' => 19,
                'code' => 'BB',
                'name' => 'Barbados',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            19 =>
            array (
                'id' => 20,
                'code' => 'BY',
                'name' => 'Belarus',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            20 =>
            array (
                'id' => 21,
                'code' => 'BE',
                'name' => 'Belgium',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            21 =>
            array (
                'id' => 22,
                'code' => 'BZ',
                'name' => 'Belize',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            22 =>
            array (
                'id' => 23,
                'code' => 'BJ',
                'name' => 'Benin',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            23 =>
            array (
                'id' => 24,
                'code' => 'BM',
                'name' => 'Bermuda',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            24 =>
            array (
                'id' => 25,
                'code' => 'BT',
                'name' => 'Bhutan',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            25 =>
            array (
                'id' => 26,
                'code' => 'BO',
                'name' => 'Bolivia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            26 =>
            array (
                'id' => 27,
                'code' => 'BA',
                'name' => 'Bosnia and Herzegovina',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            27 =>
            array (
                'id' => 28,
                'code' => 'BW',
                'name' => 'Botswana',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            28 =>
            array (
                'id' => 29,
                'code' => 'BV',
                'name' => 'Bouvet Island',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            29 =>
            array (
                'id' => 30,
                'code' => 'BR',
                'name' => 'Brazil',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            30 =>
            array (
                'id' => 31,
                'code' => 'IO',
                'name' => 'British Indian Ocean Territory',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            31 =>
            array (
                'id' => 32,
                'code' => 'BN',
                'name' => 'Brunei Darussalam',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            32 =>
            array (
                'id' => 33,
                'code' => 'BG',
                'name' => 'Bulgaria',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            33 =>
            array (
                'id' => 34,
                'code' => 'BF',
                'name' => 'Burkina Faso',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            34 =>
            array (
                'id' => 35,
                'code' => 'BI',
                'name' => 'Burundi',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            35 =>
            array (
                'id' => 36,
                'code' => 'KH',
                'name' => 'Cambodia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            36 =>
            array (
                'id' => 37,
                'code' => 'CM',
                'name' => 'Cameroon',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            37 =>
            array (
                'id' => 38,
                'code' => 'CA',
                'name' => 'Canada',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            38 =>
            array (
                'id' => 39,
                'code' => 'CV',
                'name' => 'Cape Verde',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            39 =>
            array (
                'id' => 40,
                'code' => 'KY',
                'name' => 'Cayman Islands',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            40 =>
            array (
                'id' => 41,
                'code' => 'CF',
                'name' => 'Central African Republic',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            41 =>
            array (
                'id' => 42,
                'code' => 'TD',
                'name' => 'Chad',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            42 =>
            array (
                'id' => 43,
                'code' => 'CL',
                'name' => 'Chile',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            43 =>
            array (
                'id' => 44,
                'code' => 'CN',
                'name' => 'China',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            44 =>
            array (
                'id' => 45,
                'code' => 'CX',
                'name' => 'Christmas Island',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            45 =>
            array (
                'id' => 46,
                'code' => 'CC',
            'name' => 'Cocos (Keeling) Islands',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            46 =>
            array (
                'id' => 47,
                'code' => 'CO',
                'name' => 'Colombia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            47 =>
            array (
                'id' => 48,
                'code' => 'KM',
                'name' => 'Comoros',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            48 =>
            array (
                'id' => 49,
                'code' => 'CG',
                'name' => 'Congo',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            49 =>
            array (
                'id' => 50,
                'code' => 'CK',
                'name' => 'Cook Islands',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            50 =>
            array (
                'id' => 51,
                'code' => 'CR',
                'name' => 'Costa Rica',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            51 =>
            array (
                'id' => 52,
                'code' => 'HR',
            'name' => 'Croatia (Hrvatska)',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            52 =>
            array (
                'id' => 53,
                'code' => 'CU',
                'name' => 'Cuba',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            53 =>
            array (
                'id' => 54,
                'code' => 'CY',
                'name' => 'Cyprus',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            54 =>
            array (
                'id' => 55,
                'code' => 'CZ',
                'name' => 'Czech Republic',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            55 =>
            array (
                'id' => 56,
                'code' => 'DK',
                'name' => 'Denmark',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            56 =>
            array (
                'id' => 57,
                'code' => 'DJ',
                'name' => 'Djibouti',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            57 =>
            array (
                'id' => 58,
                'code' => 'DM',
                'name' => 'Dominica',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            58 =>
            array (
                'id' => 59,
                'code' => 'DO',
                'name' => 'Dominican Republic',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            59 =>
            array (
                'id' => 60,
                'code' => 'TP',
                'name' => 'East Timor',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            60 =>
            array (
                'id' => 61,
                'code' => 'EC',
                'name' => 'Ecuador',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            61 =>
            array (
                'id' => 62,
                'code' => 'EG',
                'name' => 'Egypt',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            62 =>
            array (
                'id' => 63,
                'code' => 'SV',
                'name' => 'El Salvador',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            63 =>
            array (
                'id' => 64,
                'code' => 'GQ',
                'name' => 'Equatorial Guinea',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            64 =>
            array (
                'id' => 65,
                'code' => 'ER',
                'name' => 'Eritrea',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            65 =>
            array (
                'id' => 66,
                'code' => 'EE',
                'name' => 'Estonia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            66 =>
            array (
                'id' => 67,
                'code' => 'ET',
                'name' => 'Ethiopia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            67 =>
            array (
                'id' => 68,
                'code' => 'FK',
            'name' => 'Falkland Islands (Malvinas)',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            68 =>
            array (
                'id' => 69,
                'code' => 'FO',
                'name' => 'Faroe Islands',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            69 =>
            array (
                'id' => 70,
                'code' => 'FJ',
                'name' => 'Fiji',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            70 =>
            array (
                'id' => 71,
                'code' => 'FI',
                'name' => 'Finland',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            71 =>
            array (
                'id' => 72,
                'code' => 'FR',
                'name' => 'France',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            72 =>
            array (
                'id' => 73,
                'code' => 'FX',
                'name' => 'France, Metropolitan',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            73 =>
            array (
                'id' => 74,
                'code' => 'GF',
                'name' => 'French Guiana',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            74 =>
            array (
                'id' => 75,
                'code' => 'PF',
                'name' => 'French Polynesia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            75 =>
            array (
                'id' => 76,
                'code' => 'TF',
                'name' => 'French Southern Territories',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            76 =>
            array (
                'id' => 77,
                'code' => 'GA',
                'name' => 'Gabon',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            77 =>
            array (
                'id' => 78,
                'code' => 'GM',
                'name' => 'Gambia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            78 =>
            array (
                'id' => 79,
                'code' => 'GE',
                'name' => 'Georgia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            79 =>
            array (
                'id' => 80,
                'code' => 'DE',
                'name' => 'Germany',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            80 =>
            array (
                'id' => 81,
                'code' => 'GH',
                'name' => 'Ghana',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            81 =>
            array (
                'id' => 82,
                'code' => 'GI',
                'name' => 'Gibraltar',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            82 =>
            array (
                'id' => 83,
                'code' => 'GK',
                'name' => 'Guernsey',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            83 =>
            array (
                'id' => 84,
                'code' => 'GR',
                'name' => 'Greece',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            84 =>
            array (
                'id' => 85,
                'code' => 'GL',
                'name' => 'Greenland',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            85 =>
            array (
                'id' => 86,
                'code' => 'GD',
                'name' => 'Grenada',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            86 =>
            array (
                'id' => 87,
                'code' => 'GP',
                'name' => 'Guadeloupe',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            87 =>
            array (
                'id' => 88,
                'code' => 'GU',
                'name' => 'Guam',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            88 =>
            array (
                'id' => 89,
                'code' => 'GT',
                'name' => 'Guatemala',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            89 =>
            array (
                'id' => 90,
                'code' => 'TR',
                'name' => 'Turkey',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            90 =>
            array (
                'id' => 91,
                'code' => 'GW',
                'name' => 'Guinea-Bissau',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            91 =>
            array (
                'id' => 92,
                'code' => 'GY',
                'name' => 'Guyana',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            92 =>
            array (
                'id' => 93,
                'code' => 'HT',
                'name' => 'Haiti',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            93 =>
            array (
                'id' => 94,
                'code' => 'HM',
                'name' => 'Heard and Mc Donald Islands',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            94 =>
            array (
                'id' => 95,
                'code' => 'HN',
                'name' => 'Honduras',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            95 =>
            array (
                'id' => 96,
                'code' => 'HK',
                'name' => 'Hong Kong',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            96 =>
            array (
                'id' => 97,
                'code' => 'HU',
                'name' => 'Hungary',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            97 =>
            array (
                'id' => 98,
                'code' => 'IS',
                'name' => 'Iceland',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            98 =>
            array (
                'id' => 99,
                'code' => 'IN',
                'name' => 'India',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            99 =>
            array (
                'id' => 100,
                'code' => 'IM',
                'name' => 'Isle of Man',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            100 =>
            array (
                'id' => 101,
                'code' => 'ID',
                'name' => 'Indonesia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            101 =>
            array (
                'id' => 102,
                'code' => 'IR',
            'name' => 'Iran (Islamic Republic of)',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            102 =>
            array (
                'id' => 103,
                'code' => 'IQ',
                'name' => 'Iraq',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            103 =>
            array (
                'id' => 104,
                'code' => 'IE',
                'name' => 'Ireland',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            104 =>
            array (
                'id' => 105,
                'code' => 'IL',
                'name' => 'Israel',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            105 =>
            array (
                'id' => 106,
                'code' => 'IT',
                'name' => 'Italy',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            106 =>
            array (
                'id' => 107,
                'code' => 'CI',
                'name' => 'Ivory Coast',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            107 =>
            array (
                'id' => 108,
                'code' => 'JE',
                'name' => 'Jersey',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            108 =>
            array (
                'id' => 109,
                'code' => 'JM',
                'name' => 'Jamaica',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            109 =>
            array (
                'id' => 110,
                'code' => 'JP',
                'name' => 'Japan',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            110 =>
            array (
                'id' => 111,
                'code' => 'JO',
                'name' => 'Jordan',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            111 =>
            array (
                'id' => 112,
                'code' => 'KZ',
                'name' => 'Kazakhstan',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            112 =>
            array (
                'id' => 113,
                'code' => 'KE',
                'name' => 'Kenya',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            113 =>
            array (
                'id' => 114,
                'code' => 'KI',
                'name' => 'Kiribati',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            114 =>
            array (
                'id' => 115,
                'code' => 'KP',
                'name' => 'Korea, Democratic People\'s Republic of',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            115 =>
            array (
                'id' => 116,
                'code' => 'KR',
                'name' => 'Korea, Republic of',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            116 =>
            array (
                'id' => 117,
                'code' => 'XK',
                'name' => 'Kosovo',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            117 =>
            array (
                'id' => 118,
                'code' => 'KW',
                'name' => 'Kuwait',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            118 =>
            array (
                'id' => 119,
                'code' => 'KG',
                'name' => 'Kyrgyzstan',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            119 =>
            array (
                'id' => 120,
                'code' => 'LA',
                'name' => 'Lao People\'s Democratic Republic',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            120 =>
            array (
                'id' => 121,
                'code' => 'LV',
                'name' => 'Latvia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            121 =>
            array (
                'id' => 122,
                'code' => 'LB',
                'name' => 'Lebanon',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            122 =>
            array (
                'id' => 123,
                'code' => 'LS',
                'name' => 'Lesotho',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            123 =>
            array (
                'id' => 124,
                'code' => 'LR',
                'name' => 'Liberia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            124 =>
            array (
                'id' => 125,
                'code' => 'LY',
                'name' => 'Libyan Arab Jamahiriya',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            125 =>
            array (
                'id' => 126,
                'code' => 'LI',
                'name' => 'Liechtenstein',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            126 =>
            array (
                'id' => 127,
                'code' => 'LT',
                'name' => 'Lithuania',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            127 =>
            array (
                'id' => 128,
                'code' => 'LU',
                'name' => 'Luxembourg',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            128 =>
            array (
                'id' => 129,
                'code' => 'MO',
                'name' => 'Macau',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            129 =>
            array (
                'id' => 130,
                'code' => 'MK',
                'name' => 'Macedonia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            130 =>
            array (
                'id' => 131,
                'code' => 'MG',
                'name' => 'Madagascar',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            131 =>
            array (
                'id' => 132,
                'code' => 'MW',
                'name' => 'Malawi',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            132 =>
            array (
                'id' => 133,
                'code' => 'MY',
                'name' => 'Malaysia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            133 =>
            array (
                'id' => 134,
                'code' => 'MV',
                'name' => 'Maldives',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            134 =>
            array (
                'id' => 135,
                'code' => 'ML',
                'name' => 'Mali',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            135 =>
            array (
                'id' => 136,
                'code' => 'MT',
                'name' => 'Malta',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            136 =>
            array (
                'id' => 137,
                'code' => 'MH',
                'name' => 'Marshall Islands',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            137 =>
            array (
                'id' => 138,
                'code' => 'MQ',
                'name' => 'Martinique',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            138 =>
            array (
                'id' => 139,
                'code' => 'MR',
                'name' => 'Mauritania',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            139 =>
            array (
                'id' => 140,
                'code' => 'MU',
                'name' => 'Mauritius',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            140 =>
            array (
                'id' => 141,
                'code' => 'TY',
                'name' => 'Mayotte',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            141 =>
            array (
                'id' => 142,
                'code' => 'MX',
                'name' => 'Mexico',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            142 =>
            array (
                'id' => 143,
                'code' => 'FM',
                'name' => 'Micronesia, Federated States of',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            143 =>
            array (
                'id' => 144,
                'code' => 'MD',
                'name' => 'Moldova, Republic of',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            144 =>
            array (
                'id' => 145,
                'code' => 'MC',
                'name' => 'Monaco',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            145 =>
            array (
                'id' => 146,
                'code' => 'MN',
                'name' => 'Mongolia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            146 =>
            array (
                'id' => 147,
                'code' => 'ME',
                'name' => 'Montenegro',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            147 =>
            array (
                'id' => 148,
                'code' => 'MS',
                'name' => 'Montserrat',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            148 =>
            array (
                'id' => 149,
                'code' => 'MA',
                'name' => 'Morocco',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            149 =>
            array (
                'id' => 150,
                'code' => 'MZ',
                'name' => 'Mozambique',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            150 =>
            array (
                'id' => 151,
                'code' => 'MM',
                'name' => 'Myanmar',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            151 =>
            array (
                'id' => 152,
                'code' => 'NA',
                'name' => 'Namibia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            152 =>
            array (
                'id' => 153,
                'code' => 'NR',
                'name' => 'Nauru',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            153 =>
            array (
                'id' => 154,
                'code' => 'NP',
                'name' => 'Nepal',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            154 =>
            array (
                'id' => 155,
                'code' => 'NL',
                'name' => 'Netherlands',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            155 =>
            array (
                'id' => 156,
                'code' => 'AN',
                'name' => 'Netherlands Antilles',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            156 =>
            array (
                'id' => 157,
                'code' => 'NC',
                'name' => 'New Caledonia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            157 =>
            array (
                'id' => 158,
                'code' => 'NZ',
                'name' => 'New Zealand',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            158 =>
            array (
                'id' => 159,
                'code' => 'NI',
                'name' => 'Nicaragua',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            159 =>
            array (
                'id' => 160,
                'code' => 'NE',
                'name' => 'Niger',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            160 =>
            array (
                'id' => 161,
                'code' => 'NG',
                'name' => 'Nigeria',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            161 =>
            array (
                'id' => 162,
                'code' => 'NU',
                'name' => 'Niue',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            162 =>
            array (
                'id' => 163,
                'code' => 'NF',
                'name' => 'Norfolk Island',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            163 =>
            array (
                'id' => 164,
                'code' => 'MP',
                'name' => 'Northern Mariana Islands',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            164 =>
            array (
                'id' => 165,
                'code' => 'NO',
                'name' => 'Norway',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            165 =>
            array (
                'id' => 166,
                'code' => 'OM',
                'name' => 'Oman',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            166 =>
            array (
                'id' => 167,
                'code' => 'PK',
                'name' => 'Pakistan',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            167 =>
            array (
                'id' => 168,
                'code' => 'PW',
                'name' => 'Palau',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            168 =>
            array (
                'id' => 169,
                'code' => 'PS',
                'name' => 'Palestine',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            169 =>
            array (
                'id' => 170,
                'code' => 'PA',
                'name' => 'Panama',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            170 =>
            array (
                'id' => 171,
                'code' => 'PG',
                'name' => 'Papua New Guinea',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            171 =>
            array (
                'id' => 172,
                'code' => 'PY',
                'name' => 'Paraguay',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            172 =>
            array (
                'id' => 173,
                'code' => 'PE',
                'name' => 'Peru',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            173 =>
            array (
                'id' => 174,
                'code' => 'PH',
                'name' => 'Philippines',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            174 =>
            array (
                'id' => 175,
                'code' => 'PN',
                'name' => 'Pitcairn',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            175 =>
            array (
                'id' => 176,
                'code' => 'PL',
                'name' => 'Poland',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            176 =>
            array (
                'id' => 177,
                'code' => 'PT',
                'name' => 'Portugal',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            177 =>
            array (
                'id' => 178,
                'code' => 'PR',
                'name' => 'Puerto Rico',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            178 =>
            array (
                'id' => 179,
                'code' => 'QA',
                'name' => 'Qatar',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            179 =>
            array (
                'id' => 180,
                'code' => 'RE',
                'name' => 'Reunion',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            180 =>
            array (
                'id' => 181,
                'code' => 'RO',
                'name' => 'Romania',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            181 =>
            array (
                'id' => 182,
                'code' => 'RU',
                'name' => 'Russian Federation',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            182 =>
            array (
                'id' => 183,
                'code' => 'RW',
                'name' => 'Rwanda',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            183 =>
            array (
                'id' => 184,
                'code' => 'KN',
                'name' => 'Saint Kitts and Nevis',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            184 =>
            array (
                'id' => 185,
                'code' => 'LC',
                'name' => 'Saint Lucia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            185 =>
            array (
                'id' => 186,
                'code' => 'VC',
                'name' => 'Saint Vincent and the Grenadines',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            186 =>
            array (
                'id' => 187,
                'code' => 'WS',
                'name' => 'Samoa',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            187 =>
            array (
                'id' => 188,
                'code' => 'SM',
                'name' => 'San Marino',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            188 =>
            array (
                'id' => 189,
                'code' => 'ST',
                'name' => 'Sao Tome and Principe',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            189 =>
            array (
                'id' => 190,
                'code' => 'SA',
                'name' => 'Saudi Arabia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            190 =>
            array (
                'id' => 191,
                'code' => 'SN',
                'name' => 'Senegal',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            191 =>
            array (
                'id' => 192,
                'code' => 'RS',
                'name' => 'Serbia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            192 =>
            array (
                'id' => 193,
                'code' => 'SC',
                'name' => 'Seychelles',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            193 =>
            array (
                'id' => 194,
                'code' => 'SL',
                'name' => 'Sierra Leone',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            194 =>
            array (
                'id' => 195,
                'code' => 'SG',
                'name' => 'Singapore',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            195 =>
            array (
                'id' => 196,
                'code' => 'SK',
                'name' => 'Slovakia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            196 =>
            array (
                'id' => 197,
                'code' => 'SI',
                'name' => 'Slovenia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            197 =>
            array (
                'id' => 198,
                'code' => 'SB',
                'name' => 'Solomon Islands',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            198 =>
            array (
                'id' => 199,
                'code' => 'SO',
                'name' => 'Somalia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            199 =>
            array (
                'id' => 200,
                'code' => 'ZA',
                'name' => 'South Africa',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            200 =>
            array (
                'id' => 201,
                'code' => 'GS',
                'name' => 'South Georgia South Sandwich Islands',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            201 =>
            array (
                'id' => 202,
                'code' => 'SS',
                'name' => 'South Sudan',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            202 =>
            array (
                'id' => 203,
                'code' => 'ES',
                'name' => 'Spain',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            203 =>
            array (
                'id' => 204,
                'code' => 'LK',
                'name' => 'Sri Lanka',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            204 =>
            array (
                'id' => 205,
                'code' => 'SH',
                'name' => 'St. Helena',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            205 =>
            array (
                'id' => 206,
                'code' => 'PM',
                'name' => 'St. Pierre and Miquelon',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            206 =>
            array (
                'id' => 207,
                'code' => 'SD',
                'name' => 'Sudan',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            207 =>
            array (
                'id' => 208,
                'code' => 'SR',
                'name' => 'Suriname',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            208 =>
            array (
                'id' => 209,
                'code' => 'SJ',
                'name' => 'Svalbard and Jan Mayen Islands',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            209 =>
            array (
                'id' => 210,
                'code' => 'SZ',
                'name' => 'Swaziland',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            210 =>
            array (
                'id' => 211,
                'code' => 'SE',
                'name' => 'Sweden',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            211 =>
            array (
                'id' => 212,
                'code' => 'CH',
                'name' => 'Switzerland',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            212 =>
            array (
                'id' => 213,
                'code' => 'SY',
                'name' => 'Syrian Arab Republic',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            213 =>
            array (
                'id' => 214,
                'code' => 'TW',
                'name' => 'Taiwan',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            214 =>
            array (
                'id' => 215,
                'code' => 'TJ',
                'name' => 'Tajikistan',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            215 =>
            array (
                'id' => 216,
                'code' => 'TZ',
                'name' => 'Tanzania, United Republic of',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            216 =>
            array (
                'id' => 217,
                'code' => 'TH',
                'name' => 'Thailand',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            217 =>
            array (
                'id' => 218,
                'code' => 'TG',
                'name' => 'Togo',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            218 =>
            array (
                'id' => 219,
                'code' => 'TK',
                'name' => 'Tokelau',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            219 =>
            array (
                'id' => 220,
                'code' => 'TO',
                'name' => 'Tonga',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            220 =>
            array (
                'id' => 221,
                'code' => 'TT',
                'name' => 'Trinidad and Tobago',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            221 =>
            array (
                'id' => 222,
                'code' => 'TN',
                'name' => 'Tunisia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            222 =>
            array (
                'id' => 223,
                'code' => 'GN',
                'name' => 'Guinea',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            223 =>
            array (
                'id' => 224,
                'code' => 'TM',
                'name' => 'Turkmenistan',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            224 =>
            array (
                'id' => 225,
                'code' => 'TC',
                'name' => 'Turks and Caicos Islands',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            225 =>
            array (
                'id' => 226,
                'code' => 'TV',
                'name' => 'Tuvalu',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            226 =>
            array (
                'id' => 227,
                'code' => 'UG',
                'name' => 'Uganda',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            227 =>
            array (
                'id' => 228,
                'code' => 'UA',
                'name' => 'Ukraine',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            228 =>
            array (
                'id' => 229,
                'code' => 'AE',
                'name' => 'United Arab Emirates',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            229 =>
            array (
                'id' => 230,
                'code' => 'GB',
                'name' => 'United Kingdom',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            230 =>
            array (
                'id' => 231,
                'code' => 'US',
                'name' => 'United States',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            231 =>
            array (
                'id' => 232,
                'code' => 'UM',
                'name' => 'United States minor outlying islands',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            232 =>
            array (
                'id' => 233,
                'code' => 'UY',
                'name' => 'Uruguay',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            233 =>
            array (
                'id' => 234,
                'code' => 'UZ',
                'name' => 'Uzbekistan',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            234 =>
            array (
                'id' => 235,
                'code' => 'VU',
                'name' => 'Vanuatu',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            235 =>
            array (
                'id' => 236,
                'code' => 'VA',
                'name' => 'Vatican City State',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            236 =>
            array (
                'id' => 237,
                'code' => 'VE',
                'name' => 'Venezuela',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            237 =>
            array (
                'id' => 238,
                'code' => 'VN',
                'name' => 'Vietnam',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            238 =>
            array (
                'id' => 239,
                'code' => 'VG',
            'name' => 'Virgin Islands (British)',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            239 =>
            array (
                'id' => 240,
                'code' => 'VI',
            'name' => 'Virgin Islands (U.S.)',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            240 =>
            array (
                'id' => 241,
                'code' => 'WF',
                'name' => 'Wallis and Futuna Islands',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            241 =>
            array (
                'id' => 242,
                'code' => 'EH',
                'name' => 'Western Sahara',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            242 =>
            array (
                'id' => 243,
                'code' => 'YE',
                'name' => 'Yemen',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            243 =>
            array (
                'id' => 244,
                'code' => 'ZR',
                'name' => 'Zaire',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            244 =>
            array (
                'id' => 245,
                'code' => 'ZM',
                'name' => 'Zambia',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
            245 =>
            array (
                'id' => 246,
                'code' => 'ZW',
                'name' => 'Zimbabwe',
                'created_at' => '2023-03-07 10:11:33',
                'updated_at' => '2023-03-07 10:11:33',
            ),
        ));


    }
}
