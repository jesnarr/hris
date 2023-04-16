<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NationalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('nationals')->delete();
        
        \DB::table('nationals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nationality' => 'Afghan',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            1 => 
            array (
                'id' => 2,
                'nationality' => 'Albanian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            2 => 
            array (
                'id' => 3,
                'nationality' => 'Algerian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            3 => 
            array (
                'id' => 4,
                'nationality' => 'American',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            4 => 
            array (
                'id' => 5,
                'nationality' => 'Andorran',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            5 => 
            array (
                'id' => 6,
                'nationality' => 'Angolan',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            6 => 
            array (
                'id' => 7,
                'nationality' => 'Antiguans',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            7 => 
            array (
                'id' => 8,
                'nationality' => 'Argentinean',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            8 => 
            array (
                'id' => 9,
                'nationality' => 'Armenian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            9 => 
            array (
                'id' => 10,
                'nationality' => 'Australian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            10 => 
            array (
                'id' => 11,
                'nationality' => 'Austrian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            11 => 
            array (
                'id' => 12,
                'nationality' => 'Azerbaijani',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            12 => 
            array (
                'id' => 13,
                'nationality' => 'Bahamian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            13 => 
            array (
                'id' => 14,
                'nationality' => 'Bahraini',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            14 => 
            array (
                'id' => 15,
                'nationality' => 'Bangladeshi',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            15 => 
            array (
                'id' => 16,
                'nationality' => 'Barbadian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            16 => 
            array (
                'id' => 17,
                'nationality' => 'Barbudans',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            17 => 
            array (
                'id' => 18,
                'nationality' => 'Batswana',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            18 => 
            array (
                'id' => 19,
                'nationality' => 'Belarusian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            19 => 
            array (
                'id' => 20,
                'nationality' => 'Belgian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            20 => 
            array (
                'id' => 21,
                'nationality' => 'Belizean',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            21 => 
            array (
                'id' => 22,
                'nationality' => 'Beninese',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            22 => 
            array (
                'id' => 23,
                'nationality' => 'Bhutanese',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            23 => 
            array (
                'id' => 24,
                'nationality' => 'Bolivian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            24 => 
            array (
                'id' => 25,
                'nationality' => 'Bosnian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            25 => 
            array (
                'id' => 26,
                'nationality' => 'Brazilian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            26 => 
            array (
                'id' => 27,
                'nationality' => 'British',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            27 => 
            array (
                'id' => 28,
                'nationality' => 'Bruneian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            28 => 
            array (
                'id' => 29,
                'nationality' => 'Bulgarian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            29 => 
            array (
                'id' => 30,
                'nationality' => 'Burkinabe',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            30 => 
            array (
                'id' => 31,
                'nationality' => 'Burmese',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            31 => 
            array (
                'id' => 32,
                'nationality' => 'Burundian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            32 => 
            array (
                'id' => 33,
                'nationality' => 'Cambodian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            33 => 
            array (
                'id' => 34,
                'nationality' => 'Cameroonian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            34 => 
            array (
                'id' => 35,
                'nationality' => 'Canadian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            35 => 
            array (
                'id' => 36,
                'nationality' => 'Cape Verdean',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            36 => 
            array (
                'id' => 37,
                'nationality' => 'Central African',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            37 => 
            array (
                'id' => 38,
                'nationality' => 'Chadian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            38 => 
            array (
                'id' => 39,
                'nationality' => 'Chilean',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            39 => 
            array (
                'id' => 40,
                'nationality' => 'Chinese',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            40 => 
            array (
                'id' => 41,
                'nationality' => 'Colombian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            41 => 
            array (
                'id' => 42,
                'nationality' => 'Comoran',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            42 => 
            array (
                'id' => 43,
                'nationality' => 'Congolese',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            43 => 
            array (
                'id' => 44,
                'nationality' => 'Costa Rican',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            44 => 
            array (
                'id' => 45,
                'nationality' => 'Croatian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            45 => 
            array (
                'id' => 46,
                'nationality' => 'Cuban',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            46 => 
            array (
                'id' => 47,
                'nationality' => 'Cypriot',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            47 => 
            array (
                'id' => 48,
                'nationality' => 'Czech',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            48 => 
            array (
                'id' => 49,
                'nationality' => 'Danish',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            49 => 
            array (
                'id' => 50,
                'nationality' => 'Djibouti',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            50 => 
            array (
                'id' => 51,
                'nationality' => 'Dominican',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            51 => 
            array (
                'id' => 52,
                'nationality' => 'Dutch',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            52 => 
            array (
                'id' => 53,
                'nationality' => 'East Timorese',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            53 => 
            array (
                'id' => 54,
                'nationality' => 'Ecuadorean',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            54 => 
            array (
                'id' => 55,
                'nationality' => 'Egyptian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            55 => 
            array (
                'id' => 56,
                'nationality' => 'Emirian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            56 => 
            array (
                'id' => 57,
                'nationality' => 'Equatorial Guinean',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            57 => 
            array (
                'id' => 58,
                'nationality' => 'Eritrean',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            58 => 
            array (
                'id' => 59,
                'nationality' => 'Estonian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            59 => 
            array (
                'id' => 60,
                'nationality' => 'Ethiopian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            60 => 
            array (
                'id' => 61,
                'nationality' => 'Fijian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            61 => 
            array (
                'id' => 62,
                'nationality' => 'Filipino',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            62 => 
            array (
                'id' => 63,
                'nationality' => 'Finnish',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            63 => 
            array (
                'id' => 64,
                'nationality' => 'French',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            64 => 
            array (
                'id' => 65,
                'nationality' => 'Gabonese',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            65 => 
            array (
                'id' => 66,
                'nationality' => 'Gambian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            66 => 
            array (
                'id' => 67,
                'nationality' => 'Georgian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            67 => 
            array (
                'id' => 68,
                'nationality' => 'German',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            68 => 
            array (
                'id' => 69,
                'nationality' => 'Ghanaian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            69 => 
            array (
                'id' => 70,
                'nationality' => 'Greek',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            70 => 
            array (
                'id' => 71,
                'nationality' => 'Grenadian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            71 => 
            array (
                'id' => 72,
                'nationality' => 'Guatemalan',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            72 => 
            array (
                'id' => 73,
                'nationality' => 'Guinea-Bissauan',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            73 => 
            array (
                'id' => 74,
                'nationality' => 'Guinean',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            74 => 
            array (
                'id' => 75,
                'nationality' => 'Guyanese',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            75 => 
            array (
                'id' => 76,
                'nationality' => 'Haitian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            76 => 
            array (
                'id' => 77,
                'nationality' => 'Herzegovinian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            77 => 
            array (
                'id' => 78,
                'nationality' => 'Honduran',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            78 => 
            array (
                'id' => 79,
                'nationality' => 'Hungarian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            79 => 
            array (
                'id' => 80,
                'nationality' => 'I-Kiribati',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            80 => 
            array (
                'id' => 81,
                'nationality' => 'Icelander',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            81 => 
            array (
                'id' => 82,
                'nationality' => 'Indian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            82 => 
            array (
                'id' => 83,
                'nationality' => 'Indonesian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            83 => 
            array (
                'id' => 84,
                'nationality' => 'Iranian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            84 => 
            array (
                'id' => 85,
                'nationality' => 'Iraqi',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            85 => 
            array (
                'id' => 86,
                'nationality' => 'Irish',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            86 => 
            array (
                'id' => 87,
                'nationality' => 'Israeli',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            87 => 
            array (
                'id' => 88,
                'nationality' => 'Italian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            88 => 
            array (
                'id' => 89,
                'nationality' => 'Ivorian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            89 => 
            array (
                'id' => 90,
                'nationality' => 'Jamaican',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            90 => 
            array (
                'id' => 91,
                'nationality' => 'Japanese',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            91 => 
            array (
                'id' => 92,
                'nationality' => 'Jordanian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            92 => 
            array (
                'id' => 93,
                'nationality' => 'Kazakhstani',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            93 => 
            array (
                'id' => 94,
                'nationality' => 'Kenyan',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            94 => 
            array (
                'id' => 95,
                'nationality' => 'Kittian and Nevisian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            95 => 
            array (
                'id' => 96,
                'nationality' => 'Kuwaiti',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            96 => 
            array (
                'id' => 97,
                'nationality' => 'Kyrgyz',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            97 => 
            array (
                'id' => 98,
                'nationality' => 'Laotian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            98 => 
            array (
                'id' => 99,
                'nationality' => 'Latvian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            99 => 
            array (
                'id' => 100,
                'nationality' => 'Lebanese',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            100 => 
            array (
                'id' => 101,
                'nationality' => 'Liberian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            101 => 
            array (
                'id' => 102,
                'nationality' => 'Libyan',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            102 => 
            array (
                'id' => 103,
                'nationality' => 'Liechtensteiner',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            103 => 
            array (
                'id' => 104,
                'nationality' => 'Lithuanian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            104 => 
            array (
                'id' => 105,
                'nationality' => 'Luxembourger',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            105 => 
            array (
                'id' => 106,
                'nationality' => 'Macedonian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            106 => 
            array (
                'id' => 107,
                'nationality' => 'Malagasy',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            107 => 
            array (
                'id' => 108,
                'nationality' => 'Malawian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            108 => 
            array (
                'id' => 109,
                'nationality' => 'Malaysian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            109 => 
            array (
                'id' => 110,
                'nationality' => 'Maldivan',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            110 => 
            array (
                'id' => 111,
                'nationality' => 'Malian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            111 => 
            array (
                'id' => 112,
                'nationality' => 'Maltese',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            112 => 
            array (
                'id' => 113,
                'nationality' => 'Marshallese',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            113 => 
            array (
                'id' => 114,
                'nationality' => 'Mauritanian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            114 => 
            array (
                'id' => 115,
                'nationality' => 'Mauritian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            115 => 
            array (
                'id' => 116,
                'nationality' => 'Mexican',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            116 => 
            array (
                'id' => 117,
                'nationality' => 'Micronesian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            117 => 
            array (
                'id' => 118,
                'nationality' => 'Moldovan',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            118 => 
            array (
                'id' => 119,
                'nationality' => 'Monacan',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            119 => 
            array (
                'id' => 120,
                'nationality' => 'Mongolian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            120 => 
            array (
                'id' => 121,
                'nationality' => 'Moroccan',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            121 => 
            array (
                'id' => 122,
                'nationality' => 'Mosotho',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            122 => 
            array (
                'id' => 123,
                'nationality' => 'Motswana',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            123 => 
            array (
                'id' => 124,
                'nationality' => 'Mozambican',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            124 => 
            array (
                'id' => 125,
                'nationality' => 'Namibian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            125 => 
            array (
                'id' => 126,
                'nationality' => 'Nauruan',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            126 => 
            array (
                'id' => 127,
                'nationality' => 'Nepalese',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            127 => 
            array (
                'id' => 128,
                'nationality' => 'New Zealander',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            128 => 
            array (
                'id' => 129,
                'nationality' => 'Nicaraguan',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            129 => 
            array (
                'id' => 130,
                'nationality' => 'Nigerian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            130 => 
            array (
                'id' => 131,
                'nationality' => 'Nigerien',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            131 => 
            array (
                'id' => 132,
                'nationality' => 'North Korean',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            132 => 
            array (
                'id' => 133,
                'nationality' => 'Northern Irish',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            133 => 
            array (
                'id' => 134,
                'nationality' => 'Norwegian',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            134 => 
            array (
                'id' => 135,
                'nationality' => 'Omani',
                'created_at' => '2021-07-30 11:13:08',
                'updated_at' => '2021-07-30 11:13:08',
            ),
            135 => 
            array (
                'id' => 136,
                'nationality' => 'Pakistani',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            136 => 
            array (
                'id' => 137,
                'nationality' => 'Palauan',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            137 => 
            array (
                'id' => 138,
                'nationality' => 'Panamanian',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            138 => 
            array (
                'id' => 139,
                'nationality' => 'Papua New Guinean',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            139 => 
            array (
                'id' => 140,
                'nationality' => 'Paraguayan',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            140 => 
            array (
                'id' => 141,
                'nationality' => 'Peruvian',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            141 => 
            array (
                'id' => 142,
                'nationality' => 'Polish',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            142 => 
            array (
                'id' => 143,
                'nationality' => 'Portuguese',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            143 => 
            array (
                'id' => 144,
                'nationality' => 'Qatari',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            144 => 
            array (
                'id' => 145,
                'nationality' => 'Romanian',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            145 => 
            array (
                'id' => 146,
                'nationality' => 'Russian',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            146 => 
            array (
                'id' => 147,
                'nationality' => 'Rwandan',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            147 => 
            array (
                'id' => 148,
                'nationality' => 'Saint Lucian',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            148 => 
            array (
                'id' => 149,
                'nationality' => 'Salvadoran',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            149 => 
            array (
                'id' => 150,
                'nationality' => 'Samoan',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            150 => 
            array (
                'id' => 151,
                'nationality' => 'San Marinese',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            151 => 
            array (
                'id' => 152,
                'nationality' => 'Sao Tomean',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            152 => 
            array (
                'id' => 153,
                'nationality' => 'Saudi',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            153 => 
            array (
                'id' => 154,
                'nationality' => 'Scottish',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            154 => 
            array (
                'id' => 155,
                'nationality' => 'Senegalese',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            155 => 
            array (
                'id' => 156,
                'nationality' => 'Serbian',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            156 => 
            array (
                'id' => 157,
                'nationality' => 'Seychellois',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            157 => 
            array (
                'id' => 158,
                'nationality' => 'Sierra Leonean',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            158 => 
            array (
                'id' => 159,
                'nationality' => 'Singaporean',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            159 => 
            array (
                'id' => 160,
                'nationality' => 'Slovakian',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            160 => 
            array (
                'id' => 161,
                'nationality' => 'Slovenian',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            161 => 
            array (
                'id' => 162,
                'nationality' => 'Solomon Islander',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            162 => 
            array (
                'id' => 163,
                'nationality' => 'Somali',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            163 => 
            array (
                'id' => 164,
                'nationality' => 'South African',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            164 => 
            array (
                'id' => 165,
                'nationality' => 'South Korean',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            165 => 
            array (
                'id' => 166,
                'nationality' => 'Spanish',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            166 => 
            array (
                'id' => 167,
                'nationality' => 'Sri Lankan',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            167 => 
            array (
                'id' => 168,
                'nationality' => 'Sudanese',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            168 => 
            array (
                'id' => 169,
                'nationality' => 'Surinamer',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            169 => 
            array (
                'id' => 170,
                'nationality' => 'Swazi',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            170 => 
            array (
                'id' => 171,
                'nationality' => 'Swedish',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            171 => 
            array (
                'id' => 172,
                'nationality' => 'Swiss',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            172 => 
            array (
                'id' => 173,
                'nationality' => 'Syrian',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            173 => 
            array (
                'id' => 174,
                'nationality' => 'Taiwanese',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            174 => 
            array (
                'id' => 175,
                'nationality' => 'Tajik',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            175 => 
            array (
                'id' => 176,
                'nationality' => 'Tanzanian',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            176 => 
            array (
                'id' => 177,
                'nationality' => 'Thai',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            177 => 
            array (
                'id' => 178,
                'nationality' => 'Togolese',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            178 => 
            array (
                'id' => 179,
                'nationality' => 'Tongan',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            179 => 
            array (
                'id' => 180,
                'nationality' => 'Trinidadian/Tobagonian',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            180 => 
            array (
                'id' => 181,
                'nationality' => 'Tunisian',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            181 => 
            array (
                'id' => 182,
                'nationality' => 'Turkish',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            182 => 
            array (
                'id' => 183,
                'nationality' => 'Tuvaluan',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            183 => 
            array (
                'id' => 184,
                'nationality' => 'Ugandan',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            184 => 
            array (
                'id' => 185,
                'nationality' => 'Ukrainian',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            185 => 
            array (
                'id' => 186,
                'nationality' => 'Uruguayan',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            186 => 
            array (
                'id' => 187,
                'nationality' => 'Uzbekistani',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            187 => 
            array (
                'id' => 188,
                'nationality' => 'Venezuelan',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            188 => 
            array (
                'id' => 189,
                'nationality' => 'Vietnamese',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            189 => 
            array (
                'id' => 190,
                'nationality' => 'Welsh',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            190 => 
            array (
                'id' => 191,
                'nationality' => 'Yemenite',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            191 => 
            array (
                'id' => 192,
                'nationality' => 'Zambian',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
            192 => 
            array (
                'id' => 193,
                'nationality' => 'Zimbabwean',
                'created_at' => '2021-07-30 11:13:09',
                'updated_at' => '2021-07-30 11:13:09',
            ),
        ));
        
        
    }
}