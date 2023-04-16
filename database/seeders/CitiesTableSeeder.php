<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'city' => 'ABORLAN',
                'code' => 175301,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            1 => 
            array (
                'id' => 2,
                'city' => 'ABRA DE ILOG',
                'code' => 175101,
                'region_code' => 17,
                'province_code' => 1751,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            2 => 
            array (
                'id' => 3,
                'city' => 'ABUCAY',
                'code' => 30801,
                'region_code' => 3,
                'province_code' => 308,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            3 => 
            array (
                'id' => 4,
                'city' => 'ABULUG',
                'code' => 21501,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            4 => 
            array (
                'id' => 5,
                'city' => 'ABUYOG',
                'code' => 83701,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            5 => 
            array (
                'id' => 6,
                'city' => 'ADAMS',
                'code' => 12801,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            6 => 
            array (
                'id' => 7,
                'city' => 'AGDANGAN',
                'code' => 45601,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            7 => 
            array (
                'id' => 8,
                'city' => 'AGLIPAY',
                'code' => 25701,
                'region_code' => 2,
                'province_code' => 257,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            8 => 
            array (
                'id' => 9,
                'city' => 'AGNO',
                'code' => 15501,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            9 => 
            array (
                'id' => 10,
                'city' => 'AGONCILLO',
                'code' => 41001,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            10 => 
            array (
                'id' => 11,
                'city' => 'AGOO',
                'code' => 13301,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            11 => 
            array (
                'id' => 12,
                'city' => 'AGUILAR',
                'code' => 15502,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            12 => 
            array (
                'id' => 13,
                'city' => 'AGUINALDO',
                'code' => 142708,
                'region_code' => 14,
                'province_code' => 1427,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            13 => 
            array (
                'id' => 14,
                'city' => 'AGUTAYA',
                'code' => 175302,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            14 => 
            array (
                'id' => 15,
                'city' => 'AJUY',
                'code' => 63001,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            15 => 
            array (
                'id' => 16,
                'city' => 'AKBAR',
                'code' => 150708,
                'region_code' => 15,
                'province_code' => 1507,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            16 => 
            array (
                'id' => 17,
                'city' => 'AL-BARKA',
                'code' => 150709,
                'region_code' => 15,
                'province_code' => 1507,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            17 => 
            array (
                'id' => 18,
                'city' => 'ALABAT',
                'code' => 45602,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            18 => 
            array (
                'id' => 19,
            'city' => 'ALABEL (Capital)',
                'code' => 128001,
                'region_code' => 12,
                'province_code' => 1280,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            19 => 
            array (
                'id' => 20,
                'city' => 'ALAMADA',
                'code' => 124701,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            20 => 
            array (
                'id' => 21,
                'city' => 'ALAMINOS',
                'code' => 43401,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            21 => 
            array (
                'id' => 22,
                'city' => 'ALANGALANG',
                'code' => 83702,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            22 => 
            array (
                'id' => 23,
                'city' => 'ALBUERA',
                'code' => 83703,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            23 => 
            array (
                'id' => 24,
                'city' => 'ALBURQUERQUE',
                'code' => 71201,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            24 => 
            array (
                'id' => 25,
                'city' => 'ALCALA',
                'code' => 15504,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            25 => 
            array (
                'id' => 26,
                'city' => 'ALCALA',
                'code' => 21502,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            26 => 
            array (
                'id' => 27,
                'city' => 'ALCANTARA',
                'code' => 175901,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            27 => 
            array (
                'id' => 28,
                'city' => 'ALCANTARA',
                'code' => 72201,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            28 => 
            array (
                'id' => 29,
                'city' => 'ALCOY',
                'code' => 72202,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            29 => 
            array (
                'id' => 30,
                'city' => 'ALEGRIA',
                'code' => 166701,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            30 => 
            array (
                'id' => 31,
                'city' => 'ALEGRIA',
                'code' => 72203,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            31 => 
            array (
                'id' => 32,
                'city' => 'ALEOSAN',
                'code' => 124717,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            32 => 
            array (
                'id' => 33,
                'city' => 'ALFONSO',
                'code' => 42101,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            33 => 
            array (
                'id' => 34,
                'city' => 'ALFONSO CASTANEDA',
                'code' => 25015,
                'region_code' => 2,
                'province_code' => 250,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            34 => 
            array (
                'id' => 35,
            'city' => 'ALFONSO LISTA (POTIA)',
                'code' => 142707,
                'region_code' => 14,
                'province_code' => 1427,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            35 => 
            array (
                'id' => 36,
                'city' => 'ALIAGA',
                'code' => 34901,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            36 => 
            array (
                'id' => 37,
                'city' => 'ALICIA',
                'code' => 71202,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            37 => 
            array (
                'id' => 38,
                'city' => 'ALICIA',
                'code' => 98301,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            38 => 
            array (
                'id' => 39,
                'city' => 'ALICIA',
                'code' => 23101,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            39 => 
            array (
                'id' => 40,
                'city' => 'ALILEM',
                'code' => 12901,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            40 => 
            array (
                'id' => 41,
                'city' => 'ALIMODIAN',
                'code' => 63002,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            41 => 
            array (
                'id' => 42,
                'city' => 'ALITAGTAG',
                'code' => 41002,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            42 => 
            array (
                'id' => 43,
                'city' => 'ALLACAPAN',
                'code' => 21503,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            43 => 
            array (
                'id' => 44,
                'city' => 'ALLEN',
                'code' => 84801,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            44 => 
            array (
                'id' => 45,
                'city' => 'ALMAGRO',
                'code' => 86001,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            45 => 
            array (
                'id' => 46,
                'city' => 'ALMERIA',
                'code' => 87801,
                'region_code' => 8,
                'province_code' => 878,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            46 => 
            array (
                'id' => 47,
                'city' => 'ALOGUINSAN',
                'code' => 72204,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            47 => 
            array (
                'id' => 48,
                'city' => 'ALORAN',
                'code' => 104201,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            48 => 
            array (
                'id' => 49,
                'city' => 'ALTAVAS',
                'code' => 60401,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            49 => 
            array (
                'id' => 50,
                'city' => 'ALUBIJID',
                'code' => 104301,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            50 => 
            array (
                'id' => 51,
                'city' => 'AMADEO',
                'code' => 42102,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            51 => 
            array (
                'id' => 52,
                'city' => 'AMBAGUIO',
                'code' => 25001,
                'region_code' => 2,
                'province_code' => 250,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            52 => 
            array (
                'id' => 53,
            'city' => 'AMLAN (AYUQUITAN)',
                'code' => 74601,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            53 => 
            array (
                'id' => 54,
                'city' => 'AMPATUAN',
                'code' => 153801,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            54 => 
            array (
                'id' => 55,
                'city' => 'AMULUNG',
                'code' => 21504,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            55 => 
            array (
                'id' => 56,
                'city' => 'ANAHAWAN',
                'code' => 86401,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            56 => 
            array (
                'id' => 57,
                'city' => 'ANAO',
                'code' => 36901,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            57 => 
            array (
                'id' => 58,
                'city' => 'ANDA',
                'code' => 15505,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            58 => 
            array (
                'id' => 59,
                'city' => 'ANDA',
                'code' => 71203,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            59 => 
            array (
                'id' => 60,
                'city' => 'ANGADANAN',
                'code' => 23102,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            60 => 
            array (
                'id' => 61,
                'city' => 'ANGAT',
                'code' => 31401,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            61 => 
            array (
                'id' => 62,
                'city' => 'ANGELES CITY',
                'code' => 35401,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            62 => 
            array (
                'id' => 63,
                'city' => 'ANGONO',
                'code' => 45801,
                'region_code' => 4,
                'province_code' => 458,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            63 => 
            array (
                'id' => 64,
                'city' => 'ANILAO',
                'code' => 63003,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            64 => 
            array (
                'id' => 65,
                'city' => 'ANINI-Y',
                'code' => 60601,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            65 => 
            array (
                'id' => 66,
                'city' => 'ANTEQUERA',
                'code' => 71204,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            66 => 
            array (
                'id' => 67,
                'city' => 'ANTIPAS',
                'code' => 124715,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            67 => 
            array (
                'id' => 68,
                'city' => 'APALIT',
                'code' => 35402,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            68 => 
            array (
                'id' => 69,
                'city' => 'APARRI',
                'code' => 21505,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            69 => 
            array (
                'id' => 70,
                'city' => 'ARACELI',
                'code' => 175303,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            70 => 
            array (
                'id' => 71,
                'city' => 'ARAKAN',
                'code' => 124718,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            71 => 
            array (
                'id' => 72,
                'city' => 'ARAYAT',
                'code' => 35403,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            72 => 
            array (
                'id' => 73,
                'city' => 'ARGAO',
                'code' => 72205,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            73 => 
            array (
                'id' => 74,
                'city' => 'ARINGAY',
                'code' => 13302,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            74 => 
            array (
                'id' => 75,
                'city' => 'ARITAO',
                'code' => 25002,
                'region_code' => 2,
                'province_code' => 250,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            75 => 
            array (
                'id' => 76,
                'city' => 'AROROY',
                'code' => 54101,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            76 => 
            array (
                'id' => 77,
                'city' => 'ARTECHE',
                'code' => 82601,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            77 => 
            array (
                'id' => 78,
                'city' => 'ASINGAN',
                'code' => 15506,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            78 => 
            array (
                'id' => 79,
                'city' => 'ASIPULO',
                'code' => 142711,
                'region_code' => 14,
                'province_code' => 1427,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            79 => 
            array (
                'id' => 80,
                'city' => 'ASTURIAS',
                'code' => 72206,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            80 => 
            array (
                'id' => 81,
            'city' => 'ASUNCION (SAUG)',
                'code' => 112301,
                'region_code' => 11,
                'province_code' => 1123,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            81 => 
            array (
                'id' => 82,
                'city' => 'ATIMONAN',
                'code' => 45603,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            82 => 
            array (
                'id' => 83,
                'city' => 'ATOK',
                'code' => 141101,
                'region_code' => 14,
                'province_code' => 1411,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            83 => 
            array (
                'id' => 84,
                'city' => 'AURORA',
                'code' => 23103,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            84 => 
            array (
                'id' => 85,
                'city' => 'AURORA',
                'code' => 97302,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            85 => 
            array (
                'id' => 86,
                'city' => 'AYUNGON',
                'code' => 74602,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            86 => 
            array (
                'id' => 87,
                'city' => 'BAAO',
                'code' => 51701,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            87 => 
            array (
                'id' => 88,
                'city' => 'BABATNGON',
                'code' => 83705,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            88 => 
            array (
                'id' => 89,
                'city' => 'BACACAY',
                'code' => 50501,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            89 => 
            array (
                'id' => 90,
                'city' => 'BACARRA',
                'code' => 12802,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            90 => 
            array (
                'id' => 91,
                'city' => 'BACLAYON',
                'code' => 71205,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            91 => 
            array (
                'id' => 92,
                'city' => 'BACNOTAN',
                'code' => 13303,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            92 => 
            array (
                'id' => 93,
                'city' => 'BACO',
                'code' => 175201,
                'region_code' => 17,
                'province_code' => 1752,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            93 => 
            array (
                'id' => 94,
                'city' => 'BACOLOD',
                'code' => 103501,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            94 => 
            array (
                'id' => 95,
            'city' => 'BACOLOD CITY (Capital)',
                'code' => 64501,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            95 => 
            array (
                'id' => 96,
            'city' => 'BACOLOD-KALAWI (BACOLOD GRANDE)',
                'code' => 153601,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            96 => 
            array (
                'id' => 97,
                'city' => 'BACOLOR',
                'code' => 35404,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            97 => 
            array (
                'id' => 98,
                'city' => 'BACONG',
                'code' => 74603,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            98 => 
            array (
                'id' => 99,
                'city' => 'BACOOR CITY',
                'code' => 42103,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            99 => 
            array (
                'id' => 100,
                'city' => 'BACUAG',
                'code' => 166702,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            100 => 
            array (
                'id' => 101,
            'city' => 'BACUNGAN (Leon T. Postigo)',
                'code' => 97226,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            101 => 
            array (
                'id' => 102,
                'city' => 'BADIAN',
                'code' => 72207,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            102 => 
            array (
                'id' => 103,
                'city' => 'BADIANGAN',
                'code' => 63004,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            103 => 
            array (
                'id' => 104,
                'city' => 'BADOC',
                'code' => 12803,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            104 => 
            array (
                'id' => 105,
                'city' => 'BAGABAG',
                'code' => 25003,
                'region_code' => 2,
                'province_code' => 250,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            105 => 
            array (
                'id' => 106,
                'city' => 'BAGAC',
                'code' => 30802,
                'region_code' => 3,
                'province_code' => 308,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            106 => 
            array (
                'id' => 107,
                'city' => 'BAGAMANOC',
                'code' => 52001,
                'region_code' => 5,
                'province_code' => 520,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            107 => 
            array (
                'id' => 108,
                'city' => 'BAGANGA',
                'code' => 112501,
                'region_code' => 11,
                'province_code' => 1125,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            108 => 
            array (
                'id' => 109,
                'city' => 'BAGGAO',
                'code' => 21506,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            109 => 
            array (
                'id' => 110,
                'city' => 'BAGO CITY',
                'code' => 64502,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            110 => 
            array (
                'id' => 111,
                'city' => 'BAGUIO CITY',
                'code' => 141102,
                'region_code' => 14,
                'province_code' => 1411,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            111 => 
            array (
                'id' => 112,
                'city' => 'BAGULIN',
                'code' => 13304,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            112 => 
            array (
                'id' => 113,
                'city' => 'BAGUMBAYAN',
                'code' => 126501,
                'region_code' => 12,
                'province_code' => 1265,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            113 => 
            array (
                'id' => 114,
                'city' => 'BAIS CITY',
                'code' => 74604,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            114 => 
            array (
                'id' => 115,
                'city' => 'BAKUN',
                'code' => 141103,
                'region_code' => 14,
                'province_code' => 1411,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            115 => 
            array (
                'id' => 116,
                'city' => 'BALABAC',
                'code' => 175304,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            116 => 
            array (
                'id' => 117,
                'city' => 'BALABAGAN',
                'code' => 153602,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            117 => 
            array (
                'id' => 118,
            'city' => 'BALAGTAS (BIGAA)',
                'code' => 31402,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            118 => 
            array (
                'id' => 119,
                'city' => 'BALAMBAN',
                'code' => 72208,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            119 => 
            array (
                'id' => 120,
                'city' => 'BALANGIGA',
                'code' => 82602,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            120 => 
            array (
                'id' => 121,
                'city' => 'BALANGKAYAN',
                'code' => 82603,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            121 => 
            array (
                'id' => 122,
                'city' => 'BALAOAN',
                'code' => 13305,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            122 => 
            array (
                'id' => 123,
                'city' => 'BALASAN',
                'code' => 63005,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            123 => 
            array (
                'id' => 124,
                'city' => 'BALATAN',
                'code' => 51702,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            124 => 
            array (
                'id' => 125,
                'city' => 'BALAYAN',
                'code' => 41003,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            125 => 
            array (
                'id' => 126,
                'city' => 'BALBALAN',
                'code' => 143201,
                'region_code' => 14,
                'province_code' => 1432,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            126 => 
            array (
                'id' => 127,
                'city' => 'BALENO',
                'code' => 54102,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            127 => 
            array (
                'id' => 128,
            'city' => 'BALER (Capital)',
                'code' => 37701,
                'region_code' => 3,
                'province_code' => 377,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            128 => 
            array (
                'id' => 129,
                'city' => 'BALETE',
                'code' => 41004,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            129 => 
            array (
                'id' => 130,
                'city' => 'BALETE',
                'code' => 60402,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            130 => 
            array (
                'id' => 131,
                'city' => 'BALIANGAO',
                'code' => 104202,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            131 => 
            array (
                'id' => 132,
                'city' => 'BALIGUIAN',
                'code' => 97224,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            132 => 
            array (
                'id' => 133,
                'city' => 'BALILIHAN',
                'code' => 71206,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            133 => 
            array (
                'id' => 134,
            'city' => 'BALINDONG (WATU)',
                'code' => 153603,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            134 => 
            array (
                'id' => 135,
                'city' => 'BALINGASAG',
                'code' => 104302,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            135 => 
            array (
                'id' => 136,
                'city' => 'BALINGOAN',
                'code' => 104303,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            136 => 
            array (
                'id' => 137,
                'city' => 'BALIUAG',
                'code' => 31403,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            137 => 
            array (
                'id' => 138,
                'city' => 'BALLESTEROS',
                'code' => 21507,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            138 => 
            array (
                'id' => 139,
                'city' => 'BALOI',
                'code' => 103502,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            139 => 
            array (
                'id' => 140,
                'city' => 'BALUD',
                'code' => 54103,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            140 => 
            array (
                'id' => 141,
                'city' => 'BALUNGAO',
                'code' => 15507,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            141 => 
            array (
                'id' => 142,
                'city' => 'BAMBAN',
                'code' => 36902,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            142 => 
            array (
                'id' => 143,
                'city' => 'BAMBANG',
                'code' => 25004,
                'region_code' => 2,
                'province_code' => 250,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            143 => 
            array (
                'id' => 144,
                'city' => 'BANATE',
                'code' => 63006,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            144 => 
            array (
                'id' => 145,
                'city' => 'BANAUE',
                'code' => 142701,
                'region_code' => 14,
                'province_code' => 1427,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            145 => 
            array (
                'id' => 146,
                'city' => 'BANAYBANAY',
                'code' => 112502,
                'region_code' => 11,
                'province_code' => 1125,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            146 => 
            array (
                'id' => 147,
                'city' => 'BANAYOYO',
                'code' => 12902,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            147 => 
            array (
                'id' => 148,
                'city' => 'BANGA',
                'code' => 60403,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            148 => 
            array (
                'id' => 149,
                'city' => 'BANGA',
                'code' => 126302,
                'region_code' => 12,
                'province_code' => 1263,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            149 => 
            array (
                'id' => 150,
                'city' => 'BANGAR',
                'code' => 13306,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            150 => 
            array (
                'id' => 151,
            'city' => 'BANGUED (Capital)',
                'code' => 140101,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            151 => 
            array (
                'id' => 152,
                'city' => 'BANGUI',
                'code' => 12804,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            152 => 
            array (
                'id' => 153,
                'city' => 'BANI',
                'code' => 15508,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            153 => 
            array (
                'id' => 154,
                'city' => 'BANISILAN',
                'code' => 124716,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            154 => 
            array (
                'id' => 155,
            'city' => 'BANNA (ESPIRITU)',
                'code' => 12811,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            155 => 
            array (
                'id' => 156,
                'city' => 'BANSALAN',
                'code' => 112401,
                'region_code' => 11,
                'province_code' => 1124,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            156 => 
            array (
                'id' => 157,
                'city' => 'BANSUD',
                'code' => 175202,
                'region_code' => 17,
                'province_code' => 1752,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            157 => 
            array (
                'id' => 158,
                'city' => 'BANTAY',
                'code' => 12903,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            158 => 
            array (
                'id' => 159,
                'city' => 'BANTAYAN',
                'code' => 72209,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            159 => 
            array (
                'id' => 160,
                'city' => 'BANTON',
                'code' => 175902,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            160 => 
            array (
                'id' => 161,
                'city' => 'BARAS',
                'code' => 52002,
                'region_code' => 5,
                'province_code' => 520,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            161 => 
            array (
                'id' => 162,
                'city' => 'BARAS',
                'code' => 45803,
                'region_code' => 4,
                'province_code' => 458,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            162 => 
            array (
                'id' => 163,
                'city' => 'BARBAZA',
                'code' => 60602,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            163 => 
            array (
                'id' => 164,
                'city' => 'BARCELONA',
                'code' => 56202,
                'region_code' => 5,
                'province_code' => 562,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            164 => 
            array (
                'id' => 165,
                'city' => 'BARILI',
                'code' => 72210,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            165 => 
            array (
                'id' => 166,
                'city' => 'BARIRA',
                'code' => 153818,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            166 => 
            array (
                'id' => 167,
                'city' => 'BARLIG',
                'code' => 144401,
                'region_code' => 14,
                'province_code' => 1444,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            167 => 
            array (
                'id' => 168,
                'city' => 'BAROBO',
                'code' => 166801,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            168 => 
            array (
                'id' => 169,
                'city' => 'BAROTAC NUEVO',
                'code' => 63007,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            169 => 
            array (
                'id' => 170,
                'city' => 'BAROTAC VIEJO',
                'code' => 63008,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            170 => 
            array (
                'id' => 171,
                'city' => 'BAROY',
                'code' => 103503,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            171 => 
            array (
                'id' => 172,
                'city' => 'BARUGO',
                'code' => 83706,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            172 => 
            array (
                'id' => 173,
                'city' => 'BASAY',
                'code' => 74605,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            173 => 
            array (
                'id' => 174,
            'city' => 'BASCO (Capital)',
                'code' => 20901,
                'region_code' => 2,
                'province_code' => 209,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            174 => 
            array (
                'id' => 175,
                'city' => 'BASEY',
                'code' => 86002,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            175 => 
            array (
                'id' => 176,
            'city' => 'BASILISA (RIZAL)',
                'code' => 168501,
                'region_code' => 16,
                'province_code' => 1685,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            176 => 
            array (
                'id' => 177,
                'city' => 'BASISTA',
                'code' => 15509,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            177 => 
            array (
                'id' => 178,
                'city' => 'BASUD',
                'code' => 51601,
                'region_code' => 5,
                'province_code' => 516,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            178 => 
            array (
                'id' => 179,
                'city' => 'BATAD',
                'code' => 63009,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            179 => 
            array (
                'id' => 180,
                'city' => 'BATAN',
                'code' => 60404,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            180 => 
            array (
                'id' => 181,
            'city' => 'BATANGAS CITY (Capital)',
                'code' => 41005,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            181 => 
            array (
                'id' => 182,
                'city' => 'BATARAZA',
                'code' => 175305,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            182 => 
            array (
                'id' => 183,
                'city' => 'BATO',
                'code' => 83707,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            183 => 
            array (
                'id' => 184,
                'city' => 'BATO',
                'code' => 52003,
                'region_code' => 5,
                'province_code' => 520,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            184 => 
            array (
                'id' => 185,
                'city' => 'BATO',
                'code' => 51703,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            185 => 
            array (
                'id' => 186,
                'city' => 'BATUAN',
                'code' => 54104,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            186 => 
            array (
                'id' => 187,
                'city' => 'BATUAN',
                'code' => 71207,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            187 => 
            array (
                'id' => 188,
                'city' => 'BAUAN',
                'code' => 41006,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            188 => 
            array (
                'id' => 189,
                'city' => 'BAUANG',
                'code' => 13307,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            189 => 
            array (
                'id' => 190,
                'city' => 'BAUKO',
                'code' => 144402,
                'region_code' => 14,
                'province_code' => 1444,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            190 => 
            array (
                'id' => 191,
                'city' => 'BAUNGON',
                'code' => 101301,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            191 => 
            array (
                'id' => 192,
                'city' => 'BAUTISTA',
                'code' => 15510,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            192 => 
            array (
                'id' => 193,
                'city' => 'BAY',
                'code' => 43402,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            193 => 
            array (
                'id' => 194,
                'city' => 'BAYABAS',
                'code' => 166802,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            194 => 
            array (
                'id' => 195,
                'city' => 'BAYAMBANG',
                'code' => 15511,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            195 => 
            array (
                'id' => 196,
                'city' => 'BAYANG',
                'code' => 153604,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            196 => 
            array (
                'id' => 197,
                'city' => 'BAYOG',
                'code' => 97303,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            197 => 
            array (
                'id' => 198,
            'city' => 'BAYOMBONG (Capital)',
                'code' => 25005,
                'region_code' => 2,
                'province_code' => 250,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            198 => 
            array (
                'id' => 199,
                'city' => 'BELISON',
                'code' => 60603,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            199 => 
            array (
                'id' => 200,
                'city' => 'BENITO SOLIVEN',
                'code' => 23104,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            200 => 
            array (
                'id' => 201,
                'city' => 'BESAO',
                'code' => 144403,
                'region_code' => 14,
                'province_code' => 1444,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            201 => 
            array (
                'id' => 202,
                'city' => 'BIEN UNIDO',
                'code' => 71248,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            202 => 
            array (
                'id' => 203,
                'city' => 'BILAR',
                'code' => 71208,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            203 => 
            array (
                'id' => 204,
                'city' => 'BILIRAN',
                'code' => 87802,
                'region_code' => 8,
                'province_code' => 878,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            204 => 
            array (
                'id' => 205,
                'city' => 'BINALBAGAN',
                'code' => 64503,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            205 => 
            array (
                'id' => 206,
                'city' => 'BINALONAN',
                'code' => 15512,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            206 => 
            array (
                'id' => 207,
                'city' => 'BINANGONAN',
                'code' => 45804,
                'region_code' => 4,
                'province_code' => 458,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            207 => 
            array (
                'id' => 208,
            'city' => 'BINDOY (PAYABON)',
                'code' => 74607,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            208 => 
            array (
                'id' => 209,
                'city' => 'BINGAWAN',
                'code' => 63010,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            209 => 
            array (
                'id' => 210,
                'city' => 'BINIDAYAN',
                'code' => 153605,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            210 => 
            array (
                'id' => 211,
                'city' => 'BINMALEY',
                'code' => 15513,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            211 => 
            array (
                'id' => 212,
                'city' => 'BINONDO',
                'code' => 133902,
                'region_code' => 13,
                'province_code' => 1339,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            212 => 
            array (
                'id' => 213,
                'city' => 'BINUANGAN',
                'code' => 104304,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            213 => 
            array (
                'id' => 214,
                'city' => 'BIRI',
                'code' => 84802,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            214 => 
            array (
                'id' => 215,
            'city' => 'BOAC (Capital)',
                'code' => 174001,
                'region_code' => 17,
                'province_code' => 1740,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            215 => 
            array (
                'id' => 216,
                'city' => 'BOBON',
                'code' => 84803,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            216 => 
            array (
                'id' => 217,
                'city' => 'BOCAUE',
                'code' => 31404,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            217 => 
            array (
                'id' => 218,
                'city' => 'BOKOD',
                'code' => 141104,
                'region_code' => 14,
                'province_code' => 1411,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            218 => 
            array (
                'id' => 219,
                'city' => 'BOLINAO',
                'code' => 15514,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            219 => 
            array (
                'id' => 220,
                'city' => 'BOLINEY',
                'code' => 140102,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            220 => 
            array (
                'id' => 221,
                'city' => 'BOLJOON',
                'code' => 72212,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            221 => 
            array (
                'id' => 222,
                'city' => 'BOMBON',
                'code' => 51704,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            222 => 
            array (
                'id' => 223,
                'city' => 'BONGABON',
                'code' => 34902,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            223 => 
            array (
                'id' => 224,
                'city' => 'BONGABONG',
                'code' => 175203,
                'region_code' => 17,
                'province_code' => 1752,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            224 => 
            array (
                'id' => 225,
            'city' => 'BONGAO (Capital)',
                'code' => 157002,
                'region_code' => 15,
                'province_code' => 1570,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            225 => 
            array (
                'id' => 226,
                'city' => 'BONIFACIO',
                'code' => 104203,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            226 => 
            array (
                'id' => 227,
                'city' => 'BONTOC',
                'code' => 86402,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            227 => 
            array (
                'id' => 228,
            'city' => 'BONTOC (Capital)',
                'code' => 144404,
                'region_code' => 14,
                'province_code' => 1444,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            228 => 
            array (
                'id' => 229,
                'city' => 'BORBON',
                'code' => 72213,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            229 => 
            array (
                'id' => 230,
                'city' => 'BOSTON',
                'code' => 112503,
                'region_code' => 11,
                'province_code' => 1125,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            230 => 
            array (
                'id' => 231,
                'city' => 'BOTOLAN',
                'code' => 37101,
                'region_code' => 3,
                'province_code' => 371,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            231 => 
            array (
                'id' => 232,
                'city' => 'BRAULIO E. DUJALI',
                'code' => 112323,
                'region_code' => 11,
                'province_code' => 1123,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            232 => 
            array (
                'id' => 233,
                'city' => 'BROOKE\'S POINT',
                'code' => 175306,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            233 => 
            array (
                'id' => 234,
                'city' => 'BUADIPOSO-BUNTONG',
                'code' => 153633,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            234 => 
            array (
                'id' => 235,
                'city' => 'BUBONG',
                'code' => 153606,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            235 => 
            array (
                'id' => 236,
                'city' => 'BUCAY',
                'code' => 140103,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            236 => 
            array (
                'id' => 237,
                'city' => 'BUCLOC',
                'code' => 140104,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            237 => 
            array (
                'id' => 238,
                'city' => 'BUENAVISTA',
                'code' => 71209,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            238 => 
            array (
                'id' => 239,
                'city' => 'BUENAVISTA',
                'code' => 160201,
                'region_code' => 16,
                'province_code' => 1602,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            239 => 
            array (
                'id' => 240,
                'city' => 'BUENAVISTA',
                'code' => 45605,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            240 => 
            array (
                'id' => 241,
                'city' => 'BUENAVISTA',
                'code' => 174002,
                'region_code' => 17,
                'province_code' => 1740,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            241 => 
            array (
                'id' => 242,
                'city' => 'BUENAVISTA',
                'code' => 67901,
                'region_code' => 6,
                'province_code' => 679,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            242 => 
            array (
                'id' => 243,
                'city' => 'BUGALLON',
                'code' => 15515,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            243 => 
            array (
                'id' => 244,
                'city' => 'BUGASONG',
                'code' => 60604,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            244 => 
            array (
                'id' => 245,
                'city' => 'BUGUEY',
                'code' => 21508,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            245 => 
            array (
                'id' => 246,
                'city' => 'BUGUIAS',
                'code' => 141105,
                'region_code' => 14,
                'province_code' => 1411,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            246 => 
            array (
                'id' => 247,
                'city' => 'BUHI',
                'code' => 51705,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            247 => 
            array (
                'id' => 248,
                'city' => 'BULA',
                'code' => 51706,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            248 => 
            array (
                'id' => 249,
                'city' => 'BULACAN',
                'code' => 31405,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            249 => 
            array (
                'id' => 250,
            'city' => 'BULALACAO (SAN PEDRO)',
                'code' => 175204,
                'region_code' => 17,
                'province_code' => 1752,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            250 => 
            array (
                'id' => 251,
                'city' => 'BULAN',
                'code' => 56203,
                'region_code' => 5,
                'province_code' => 562,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            251 => 
            array (
                'id' => 252,
                'city' => 'BULDON',
                'code' => 153802,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            252 => 
            array (
                'id' => 253,
                'city' => 'BULUAN',
                'code' => 153803,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            253 => 
            array (
                'id' => 254,
                'city' => 'BULUSAN',
                'code' => 56204,
                'region_code' => 5,
                'province_code' => 562,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            254 => 
            array (
                'id' => 255,
                'city' => 'BUMBARAN',
                'code' => 153637,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            255 => 
            array (
                'id' => 256,
                'city' => 'BUNAWAN',
                'code' => 160302,
                'region_code' => 16,
                'province_code' => 1603,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            256 => 
            array (
                'id' => 257,
                'city' => 'BURAUEN',
                'code' => 83710,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            257 => 
            array (
                'id' => 258,
                'city' => 'BURDEOS',
                'code' => 45606,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            258 => 
            array (
                'id' => 259,
                'city' => 'BURGOS',
                'code' => 13308,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            259 => 
            array (
                'id' => 260,
                'city' => 'BURGOS',
                'code' => 12904,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            260 => 
            array (
                'id' => 261,
                'city' => 'BURGOS',
                'code' => 15516,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            261 => 
            array (
                'id' => 262,
                'city' => 'BURGOS',
                'code' => 23105,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            262 => 
            array (
                'id' => 263,
                'city' => 'BURGOS',
                'code' => 166704,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            263 => 
            array (
                'id' => 264,
                'city' => 'BURGOS',
                'code' => 12806,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            264 => 
            array (
                'id' => 265,
                'city' => 'BURUANGA',
                'code' => 60405,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            265 => 
            array (
                'id' => 266,
                'city' => 'BUSTOS',
                'code' => 31406,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            266 => 
            array (
                'id' => 267,
                'city' => 'BUSUANGA',
                'code' => 175307,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            267 => 
            array (
                'id' => 268,
                'city' => 'BUTIG',
                'code' => 153607,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            268 => 
            array (
                'id' => 269,
            'city' => 'BUTUAN CITY (Capital)',
                'code' => 160202,
                'region_code' => 16,
                'province_code' => 1602,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            269 => 
            array (
                'id' => 270,
                'city' => 'BUUG',
                'code' => 98302,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            270 => 
            array (
                'id' => 271,
                'city' => 'CABA',
                'code' => 13309,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            271 => 
            array (
                'id' => 272,
                'city' => 'CABAGAN',
                'code' => 23106,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            272 => 
            array (
                'id' => 273,
                'city' => 'CABANATUAN CITY',
                'code' => 34903,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            273 => 
            array (
                'id' => 274,
                'city' => 'CABANGAN',
                'code' => 37102,
                'region_code' => 3,
                'province_code' => 371,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            274 => 
            array (
                'id' => 275,
                'city' => 'CABANGLASAN',
                'code' => 101322,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            275 => 
            array (
                'id' => 276,
            'city' => 'CABARROGUIS (Capital)',
                'code' => 25702,
                'region_code' => 2,
                'province_code' => 257,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            276 => 
            array (
                'id' => 277,
                'city' => 'CABATUAN',
                'code' => 23107,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            277 => 
            array (
                'id' => 278,
                'city' => 'CABATUAN',
                'code' => 63012,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            278 => 
            array (
                'id' => 279,
                'city' => 'CABIAO',
                'code' => 34904,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            279 => 
            array (
                'id' => 280,
                'city' => 'CABUCGAYAN',
                'code' => 87803,
                'region_code' => 8,
                'province_code' => 878,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            280 => 
            array (
                'id' => 281,
                'city' => 'CABUGAO',
                'code' => 12905,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            281 => 
            array (
                'id' => 282,
                'city' => 'CABUSAO',
                'code' => 51707,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            282 => 
            array (
                'id' => 283,
                'city' => 'CABUYAO CITY',
                'code' => 43404,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            283 => 
            array (
                'id' => 284,
                'city' => 'CADIZ CITY',
                'code' => 64504,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            284 => 
            array (
                'id' => 285,
            'city' => 'CAGAYAN DE ORO CITY (Capital)',
                'code' => 104305,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            285 => 
            array (
                'id' => 286,
                'city' => 'CAGAYANCILLO',
                'code' => 175308,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            286 => 
            array (
                'id' => 287,
                'city' => 'CAGDIANAO',
                'code' => 168502,
                'region_code' => 16,
                'province_code' => 1685,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            287 => 
            array (
                'id' => 288,
                'city' => 'CAGWAIT',
                'code' => 166804,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            288 => 
            array (
                'id' => 289,
                'city' => 'CAIBIRAN',
                'code' => 87804,
                'region_code' => 8,
                'province_code' => 878,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            289 => 
            array (
                'id' => 290,
                'city' => 'CAINTA',
                'code' => 45805,
                'region_code' => 4,
                'province_code' => 458,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            290 => 
            array (
                'id' => 291,
                'city' => 'CAJIDIOCAN',
                'code' => 175903,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            291 => 
            array (
                'id' => 292,
                'city' => 'CALABANGA',
                'code' => 51708,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            292 => 
            array (
                'id' => 293,
                'city' => 'CALACA',
                'code' => 41007,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            293 => 
            array (
                'id' => 294,
                'city' => 'CALAMBA',
                'code' => 104204,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            294 => 
            array (
                'id' => 295,
            'city' => 'CALANASAN (BAYAG)',
                'code' => 148101,
                'region_code' => 14,
                'province_code' => 1481,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            295 => 
            array (
                'id' => 296,
                'city' => 'CALANOGAS',
                'code' => 153632,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            296 => 
            array (
                'id' => 297,
                'city' => 'CALAPE',
                'code' => 71210,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            297 => 
            array (
                'id' => 298,
                'city' => 'CALASIAO',
                'code' => 15517,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            298 => 
            array (
                'id' => 299,
                'city' => 'CALATAGAN',
                'code' => 41008,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            299 => 
            array (
                'id' => 300,
                'city' => 'CALATRAVA',
                'code' => 175904,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            300 => 
            array (
                'id' => 301,
                'city' => 'CALATRAVA',
                'code' => 64505,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            301 => 
            array (
                'id' => 302,
                'city' => 'CALAUAG',
                'code' => 45607,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            302 => 
            array (
                'id' => 303,
                'city' => 'CALAUAN',
                'code' => 43406,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            303 => 
            array (
                'id' => 304,
                'city' => 'CALAYAN',
                'code' => 21509,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            304 => 
            array (
                'id' => 305,
                'city' => 'CALBAYOG CITY',
                'code' => 86003,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            305 => 
            array (
                'id' => 306,
                'city' => 'CALBIGA',
                'code' => 86004,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            306 => 
            array (
                'id' => 307,
                'city' => 'CALINOG',
                'code' => 63013,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            307 => 
            array (
                'id' => 308,
                'city' => 'CALINTAAN',
                'code' => 175102,
                'region_code' => 17,
                'province_code' => 1751,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            308 => 
            array (
                'id' => 309,
                'city' => 'CALOOCAN CITY',
                'code' => 137501,
                'region_code' => 13,
                'province_code' => 1375,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            309 => 
            array (
                'id' => 310,
                'city' => 'CALUBIAN',
                'code' => 83713,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            310 => 
            array (
                'id' => 311,
                'city' => 'CALUMPIT',
                'code' => 31407,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            311 => 
            array (
                'id' => 312,
                'city' => 'CALUYA',
                'code' => 60605,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            312 => 
            array (
                'id' => 313,
                'city' => 'CAMALANIUGAN',
                'code' => 21510,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            313 => 
            array (
                'id' => 314,
                'city' => 'CAMALIG',
                'code' => 50502,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            314 => 
            array (
                'id' => 315,
                'city' => 'CAMALIGAN',
                'code' => 51709,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            315 => 
            array (
                'id' => 316,
                'city' => 'CAMILING',
                'code' => 36903,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            316 => 
            array (
                'id' => 317,
                'city' => 'CAN-AVID',
                'code' => 82605,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            317 => 
            array (
                'id' => 318,
                'city' => 'CANAMAN',
                'code' => 51710,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            318 => 
            array (
                'id' => 319,
                'city' => 'CANDABA',
                'code' => 35405,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            319 => 
            array (
                'id' => 320,
                'city' => 'CANDELARIA',
                'code' => 45608,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            320 => 
            array (
                'id' => 321,
                'city' => 'CANDELARIA',
                'code' => 37103,
                'region_code' => 3,
                'province_code' => 371,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            321 => 
            array (
                'id' => 322,
                'city' => 'CANDIJAY',
                'code' => 71211,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            322 => 
            array (
                'id' => 323,
                'city' => 'CANDONI',
                'code' => 64506,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            323 => 
            array (
                'id' => 324,
                'city' => 'CANLAON CITY',
                'code' => 74608,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            324 => 
            array (
                'id' => 325,
                'city' => 'CANTILAN',
                'code' => 166805,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            325 => 
            array (
                'id' => 326,
                'city' => 'CAOAYAN',
                'code' => 12907,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            326 => 
            array (
                'id' => 327,
                'city' => 'CAPALONGA',
                'code' => 51602,
                'region_code' => 5,
                'province_code' => 516,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            327 => 
            array (
                'id' => 328,
                'city' => 'CAPAS',
                'code' => 36904,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            328 => 
            array (
                'id' => 329,
                'city' => 'CAPOOCAN',
                'code' => 83714,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            329 => 
            array (
                'id' => 330,
                'city' => 'CAPUL',
                'code' => 84804,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            330 => 
            array (
                'id' => 331,
                'city' => 'CARAGA',
                'code' => 112504,
                'region_code' => 11,
                'province_code' => 1125,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            331 => 
            array (
                'id' => 332,
                'city' => 'CARAMOAN',
                'code' => 51711,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            332 => 
            array (
                'id' => 333,
                'city' => 'CARAMORAN',
                'code' => 52004,
                'region_code' => 5,
                'province_code' => 520,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            333 => 
            array (
                'id' => 334,
                'city' => 'CARASI',
                'code' => 12807,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            334 => 
            array (
                'id' => 335,
                'city' => 'CARDONA',
                'code' => 45806,
                'region_code' => 4,
                'province_code' => 458,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            335 => 
            array (
                'id' => 336,
                'city' => 'CARIGARA',
                'code' => 83715,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            336 => 
            array (
                'id' => 337,
                'city' => 'CARLES',
                'code' => 63014,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            337 => 
            array (
                'id' => 338,
                'city' => 'CARMEN',
                'code' => 112303,
                'region_code' => 11,
                'province_code' => 1123,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            338 => 
            array (
                'id' => 339,
                'city' => 'CARMEN',
                'code' => 124702,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            339 => 
            array (
                'id' => 340,
                'city' => 'CARMEN',
                'code' => 166806,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            340 => 
            array (
                'id' => 341,
                'city' => 'CARMEN',
                'code' => 71212,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            341 => 
            array (
                'id' => 342,
                'city' => 'CARMEN',
                'code' => 72215,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            342 => 
            array (
                'id' => 343,
                'city' => 'CARMEN',
                'code' => 160204,
                'region_code' => 16,
                'province_code' => 1602,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            343 => 
            array (
                'id' => 344,
                'city' => 'CARMONA',
                'code' => 42104,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            344 => 
            array (
                'id' => 345,
                'city' => 'CARRANGLAN',
                'code' => 34905,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            345 => 
            array (
                'id' => 346,
                'city' => 'CARRASCAL',
                'code' => 166807,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            346 => 
            array (
                'id' => 347,
                'city' => 'CASIGURAN',
                'code' => 56205,
                'region_code' => 5,
                'province_code' => 562,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            347 => 
            array (
                'id' => 348,
                'city' => 'CASIGURAN',
                'code' => 37702,
                'region_code' => 3,
                'province_code' => 377,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            348 => 
            array (
                'id' => 349,
                'city' => 'CASTILLA',
                'code' => 56206,
                'region_code' => 5,
                'province_code' => 562,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            349 => 
            array (
                'id' => 350,
                'city' => 'CASTILLEJOS',
                'code' => 37104,
                'region_code' => 3,
                'province_code' => 371,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            350 => 
            array (
                'id' => 351,
                'city' => 'CATAINGAN',
                'code' => 54105,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            351 => 
            array (
                'id' => 352,
                'city' => 'CATANAUAN',
                'code' => 45610,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            352 => 
            array (
                'id' => 353,
                'city' => 'CATARMAN',
                'code' => 101801,
                'region_code' => 10,
                'province_code' => 1018,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            353 => 
            array (
                'id' => 354,
            'city' => 'CATARMAN (Capital)',
                'code' => 84805,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            354 => 
            array (
                'id' => 355,
                'city' => 'CATEEL',
                'code' => 112505,
                'region_code' => 11,
                'province_code' => 1125,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            355 => 
            array (
                'id' => 356,
                'city' => 'CATIGBIAN',
                'code' => 71213,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            356 => 
            array (
                'id' => 357,
                'city' => 'CATMON',
                'code' => 72216,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            357 => 
            array (
                'id' => 358,
                'city' => 'CATUBIG',
                'code' => 84806,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            358 => 
            array (
                'id' => 359,
                'city' => 'CAUAYAN',
                'code' => 64507,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            359 => 
            array (
                'id' => 360,
                'city' => 'CAVINTI',
                'code' => 43407,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            360 => 
            array (
                'id' => 361,
                'city' => 'CAVITE CITY',
                'code' => 42105,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            361 => 
            array (
                'id' => 362,
                'city' => 'CAWAYAN',
                'code' => 54106,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            362 => 
            array (
                'id' => 363,
            'city' => 'CEBU CITY (Capital)',
                'code' => 72217,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            363 => 
            array (
                'id' => 364,
                'city' => 'CERVANTES',
                'code' => 12908,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            364 => 
            array (
                'id' => 365,
                'city' => 'CITY OF ALAMINOS',
                'code' => 15503,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            365 => 
            array (
                'id' => 366,
                'city' => 'CITY OF ANTIPOLO',
                'code' => 45802,
                'region_code' => 4,
                'province_code' => 458,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            366 => 
            array (
                'id' => 367,
            'city' => 'CITY OF BALANGA (Capital)',
                'code' => 30803,
                'region_code' => 3,
                'province_code' => 308,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            367 => 
            array (
                'id' => 368,
                'city' => 'CITY OF BATAC',
                'code' => 12805,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            368 => 
            array (
                'id' => 369,
            'city' => 'CITY OF BAYAWAN (TULONG)',
                'code' => 74606,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            369 => 
            array (
                'id' => 370,
                'city' => 'CITY OF BAYBAY',
                'code' => 83708,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            370 => 
            array (
                'id' => 371,
                'city' => 'CITY OF BAYUGAN',
                'code' => 160301,
                'region_code' => 16,
                'province_code' => 1603,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            371 => 
            array (
                'id' => 372,
                'city' => 'CITY OF BIÑAN',
                'code' => 43403,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            372 => 
            array (
                'id' => 373,
                'city' => 'CITY OF BISLIG',
                'code' => 166803,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            373 => 
            array (
                'id' => 374,
                'city' => 'CITY OF BOGO',
                'code' => 72211,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            374 => 
            array (
                'id' => 375,
            'city' => 'CITY OF BORONGAN (Capital)',
                'code' => 82604,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            375 => 
            array (
                'id' => 376,
                'city' => 'CITY OF CABADBARAN',
                'code' => 160203,
                'region_code' => 16,
                'province_code' => 1602,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            376 => 
            array (
                'id' => 377,
                'city' => 'CITY OF CALAMBA',
                'code' => 43405,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            377 => 
            array (
                'id' => 378,
            'city' => 'CITY OF CALAPAN (Capital)',
                'code' => 175205,
                'region_code' => 17,
                'province_code' => 1752,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            378 => 
            array (
                'id' => 379,
                'city' => 'CITY OF CANDON',
                'code' => 12906,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            379 => 
            array (
                'id' => 380,
                'city' => 'CITY OF CARCAR',
                'code' => 72214,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            380 => 
            array (
                'id' => 381,
            'city' => 'CITY OF CATBALOGAN (Capital)',
                'code' => 86005,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            381 => 
            array (
                'id' => 382,
                'city' => 'CITY OF CAUAYAN',
                'code' => 23108,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            382 => 
            array (
                'id' => 383,
                'city' => 'CITY OF DASMARIÑAS',
                'code' => 42106,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            383 => 
            array (
                'id' => 384,
            'city' => 'CITY OF DIGOS (Capital)',
                'code' => 112403,
                'region_code' => 11,
                'province_code' => 1124,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            384 => 
            array (
                'id' => 385,
                'city' => 'CITY OF EL SALVADOR',
                'code' => 104307,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            385 => 
            array (
                'id' => 386,
                'city' => 'CITY OF ESCALANTE',
                'code' => 64509,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            386 => 
            array (
                'id' => 387,
                'city' => 'CITY OF GAPAN',
                'code' => 34908,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            387 => 
            array (
                'id' => 388,
                'city' => 'CITY OF GUIHULNGAN',
                'code' => 74611,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            388 => 
            array (
                'id' => 389,
                'city' => 'CITY OF HIMAMAYLAN',
                'code' => 64510,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            389 => 
            array (
                'id' => 390,
                'city' => 'CITY OF ISABELA',
                'code' => 99701,
                'region_code' => 9,
                'province_code' => 997,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            390 => 
            array (
                'id' => 391,
                'city' => 'CITY OF KABANKALAN',
                'code' => 64515,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            391 => 
            array (
                'id' => 392,
            'city' => 'CITY OF KIDAPAWAN (Capital)',
                'code' => 124704,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            392 => 
            array (
                'id' => 393,
            'city' => 'CITY OF KORONADAL (Capital)',
                'code' => 126306,
                'region_code' => 12,
                'province_code' => 1263,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            393 => 
            array (
                'id' => 394,
                'city' => 'CITY OF LAMITAN',
                'code' => 150702,
                'region_code' => 15,
                'province_code' => 1507,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            394 => 
            array (
                'id' => 395,
                'city' => 'CITY OF LAS PIÑAS',
                'code' => 137601,
                'region_code' => 13,
                'province_code' => 1376,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            395 => 
            array (
                'id' => 396,
                'city' => 'CITY OF LIGAO',
                'code' => 50508,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            396 => 
            array (
                'id' => 397,
            'city' => 'CITY OF MAASIN (Capital)',
                'code' => 86407,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            397 => 
            array (
                'id' => 398,
                'city' => 'CITY OF MAKATI',
                'code' => 137602,
                'region_code' => 13,
                'province_code' => 1376,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            398 => 
            array (
                'id' => 399,
                'city' => 'CITY OF MALABON',
                'code' => 137502,
                'region_code' => 13,
                'province_code' => 1375,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            399 => 
            array (
                'id' => 400,
            'city' => 'CITY OF MALAYBALAY (Capital)',
                'code' => 101312,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            400 => 
            array (
                'id' => 401,
            'city' => 'CITY OF MALOLOS (Capital)',
                'code' => 31410,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            401 => 
            array (
                'id' => 402,
                'city' => 'CITY OF MANDALUYONG',
                'code' => 137401,
                'region_code' => 13,
                'province_code' => 1374,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            402 => 
            array (
                'id' => 403,
                'city' => 'CITY OF MARIKINA',
                'code' => 137402,
                'region_code' => 13,
                'province_code' => 1374,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            403 => 
            array (
                'id' => 404,
            'city' => 'CITY OF MASBATE (Capital)',
                'code' => 54111,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            404 => 
            array (
                'id' => 405,
            'city' => 'CITY OF MATI (Capital)',
                'code' => 112509,
                'region_code' => 11,
                'province_code' => 1125,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            405 => 
            array (
                'id' => 406,
                'city' => 'CITY OF MEYCAUAYAN',
                'code' => 31412,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            406 => 
            array (
                'id' => 407,
                'city' => 'CITY OF MUNTINLUPA',
                'code' => 137603,
                'region_code' => 13,
                'province_code' => 1376,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            407 => 
            array (
                'id' => 408,
                'city' => 'CITY OF NAGA',
                'code' => 72234,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            408 => 
            array (
                'id' => 409,
                'city' => 'CITY OF NAVOTAS',
                'code' => 137503,
                'region_code' => 13,
                'province_code' => 1375,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            409 => 
            array (
                'id' => 410,
                'city' => 'CITY OF PANABO',
                'code' => 112315,
                'region_code' => 11,
                'province_code' => 1123,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            410 => 
            array (
                'id' => 411,
                'city' => 'CITY OF PARAÑAQUE',
                'code' => 137604,
                'region_code' => 13,
                'province_code' => 1376,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            411 => 
            array (
                'id' => 412,
                'city' => 'CITY OF PASIG',
                'code' => 137403,
                'region_code' => 13,
                'province_code' => 1374,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            412 => 
            array (
                'id' => 413,
                'city' => 'CITY OF PASSI',
                'code' => 63035,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            413 => 
            array (
                'id' => 414,
            'city' => 'CITY OF SAN FERNANDO (Capital)',
                'code' => 13314,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            414 => 
            array (
                'id' => 415,
            'city' => 'CITY OF SAN FERNANDO (Capital)',
                'code' => 35416,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            415 => 
            array (
                'id' => 416,
                'city' => 'CITY OF SAN JOSE DEL MONTE',
                'code' => 31420,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            416 => 
            array (
                'id' => 417,
                'city' => 'CITY OF SAN JUAN',
                'code' => 137405,
                'region_code' => 13,
                'province_code' => 1374,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            417 => 
            array (
                'id' => 418,
                'city' => 'CITY OF SAN PEDRO',
                'code' => 43425,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            418 => 
            array (
                'id' => 419,
                'city' => 'CITY OF SANTA ROSA',
                'code' => 43428,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            419 => 
            array (
                'id' => 420,
                'city' => 'CITY OF SANTIAGO',
                'code' => 23135,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            420 => 
            array (
                'id' => 421,
                'city' => 'CITY OF SIPALAY',
                'code' => 64527,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            421 => 
            array (
                'id' => 422,
            'city' => 'CITY OF SORSOGON (Capital)',
                'code' => 56216,
                'region_code' => 5,
                'province_code' => 562,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            422 => 
            array (
                'id' => 423,
                'city' => 'CITY OF TABACO',
                'code' => 50517,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            423 => 
            array (
                'id' => 424,
            'city' => 'CITY OF TABUK (Capital)',
                'code' => 143213,
                'region_code' => 14,
                'province_code' => 1432,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            424 => 
            array (
                'id' => 425,
                'city' => 'CITY OF TACURONG',
                'code' => 126511,
                'region_code' => 12,
                'province_code' => 1265,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            425 => 
            array (
                'id' => 426,
            'city' => 'CITY OF TAGUM (Capital)',
                'code' => 112319,
                'region_code' => 11,
                'province_code' => 1123,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            426 => 
            array (
                'id' => 427,
                'city' => 'CITY OF TALISAY',
                'code' => 72250,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            427 => 
            array (
                'id' => 428,
                'city' => 'CITY OF TALISAY',
                'code' => 64528,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            428 => 
            array (
                'id' => 429,
                'city' => 'CITY OF TANAUAN',
                'code' => 41031,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            429 => 
            array (
                'id' => 430,
            'city' => 'CITY OF TANDAG (Capital)',
                'code' => 166819,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            430 => 
            array (
                'id' => 431,
                'city' => 'CITY OF TANJAY',
                'code' => 74621,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            431 => 
            array (
                'id' => 432,
            'city' => 'CITY OF TARLAC (Capital)',
                'code' => 36916,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            432 => 
            array (
                'id' => 433,
                'city' => 'CITY OF TAYABAS',
                'code' => 45647,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            433 => 
            array (
                'id' => 434,
                'city' => 'CITY OF URDANETA',
                'code' => 15546,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            434 => 
            array (
                'id' => 435,
                'city' => 'CITY OF VALENCIA',
                'code' => 101321,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            435 => 
            array (
                'id' => 436,
                'city' => 'CITY OF VALENZUELA',
                'code' => 137504,
                'region_code' => 13,
                'province_code' => 1375,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            436 => 
            array (
                'id' => 437,
                'city' => 'CITY OF VICTORIAS',
                'code' => 64531,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            437 => 
            array (
                'id' => 438,
            'city' => 'CITY OF VIGAN (Capital)',
                'code' => 12934,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            438 => 
            array (
                'id' => 439,
                'city' => 'CLARIN',
                'code' => 104205,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            439 => 
            array (
                'id' => 440,
                'city' => 'CLARIN',
                'code' => 71214,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            440 => 
            array (
                'id' => 441,
                'city' => 'CLAVER',
                'code' => 166706,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            441 => 
            array (
                'id' => 442,
                'city' => 'CLAVERIA',
                'code' => 104306,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            442 => 
            array (
                'id' => 443,
                'city' => 'CLAVERIA',
                'code' => 54107,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            443 => 
            array (
                'id' => 444,
                'city' => 'CLAVERIA',
                'code' => 21511,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            444 => 
            array (
                'id' => 445,
                'city' => 'COLUMBIO',
                'code' => 126502,
                'region_code' => 12,
                'province_code' => 1265,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            445 => 
            array (
                'id' => 446,
                'city' => 'COMPOSTELA',
                'code' => 118201,
                'region_code' => 11,
                'province_code' => 1182,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            446 => 
            array (
                'id' => 447,
                'city' => 'COMPOSTELA',
                'code' => 72218,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            447 => 
            array (
                'id' => 448,
                'city' => 'CONCEPCION',
                'code' => 36905,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            448 => 
            array (
                'id' => 449,
                'city' => 'CONCEPCION',
                'code' => 104206,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            449 => 
            array (
                'id' => 450,
                'city' => 'CONCEPCION',
                'code' => 175905,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            450 => 
            array (
                'id' => 451,
                'city' => 'CONCEPCION',
                'code' => 63015,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            451 => 
            array (
                'id' => 452,
                'city' => 'CONNER',
                'code' => 148102,
                'region_code' => 14,
                'province_code' => 1481,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            452 => 
            array (
                'id' => 453,
                'city' => 'CONSOLACION',
                'code' => 72219,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            453 => 
            array (
                'id' => 454,
                'city' => 'CORCUERA',
                'code' => 175906,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            454 => 
            array (
                'id' => 455,
                'city' => 'CORDON',
                'code' => 23109,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            455 => 
            array (
                'id' => 456,
                'city' => 'CORDOVA',
                'code' => 72220,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            456 => 
            array (
                'id' => 457,
                'city' => 'CORELLA',
                'code' => 71215,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            457 => 
            array (
                'id' => 458,
                'city' => 'CORON',
                'code' => 175309,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            458 => 
            array (
                'id' => 459,
                'city' => 'CORTES',
                'code' => 166808,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            459 => 
            array (
                'id' => 460,
                'city' => 'CORTES',
                'code' => 71216,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            460 => 
            array (
                'id' => 461,
                'city' => 'COTABATO CITY',
                'code' => 129804,
                'region_code' => 12,
                'province_code' => 1298,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            461 => 
            array (
                'id' => 462,
                'city' => 'CUARTERO',
                'code' => 61901,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            462 => 
            array (
                'id' => 463,
                'city' => 'CUENCA',
                'code' => 41009,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            463 => 
            array (
                'id' => 464,
                'city' => 'CULABA',
                'code' => 87805,
                'region_code' => 8,
                'province_code' => 878,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            464 => 
            array (
                'id' => 465,
                'city' => 'CULASI',
                'code' => 60606,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            465 => 
            array (
                'id' => 466,
                'city' => 'CULION',
                'code' => 175322,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            466 => 
            array (
                'id' => 467,
                'city' => 'CURRIMAO',
                'code' => 12808,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            467 => 
            array (
                'id' => 468,
                'city' => 'CUYAPO',
                'code' => 34906,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            468 => 
            array (
                'id' => 469,
                'city' => 'CUYO',
                'code' => 175310,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            469 => 
            array (
                'id' => 470,
                'city' => 'DAANBANTAYAN',
                'code' => 72221,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            470 => 
            array (
                'id' => 471,
            'city' => 'DAET (Capital)',
                'code' => 51603,
                'region_code' => 5,
                'province_code' => 516,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            471 => 
            array (
                'id' => 472,
                'city' => 'DAGAMI',
                'code' => 83717,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            472 => 
            array (
                'id' => 473,
                'city' => 'DAGOHOY',
                'code' => 71217,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            473 => 
            array (
                'id' => 474,
                'city' => 'DAGUIOMAN',
                'code' => 140105,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            474 => 
            array (
                'id' => 475,
                'city' => 'DAGUPAN CITY',
                'code' => 15518,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            475 => 
            array (
                'id' => 476,
                'city' => 'DALAGUETE',
                'code' => 72222,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            476 => 
            array (
                'id' => 477,
                'city' => 'DAMULOG',
                'code' => 101302,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            477 => 
            array (
                'id' => 478,
                'city' => 'DANAO',
                'code' => 71218,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            478 => 
            array (
                'id' => 479,
                'city' => 'DANAO CITY',
                'code' => 72223,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            479 => 
            array (
                'id' => 480,
                'city' => 'DANGCAGAN',
                'code' => 101303,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            480 => 
            array (
                'id' => 481,
                'city' => 'DANGLAS',
                'code' => 140106,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            481 => 
            array (
                'id' => 482,
                'city' => 'DAO',
                'code' => 61902,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            482 => 
            array (
                'id' => 483,
                'city' => 'DAPA',
                'code' => 166707,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            483 => 
            array (
                'id' => 484,
                'city' => 'DAPITAN CITY',
                'code' => 97201,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            484 => 
            array (
                'id' => 485,
            'city' => 'DARAGA (LOCSIN)',
                'code' => 50503,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            485 => 
            array (
                'id' => 486,
                'city' => 'DARAM',
                'code' => 86006,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            486 => 
            array (
                'id' => 487,
                'city' => 'DASOL',
                'code' => 15519,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            487 => 
            array (
                'id' => 488,
                'city' => 'DATU ABDULLAH SANGKI',
                'code' => 153828,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            488 => 
            array (
                'id' => 489,
                'city' => 'DATU ANGGAL MIDTIMBANG',
                'code' => 153831,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            489 => 
            array (
                'id' => 490,
                'city' => 'DATU BLAH T. SINSUAT',
                'code' => 153830,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            490 => 
            array (
                'id' => 491,
                'city' => 'DATU HOFFER AMPATUAN',
                'code' => 153835,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            491 => 
            array (
                'id' => 492,
            'city' => 'DATU ODIN SINSUAT (DINAIG)',
                'code' => 153807,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            492 => 
            array (
                'id' => 493,
                'city' => 'DATU PAGLAS',
                'code' => 153805,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            493 => 
            array (
                'id' => 494,
                'city' => 'DATU PIANG',
                'code' => 153806,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            494 => 
            array (
                'id' => 495,
                'city' => 'DATU SALIBO',
                'code' => 153836,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            495 => 
            array (
                'id' => 496,
                'city' => 'DATU SAUDI-AMPATUAN',
                'code' => 153826,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            496 => 
            array (
                'id' => 497,
                'city' => 'DATU UNSAY',
                'code' => 153827,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            497 => 
            array (
                'id' => 498,
                'city' => 'DAUIN',
                'code' => 74609,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            498 => 
            array (
                'id' => 499,
                'city' => 'DAUIS',
                'code' => 71219,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            499 => 
            array (
                'id' => 500,
                'city' => 'DAVAO CITY',
                'code' => 112402,
                'region_code' => 11,
                'province_code' => 1124,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'city' => 'DEL CARMEN',
                'code' => 166708,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            1 => 
            array (
                'id' => 502,
                'city' => 'DEL GALLEGO',
                'code' => 51712,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            2 => 
            array (
                'id' => 503,
            'city' => 'DELFIN ALBANO (MAGSAYSAY)',
                'code' => 23118,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            3 => 
            array (
                'id' => 504,
                'city' => 'DIADI',
                'code' => 25006,
                'region_code' => 2,
                'province_code' => 250,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            4 => 
            array (
                'id' => 505,
                'city' => 'DIFFUN',
                'code' => 25703,
                'region_code' => 2,
                'province_code' => 257,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            5 => 
            array (
                'id' => 506,
                'city' => 'DILASAG',
                'code' => 37703,
                'region_code' => 3,
                'province_code' => 377,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            6 => 
            array (
                'id' => 507,
                'city' => 'DIMASALANG',
                'code' => 54108,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            7 => 
            array (
                'id' => 508,
                'city' => 'DIMATALING',
                'code' => 97305,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            8 => 
            array (
                'id' => 509,
                'city' => 'DIMIAO',
                'code' => 71220,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            9 => 
            array (
                'id' => 510,
                'city' => 'DINAGAT',
                'code' => 168503,
                'region_code' => 16,
                'province_code' => 1685,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            10 => 
            array (
                'id' => 511,
                'city' => 'DINALUNGAN',
                'code' => 37704,
                'region_code' => 3,
                'province_code' => 377,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            11 => 
            array (
                'id' => 512,
                'city' => 'DINALUPIHAN',
                'code' => 30804,
                'region_code' => 3,
                'province_code' => 308,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            12 => 
            array (
                'id' => 513,
                'city' => 'DINAPIGUE',
                'code' => 23110,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            13 => 
            array (
                'id' => 514,
                'city' => 'DINAS',
                'code' => 97306,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            14 => 
            array (
                'id' => 515,
                'city' => 'DINGALAN',
                'code' => 37705,
                'region_code' => 3,
                'province_code' => 377,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            15 => 
            array (
                'id' => 516,
                'city' => 'DINGLE',
                'code' => 63016,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            16 => 
            array (
                'id' => 517,
                'city' => 'DINGRAS',
                'code' => 12809,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            17 => 
            array (
                'id' => 518,
                'city' => 'DIPACULAO',
                'code' => 37706,
                'region_code' => 3,
                'province_code' => 377,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            18 => 
            array (
                'id' => 519,
                'city' => 'DIPLAHAN',
                'code' => 98303,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            19 => 
            array (
                'id' => 520,
            'city' => 'DIPOLOG CITY (Capital)',
                'code' => 97202,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            20 => 
            array (
                'id' => 521,
                'city' => 'DITSAAN-RAMAIN',
                'code' => 153624,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            21 => 
            array (
                'id' => 522,
                'city' => 'DIVILACAN',
                'code' => 23111,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            22 => 
            array (
                'id' => 523,
                'city' => 'DOLORES',
                'code' => 82606,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            23 => 
            array (
                'id' => 524,
                'city' => 'DOLORES',
                'code' => 140107,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            24 => 
            array (
                'id' => 525,
                'city' => 'DOLORES',
                'code' => 45615,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            25 => 
            array (
                'id' => 526,
                'city' => 'DON CARLOS',
                'code' => 101304,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            26 => 
            array (
                'id' => 527,
                'city' => 'DON MARCELINO',
                'code' => 118601,
                'region_code' => 11,
                'province_code' => 1186,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            27 => 
            array (
                'id' => 528,
            'city' => 'DON VICTORIANO CHIONGBIAN  (DON MARIANO MARCOS)',
                'code' => 104217,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            28 => 
            array (
                'id' => 529,
                'city' => 'DOÑA REMEDIOS TRINIDAD',
                'code' => 31424,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            29 => 
            array (
                'id' => 530,
                'city' => 'DONSOL',
                'code' => 56207,
                'region_code' => 5,
                'province_code' => 562,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            30 => 
            array (
                'id' => 531,
                'city' => 'DUEÑAS',
                'code' => 63017,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            31 => 
            array (
                'id' => 532,
                'city' => 'DUERO',
                'code' => 71221,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            32 => 
            array (
                'id' => 533,
                'city' => 'DULAG',
                'code' => 83718,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            33 => 
            array (
                'id' => 534,
            'city' => 'DUMAGUETE CITY (Capital)',
                'code' => 74610,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            34 => 
            array (
                'id' => 535,
                'city' => 'DUMALAG',
                'code' => 61903,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            35 => 
            array (
                'id' => 536,
                'city' => 'DUMALINAO',
                'code' => 97307,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            36 => 
            array (
                'id' => 537,
                'city' => 'DUMALNEG',
                'code' => 12810,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            37 => 
            array (
                'id' => 538,
                'city' => 'DUMANGAS',
                'code' => 63018,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            38 => 
            array (
                'id' => 539,
                'city' => 'DUMANJUG',
                'code' => 72224,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            39 => 
            array (
                'id' => 540,
                'city' => 'DUMARAN',
                'code' => 175311,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            40 => 
            array (
                'id' => 541,
                'city' => 'DUMARAO',
                'code' => 61904,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            41 => 
            array (
                'id' => 542,
                'city' => 'DUMINGAG',
                'code' => 97308,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            42 => 
            array (
                'id' => 543,
                'city' => 'DUPAX DEL NORTE',
                'code' => 25007,
                'region_code' => 2,
                'province_code' => 250,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            43 => 
            array (
                'id' => 544,
                'city' => 'DUPAX DEL SUR',
                'code' => 25008,
                'region_code' => 2,
                'province_code' => 250,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            44 => 
            array (
                'id' => 545,
                'city' => 'ECHAGUE',
                'code' => 23112,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            45 => 
            array (
                'id' => 546,
            'city' => 'EL NIDO (BACUIT)',
                'code' => 175312,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            46 => 
            array (
                'id' => 547,
                'city' => 'ENRILE',
                'code' => 21512,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            47 => 
            array (
                'id' => 548,
            'city' => 'ENRIQUE B. MAGALONA (SARAVIA)',
                'code' => 64508,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            48 => 
            array (
                'id' => 549,
                'city' => 'ENRIQUE VILLANUEVA',
                'code' => 76101,
                'region_code' => 7,
                'province_code' => 761,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            49 => 
            array (
                'id' => 550,
                'city' => 'ERMITA',
                'code' => 133908,
                'region_code' => 13,
                'province_code' => 1339,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            50 => 
            array (
                'id' => 551,
                'city' => 'ESPERANZA',
                'code' => 160303,
                'region_code' => 16,
                'province_code' => 1603,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            51 => 
            array (
                'id' => 552,
                'city' => 'ESPERANZA',
                'code' => 54109,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            52 => 
            array (
                'id' => 553,
                'city' => 'ESPERANZA',
                'code' => 126503,
                'region_code' => 12,
                'province_code' => 1265,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            53 => 
            array (
                'id' => 554,
                'city' => 'ESTANCIA',
                'code' => 63019,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            54 => 
            array (
                'id' => 555,
                'city' => 'FAMY',
                'code' => 43408,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            55 => 
            array (
                'id' => 556,
                'city' => 'FERROL',
                'code' => 175916,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            56 => 
            array (
                'id' => 557,
                'city' => 'FLORA',
                'code' => 148103,
                'region_code' => 14,
                'province_code' => 1481,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            57 => 
            array (
                'id' => 558,
                'city' => 'FLORIDABLANCA',
                'code' => 35406,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            58 => 
            array (
                'id' => 559,
            'city' => 'GABALDON (BITULOK & SABANI)',
                'code' => 34907,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            59 => 
            array (
                'id' => 560,
                'city' => 'GAINZA',
                'code' => 51713,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            60 => 
            array (
                'id' => 561,
                'city' => 'GALIMUYOD',
                'code' => 12909,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            61 => 
            array (
                'id' => 562,
                'city' => 'GAMAY',
                'code' => 84807,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            62 => 
            array (
                'id' => 563,
                'city' => 'GAMU',
                'code' => 23113,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            63 => 
            array (
                'id' => 564,
                'city' => 'GANASSI',
                'code' => 153609,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            64 => 
            array (
                'id' => 565,
                'city' => 'GANDARA',
                'code' => 86007,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            65 => 
            array (
                'id' => 566,
                'city' => 'GARCHITORENA',
                'code' => 51714,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            66 => 
            array (
                'id' => 567,
                'city' => 'GARCIA HERNANDEZ',
                'code' => 71222,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            67 => 
            array (
                'id' => 568,
                'city' => 'GASAN',
                'code' => 174003,
                'region_code' => 17,
                'province_code' => 1740,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            68 => 
            array (
                'id' => 569,
                'city' => 'GATTARAN',
                'code' => 21513,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            69 => 
            array (
                'id' => 570,
                'city' => 'GEN. MARIANO ALVAREZ',
                'code' => 42123,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            70 => 
            array (
                'id' => 571,
                'city' => 'GEN. S. K. PENDATUN',
                'code' => 153819,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            71 => 
            array (
                'id' => 572,
                'city' => 'GENERAL EMILIO AGUINALDO',
                'code' => 42107,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            72 => 
            array (
                'id' => 573,
                'city' => 'GENERAL LUNA',
                'code' => 45616,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            73 => 
            array (
                'id' => 574,
                'city' => 'GENERAL LUNA',
                'code' => 166710,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            74 => 
            array (
                'id' => 575,
                'city' => 'GENERAL MACARTHUR',
                'code' => 82607,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            75 => 
            array (
                'id' => 576,
                'city' => 'GENERAL MAMERTO NATIVIDAD',
                'code' => 34909,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            76 => 
            array (
                'id' => 577,
                'city' => 'GENERAL NAKAR',
                'code' => 45617,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            77 => 
            array (
                'id' => 578,
            'city' => 'GENERAL SANTOS CITY (DADIANGAS)',
                'code' => 126303,
                'region_code' => 12,
                'province_code' => 1263,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            78 => 
            array (
                'id' => 579,
            'city' => 'GENERAL TINIO (PAPAYA)',
                'code' => 34910,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            79 => 
            array (
                'id' => 580,
                'city' => 'GENERAL TRIAS',
                'code' => 42108,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            80 => 
            array (
                'id' => 581,
                'city' => 'GERONA',
                'code' => 36906,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            81 => 
            array (
                'id' => 582,
                'city' => 'GIGAQUIT',
                'code' => 166711,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            82 => 
            array (
                'id' => 583,
                'city' => 'GIGMOTO',
                'code' => 52005,
                'region_code' => 5,
                'province_code' => 520,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            83 => 
            array (
                'id' => 584,
                'city' => 'GINATILAN',
                'code' => 72225,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            84 => 
            array (
                'id' => 585,
                'city' => 'GINGOOG CITY',
                'code' => 104308,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            85 => 
            array (
                'id' => 586,
                'city' => 'GIPORLOS',
                'code' => 82608,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            86 => 
            array (
                'id' => 587,
                'city' => 'GITAGUM',
                'code' => 104309,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            87 => 
            array (
                'id' => 588,
                'city' => 'GLAN',
                'code' => 128002,
                'region_code' => 12,
                'province_code' => 1280,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            88 => 
            array (
                'id' => 589,
                'city' => 'GLORIA',
                'code' => 175206,
                'region_code' => 17,
                'province_code' => 1752,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            89 => 
            array (
                'id' => 590,
                'city' => 'GOA',
                'code' => 51715,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            90 => 
            array (
                'id' => 591,
                'city' => 'GODOD',
                'code' => 97225,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            91 => 
            array (
                'id' => 592,
                'city' => 'GONZAGA',
                'code' => 21514,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            92 => 
            array (
                'id' => 593,
                'city' => 'GOVERNOR GENEROSO',
                'code' => 112506,
                'region_code' => 11,
                'province_code' => 1125,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            93 => 
            array (
                'id' => 594,
            'city' => 'GREGORIO DEL PILAR (CONCEPCION)',
                'code' => 12910,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            94 => 
            array (
                'id' => 595,
                'city' => 'GUAGUA',
                'code' => 35407,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            95 => 
            array (
                'id' => 596,
                'city' => 'GUBAT',
                'code' => 56208,
                'region_code' => 5,
                'province_code' => 562,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            96 => 
            array (
                'id' => 597,
                'city' => 'GUIGUINTO',
                'code' => 31408,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            97 => 
            array (
                'id' => 598,
                'city' => 'GUIMBA',
                'code' => 34911,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            98 => 
            array (
                'id' => 599,
                'city' => 'GUIMBAL',
                'code' => 63020,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            99 => 
            array (
                'id' => 600,
                'city' => 'GUINAYANGAN',
                'code' => 45618,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            100 => 
            array (
                'id' => 601,
                'city' => 'GUINDULMAN',
                'code' => 71223,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            101 => 
            array (
                'id' => 602,
                'city' => 'GUINDULUNGAN',
                'code' => 153825,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            102 => 
            array (
                'id' => 603,
                'city' => 'GUINOBATAN',
                'code' => 50504,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            103 => 
            array (
                'id' => 604,
                'city' => 'GUINSILIBAN',
                'code' => 101802,
                'region_code' => 10,
                'province_code' => 1018,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            104 => 
            array (
                'id' => 605,
                'city' => 'GUIPOS',
                'code' => 97343,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            105 => 
            array (
                'id' => 606,
                'city' => 'GUIUAN',
                'code' => 82609,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            106 => 
            array (
                'id' => 607,
                'city' => 'GUMACA',
                'code' => 45619,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            107 => 
            array (
                'id' => 608,
                'city' => 'GUTALAC',
                'code' => 97223,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            108 => 
            array (
                'id' => 609,
                'city' => 'HADJI MOHAMMAD AJUL',
                'code' => 150710,
                'region_code' => 15,
                'province_code' => 1507,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            109 => 
            array (
                'id' => 610,
                'city' => 'HADJI MUHTAMAD',
                'code' => 150712,
                'region_code' => 15,
                'province_code' => 1507,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            110 => 
            array (
                'id' => 611,
            'city' => 'HADJI PANGLIMA TAHIL (MARUNGGAS)',
                'code' => 156606,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            111 => 
            array (
                'id' => 612,
                'city' => 'HAGONOY',
                'code' => 112404,
                'region_code' => 11,
                'province_code' => 1124,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            112 => 
            array (
                'id' => 613,
                'city' => 'HAGONOY',
                'code' => 31409,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            113 => 
            array (
                'id' => 614,
                'city' => 'HAMTIC',
                'code' => 60608,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            114 => 
            array (
                'id' => 615,
                'city' => 'HERMOSA',
                'code' => 30805,
                'region_code' => 3,
                'province_code' => 308,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            115 => 
            array (
                'id' => 616,
                'city' => 'HERNANI',
                'code' => 82610,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            116 => 
            array (
                'id' => 617,
                'city' => 'HILONGOS',
                'code' => 83719,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            117 => 
            array (
                'id' => 618,
                'city' => 'HINABANGAN',
                'code' => 86008,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            118 => 
            array (
                'id' => 619,
                'city' => 'HINATUAN',
                'code' => 166809,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            119 => 
            array (
                'id' => 620,
                'city' => 'HINDANG',
                'code' => 83720,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            120 => 
            array (
                'id' => 621,
                'city' => 'HINGYON',
                'code' => 142709,
                'region_code' => 14,
                'province_code' => 1427,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            121 => 
            array (
                'id' => 622,
                'city' => 'HINIGARAN',
                'code' => 64511,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            122 => 
            array (
                'id' => 623,
            'city' => 'HINOBA-AN (ASIA)',
                'code' => 64512,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            123 => 
            array (
                'id' => 624,
                'city' => 'HINUNANGAN',
                'code' => 86403,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            124 => 
            array (
                'id' => 625,
                'city' => 'HINUNDAYAN',
                'code' => 86404,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            125 => 
            array (
                'id' => 626,
                'city' => 'HUNGDUAN',
                'code' => 142702,
                'region_code' => 14,
                'province_code' => 1427,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            126 => 
            array (
                'id' => 627,
            'city' => 'IBA (Capital)',
                'code' => 37105,
                'region_code' => 3,
                'province_code' => 371,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            127 => 
            array (
                'id' => 628,
                'city' => 'IBAAN',
                'code' => 41010,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            128 => 
            array (
                'id' => 629,
                'city' => 'IBAJAY',
                'code' => 60406,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            129 => 
            array (
                'id' => 630,
                'city' => 'IGBARAS',
                'code' => 63021,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            130 => 
            array (
                'id' => 631,
                'city' => 'IGUIG',
                'code' => 21515,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            131 => 
            array (
                'id' => 632,
            'city' => 'ILAGAN CITY (Capital)',
                'code' => 23114,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            132 => 
            array (
                'id' => 633,
                'city' => 'ILIGAN CITY',
                'code' => 103504,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            133 => 
            array (
                'id' => 634,
                'city' => 'ILOG',
                'code' => 64513,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            134 => 
            array (
                'id' => 635,
            'city' => 'ILOILO CITY (Capital)',
                'code' => 63022,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            135 => 
            array (
                'id' => 636,
                'city' => 'IMELDA',
                'code' => 98304,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            136 => 
            array (
                'id' => 637,
                'city' => 'IMPASUG-ONG',
                'code' => 101305,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            137 => 
            array (
                'id' => 638,
                'city' => 'IMUS CITY',
                'code' => 42109,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            138 => 
            array (
                'id' => 639,
                'city' => 'INABANGA',
                'code' => 71224,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            139 => 
            array (
                'id' => 640,
                'city' => 'INDANAN',
                'code' => 156601,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            140 => 
            array (
                'id' => 641,
                'city' => 'INDANG',
                'code' => 42110,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            141 => 
            array (
                'id' => 642,
                'city' => 'INFANTA',
                'code' => 45620,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            142 => 
            array (
                'id' => 643,
                'city' => 'INFANTA',
                'code' => 15520,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            143 => 
            array (
                'id' => 644,
                'city' => 'INITAO',
                'code' => 104310,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            144 => 
            array (
                'id' => 645,
                'city' => 'INOPACAN',
                'code' => 83721,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            145 => 
            array (
                'id' => 646,
                'city' => 'INTRAMUROS',
                'code' => 133909,
                'region_code' => 13,
                'province_code' => 1339,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            146 => 
            array (
                'id' => 647,
            'city' => 'IPIL (Capital)',
                'code' => 98305,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            147 => 
            array (
                'id' => 648,
                'city' => 'IRIGA CITY',
                'code' => 51716,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            148 => 
            array (
                'id' => 649,
                'city' => 'IROSIN',
                'code' => 56209,
                'region_code' => 5,
                'province_code' => 562,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            149 => 
            array (
                'id' => 650,
                'city' => 'ISABEL',
                'code' => 83722,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            150 => 
            array (
                'id' => 651,
                'city' => 'ISABELA',
                'code' => 64514,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            151 => 
            array (
                'id' => 652,
                'city' => 'ISLAND GARDEN CITY OF SAMAL',
                'code' => 112317,
                'region_code' => 11,
                'province_code' => 1123,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            152 => 
            array (
                'id' => 653,
            'city' => 'ISULAN (Capital)',
                'code' => 126504,
                'region_code' => 12,
                'province_code' => 1265,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            153 => 
            array (
                'id' => 654,
                'city' => 'ITBAYAT',
                'code' => 20902,
                'region_code' => 2,
                'province_code' => 209,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            154 => 
            array (
                'id' => 655,
                'city' => 'ITOGON',
                'code' => 141106,
                'region_code' => 14,
                'province_code' => 1411,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            155 => 
            array (
                'id' => 656,
                'city' => 'IVANA',
                'code' => 20903,
                'region_code' => 2,
                'province_code' => 209,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            156 => 
            array (
                'id' => 657,
                'city' => 'IVISAN',
                'code' => 61905,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            157 => 
            array (
                'id' => 658,
                'city' => 'JABONGA',
                'code' => 160205,
                'region_code' => 16,
                'province_code' => 1602,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            158 => 
            array (
                'id' => 659,
                'city' => 'JAEN',
                'code' => 34912,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            159 => 
            array (
                'id' => 660,
                'city' => 'JAGNA',
                'code' => 71225,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            160 => 
            array (
                'id' => 661,
                'city' => 'JALA-JALA',
                'code' => 45807,
                'region_code' => 4,
                'province_code' => 458,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            161 => 
            array (
                'id' => 662,
                'city' => 'JAMINDAN',
                'code' => 61906,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            162 => 
            array (
                'id' => 663,
                'city' => 'JANIUAY',
                'code' => 63023,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            163 => 
            array (
                'id' => 664,
                'city' => 'JARO',
                'code' => 83723,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            164 => 
            array (
                'id' => 665,
                'city' => 'JASAAN',
                'code' => 104311,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            165 => 
            array (
                'id' => 666,
            'city' => 'JAVIER (BUGHO)',
                'code' => 83724,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            166 => 
            array (
                'id' => 667,
                'city' => 'JETAFE',
                'code' => 71226,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            167 => 
            array (
                'id' => 668,
                'city' => 'JIABONG',
                'code' => 86009,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            168 => 
            array (
                'id' => 669,
                'city' => 'JIMALALUD',
                'code' => 74612,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            169 => 
            array (
                'id' => 670,
                'city' => 'JIMENEZ',
                'code' => 104207,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            170 => 
            array (
                'id' => 671,
                'city' => 'JIPAPAD',
                'code' => 82611,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            171 => 
            array (
                'id' => 672,
            'city' => 'JOLO (Capital)',
                'code' => 156602,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            172 => 
            array (
                'id' => 673,
                'city' => 'JOMALIG',
                'code' => 45621,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            173 => 
            array (
                'id' => 674,
                'city' => 'JONES',
                'code' => 23115,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            174 => 
            array (
                'id' => 675,
            'city' => 'JORDAN (Capital)',
                'code' => 67902,
                'region_code' => 6,
                'province_code' => 679,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            175 => 
            array (
                'id' => 676,
            'city' => 'JOSE ABAD SANTOS (TRINIDAD)',
                'code' => 118602,
                'region_code' => 11,
                'province_code' => 1186,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            176 => 
            array (
                'id' => 677,
            'city' => 'JOSE DALMAN (PONOT)',
                'code' => 97222,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            177 => 
            array (
                'id' => 678,
                'city' => 'JOSE PANGANIBAN',
                'code' => 51605,
                'region_code' => 5,
                'province_code' => 516,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            178 => 
            array (
                'id' => 679,
                'city' => 'JOSEFINA',
                'code' => 97337,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            179 => 
            array (
                'id' => 680,
                'city' => 'JOVELLAR',
                'code' => 50505,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            180 => 
            array (
                'id' => 681,
                'city' => 'JUBAN',
                'code' => 56210,
                'region_code' => 5,
                'province_code' => 562,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            181 => 
            array (
                'id' => 682,
                'city' => 'JULITA',
                'code' => 83725,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            182 => 
            array (
                'id' => 683,
                'city' => 'KABACAN',
                'code' => 124703,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            183 => 
            array (
                'id' => 684,
                'city' => 'KABASALAN',
                'code' => 98306,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            184 => 
            array (
                'id' => 685,
                'city' => 'KABAYAN',
                'code' => 141107,
                'region_code' => 14,
                'province_code' => 1411,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            185 => 
            array (
                'id' => 686,
            'city' => 'KABUGAO (Capital)',
                'code' => 148104,
                'region_code' => 14,
                'province_code' => 1481,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            186 => 
            array (
                'id' => 687,
            'city' => 'KABUNTALAN (TUMBAO)',
                'code' => 153814,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            187 => 
            array (
                'id' => 688,
                'city' => 'KADINGILAN',
                'code' => 101306,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            188 => 
            array (
                'id' => 689,
                'city' => 'KALAMANSIG',
                'code' => 126505,
                'region_code' => 12,
                'province_code' => 1265,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            189 => 
            array (
                'id' => 690,
                'city' => 'KALAWIT',
                'code' => 97227,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            190 => 
            array (
                'id' => 691,
                'city' => 'KALAYAAN',
                'code' => 175321,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            191 => 
            array (
                'id' => 692,
                'city' => 'KALAYAAN',
                'code' => 43409,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            192 => 
            array (
                'id' => 693,
            'city' => 'KALIBO (Capital)',
                'code' => 60407,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            193 => 
            array (
                'id' => 694,
                'city' => 'KALILANGAN',
                'code' => 101307,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            194 => 
            array (
                'id' => 695,
                'city' => 'KALINGALAN CALUANG',
                'code' => 156603,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            195 => 
            array (
                'id' => 696,
                'city' => 'KANANGA',
                'code' => 83726,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            196 => 
            array (
                'id' => 697,
                'city' => 'KAPAI',
                'code' => 153610,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            197 => 
            array (
                'id' => 698,
                'city' => 'KAPALONG',
                'code' => 112305,
                'region_code' => 11,
                'province_code' => 1123,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            198 => 
            array (
                'id' => 699,
                'city' => 'KAPANGAN',
                'code' => 141108,
                'region_code' => 14,
                'province_code' => 1411,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            199 => 
            array (
                'id' => 700,
                'city' => 'KAPATAGAN',
                'code' => 153639,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            200 => 
            array (
                'id' => 701,
                'city' => 'KAPATAGAN',
                'code' => 103505,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            201 => 
            array (
                'id' => 702,
                'city' => 'KASIBU',
                'code' => 25009,
                'region_code' => 2,
                'province_code' => 250,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            202 => 
            array (
                'id' => 703,
                'city' => 'KATIPUNAN',
                'code' => 97203,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            203 => 
            array (
                'id' => 704,
                'city' => 'KAUSWAGAN',
                'code' => 103507,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            204 => 
            array (
                'id' => 705,
                'city' => 'KAWAYAN',
                'code' => 87806,
                'region_code' => 8,
                'province_code' => 878,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            205 => 
            array (
                'id' => 706,
                'city' => 'KAWIT',
                'code' => 42111,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            206 => 
            array (
                'id' => 707,
                'city' => 'KAYAPA',
                'code' => 25010,
                'region_code' => 2,
                'province_code' => 250,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            207 => 
            array (
                'id' => 708,
                'city' => 'KIAMBA',
                'code' => 128003,
                'region_code' => 12,
                'province_code' => 1280,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            208 => 
            array (
                'id' => 709,
                'city' => 'KIANGAN',
                'code' => 142703,
                'region_code' => 14,
                'province_code' => 1427,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            209 => 
            array (
                'id' => 710,
                'city' => 'KIBAWE',
                'code' => 101308,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            210 => 
            array (
                'id' => 711,
                'city' => 'KIBLAWAN',
                'code' => 112406,
                'region_code' => 11,
                'province_code' => 1124,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            211 => 
            array (
                'id' => 712,
                'city' => 'KIBUNGAN',
                'code' => 141109,
                'region_code' => 14,
                'province_code' => 1411,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            212 => 
            array (
                'id' => 713,
                'city' => 'KINOGUITAN',
                'code' => 104312,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            213 => 
            array (
                'id' => 714,
                'city' => 'KITAOTAO',
                'code' => 101309,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            214 => 
            array (
                'id' => 715,
                'city' => 'KITCHARAO',
                'code' => 160206,
                'region_code' => 16,
                'province_code' => 1602,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            215 => 
            array (
                'id' => 716,
                'city' => 'KOLAMBUGAN',
                'code' => 103508,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            216 => 
            array (
                'id' => 717,
                'city' => 'KUMALARANG',
                'code' => 97311,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            217 => 
            array (
                'id' => 718,
                'city' => 'LA CARLOTA CITY',
                'code' => 64516,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            218 => 
            array (
                'id' => 719,
                'city' => 'LA CASTELLANA',
                'code' => 64517,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            219 => 
            array (
                'id' => 720,
                'city' => 'LA LIBERTAD',
                'code' => 74613,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            220 => 
            array (
                'id' => 721,
                'city' => 'LA LIBERTAD',
                'code' => 97204,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            221 => 
            array (
                'id' => 722,
                'city' => 'LA PAZ',
                'code' => 36907,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            222 => 
            array (
                'id' => 723,
                'city' => 'LA PAZ',
                'code' => 140108,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            223 => 
            array (
                'id' => 724,
                'city' => 'LA PAZ',
                'code' => 83728,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            224 => 
            array (
                'id' => 725,
                'city' => 'LA PAZ',
                'code' => 160304,
                'region_code' => 16,
                'province_code' => 1603,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            225 => 
            array (
                'id' => 726,
            'city' => 'LA TRINIDAD (Capital)',
                'code' => 141110,
                'region_code' => 14,
                'province_code' => 1411,
                'created_at' => '2021-10-13 20:36:05',
                'updated_at' => '2021-10-13 20:36:05',
            ),
            226 => 
            array (
                'id' => 727,
            'city' => 'LAAK (SAN VICENTE)',
                'code' => 118202,
                'region_code' => 11,
                'province_code' => 1182,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            227 => 
            array (
                'id' => 728,
                'city' => 'LABANGAN',
                'code' => 97312,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            228 => 
            array (
                'id' => 729,
                'city' => 'LABASON',
                'code' => 97205,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            229 => 
            array (
                'id' => 730,
                'city' => 'LABO',
                'code' => 51606,
                'region_code' => 5,
                'province_code' => 516,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            230 => 
            array (
                'id' => 731,
                'city' => 'LABRADOR',
                'code' => 15521,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            231 => 
            array (
                'id' => 732,
                'city' => 'LACUB',
                'code' => 140109,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            232 => 
            array (
                'id' => 733,
                'city' => 'LAGANGILANG',
                'code' => 140110,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            233 => 
            array (
                'id' => 734,
            'city' => 'LAGAWE (Capital)',
                'code' => 142704,
                'region_code' => 14,
                'province_code' => 1427,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            234 => 
            array (
                'id' => 735,
                'city' => 'LAGAYAN',
                'code' => 140111,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            235 => 
            array (
                'id' => 736,
                'city' => 'LAGONGLONG',
                'code' => 104313,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            236 => 
            array (
                'id' => 737,
                'city' => 'LAGONOY',
                'code' => 51717,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            237 => 
            array (
                'id' => 738,
                'city' => 'LAGUINDINGAN',
                'code' => 104314,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            238 => 
            array (
                'id' => 739,
                'city' => 'LAKE SEBU',
                'code' => 126319,
                'region_code' => 12,
                'province_code' => 1263,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            239 => 
            array (
                'id' => 740,
                'city' => 'LAKEWOOD',
                'code' => 97333,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            240 => 
            array (
                'id' => 741,
                'city' => 'LAL-LO',
                'code' => 21516,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            241 => 
            array (
                'id' => 742,
                'city' => 'LALA',
                'code' => 103509,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            242 => 
            array (
                'id' => 743,
            'city' => 'LAMBAYONG (MARIANO MARCOS)',
                'code' => 126508,
                'region_code' => 12,
                'province_code' => 1265,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            243 => 
            array (
                'id' => 744,
                'city' => 'LAMBUNAO',
                'code' => 63025,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            244 => 
            array (
                'id' => 745,
                'city' => 'LAMUT',
                'code' => 142705,
                'region_code' => 14,
                'province_code' => 1427,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            245 => 
            array (
                'id' => 746,
                'city' => 'LANGIDEN',
                'code' => 140112,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            246 => 
            array (
                'id' => 747,
                'city' => 'LANGUYAN',
                'code' => 157009,
                'region_code' => 15,
                'province_code' => 1570,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            247 => 
            array (
                'id' => 748,
                'city' => 'LANTAPAN',
                'code' => 101310,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            248 => 
            array (
                'id' => 749,
                'city' => 'LANTAWAN',
                'code' => 150703,
                'region_code' => 15,
                'province_code' => 1507,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            249 => 
            array (
                'id' => 750,
                'city' => 'LANUZA',
                'code' => 166810,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            250 => 
            array (
                'id' => 751,
                'city' => 'LAOAC',
                'code' => 15548,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            251 => 
            array (
                'id' => 752,
            'city' => 'LAOAG CITY (Capital)',
                'code' => 12812,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            252 => 
            array (
                'id' => 753,
                'city' => 'LAOANG',
                'code' => 84808,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            253 => 
            array (
                'id' => 754,
                'city' => 'LAPINIG',
                'code' => 84809,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            254 => 
            array (
                'id' => 755,
            'city' => 'LAPU-LAPU CITY (OPON)',
                'code' => 72226,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            255 => 
            array (
                'id' => 756,
                'city' => 'LAPUYAN',
                'code' => 97313,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            256 => 
            array (
                'id' => 757,
                'city' => 'LARENA',
                'code' => 76102,
                'region_code' => 7,
                'province_code' => 761,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            257 => 
            array (
                'id' => 758,
                'city' => 'LAS NAVAS',
                'code' => 84810,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            258 => 
            array (
                'id' => 759,
                'city' => 'LAS NIEVES',
                'code' => 160207,
                'region_code' => 16,
                'province_code' => 1602,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            259 => 
            array (
                'id' => 760,
                'city' => 'LASAM',
                'code' => 21517,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            260 => 
            array (
                'id' => 761,
                'city' => 'LAUA-AN',
                'code' => 60609,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            261 => 
            array (
                'id' => 762,
                'city' => 'LAUR',
                'code' => 34913,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            262 => 
            array (
                'id' => 763,
                'city' => 'LAUREL',
                'code' => 41011,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            263 => 
            array (
                'id' => 764,
                'city' => 'LAVEZARES',
                'code' => 84811,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            264 => 
            array (
                'id' => 765,
                'city' => 'LAWAAN',
                'code' => 82612,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            265 => 
            array (
                'id' => 766,
                'city' => 'LAZI',
                'code' => 76103,
                'region_code' => 7,
                'province_code' => 761,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            266 => 
            array (
                'id' => 767,
                'city' => 'LEBAK',
                'code' => 126506,
                'region_code' => 12,
                'province_code' => 1265,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            267 => 
            array (
                'id' => 768,
                'city' => 'LEGANES',
                'code' => 63026,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            268 => 
            array (
                'id' => 769,
            'city' => 'LEGAZPI CITY (Capital)',
                'code' => 50506,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            269 => 
            array (
                'id' => 770,
                'city' => 'LEMERY',
                'code' => 63027,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            270 => 
            array (
                'id' => 771,
                'city' => 'LEMERY',
                'code' => 41012,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            271 => 
            array (
                'id' => 772,
                'city' => 'LEON',
                'code' => 63028,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            272 => 
            array (
                'id' => 773,
                'city' => 'LEYTE',
                'code' => 83729,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            273 => 
            array (
                'id' => 774,
                'city' => 'LEZO',
                'code' => 60408,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            274 => 
            array (
                'id' => 775,
                'city' => 'LIAN',
                'code' => 41013,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            275 => 
            array (
                'id' => 776,
                'city' => 'LIANGA',
                'code' => 166811,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            276 => 
            array (
                'id' => 777,
                'city' => 'LIBACAO',
                'code' => 60409,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            277 => 
            array (
                'id' => 778,
                'city' => 'LIBAGON',
                'code' => 86405,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            278 => 
            array (
                'id' => 779,
                'city' => 'LIBERTAD',
                'code' => 60610,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            279 => 
            array (
                'id' => 780,
                'city' => 'LIBERTAD',
                'code' => 104315,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            280 => 
            array (
                'id' => 781,
            'city' => 'LIBJO (ALBOR)',
                'code' => 168504,
                'region_code' => 16,
                'province_code' => 1685,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            281 => 
            array (
                'id' => 782,
                'city' => 'LIBMANAN',
                'code' => 51718,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            282 => 
            array (
                'id' => 783,
                'city' => 'LIBON',
                'code' => 50507,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            283 => 
            array (
                'id' => 784,
                'city' => 'LIBONA',
                'code' => 101311,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            284 => 
            array (
                'id' => 785,
                'city' => 'LIBUNGAN',
                'code' => 124705,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            285 => 
            array (
                'id' => 786,
                'city' => 'LICAB',
                'code' => 34914,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            286 => 
            array (
                'id' => 787,
            'city' => 'LICUAN-BAAY (LICUAN)',
                'code' => 140113,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            287 => 
            array (
                'id' => 788,
                'city' => 'LIDLIDDA',
                'code' => 12911,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            288 => 
            array (
                'id' => 789,
                'city' => 'LILA',
                'code' => 71227,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            289 => 
            array (
                'id' => 790,
                'city' => 'LILIW',
                'code' => 43410,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            290 => 
            array (
                'id' => 791,
                'city' => 'LILOAN',
                'code' => 72227,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            291 => 
            array (
                'id' => 792,
                'city' => 'LILOAN',
                'code' => 86406,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            292 => 
            array (
                'id' => 793,
                'city' => 'LILOY',
                'code' => 97206,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            293 => 
            array (
                'id' => 794,
                'city' => 'LIMASAWA',
                'code' => 86419,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            294 => 
            array (
                'id' => 795,
                'city' => 'LIMAY',
                'code' => 30806,
                'region_code' => 3,
                'province_code' => 308,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            295 => 
            array (
                'id' => 796,
                'city' => 'LINAMON',
                'code' => 103510,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            296 => 
            array (
                'id' => 797,
                'city' => 'LINAPACAN',
                'code' => 175313,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            297 => 
            array (
                'id' => 798,
            'city' => 'LINGAYEN (Capital)',
                'code' => 15522,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            298 => 
            array (
                'id' => 799,
                'city' => 'LINGIG',
                'code' => 166812,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            299 => 
            array (
                'id' => 800,
                'city' => 'LIPA CITY',
                'code' => 41014,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            300 => 
            array (
                'id' => 801,
                'city' => 'LLANERA',
                'code' => 34915,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            301 => 
            array (
                'id' => 802,
                'city' => 'LLORENTE',
                'code' => 82613,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            302 => 
            array (
                'id' => 803,
                'city' => 'LOAY',
                'code' => 71228,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            303 => 
            array (
                'id' => 804,
                'city' => 'LOBO',
                'code' => 41015,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            304 => 
            array (
                'id' => 805,
                'city' => 'LOBOC',
                'code' => 71229,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            305 => 
            array (
                'id' => 806,
                'city' => 'LOOC',
                'code' => 175907,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            306 => 
            array (
                'id' => 807,
                'city' => 'LOOC',
                'code' => 175103,
                'region_code' => 17,
                'province_code' => 1751,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            307 => 
            array (
                'id' => 808,
                'city' => 'LOON',
                'code' => 71230,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            308 => 
            array (
                'id' => 809,
                'city' => 'LOPE DE VEGA',
                'code' => 84824,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            309 => 
            array (
                'id' => 810,
                'city' => 'LOPEZ',
                'code' => 45622,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            310 => 
            array (
                'id' => 811,
                'city' => 'LOPEZ JAENA',
                'code' => 104208,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            311 => 
            array (
                'id' => 812,
                'city' => 'LORETO',
                'code' => 168505,
                'region_code' => 16,
                'province_code' => 1685,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            312 => 
            array (
                'id' => 813,
                'city' => 'LORETO',
                'code' => 160305,
                'region_code' => 16,
                'province_code' => 1603,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            313 => 
            array (
                'id' => 814,
                'city' => 'LOS BAÑOS',
                'code' => 43411,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            314 => 
            array (
                'id' => 815,
                'city' => 'LUBA',
                'code' => 140114,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            315 => 
            array (
                'id' => 816,
                'city' => 'LUBANG',
                'code' => 175104,
                'region_code' => 17,
                'province_code' => 1751,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            316 => 
            array (
                'id' => 817,
                'city' => 'LUBAO',
                'code' => 35408,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            317 => 
            array (
                'id' => 818,
                'city' => 'LUBUAGAN',
                'code' => 143206,
                'region_code' => 14,
                'province_code' => 1432,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            318 => 
            array (
                'id' => 819,
                'city' => 'LUCBAN',
                'code' => 45623,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            319 => 
            array (
                'id' => 820,
            'city' => 'LUCENA CITY (Capital)',
                'code' => 45624,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            320 => 
            array (
                'id' => 821,
                'city' => 'LUGAIT',
                'code' => 104316,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            321 => 
            array (
                'id' => 822,
                'city' => 'LUGUS',
                'code' => 156617,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            322 => 
            array (
                'id' => 823,
                'city' => 'LUISIANA',
                'code' => 43412,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            323 => 
            array (
                'id' => 824,
            'city' => 'LUMBA-BAYABAO (MAGUING)',
                'code' => 153611,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            324 => 
            array (
                'id' => 825,
                'city' => 'LUMBACA-UNAYAN',
                'code' => 153641,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            325 => 
            array (
                'id' => 826,
                'city' => 'LUMBAN',
                'code' => 43413,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            326 => 
            array (
                'id' => 827,
                'city' => 'LUMBATAN',
                'code' => 153612,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            327 => 
            array (
                'id' => 828,
                'city' => 'LUMBAYANAGUE',
                'code' => 153636,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            328 => 
            array (
                'id' => 829,
                'city' => 'LUNA',
                'code' => 23116,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            329 => 
            array (
                'id' => 830,
                'city' => 'LUNA',
                'code' => 148105,
                'region_code' => 14,
                'province_code' => 1481,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            330 => 
            array (
                'id' => 831,
                'city' => 'LUNA',
                'code' => 13310,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            331 => 
            array (
                'id' => 832,
                'city' => 'LUPAO',
                'code' => 34916,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            332 => 
            array (
                'id' => 833,
                'city' => 'LUPI',
                'code' => 51719,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            333 => 
            array (
                'id' => 834,
                'city' => 'LUPON',
                'code' => 112507,
                'region_code' => 11,
                'province_code' => 1125,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            334 => 
            array (
                'id' => 835,
                'city' => 'LUTAYAN',
                'code' => 126507,
                'region_code' => 12,
                'province_code' => 1265,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            335 => 
            array (
                'id' => 836,
                'city' => 'LUUK',
                'code' => 156604,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            336 => 
            array (
                'id' => 837,
                'city' => 'M\'LANG',
                'code' => 124710,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            337 => 
            array (
                'id' => 838,
                'city' => 'MA-AYON',
                'code' => 61907,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            338 => 
            array (
                'id' => 839,
                'city' => 'MAASIM',
                'code' => 128004,
                'region_code' => 12,
                'province_code' => 1280,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            339 => 
            array (
                'id' => 840,
                'city' => 'MAASIN',
                'code' => 63029,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            340 => 
            array (
                'id' => 841,
                'city' => 'MABALACAT CITY',
                'code' => 35409,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            341 => 
            array (
                'id' => 842,
                'city' => 'MABINAY',
                'code' => 74614,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            342 => 
            array (
                'id' => 843,
                'city' => 'MABINI',
                'code' => 15523,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            343 => 
            array (
                'id' => 844,
                'city' => 'MABINI',
                'code' => 71231,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            344 => 
            array (
                'id' => 845,
                'city' => 'MABINI',
                'code' => 41016,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            345 => 
            array (
                'id' => 846,
            'city' => 'MABINI (DOÑA ALICIA)',
                'code' => 118203,
                'region_code' => 11,
                'province_code' => 1182,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            346 => 
            array (
                'id' => 847,
                'city' => 'MABITAC',
                'code' => 43414,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            347 => 
            array (
                'id' => 848,
                'city' => 'MABUHAY',
                'code' => 98307,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            348 => 
            array (
                'id' => 849,
                'city' => 'MACABEBE',
                'code' => 35410,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            349 => 
            array (
                'id' => 850,
                'city' => 'MACALELON',
                'code' => 45625,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            350 => 
            array (
                'id' => 851,
                'city' => 'MACARTHUR',
                'code' => 83730,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            351 => 
            array (
                'id' => 852,
                'city' => 'MACO',
                'code' => 118204,
                'region_code' => 11,
                'province_code' => 1182,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            352 => 
            array (
                'id' => 853,
                'city' => 'MACONACON',
                'code' => 23117,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            353 => 
            array (
                'id' => 854,
                'city' => 'MACROHON',
                'code' => 86408,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            354 => 
            array (
                'id' => 855,
                'city' => 'MADALAG',
                'code' => 60410,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            355 => 
            array (
                'id' => 856,
                'city' => 'MADALUM',
                'code' => 153613,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            356 => 
            array (
                'id' => 857,
                'city' => 'MADAMBA',
                'code' => 153614,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            357 => 
            array (
                'id' => 858,
                'city' => 'MADDELA',
                'code' => 25704,
                'region_code' => 2,
                'province_code' => 257,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            358 => 
            array (
                'id' => 859,
                'city' => 'MADRID',
                'code' => 166813,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            359 => 
            array (
                'id' => 860,
                'city' => 'MADRIDEJOS',
                'code' => 72228,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            360 => 
            array (
                'id' => 861,
                'city' => 'MAGALANG',
                'code' => 35411,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            361 => 
            array (
                'id' => 862,
                'city' => 'MAGALLANES',
                'code' => 56211,
                'region_code' => 5,
                'province_code' => 562,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            362 => 
            array (
                'id' => 863,
                'city' => 'MAGALLANES',
                'code' => 42112,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            363 => 
            array (
                'id' => 864,
                'city' => 'MAGALLANES',
                'code' => 160208,
                'region_code' => 16,
                'province_code' => 1602,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            364 => 
            array (
                'id' => 865,
                'city' => 'MAGARAO',
                'code' => 51720,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            365 => 
            array (
                'id' => 866,
                'city' => 'MAGDALENA',
                'code' => 43415,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            366 => 
            array (
                'id' => 867,
                'city' => 'MAGDIWANG',
                'code' => 175908,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            367 => 
            array (
                'id' => 868,
                'city' => 'MAGPET',
                'code' => 124706,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            368 => 
            array (
                'id' => 869,
                'city' => 'MAGSAYSAY',
                'code' => 175314,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            369 => 
            array (
                'id' => 870,
                'city' => 'MAGSAYSAY',
                'code' => 112407,
                'region_code' => 11,
                'province_code' => 1124,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            370 => 
            array (
                'id' => 871,
                'city' => 'MAGSAYSAY',
                'code' => 175105,
                'region_code' => 17,
                'province_code' => 1751,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            371 => 
            array (
                'id' => 872,
                'city' => 'MAGSAYSAY',
                'code' => 103511,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            372 => 
            array (
                'id' => 873,
            'city' => 'MAGSAYSAY (LINUGOS)',
                'code' => 104317,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            373 => 
            array (
                'id' => 874,
                'city' => 'MAGSINGAL',
                'code' => 12912,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            374 => 
            array (
                'id' => 875,
                'city' => 'MAGUING',
                'code' => 153634,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            375 => 
            array (
                'id' => 876,
                'city' => 'MAHAPLAG',
                'code' => 83731,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            376 => 
            array (
                'id' => 877,
                'city' => 'MAHATAO',
                'code' => 20904,
                'region_code' => 2,
                'province_code' => 209,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            377 => 
            array (
                'id' => 878,
                'city' => 'MAHAYAG',
                'code' => 97315,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            378 => 
            array (
                'id' => 879,
                'city' => 'MAHINOG',
                'code' => 101803,
                'region_code' => 10,
                'province_code' => 1018,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            379 => 
            array (
                'id' => 880,
                'city' => 'MAIGO',
                'code' => 103512,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            380 => 
            array (
                'id' => 881,
                'city' => 'MAIMBUNG',
                'code' => 156605,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            381 => 
            array (
                'id' => 882,
                'city' => 'MAINIT',
                'code' => 166714,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            382 => 
            array (
                'id' => 883,
                'city' => 'MAITUM',
                'code' => 128005,
                'region_code' => 12,
                'province_code' => 1280,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            383 => 
            array (
                'id' => 884,
                'city' => 'MAJAYJAY',
                'code' => 43416,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            384 => 
            array (
                'id' => 885,
                'city' => 'MAKATO',
                'code' => 60411,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            385 => 
            array (
                'id' => 886,
                'city' => 'MAKILALA',
                'code' => 124707,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            386 => 
            array (
                'id' => 887,
                'city' => 'MALABANG',
                'code' => 153615,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            387 => 
            array (
                'id' => 888,
                'city' => 'MALABUYOC',
                'code' => 72229,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            388 => 
            array (
                'id' => 889,
                'city' => 'MALALAG',
                'code' => 112408,
                'region_code' => 11,
                'province_code' => 1124,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            389 => 
            array (
                'id' => 890,
                'city' => 'MALANGAS',
                'code' => 98308,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            390 => 
            array (
                'id' => 891,
                'city' => 'MALAPATAN',
                'code' => 128006,
                'region_code' => 12,
                'province_code' => 1280,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            391 => 
            array (
                'id' => 892,
                'city' => 'MALASIQUI',
                'code' => 15524,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            392 => 
            array (
                'id' => 893,
                'city' => 'MALATE',
                'code' => 133910,
                'region_code' => 13,
                'province_code' => 1339,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            393 => 
            array (
                'id' => 894,
                'city' => 'MALAY',
                'code' => 60412,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            394 => 
            array (
                'id' => 895,
                'city' => 'MALIBCONG',
                'code' => 140115,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            395 => 
            array (
                'id' => 896,
                'city' => 'MALILIPOT',
                'code' => 50509,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            396 => 
            array (
                'id' => 897,
                'city' => 'MALIMONO',
                'code' => 166715,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            397 => 
            array (
                'id' => 898,
                'city' => 'MALINAO',
                'code' => 60413,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            398 => 
            array (
                'id' => 899,
                'city' => 'MALINAO',
                'code' => 50510,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            399 => 
            array (
                'id' => 900,
                'city' => 'MALITA',
                'code' => 118603,
                'region_code' => 11,
                'province_code' => 1186,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            400 => 
            array (
                'id' => 901,
                'city' => 'MALITBOG',
                'code' => 86409,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            401 => 
            array (
                'id' => 902,
                'city' => 'MALITBOG',
                'code' => 101313,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            402 => 
            array (
                'id' => 903,
                'city' => 'MALLIG',
                'code' => 23119,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            403 => 
            array (
                'id' => 904,
                'city' => 'MALUNGON',
                'code' => 128007,
                'region_code' => 12,
                'province_code' => 1280,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            404 => 
            array (
                'id' => 905,
                'city' => 'MALUSO',
                'code' => 150704,
                'region_code' => 15,
                'province_code' => 1507,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            405 => 
            array (
                'id' => 906,
                'city' => 'MALVAR',
                'code' => 41017,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            406 => 
            array (
                'id' => 907,
                'city' => 'MAMASAPANO',
                'code' => 153820,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            407 => 
            array (
                'id' => 908,
            'city' => 'MAMBAJAO (Capital)',
                'code' => 101804,
                'region_code' => 10,
                'province_code' => 1018,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            408 => 
            array (
                'id' => 909,
            'city' => 'MAMBURAO (Capital)',
                'code' => 175106,
                'region_code' => 17,
                'province_code' => 1751,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            409 => 
            array (
                'id' => 910,
                'city' => 'MAMBUSAO',
                'code' => 61908,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            410 => 
            array (
                'id' => 911,
                'city' => 'MANABO',
                'code' => 140116,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            411 => 
            array (
                'id' => 912,
                'city' => 'MANAOAG',
                'code' => 15525,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            412 => 
            array (
                'id' => 913,
                'city' => 'MANAPLA',
                'code' => 64518,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            413 => 
            array (
                'id' => 914,
                'city' => 'MANAY',
                'code' => 112508,
                'region_code' => 11,
                'province_code' => 1125,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            414 => 
            array (
                'id' => 915,
                'city' => 'MANDAON',
                'code' => 54110,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            415 => 
            array (
                'id' => 916,
                'city' => 'MANDAUE CITY',
                'code' => 72230,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            416 => 
            array (
                'id' => 917,
                'city' => 'MANGALDAN',
                'code' => 15526,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            417 => 
            array (
                'id' => 918,
                'city' => 'MANGATAREM',
                'code' => 15527,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            418 => 
            array (
                'id' => 919,
                'city' => 'MANGUDADATU',
                'code' => 153832,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            419 => 
            array (
                'id' => 920,
                'city' => 'MANITO',
                'code' => 50511,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            420 => 
            array (
                'id' => 921,
                'city' => 'MANJUYOD',
                'code' => 74615,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            421 => 
            array (
                'id' => 922,
                'city' => 'MANKAYAN',
                'code' => 141111,
                'region_code' => 14,
                'province_code' => 1411,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            422 => 
            array (
                'id' => 923,
                'city' => 'MANOLO FORTICH',
                'code' => 101314,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            423 => 
            array (
                'id' => 924,
                'city' => 'MANSALAY',
                'code' => 175207,
                'region_code' => 17,
                'province_code' => 1752,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            424 => 
            array (
                'id' => 925,
                'city' => 'MANTICAO',
                'code' => 104318,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            425 => 
            array (
                'id' => 926,
                'city' => 'MANUKAN',
                'code' => 97207,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            426 => 
            array (
                'id' => 927,
                'city' => 'MAPANAS',
                'code' => 84812,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            427 => 
            array (
                'id' => 928,
                'city' => 'MAPANDAN',
                'code' => 15528,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            428 => 
            array (
                'id' => 929,
            'city' => 'MAPUN (CAGAYAN DE TAWI-TAWI)',
                'code' => 157003,
                'region_code' => 15,
                'province_code' => 1570,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            429 => 
            array (
                'id' => 930,
                'city' => 'MARABUT',
                'code' => 86010,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            430 => 
            array (
                'id' => 931,
                'city' => 'MARAGONDON',
                'code' => 42113,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            431 => 
            array (
                'id' => 932,
            'city' => 'MARAGUSAN (SAN MARIANO)',
                'code' => 118205,
                'region_code' => 11,
                'province_code' => 1182,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            432 => 
            array (
                'id' => 933,
                'city' => 'MARAMAG',
                'code' => 101315,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            433 => 
            array (
                'id' => 934,
                'city' => 'MARANTAO',
                'code' => 153616,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            434 => 
            array (
                'id' => 935,
            'city' => 'MARAWI CITY (Capital)',
                'code' => 153617,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            435 => 
            array (
                'id' => 936,
                'city' => 'MARCOS',
                'code' => 12813,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            436 => 
            array (
                'id' => 937,
                'city' => 'MARGOSATUBIG',
                'code' => 97317,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            437 => 
            array (
                'id' => 938,
                'city' => 'MARIA',
                'code' => 76104,
                'region_code' => 7,
                'province_code' => 761,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            438 => 
            array (
                'id' => 939,
                'city' => 'MARIA AURORA',
                'code' => 37707,
                'region_code' => 3,
                'province_code' => 377,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            439 => 
            array (
                'id' => 940,
                'city' => 'MARIBOJOC',
                'code' => 71232,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            440 => 
            array (
                'id' => 941,
                'city' => 'MARIHATAG',
                'code' => 166814,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            441 => 
            array (
                'id' => 942,
                'city' => 'MARILAO',
                'code' => 31411,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            442 => 
            array (
                'id' => 943,
                'city' => 'MARIPIPI',
                'code' => 87807,
                'region_code' => 8,
                'province_code' => 878,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            443 => 
            array (
                'id' => 944,
                'city' => 'MARIVELES',
                'code' => 30807,
                'region_code' => 3,
                'province_code' => 308,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            444 => 
            array (
                'id' => 945,
                'city' => 'MAROGONG',
                'code' => 153631,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            445 => 
            array (
                'id' => 946,
                'city' => 'MASANTOL',
                'code' => 35412,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            446 => 
            array (
                'id' => 947,
                'city' => 'MASINLOC',
                'code' => 37106,
                'region_code' => 3,
                'province_code' => 371,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            447 => 
            array (
                'id' => 948,
                'city' => 'MASIU',
                'code' => 153618,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            448 => 
            array (
                'id' => 949,
                'city' => 'MASLOG',
                'code' => 82614,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            449 => 
            array (
                'id' => 950,
                'city' => 'MATAASNAKAHOY',
                'code' => 41018,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            450 => 
            array (
                'id' => 951,
                'city' => 'MATAG-OB',
                'code' => 83733,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            451 => 
            array (
                'id' => 952,
                'city' => 'MATALAM',
                'code' => 124708,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            452 => 
            array (
                'id' => 953,
                'city' => 'MATALOM',
                'code' => 83734,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            453 => 
            array (
                'id' => 954,
                'city' => 'MATANAO',
                'code' => 112410,
                'region_code' => 11,
                'province_code' => 1124,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            454 => 
            array (
                'id' => 955,
                'city' => 'MATANOG',
                'code' => 153809,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            455 => 
            array (
                'id' => 956,
                'city' => 'MATNOG',
                'code' => 56212,
                'region_code' => 5,
                'province_code' => 562,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            456 => 
            array (
                'id' => 957,
                'city' => 'MATUGUINAO',
                'code' => 86011,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            457 => 
            array (
                'id' => 958,
                'city' => 'MATUNGAO',
                'code' => 103513,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            458 => 
            array (
                'id' => 959,
                'city' => 'MAUBAN',
                'code' => 45627,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            459 => 
            array (
                'id' => 960,
                'city' => 'MAWAB',
                'code' => 118206,
                'region_code' => 11,
                'province_code' => 1182,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            460 => 
            array (
                'id' => 961,
                'city' => 'MAYANTOC',
                'code' => 36908,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            461 => 
            array (
                'id' => 962,
                'city' => 'MAYDOLONG',
                'code' => 82615,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            462 => 
            array (
                'id' => 963,
                'city' => 'MAYORGA',
                'code' => 83735,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            463 => 
            array (
                'id' => 964,
                'city' => 'MAYOYAO',
                'code' => 142706,
                'region_code' => 14,
                'province_code' => 1427,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            464 => 
            array (
                'id' => 965,
                'city' => 'MEDELLIN',
                'code' => 72231,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            465 => 
            array (
                'id' => 966,
                'city' => 'MEDINA',
                'code' => 104319,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            466 => 
            array (
                'id' => 967,
            'city' => 'MENDEZ (MENDEZ-NUÑEZ)',
                'code' => 42114,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            467 => 
            array (
                'id' => 968,
                'city' => 'MERCEDES',
                'code' => 82616,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            468 => 
            array (
                'id' => 969,
                'city' => 'MERCEDES',
                'code' => 51607,
                'region_code' => 5,
                'province_code' => 516,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            469 => 
            array (
                'id' => 970,
                'city' => 'MERIDA',
                'code' => 83736,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            470 => 
            array (
                'id' => 971,
                'city' => 'MEXICO',
                'code' => 35413,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            471 => 
            array (
                'id' => 972,
                'city' => 'MIAGAO',
                'code' => 63030,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            472 => 
            array (
                'id' => 973,
                'city' => 'MIDSALIP',
                'code' => 97318,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            473 => 
            array (
                'id' => 974,
                'city' => 'MIDSAYAP',
                'code' => 124709,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            474 => 
            array (
                'id' => 975,
                'city' => 'MILAGROS',
                'code' => 54112,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            475 => 
            array (
                'id' => 976,
                'city' => 'MILAOR',
                'code' => 51721,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            476 => 
            array (
                'id' => 977,
                'city' => 'MINA',
                'code' => 63031,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            477 => 
            array (
                'id' => 978,
                'city' => 'MINALABAC',
                'code' => 51722,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            478 => 
            array (
                'id' => 979,
                'city' => 'MINALIN',
                'code' => 35414,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            479 => 
            array (
                'id' => 980,
                'city' => 'MINGLANILLA',
                'code' => 72232,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            480 => 
            array (
                'id' => 981,
                'city' => 'MOALBOAL',
                'code' => 72233,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            481 => 
            array (
                'id' => 982,
                'city' => 'MOBO',
                'code' => 54113,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            482 => 
            array (
                'id' => 983,
                'city' => 'MOGPOG',
                'code' => 174004,
                'region_code' => 17,
                'province_code' => 1740,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            483 => 
            array (
                'id' => 984,
            'city' => 'MOISES PADILLA (MAGALLON)',
                'code' => 64519,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            484 => 
            array (
                'id' => 985,
                'city' => 'MOLAVE',
                'code' => 97319,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            485 => 
            array (
                'id' => 986,
                'city' => 'MONCADA',
                'code' => 36909,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            486 => 
            array (
                'id' => 987,
                'city' => 'MONDRAGON',
                'code' => 84813,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            487 => 
            array (
                'id' => 988,
                'city' => 'MONKAYO',
                'code' => 118207,
                'region_code' => 11,
                'province_code' => 1182,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            488 => 
            array (
                'id' => 989,
                'city' => 'MONREAL',
                'code' => 54114,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            489 => 
            array (
                'id' => 990,
                'city' => 'MONTEVISTA',
                'code' => 118208,
                'region_code' => 11,
                'province_code' => 1182,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            490 => 
            array (
                'id' => 991,
                'city' => 'MORONG',
                'code' => 30808,
                'region_code' => 3,
                'province_code' => 308,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            491 => 
            array (
                'id' => 992,
                'city' => 'MORONG',
                'code' => 45809,
                'region_code' => 4,
                'province_code' => 458,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            492 => 
            array (
                'id' => 993,
                'city' => 'MOTIONG',
                'code' => 86012,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            493 => 
            array (
                'id' => 994,
                'city' => 'MULANAY',
                'code' => 45628,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            494 => 
            array (
                'id' => 995,
                'city' => 'MULONDO',
                'code' => 153619,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            495 => 
            array (
                'id' => 996,
                'city' => 'MUNAI',
                'code' => 103514,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            496 => 
            array (
                'id' => 997,
                'city' => 'MURCIA',
                'code' => 64520,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            497 => 
            array (
                'id' => 998,
                'city' => 'MUTIA',
                'code' => 97208,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            498 => 
            array (
                'id' => 999,
                'city' => 'NAAWAN',
                'code' => 104320,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            499 => 
            array (
                'id' => 1000,
                'city' => 'NABAS',
                'code' => 60414,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'city' => 'NABUA',
                'code' => 51723,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            1 => 
            array (
                'id' => 1002,
            'city' => 'NABUNTURAN (Capital)',
                'code' => 118209,
                'region_code' => 11,
                'province_code' => 1182,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            2 => 
            array (
                'id' => 1003,
                'city' => 'NAGA',
                'code' => 98309,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            3 => 
            array (
                'id' => 1004,
                'city' => 'NAGA CITY',
                'code' => 51724,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            4 => 
            array (
                'id' => 1005,
                'city' => 'NAGBUKEL',
                'code' => 12913,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            5 => 
            array (
                'id' => 1006,
                'city' => 'NAGCARLAN',
                'code' => 43417,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            6 => 
            array (
                'id' => 1007,
                'city' => 'NAGTIPUNAN',
                'code' => 25706,
                'region_code' => 2,
                'province_code' => 257,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            7 => 
            array (
                'id' => 1008,
                'city' => 'NAGUILIAN',
                'code' => 13311,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            8 => 
            array (
                'id' => 1009,
                'city' => 'NAGUILIAN',
                'code' => 23120,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            9 => 
            array (
                'id' => 1010,
                'city' => 'NAIC',
                'code' => 42115,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            10 => 
            array (
                'id' => 1011,
                'city' => 'NAMPICUAN',
                'code' => 34918,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            11 => 
            array (
                'id' => 1012,
                'city' => 'NARRA',
                'code' => 175315,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            12 => 
            array (
                'id' => 1013,
                'city' => 'NARVACAN',
                'code' => 12914,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            13 => 
            array (
                'id' => 1014,
                'city' => 'NASIPIT',
                'code' => 160209,
                'region_code' => 16,
                'province_code' => 1602,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            14 => 
            array (
                'id' => 1015,
                'city' => 'NASUGBU',
                'code' => 41019,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            15 => 
            array (
                'id' => 1016,
                'city' => 'NATIVIDAD',
                'code' => 15529,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            16 => 
            array (
                'id' => 1017,
                'city' => 'NATONIN',
                'code' => 144405,
                'region_code' => 14,
                'province_code' => 1444,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            17 => 
            array (
                'id' => 1018,
                'city' => 'NAUJAN',
                'code' => 175208,
                'region_code' => 17,
                'province_code' => 1752,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            18 => 
            array (
                'id' => 1019,
            'city' => 'NAVAL (Capital)',
                'code' => 87808,
                'region_code' => 8,
                'province_code' => 878,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            19 => 
            array (
                'id' => 1020,
                'city' => 'NEW BATAAN',
                'code' => 118210,
                'region_code' => 11,
                'province_code' => 1182,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            20 => 
            array (
                'id' => 1021,
                'city' => 'NEW CORELLA',
                'code' => 112314,
                'region_code' => 11,
                'province_code' => 1123,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            21 => 
            array (
                'id' => 1022,
                'city' => 'NEW LUCENA',
                'code' => 63032,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            22 => 
            array (
                'id' => 1023,
                'city' => 'NEW WASHINGTON',
                'code' => 60415,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            23 => 
            array (
                'id' => 1024,
                'city' => 'NORALA',
                'code' => 126311,
                'region_code' => 12,
                'province_code' => 1263,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            24 => 
            array (
                'id' => 1025,
                'city' => 'NORTHERN KABUNTALAN',
                'code' => 153834,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            25 => 
            array (
                'id' => 1026,
                'city' => 'NORZAGARAY',
                'code' => 31413,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            26 => 
            array (
                'id' => 1027,
                'city' => 'NOVELETA',
                'code' => 42116,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            27 => 
            array (
                'id' => 1028,
                'city' => 'NUEVA ERA',
                'code' => 12814,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            28 => 
            array (
                'id' => 1029,
                'city' => 'NUEVA VALENCIA',
                'code' => 67903,
                'region_code' => 6,
                'province_code' => 679,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            29 => 
            array (
                'id' => 1030,
                'city' => 'NUMANCIA',
                'code' => 60416,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            30 => 
            array (
                'id' => 1031,
                'city' => 'NUNUNGAN',
                'code' => 103515,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            31 => 
            array (
                'id' => 1032,
                'city' => 'OAS',
                'code' => 50512,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            32 => 
            array (
                'id' => 1033,
                'city' => 'OBANDO',
                'code' => 31414,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            33 => 
            array (
                'id' => 1034,
                'city' => 'OCAMPO',
                'code' => 51725,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            34 => 
            array (
                'id' => 1035,
                'city' => 'ODIONGAN',
                'code' => 175909,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            35 => 
            array (
                'id' => 1036,
                'city' => 'OLD PANAMAO',
                'code' => 156607,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            36 => 
            array (
                'id' => 1037,
                'city' => 'OLONGAPO CITY',
                'code' => 37107,
                'region_code' => 3,
                'province_code' => 371,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            37 => 
            array (
                'id' => 1038,
                'city' => 'OLUTANGA',
                'code' => 98310,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            38 => 
            array (
                'id' => 1039,
                'city' => 'OMAR',
                'code' => 156619,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            39 => 
            array (
                'id' => 1040,
                'city' => 'OPOL',
                'code' => 104321,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            40 => 
            array (
                'id' => 1041,
                'city' => 'ORANI',
                'code' => 30809,
                'region_code' => 3,
                'province_code' => 308,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            41 => 
            array (
                'id' => 1042,
                'city' => 'ORAS',
                'code' => 82617,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            42 => 
            array (
                'id' => 1043,
                'city' => 'ORION',
                'code' => 30810,
                'region_code' => 3,
                'province_code' => 308,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            43 => 
            array (
                'id' => 1044,
                'city' => 'ORMOC CITY',
                'code' => 83738,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            44 => 
            array (
                'id' => 1045,
            'city' => 'OROQUIETA CITY (Capital)',
                'code' => 104209,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            45 => 
            array (
                'id' => 1046,
                'city' => 'OSLOB',
                'code' => 72235,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            46 => 
            array (
                'id' => 1047,
                'city' => 'OTON',
                'code' => 63034,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            47 => 
            array (
                'id' => 1048,
                'city' => 'OZAMIS CITY',
                'code' => 104210,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            48 => 
            array (
                'id' => 1049,
                'city' => 'PACO',
                'code' => 133911,
                'region_code' => 13,
                'province_code' => 1339,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            49 => 
            array (
                'id' => 1050,
                'city' => 'PADADA',
                'code' => 112411,
                'region_code' => 11,
                'province_code' => 1124,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            50 => 
            array (
                'id' => 1051,
                'city' => 'PADRE BURGOS',
                'code' => 86410,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            51 => 
            array (
                'id' => 1052,
                'city' => 'PADRE BURGOS',
                'code' => 45629,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            52 => 
            array (
                'id' => 1053,
                'city' => 'PADRE GARCIA',
                'code' => 41020,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            53 => 
            array (
                'id' => 1054,
                'city' => 'PAETE',
                'code' => 43418,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            54 => 
            array (
                'id' => 1055,
            'city' => 'PAGADIAN CITY (Capital)',
                'code' => 97322,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            55 => 
            array (
                'id' => 1056,
                'city' => 'PAGAGAWAN',
                'code' => 153822,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            56 => 
            array (
                'id' => 1057,
                'city' => 'PAGALUNGAN',
                'code' => 153810,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            57 => 
            array (
                'id' => 1058,
            'city' => 'PAGAYAWAN (TATARIKAN)',
                'code' => 153620,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            58 => 
            array (
                'id' => 1059,
                'city' => 'PAGBILAO',
                'code' => 45630,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            59 => 
            array (
                'id' => 1060,
                'city' => 'PAGLAT',
                'code' => 153823,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            60 => 
            array (
                'id' => 1061,
                'city' => 'PAGSANGHAN',
                'code' => 86026,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            61 => 
            array (
                'id' => 1062,
                'city' => 'PAGSANJAN',
                'code' => 43419,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            62 => 
            array (
                'id' => 1063,
                'city' => 'PAGUDPUD',
                'code' => 12815,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            63 => 
            array (
                'id' => 1064,
                'city' => 'PAKIL',
                'code' => 43420,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            64 => 
            array (
                'id' => 1065,
                'city' => 'PALANAN',
                'code' => 23121,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            65 => 
            array (
                'id' => 1066,
                'city' => 'PALANAS',
                'code' => 54115,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            66 => 
            array (
                'id' => 1067,
                'city' => 'PALAPAG',
                'code' => 84814,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            67 => 
            array (
                'id' => 1068,
                'city' => 'PALAUIG',
                'code' => 37108,
                'region_code' => 3,
                'province_code' => 371,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            68 => 
            array (
                'id' => 1069,
            'city' => 'PALAYAN CITY (Capital)',
                'code' => 34919,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            69 => 
            array (
                'id' => 1070,
                'city' => 'PALIMBANG',
                'code' => 126509,
                'region_code' => 12,
                'province_code' => 1265,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            70 => 
            array (
                'id' => 1071,
                'city' => 'PALO',
                'code' => 83739,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            71 => 
            array (
                'id' => 1072,
                'city' => 'PALOMPON',
                'code' => 83740,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            72 => 
            array (
                'id' => 1073,
                'city' => 'PALUAN',
                'code' => 175107,
                'region_code' => 17,
                'province_code' => 1751,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            73 => 
            array (
                'id' => 1074,
                'city' => 'PAMBUJAN',
                'code' => 84815,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            74 => 
            array (
                'id' => 1075,
                'city' => 'PAMPLONA',
                'code' => 74616,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            75 => 
            array (
                'id' => 1076,
                'city' => 'PAMPLONA',
                'code' => 21518,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            76 => 
            array (
                'id' => 1077,
                'city' => 'PAMPLONA',
                'code' => 51726,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            77 => 
            array (
                'id' => 1078,
                'city' => 'PANAON',
                'code' => 104211,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            78 => 
            array (
                'id' => 1079,
                'city' => 'PANAY',
                'code' => 61909,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            79 => 
            array (
                'id' => 1080,
                'city' => 'PANDACAN',
                'code' => 133912,
                'region_code' => 13,
                'province_code' => 1339,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            80 => 
            array (
                'id' => 1081,
                'city' => 'PANDAG',
                'code' => 153833,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            81 => 
            array (
                'id' => 1082,
                'city' => 'PANDAMI',
                'code' => 156618,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            82 => 
            array (
                'id' => 1083,
                'city' => 'PANDAN',
                'code' => 52006,
                'region_code' => 5,
                'province_code' => 520,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            83 => 
            array (
                'id' => 1084,
                'city' => 'PANDAN',
                'code' => 60611,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            84 => 
            array (
                'id' => 1085,
                'city' => 'PANDI',
                'code' => 31415,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            85 => 
            array (
                'id' => 1086,
            'city' => 'PANGANIBAN (PAYO)',
                'code' => 52007,
                'region_code' => 5,
                'province_code' => 520,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            86 => 
            array (
                'id' => 1087,
                'city' => 'PANGANTUCAN',
                'code' => 101316,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            87 => 
            array (
                'id' => 1088,
                'city' => 'PANGIL',
                'code' => 43421,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            88 => 
            array (
                'id' => 1089,
                'city' => 'PANGLAO',
                'code' => 71233,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            89 => 
            array (
                'id' => 1090,
            'city' => 'PANGLIMA ESTINO (NEW PANAMAO)',
                'code' => 156616,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            90 => 
            array (
                'id' => 1091,
            'city' => 'PANGLIMA SUGALA (BALIMBING)',
                'code' => 157001,
                'region_code' => 15,
                'province_code' => 1570,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            91 => 
            array (
                'id' => 1092,
                'city' => 'PANGUTARAN',
                'code' => 156608,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            92 => 
            array (
                'id' => 1093,
                'city' => 'PANIQUI',
                'code' => 36910,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            93 => 
            array (
                'id' => 1094,
                'city' => 'PANITAN',
                'code' => 61910,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            94 => 
            array (
                'id' => 1095,
                'city' => 'PANTABANGAN',
                'code' => 34920,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            95 => 
            array (
                'id' => 1096,
                'city' => 'PANTAO RAGAT',
                'code' => 103516,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            96 => 
            array (
                'id' => 1097,
                'city' => 'PANTAR',
                'code' => 103523,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            97 => 
            array (
                'id' => 1098,
                'city' => 'PANTUKAN',
                'code' => 118211,
                'region_code' => 11,
                'province_code' => 1182,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            98 => 
            array (
                'id' => 1099,
                'city' => 'PANUKULAN',
                'code' => 45631,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            99 => 
            array (
                'id' => 1100,
                'city' => 'PAOAY',
                'code' => 12816,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            100 => 
            array (
                'id' => 1101,
                'city' => 'PAOMBONG',
                'code' => 31416,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            101 => 
            array (
                'id' => 1102,
                'city' => 'PARACALE',
                'code' => 51608,
                'region_code' => 5,
                'province_code' => 516,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            102 => 
            array (
                'id' => 1103,
                'city' => 'PARACELIS',
                'code' => 144406,
                'region_code' => 14,
                'province_code' => 1444,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            103 => 
            array (
                'id' => 1104,
            'city' => 'PARANAS (WRIGHT)',
                'code' => 86022,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            104 => 
            array (
                'id' => 1105,
                'city' => 'PARANG',
                'code' => 153811,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            105 => 
            array (
                'id' => 1106,
                'city' => 'PARANG',
                'code' => 156609,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            106 => 
            array (
                'id' => 1107,
                'city' => 'PASACAO',
                'code' => 51727,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            107 => 
            array (
                'id' => 1108,
                'city' => 'PASAY CITY',
                'code' => 137605,
                'region_code' => 13,
                'province_code' => 1376,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            108 => 
            array (
                'id' => 1109,
                'city' => 'PASIL',
                'code' => 143208,
                'region_code' => 14,
                'province_code' => 1432,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            109 => 
            array (
                'id' => 1110,
                'city' => 'PASTRANA',
                'code' => 83741,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            110 => 
            array (
                'id' => 1111,
                'city' => 'PASUQUIN',
                'code' => 12817,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            111 => 
            array (
                'id' => 1112,
                'city' => 'PATA',
                'code' => 156610,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            112 => 
            array (
                'id' => 1113,
                'city' => 'PATEROS',
                'code' => 137606,
                'region_code' => 13,
                'province_code' => 1376,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            113 => 
            array (
                'id' => 1114,
                'city' => 'PATIKUL',
                'code' => 156611,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            114 => 
            array (
                'id' => 1115,
                'city' => 'PATNANUNGAN',
                'code' => 45632,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            115 => 
            array (
                'id' => 1116,
                'city' => 'PATNONGON',
                'code' => 60612,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            116 => 
            array (
                'id' => 1117,
                'city' => 'PAVIA',
                'code' => 63036,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            117 => 
            array (
                'id' => 1118,
                'city' => 'PAYAO',
                'code' => 98311,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            118 => 
            array (
                'id' => 1119,
                'city' => 'PEÑABLANCA',
                'code' => 21519,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            119 => 
            array (
                'id' => 1120,
                'city' => 'PEÑARANDA',
                'code' => 34921,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            120 => 
            array (
                'id' => 1121,
                'city' => 'PEÑARRUBIA',
                'code' => 140117,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            121 => 
            array (
                'id' => 1122,
                'city' => 'PEREZ',
                'code' => 45633,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            122 => 
            array (
                'id' => 1123,
                'city' => 'PIAGAPO',
                'code' => 153621,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            123 => 
            array (
                'id' => 1124,
                'city' => 'PIAT',
                'code' => 21520,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            124 => 
            array (
                'id' => 1125,
            'city' => 'PICONG (SULTAN GUMANDER)',
                'code' => 153635,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:06',
                'updated_at' => '2021-10-13 20:36:06',
            ),
            125 => 
            array (
                'id' => 1126,
                'city' => 'PIDDIG',
                'code' => 12818,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            126 => 
            array (
                'id' => 1127,
                'city' => 'PIDIGAN',
                'code' => 140118,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            127 => 
            array (
                'id' => 1128,
                'city' => 'PIGKAWAYAN',
                'code' => 124711,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            128 => 
            array (
                'id' => 1129,
                'city' => 'PIKIT',
                'code' => 124712,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            129 => 
            array (
                'id' => 1130,
                'city' => 'PILA',
                'code' => 43422,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            130 => 
            array (
                'id' => 1131,
                'city' => 'PILAR',
                'code' => 61911,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            131 => 
            array (
                'id' => 1132,
                'city' => 'PILAR',
                'code' => 72236,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            132 => 
            array (
                'id' => 1133,
                'city' => 'PILAR',
                'code' => 140119,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            133 => 
            array (
                'id' => 1134,
                'city' => 'PILAR',
                'code' => 56213,
                'region_code' => 5,
                'province_code' => 562,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            134 => 
            array (
                'id' => 1135,
                'city' => 'PILAR',
                'code' => 30811,
                'region_code' => 3,
                'province_code' => 308,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            135 => 
            array (
                'id' => 1136,
                'city' => 'PILAR',
                'code' => 166716,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            136 => 
            array (
                'id' => 1137,
                'city' => 'PILAR',
                'code' => 71234,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            137 => 
            array (
                'id' => 1138,
            'city' => 'PILI (Capital)',
                'code' => 51728,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            138 => 
            array (
                'id' => 1139,
                'city' => 'PILILLA',
                'code' => 45810,
                'region_code' => 4,
                'province_code' => 458,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            139 => 
            array (
                'id' => 1140,
                'city' => 'PINABACDAO',
                'code' => 86013,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            140 => 
            array (
                'id' => 1141,
                'city' => 'PINAMALAYAN',
                'code' => 175209,
                'region_code' => 17,
                'province_code' => 1752,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            141 => 
            array (
                'id' => 1142,
                'city' => 'PINAMUNGAHAN',
                'code' => 72237,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            142 => 
            array (
                'id' => 1143,
            'city' => 'PIÑAN (NEW PIÑAN)',
                'code' => 97209,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            143 => 
            array (
                'id' => 1144,
                'city' => 'PINILI',
                'code' => 12819,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            144 => 
            array (
                'id' => 1145,
                'city' => 'PINTUYAN',
                'code' => 86411,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            145 => 
            array (
                'id' => 1146,
                'city' => 'PINUKPUK',
                'code' => 143209,
                'region_code' => 14,
                'province_code' => 1432,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            146 => 
            array (
                'id' => 1147,
                'city' => 'PIO DURAN',
                'code' => 50513,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            147 => 
            array (
                'id' => 1148,
            'city' => 'PIO V. CORPUZ (LIMBUHAN)',
                'code' => 54116,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            148 => 
            array (
                'id' => 1149,
                'city' => 'PITOGO',
                'code' => 97338,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            149 => 
            array (
                'id' => 1150,
                'city' => 'PITOGO',
                'code' => 45634,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            150 => 
            array (
                'id' => 1151,
                'city' => 'PLACER',
                'code' => 166717,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            151 => 
            array (
                'id' => 1152,
                'city' => 'PLACER',
                'code' => 54117,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            152 => 
            array (
                'id' => 1153,
                'city' => 'PLARIDEL',
                'code' => 31417,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            153 => 
            array (
                'id' => 1154,
                'city' => 'PLARIDEL',
                'code' => 45635,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            154 => 
            array (
                'id' => 1155,
                'city' => 'PLARIDEL',
                'code' => 104212,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            155 => 
            array (
                'id' => 1156,
                'city' => 'POLA',
                'code' => 175210,
                'region_code' => 17,
                'province_code' => 1752,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            156 => 
            array (
                'id' => 1157,
                'city' => 'POLANCO',
                'code' => 97210,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            157 => 
            array (
                'id' => 1158,
                'city' => 'POLANGUI',
                'code' => 50514,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            158 => 
            array (
                'id' => 1159,
                'city' => 'POLILLO',
                'code' => 45636,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            159 => 
            array (
                'id' => 1160,
                'city' => 'POLOMOLOK',
                'code' => 126312,
                'region_code' => 12,
                'province_code' => 1263,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            160 => 
            array (
                'id' => 1161,
                'city' => 'PONTEVEDRA',
                'code' => 61912,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            161 => 
            array (
                'id' => 1162,
                'city' => 'PONTEVEDRA',
                'code' => 64521,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            162 => 
            array (
                'id' => 1163,
            'city' => 'POONA BAYABAO (GATA)',
                'code' => 153622,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            163 => 
            array (
                'id' => 1164,
                'city' => 'POONA PIAGAPO',
                'code' => 103517,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            164 => 
            array (
                'id' => 1165,
                'city' => 'PORAC',
                'code' => 35415,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            165 => 
            array (
                'id' => 1166,
                'city' => 'PORO',
                'code' => 72238,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            166 => 
            array (
                'id' => 1167,
                'city' => 'PORT AREA',
                'code' => 133913,
                'region_code' => 13,
                'province_code' => 1339,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            167 => 
            array (
                'id' => 1168,
                'city' => 'POTOTAN',
                'code' => 63037,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            168 => 
            array (
                'id' => 1169,
                'city' => 'POZORRUBIO',
                'code' => 15530,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            169 => 
            array (
                'id' => 1170,
            'city' => 'PRES. CARLOS P. GARCIA (PITOGO)',
                'code' => 71235,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            170 => 
            array (
                'id' => 1171,
                'city' => 'PRES. MANUEL A. ROXAS',
                'code' => 97211,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            171 => 
            array (
                'id' => 1172,
            'city' => 'PRESENTACION (PARUBCAN)',
                'code' => 51729,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            172 => 
            array (
                'id' => 1173,
                'city' => 'PRESIDENT QUIRINO',
                'code' => 126510,
                'region_code' => 12,
                'province_code' => 1265,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            173 => 
            array (
                'id' => 1174,
                'city' => 'PRESIDENT ROXAS',
                'code' => 124713,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            174 => 
            array (
                'id' => 1175,
                'city' => 'PRESIDENT ROXAS',
                'code' => 61913,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            175 => 
            array (
                'id' => 1176,
                'city' => 'PRIETO DIAZ',
                'code' => 56214,
                'region_code' => 5,
                'province_code' => 562,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            176 => 
            array (
                'id' => 1177,
            'city' => 'PROSPERIDAD (Capital)',
                'code' => 160306,
                'region_code' => 16,
                'province_code' => 1603,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            177 => 
            array (
                'id' => 1178,
                'city' => 'PUALAS',
                'code' => 153623,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            178 => 
            array (
                'id' => 1179,
                'city' => 'PUDTOL',
                'code' => 148106,
                'region_code' => 14,
                'province_code' => 1481,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            179 => 
            array (
                'id' => 1180,
                'city' => 'PUERTO GALERA',
                'code' => 175211,
                'region_code' => 17,
                'province_code' => 1752,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            180 => 
            array (
                'id' => 1181,
            'city' => 'PUERTO PRINCESA CITY (Capital)',
                'code' => 175316,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            181 => 
            array (
                'id' => 1182,
                'city' => 'PUGO',
                'code' => 13312,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            182 => 
            array (
                'id' => 1183,
                'city' => 'PULILAN',
                'code' => 31418,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            183 => 
            array (
                'id' => 1184,
                'city' => 'PULUPANDAN',
                'code' => 64522,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            184 => 
            array (
                'id' => 1185,
                'city' => 'PURA',
                'code' => 36911,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            185 => 
            array (
                'id' => 1186,
                'city' => 'QUEZON',
                'code' => 45637,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            186 => 
            array (
                'id' => 1187,
                'city' => 'QUEZON',
                'code' => 175317,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            187 => 
            array (
                'id' => 1188,
                'city' => 'QUEZON',
                'code' => 25011,
                'region_code' => 2,
                'province_code' => 250,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            188 => 
            array (
                'id' => 1189,
                'city' => 'QUEZON',
                'code' => 34922,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            189 => 
            array (
                'id' => 1190,
                'city' => 'QUEZON',
                'code' => 23122,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            190 => 
            array (
                'id' => 1191,
                'city' => 'QUEZON',
                'code' => 101317,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            191 => 
            array (
                'id' => 1192,
                'city' => 'QUEZON CITY',
                'code' => 137404,
                'region_code' => 13,
                'province_code' => 1374,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            192 => 
            array (
                'id' => 1193,
                'city' => 'QUIAPO',
                'code' => 133903,
                'region_code' => 13,
                'province_code' => 1339,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            193 => 
            array (
                'id' => 1194,
                'city' => 'QUINAPONDAN',
                'code' => 82618,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            194 => 
            array (
                'id' => 1195,
                'city' => 'QUIRINO',
                'code' => 23123,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            195 => 
            array (
                'id' => 1196,
            'city' => 'QUIRINO (ANGKAKI)',
                'code' => 12915,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            196 => 
            array (
                'id' => 1197,
                'city' => 'RAGAY',
                'code' => 51730,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            197 => 
            array (
                'id' => 1198,
                'city' => 'RAJAH BUAYAN',
                'code' => 153829,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            198 => 
            array (
                'id' => 1199,
                'city' => 'RAMON',
                'code' => 23124,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            199 => 
            array (
                'id' => 1200,
            'city' => 'RAMON MAGSAYSAY (LIARGO)',
                'code' => 97323,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            200 => 
            array (
                'id' => 1201,
                'city' => 'RAMOS',
                'code' => 36912,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            201 => 
            array (
                'id' => 1202,
                'city' => 'RAPU-RAPU',
                'code' => 50515,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            202 => 
            array (
                'id' => 1203,
                'city' => 'REAL',
                'code' => 45638,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            203 => 
            array (
                'id' => 1204,
                'city' => 'REINA MERCEDES',
                'code' => 23125,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            204 => 
            array (
                'id' => 1205,
                'city' => 'REMEDIOS T. ROMUALDEZ',
                'code' => 160212,
                'region_code' => 16,
                'province_code' => 1602,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            205 => 
            array (
                'id' => 1206,
                'city' => 'RIZAL',
                'code' => 175108,
                'region_code' => 17,
                'province_code' => 1751,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            206 => 
            array (
                'id' => 1207,
                'city' => 'RIZAL',
                'code' => 97212,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            207 => 
            array (
                'id' => 1208,
                'city' => 'RIZAL',
                'code' => 43423,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            208 => 
            array (
                'id' => 1209,
                'city' => 'RIZAL',
                'code' => 21521,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            209 => 
            array (
                'id' => 1210,
                'city' => 'RIZAL',
                'code' => 34923,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            210 => 
            array (
                'id' => 1211,
            'city' => 'RIZAL (LIWAN)',
                'code' => 143211,
                'region_code' => 14,
                'province_code' => 1432,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            211 => 
            array (
                'id' => 1212,
            'city' => 'RIZAL (MARCOS)',
                'code' => 175323,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            212 => 
            array (
                'id' => 1213,
            'city' => 'RODRIGUEZ (MONTALBAN)',
                'code' => 45808,
                'region_code' => 4,
                'province_code' => 458,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            213 => 
            array (
                'id' => 1214,
            'city' => 'ROMBLON (Capital)',
                'code' => 175910,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            214 => 
            array (
                'id' => 1215,
                'city' => 'RONDA',
                'code' => 72239,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            215 => 
            array (
                'id' => 1216,
                'city' => 'ROSALES',
                'code' => 15531,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            216 => 
            array (
                'id' => 1217,
                'city' => 'ROSARIO',
                'code' => 42117,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            217 => 
            array (
                'id' => 1218,
                'city' => 'ROSARIO',
                'code' => 84816,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            218 => 
            array (
                'id' => 1219,
                'city' => 'ROSARIO',
                'code' => 41021,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            219 => 
            array (
                'id' => 1220,
                'city' => 'ROSARIO',
                'code' => 160307,
                'region_code' => 16,
                'province_code' => 1603,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            220 => 
            array (
                'id' => 1221,
                'city' => 'ROSARIO',
                'code' => 13313,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            221 => 
            array (
                'id' => 1222,
                'city' => 'ROSELLER LIM',
                'code' => 98312,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            222 => 
            array (
                'id' => 1223,
                'city' => 'ROXAS',
                'code' => 175318,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            223 => 
            array (
                'id' => 1224,
                'city' => 'ROXAS',
                'code' => 175212,
                'region_code' => 17,
                'province_code' => 1752,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            224 => 
            array (
                'id' => 1225,
                'city' => 'ROXAS',
                'code' => 23126,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            225 => 
            array (
                'id' => 1226,
            'city' => 'ROXAS CITY (Capital)',
                'code' => 61914,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            226 => 
            array (
                'id' => 1227,
                'city' => 'SABANGAN',
                'code' => 144407,
                'region_code' => 14,
                'province_code' => 1444,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            227 => 
            array (
                'id' => 1228,
                'city' => 'SABLAN',
                'code' => 141112,
                'region_code' => 14,
                'province_code' => 1411,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            228 => 
            array (
                'id' => 1229,
                'city' => 'SABLAYAN',
                'code' => 175109,
                'region_code' => 17,
                'province_code' => 1751,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            229 => 
            array (
                'id' => 1230,
                'city' => 'SABTANG',
                'code' => 20905,
                'region_code' => 2,
                'province_code' => 209,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            230 => 
            array (
                'id' => 1231,
                'city' => 'SADANGA',
                'code' => 144408,
                'region_code' => 14,
                'province_code' => 1444,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            231 => 
            array (
                'id' => 1232,
                'city' => 'SAGADA',
                'code' => 144409,
                'region_code' => 14,
                'province_code' => 1444,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            232 => 
            array (
                'id' => 1233,
                'city' => 'SAGAY',
                'code' => 101805,
                'region_code' => 10,
                'province_code' => 1018,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            233 => 
            array (
                'id' => 1234,
                'city' => 'SAGAY CITY',
                'code' => 64523,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            234 => 
            array (
                'id' => 1235,
            'city' => 'SAGBAYAN (BORJA)',
                'code' => 71236,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            235 => 
            array (
                'id' => 1236,
                'city' => 'SAGÑAY',
                'code' => 51731,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            236 => 
            array (
                'id' => 1237,
                'city' => 'SAGUDAY',
                'code' => 25705,
                'region_code' => 2,
                'province_code' => 257,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            237 => 
            array (
                'id' => 1238,
                'city' => 'SAGUIARAN',
                'code' => 153625,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            238 => 
            array (
                'id' => 1239,
                'city' => 'SAINT BERNARD',
                'code' => 86412,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            239 => 
            array (
                'id' => 1240,
                'city' => 'SALAY',
                'code' => 104322,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            240 => 
            array (
                'id' => 1241,
                'city' => 'SALCEDO',
                'code' => 82619,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            241 => 
            array (
                'id' => 1242,
            'city' => 'SALCEDO (BAUGEN)',
                'code' => 12916,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            242 => 
            array (
                'id' => 1243,
                'city' => 'SALLAPADAN',
                'code' => 140120,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            243 => 
            array (
                'id' => 1244,
                'city' => 'SALUG',
                'code' => 97213,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            244 => 
            array (
                'id' => 1245,
                'city' => 'SALVADOR',
                'code' => 103518,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            245 => 
            array (
                'id' => 1246,
                'city' => 'SALVADOR BENEDICTO',
                'code' => 64532,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            246 => 
            array (
                'id' => 1247,
                'city' => 'SAMAL',
                'code' => 30812,
                'region_code' => 3,
                'province_code' => 308,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            247 => 
            array (
                'id' => 1248,
                'city' => 'SAMBOAN',
                'code' => 72240,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            248 => 
            array (
                'id' => 1249,
                'city' => 'SAMPALOC',
                'code' => 133906,
                'region_code' => 13,
                'province_code' => 1339,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            249 => 
            array (
                'id' => 1250,
                'city' => 'SAMPALOC',
                'code' => 45639,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            250 => 
            array (
                'id' => 1251,
                'city' => 'SAN AGUSTIN',
                'code' => 166815,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            251 => 
            array (
                'id' => 1252,
                'city' => 'SAN AGUSTIN',
                'code' => 175911,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            252 => 
            array (
                'id' => 1253,
                'city' => 'SAN AGUSTIN',
                'code' => 23127,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            253 => 
            array (
                'id' => 1254,
                'city' => 'SAN ANDRES',
                'code' => 45640,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            254 => 
            array (
                'id' => 1255,
                'city' => 'SAN ANDRES',
                'code' => 175912,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            255 => 
            array (
                'id' => 1256,
            'city' => 'SAN ANDRES (CALOLBON)',
                'code' => 52008,
                'region_code' => 5,
                'province_code' => 520,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            256 => 
            array (
                'id' => 1257,
                'city' => 'SAN ANTONIO',
                'code' => 45641,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            257 => 
            array (
                'id' => 1258,
                'city' => 'SAN ANTONIO',
                'code' => 84817,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            258 => 
            array (
                'id' => 1259,
                'city' => 'SAN ANTONIO',
                'code' => 37109,
                'region_code' => 3,
                'province_code' => 371,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            259 => 
            array (
                'id' => 1260,
                'city' => 'SAN ANTONIO',
                'code' => 34924,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            260 => 
            array (
                'id' => 1261,
                'city' => 'SAN BENITO',
                'code' => 166718,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            261 => 
            array (
                'id' => 1262,
                'city' => 'SAN CARLOS CITY',
                'code' => 15532,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            262 => 
            array (
                'id' => 1263,
                'city' => 'SAN CARLOS CITY',
                'code' => 64524,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            263 => 
            array (
                'id' => 1264,
                'city' => 'SAN CLEMENTE',
                'code' => 36913,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            264 => 
            array (
                'id' => 1265,
                'city' => 'SAN DIONISIO',
                'code' => 63038,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            265 => 
            array (
                'id' => 1266,
                'city' => 'SAN EMILIO',
                'code' => 12917,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            266 => 
            array (
                'id' => 1267,
                'city' => 'SAN ENRIQUE',
                'code' => 64525,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            267 => 
            array (
                'id' => 1268,
                'city' => 'SAN ENRIQUE',
                'code' => 63039,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            268 => 
            array (
                'id' => 1269,
                'city' => 'SAN ESTEBAN',
                'code' => 12918,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            269 => 
            array (
                'id' => 1270,
                'city' => 'SAN FABIAN',
                'code' => 15533,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            270 => 
            array (
                'id' => 1271,
                'city' => 'SAN FELIPE',
                'code' => 37110,
                'region_code' => 3,
                'province_code' => 371,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            271 => 
            array (
                'id' => 1272,
                'city' => 'SAN FERNANDO',
                'code' => 72241,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            272 => 
            array (
                'id' => 1273,
                'city' => 'SAN FERNANDO',
                'code' => 101318,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            273 => 
            array (
                'id' => 1274,
                'city' => 'SAN FERNANDO',
                'code' => 175913,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            274 => 
            array (
                'id' => 1275,
                'city' => 'SAN FERNANDO',
                'code' => 51732,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            275 => 
            array (
                'id' => 1276,
                'city' => 'SAN FERNANDO',
                'code' => 54118,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            276 => 
            array (
                'id' => 1277,
                'city' => 'SAN FRANCISCO',
                'code' => 86413,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            277 => 
            array (
                'id' => 1278,
                'city' => 'SAN FRANCISCO',
                'code' => 72242,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            278 => 
            array (
                'id' => 1279,
                'city' => 'SAN FRANCISCO',
                'code' => 160308,
                'region_code' => 16,
                'province_code' => 1603,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            279 => 
            array (
                'id' => 1280,
            'city' => 'SAN FRANCISCO (ANAO-AON)',
                'code' => 166719,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            280 => 
            array (
                'id' => 1281,
            'city' => 'SAN FRANCISCO (AURORA)',
                'code' => 45642,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            281 => 
            array (
                'id' => 1282,
                'city' => 'SAN GABRIEL',
                'code' => 13315,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            282 => 
            array (
                'id' => 1283,
                'city' => 'SAN GUILLERMO',
                'code' => 23128,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            283 => 
            array (
                'id' => 1284,
                'city' => 'SAN ILDEFONSO',
                'code' => 31419,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            284 => 
            array (
                'id' => 1285,
                'city' => 'SAN ILDEFONSO',
                'code' => 12919,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            285 => 
            array (
                'id' => 1286,
                'city' => 'SAN ISIDRO',
                'code' => 84818,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            286 => 
            array (
                'id' => 1287,
                'city' => 'SAN ISIDRO',
                'code' => 112324,
                'region_code' => 11,
                'province_code' => 1123,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            287 => 
            array (
                'id' => 1288,
                'city' => 'SAN ISIDRO',
                'code' => 34925,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            288 => 
            array (
                'id' => 1289,
                'city' => 'SAN ISIDRO',
                'code' => 71237,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            289 => 
            array (
                'id' => 1290,
                'city' => 'SAN ISIDRO',
                'code' => 83742,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            290 => 
            array (
                'id' => 1291,
                'city' => 'SAN ISIDRO',
                'code' => 112510,
                'region_code' => 11,
                'province_code' => 1125,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            291 => 
            array (
                'id' => 1292,
                'city' => 'SAN ISIDRO',
                'code' => 166720,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            292 => 
            array (
                'id' => 1293,
                'city' => 'SAN ISIDRO',
                'code' => 140121,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            293 => 
            array (
                'id' => 1294,
                'city' => 'SAN ISIDRO',
                'code' => 23129,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            294 => 
            array (
                'id' => 1295,
                'city' => 'SAN JACINTO',
                'code' => 54119,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            295 => 
            array (
                'id' => 1296,
                'city' => 'SAN JACINTO',
                'code' => 15534,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            296 => 
            array (
                'id' => 1297,
                'city' => 'SAN JOAQUIN',
                'code' => 63040,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            297 => 
            array (
                'id' => 1298,
                'city' => 'SAN JORGE',
                'code' => 86025,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            298 => 
            array (
                'id' => 1299,
                'city' => 'SAN JOSE',
                'code' => 175914,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            299 => 
            array (
                'id' => 1300,
                'city' => 'SAN JOSE',
                'code' => 74617,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            300 => 
            array (
                'id' => 1301,
                'city' => 'SAN JOSE',
                'code' => 175110,
                'region_code' => 17,
                'province_code' => 1751,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            301 => 
            array (
                'id' => 1302,
                'city' => 'SAN JOSE',
                'code' => 84819,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            302 => 
            array (
                'id' => 1303,
                'city' => 'SAN JOSE',
                'code' => 41022,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            303 => 
            array (
                'id' => 1304,
                'city' => 'SAN JOSE',
                'code' => 51733,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            304 => 
            array (
                'id' => 1305,
                'city' => 'SAN JOSE',
                'code' => 36918,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            305 => 
            array (
                'id' => 1306,
            'city' => 'SAN JOSE (Capital)',
                'code' => 168506,
                'region_code' => 16,
                'province_code' => 1685,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            306 => 
            array (
                'id' => 1307,
            'city' => 'SAN JOSE (Capital)',
                'code' => 60613,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            307 => 
            array (
                'id' => 1308,
                'city' => 'SAN JOSE CITY',
                'code' => 34926,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            308 => 
            array (
                'id' => 1309,
                'city' => 'SAN JOSE DE BUAN',
                'code' => 86014,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            309 => 
            array (
                'id' => 1310,
                'city' => 'SAN JUAN',
                'code' => 13316,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            310 => 
            array (
                'id' => 1311,
                'city' => 'SAN JUAN',
                'code' => 41023,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            311 => 
            array (
                'id' => 1312,
                'city' => 'SAN JUAN',
                'code' => 140122,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            312 => 
            array (
                'id' => 1313,
                'city' => 'SAN JUAN',
                'code' => 76105,
                'region_code' => 7,
                'province_code' => 761,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            313 => 
            array (
                'id' => 1314,
            'city' => 'SAN JUAN (CABALIAN)',
                'code' => 86414,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            314 => 
            array (
                'id' => 1315,
            'city' => 'SAN JUAN (LAPOG)',
                'code' => 12920,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            315 => 
            array (
                'id' => 1316,
                'city' => 'SAN JULIAN',
                'code' => 82620,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            316 => 
            array (
                'id' => 1317,
                'city' => 'SAN LEONARDO',
                'code' => 34927,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            317 => 
            array (
                'id' => 1318,
                'city' => 'SAN LORENZO',
                'code' => 67904,
                'region_code' => 6,
                'province_code' => 679,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            318 => 
            array (
                'id' => 1319,
            'city' => 'SAN LORENZO RUIZ (IMELDA)',
                'code' => 51604,
                'region_code' => 5,
                'province_code' => 516,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            319 => 
            array (
                'id' => 1320,
                'city' => 'SAN LUIS',
                'code' => 35417,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            320 => 
            array (
                'id' => 1321,
                'city' => 'SAN LUIS',
                'code' => 41024,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            321 => 
            array (
                'id' => 1322,
                'city' => 'SAN LUIS',
                'code' => 37708,
                'region_code' => 3,
                'province_code' => 377,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            322 => 
            array (
                'id' => 1323,
                'city' => 'SAN LUIS',
                'code' => 160309,
                'region_code' => 16,
                'province_code' => 1603,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            323 => 
            array (
                'id' => 1324,
                'city' => 'SAN MANUEL',
                'code' => 15535,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            324 => 
            array (
                'id' => 1325,
                'city' => 'SAN MANUEL',
                'code' => 23130,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            325 => 
            array (
                'id' => 1326,
                'city' => 'SAN MANUEL',
                'code' => 36914,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            326 => 
            array (
                'id' => 1327,
                'city' => 'SAN MARCELINO',
                'code' => 37111,
                'region_code' => 3,
                'province_code' => 371,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            327 => 
            array (
                'id' => 1328,
                'city' => 'SAN MARIANO',
                'code' => 23131,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            328 => 
            array (
                'id' => 1329,
                'city' => 'SAN MATEO',
                'code' => 23132,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            329 => 
            array (
                'id' => 1330,
                'city' => 'SAN MATEO',
                'code' => 45811,
                'region_code' => 4,
                'province_code' => 458,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            330 => 
            array (
                'id' => 1331,
                'city' => 'SAN MIGUEL',
                'code' => 52009,
                'region_code' => 5,
                'province_code' => 520,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            331 => 
            array (
                'id' => 1332,
                'city' => 'SAN MIGUEL',
                'code' => 133907,
                'region_code' => 13,
                'province_code' => 1339,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            332 => 
            array (
                'id' => 1333,
                'city' => 'SAN MIGUEL',
                'code' => 63041,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            333 => 
            array (
                'id' => 1334,
                'city' => 'SAN MIGUEL',
                'code' => 83743,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            334 => 
            array (
                'id' => 1335,
                'city' => 'SAN MIGUEL',
                'code' => 71238,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            335 => 
            array (
                'id' => 1336,
                'city' => 'SAN MIGUEL',
                'code' => 31421,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            336 => 
            array (
                'id' => 1337,
                'city' => 'SAN MIGUEL',
                'code' => 97324,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            337 => 
            array (
                'id' => 1338,
                'city' => 'SAN MIGUEL',
                'code' => 166816,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            338 => 
            array (
                'id' => 1339,
                'city' => 'SAN NARCISO',
                'code' => 45644,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            339 => 
            array (
                'id' => 1340,
                'city' => 'SAN NARCISO',
                'code' => 37112,
                'region_code' => 3,
                'province_code' => 371,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            340 => 
            array (
                'id' => 1341,
                'city' => 'SAN NICOLAS',
                'code' => 12820,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            341 => 
            array (
                'id' => 1342,
                'city' => 'SAN NICOLAS',
                'code' => 133904,
                'region_code' => 13,
                'province_code' => 1339,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            342 => 
            array (
                'id' => 1343,
                'city' => 'SAN NICOLAS',
                'code' => 15536,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            343 => 
            array (
                'id' => 1344,
                'city' => 'SAN NICOLAS',
                'code' => 41025,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            344 => 
            array (
                'id' => 1345,
                'city' => 'SAN PABLO',
                'code' => 23133,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            345 => 
            array (
                'id' => 1346,
                'city' => 'SAN PABLO',
                'code' => 97325,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            346 => 
            array (
                'id' => 1347,
                'city' => 'SAN PABLO CITY',
                'code' => 43424,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            347 => 
            array (
                'id' => 1348,
                'city' => 'SAN PASCUAL',
                'code' => 54120,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            348 => 
            array (
                'id' => 1349,
                'city' => 'SAN PASCUAL',
                'code' => 41026,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            349 => 
            array (
                'id' => 1350,
                'city' => 'SAN POLICARPO',
                'code' => 82621,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            350 => 
            array (
                'id' => 1351,
                'city' => 'SAN QUINTIN',
                'code' => 15537,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            351 => 
            array (
                'id' => 1352,
                'city' => 'SAN QUINTIN',
                'code' => 140123,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            352 => 
            array (
                'id' => 1353,
                'city' => 'SAN RAFAEL',
                'code' => 63042,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            353 => 
            array (
                'id' => 1354,
                'city' => 'SAN RAFAEL',
                'code' => 31422,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            354 => 
            array (
                'id' => 1355,
                'city' => 'SAN REMIGIO',
                'code' => 72243,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            355 => 
            array (
                'id' => 1356,
                'city' => 'SAN REMIGIO',
                'code' => 60614,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            356 => 
            array (
                'id' => 1357,
                'city' => 'SAN RICARDO',
                'code' => 86415,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            357 => 
            array (
                'id' => 1358,
                'city' => 'SAN ROQUE',
                'code' => 84820,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            358 => 
            array (
                'id' => 1359,
                'city' => 'SAN SEBASTIAN',
                'code' => 86015,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            359 => 
            array (
                'id' => 1360,
                'city' => 'SAN SIMON',
                'code' => 35418,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            360 => 
            array (
                'id' => 1361,
                'city' => 'SAN TEODORO',
                'code' => 175213,
                'region_code' => 17,
                'province_code' => 1752,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            361 => 
            array (
                'id' => 1362,
                'city' => 'SAN VICENTE',
                'code' => 175319,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            362 => 
            array (
                'id' => 1363,
                'city' => 'SAN VICENTE',
                'code' => 51609,
                'region_code' => 5,
                'province_code' => 516,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            363 => 
            array (
                'id' => 1364,
                'city' => 'SAN VICENTE',
                'code' => 84821,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            364 => 
            array (
                'id' => 1365,
                'city' => 'SAN VICENTE',
                'code' => 12921,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            365 => 
            array (
                'id' => 1366,
                'city' => 'SANCHEZ-MIRA',
                'code' => 21522,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            366 => 
            array (
                'id' => 1367,
                'city' => 'SANTA',
                'code' => 12922,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            367 => 
            array (
                'id' => 1368,
                'city' => 'SANTA ANA',
                'code' => 35419,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            368 => 
            array (
                'id' => 1369,
                'city' => 'SANTA ANA',
                'code' => 21523,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            369 => 
            array (
                'id' => 1370,
                'city' => 'SANTA ANA',
                'code' => 133914,
                'region_code' => 13,
                'province_code' => 1339,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            370 => 
            array (
                'id' => 1371,
                'city' => 'SANTA BARBARA',
                'code' => 63043,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            371 => 
            array (
                'id' => 1372,
                'city' => 'SANTA BARBARA',
                'code' => 15538,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            372 => 
            array (
                'id' => 1373,
                'city' => 'SANTA CATALINA',
                'code' => 74618,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            373 => 
            array (
                'id' => 1374,
                'city' => 'SANTA CATALINA',
                'code' => 12923,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            374 => 
            array (
                'id' => 1375,
                'city' => 'SANTA CRUZ',
                'code' => 37113,
                'region_code' => 3,
                'province_code' => 371,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            375 => 
            array (
                'id' => 1376,
                'city' => 'SANTA CRUZ',
                'code' => 174005,
                'region_code' => 17,
                'province_code' => 1740,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            376 => 
            array (
                'id' => 1377,
                'city' => 'SANTA CRUZ',
                'code' => 175111,
                'region_code' => 17,
                'province_code' => 1751,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            377 => 
            array (
                'id' => 1378,
                'city' => 'SANTA CRUZ',
                'code' => 12924,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            378 => 
            array (
                'id' => 1379,
                'city' => 'SANTA CRUZ',
                'code' => 112412,
                'region_code' => 11,
                'province_code' => 1124,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            379 => 
            array (
                'id' => 1380,
                'city' => 'SANTA CRUZ',
                'code' => 133905,
                'region_code' => 13,
                'province_code' => 1339,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            380 => 
            array (
                'id' => 1381,
            'city' => 'SANTA CRUZ (Capital)',
                'code' => 43426,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            381 => 
            array (
                'id' => 1382,
                'city' => 'SANTA ELENA',
                'code' => 51610,
                'region_code' => 5,
                'province_code' => 516,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            382 => 
            array (
                'id' => 1383,
                'city' => 'SANTA FE',
                'code' => 72244,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            383 => 
            array (
                'id' => 1384,
                'city' => 'SANTA FE',
                'code' => 175915,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            384 => 
            array (
                'id' => 1385,
                'city' => 'SANTA FE',
                'code' => 25012,
                'region_code' => 2,
                'province_code' => 250,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            385 => 
            array (
                'id' => 1386,
                'city' => 'SANTA FE',
                'code' => 83744,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            386 => 
            array (
                'id' => 1387,
                'city' => 'SANTA IGNACIA',
                'code' => 36915,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            387 => 
            array (
                'id' => 1388,
                'city' => 'SANTA JOSEFA',
                'code' => 160310,
                'region_code' => 16,
                'province_code' => 1603,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            388 => 
            array (
                'id' => 1389,
                'city' => 'SANTA LUCIA',
                'code' => 12925,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            389 => 
            array (
                'id' => 1390,
                'city' => 'SANTA MAGDALENA',
                'code' => 56215,
                'region_code' => 5,
                'province_code' => 562,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            390 => 
            array (
                'id' => 1391,
                'city' => 'SANTA MARCELA',
                'code' => 148107,
                'region_code' => 14,
                'province_code' => 1481,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            391 => 
            array (
                'id' => 1392,
                'city' => 'SANTA MARGARITA',
                'code' => 86016,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            392 => 
            array (
                'id' => 1393,
                'city' => 'SANTA MARIA',
                'code' => 12926,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            393 => 
            array (
                'id' => 1394,
                'city' => 'SANTA MARIA',
                'code' => 43427,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            394 => 
            array (
                'id' => 1395,
                'city' => 'SANTA MARIA',
                'code' => 118604,
                'region_code' => 11,
                'province_code' => 1186,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            395 => 
            array (
                'id' => 1396,
                'city' => 'SANTA MARIA',
                'code' => 23134,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            396 => 
            array (
                'id' => 1397,
                'city' => 'SANTA MARIA',
                'code' => 15539,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            397 => 
            array (
                'id' => 1398,
                'city' => 'SANTA MARIA',
                'code' => 31423,
                'region_code' => 3,
                'province_code' => 314,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            398 => 
            array (
                'id' => 1399,
            'city' => 'SANTA MARIA (IMELDA)',
                'code' => 175917,
                'region_code' => 17,
                'province_code' => 1759,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            399 => 
            array (
                'id' => 1400,
            'city' => 'SANTA MONICA (SAPAO)',
                'code' => 166721,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            400 => 
            array (
                'id' => 1401,
                'city' => 'SANTA PRAXEDES',
                'code' => 21524,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            401 => 
            array (
                'id' => 1402,
                'city' => 'SANTA RITA',
                'code' => 35420,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            402 => 
            array (
                'id' => 1403,
                'city' => 'SANTA RITA',
                'code' => 86017,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            403 => 
            array (
                'id' => 1404,
                'city' => 'SANTA ROSA',
                'code' => 34928,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            404 => 
            array (
                'id' => 1405,
                'city' => 'SANTA TERESITA',
                'code' => 21525,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            405 => 
            array (
                'id' => 1406,
                'city' => 'SANTA TERESITA',
                'code' => 41027,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            406 => 
            array (
                'id' => 1407,
                'city' => 'SANTANDER',
                'code' => 72245,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            407 => 
            array (
                'id' => 1408,
                'city' => 'SANTIAGO',
                'code' => 160210,
                'region_code' => 16,
                'province_code' => 1602,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            408 => 
            array (
                'id' => 1409,
                'city' => 'SANTIAGO',
                'code' => 12927,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            409 => 
            array (
                'id' => 1410,
                'city' => 'SANTO DOMINGO',
                'code' => 34929,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            410 => 
            array (
                'id' => 1411,
                'city' => 'SANTO DOMINGO',
                'code' => 12928,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            411 => 
            array (
                'id' => 1412,
            'city' => 'SANTO DOMINGO (LIBOG)',
                'code' => 50516,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            412 => 
            array (
                'id' => 1413,
                'city' => 'SANTO NIÑO',
                'code' => 86018,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            413 => 
            array (
                'id' => 1414,
                'city' => 'SANTO NIÑO',
                'code' => 126318,
                'region_code' => 12,
                'province_code' => 1263,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            414 => 
            array (
                'id' => 1415,
            'city' => 'SANTO NIÑO (FAIRE)',
                'code' => 21526,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            415 => 
            array (
                'id' => 1416,
                'city' => 'SANTO TOMAS',
                'code' => 35421,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            416 => 
            array (
                'id' => 1417,
                'city' => 'SANTO TOMAS',
                'code' => 15540,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            417 => 
            array (
                'id' => 1418,
                'city' => 'SANTO TOMAS',
                'code' => 41028,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            418 => 
            array (
                'id' => 1419,
                'city' => 'SANTO TOMAS',
                'code' => 112318,
                'region_code' => 11,
                'province_code' => 1123,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            419 => 
            array (
                'id' => 1420,
                'city' => 'SANTO TOMAS',
                'code' => 13317,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            420 => 
            array (
                'id' => 1421,
                'city' => 'SANTO TOMAS',
                'code' => 23136,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            421 => 
            array (
                'id' => 1422,
                'city' => 'SANTOL',
                'code' => 13318,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            422 => 
            array (
                'id' => 1423,
                'city' => 'SAPA-SAPA',
                'code' => 157010,
                'region_code' => 15,
                'province_code' => 1570,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            423 => 
            array (
                'id' => 1424,
                'city' => 'SAPAD',
                'code' => 103519,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            424 => 
            array (
                'id' => 1425,
                'city' => 'SAPANG DALAGA',
                'code' => 104213,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            425 => 
            array (
                'id' => 1426,
                'city' => 'SAPI-AN',
                'code' => 61915,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            426 => 
            array (
                'id' => 1427,
                'city' => 'SARA',
                'code' => 63044,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            427 => 
            array (
                'id' => 1428,
                'city' => 'SARANGANI',
                'code' => 118605,
                'region_code' => 11,
                'province_code' => 1186,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            428 => 
            array (
                'id' => 1429,
                'city' => 'SARIAYA',
                'code' => 45645,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            429 => 
            array (
                'id' => 1430,
                'city' => 'SARRAT',
                'code' => 12821,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            430 => 
            array (
                'id' => 1431,
            'city' => 'SASMUAN (Sexmoan)',
                'code' => 35422,
                'region_code' => 3,
                'province_code' => 354,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            431 => 
            array (
                'id' => 1432,
                'city' => 'SCIENCE CITY OF MUÑOZ',
                'code' => 34917,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            432 => 
            array (
                'id' => 1433,
                'city' => 'SEBASTE',
                'code' => 60615,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            433 => 
            array (
                'id' => 1434,
                'city' => 'SEN. NINOY AQUINO',
                'code' => 126512,
                'region_code' => 12,
                'province_code' => 1265,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            434 => 
            array (
                'id' => 1435,
                'city' => 'SERGIO OSMEÑA SR.',
                'code' => 97214,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            435 => 
            array (
                'id' => 1436,
                'city' => 'SEVILLA',
                'code' => 71239,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            436 => 
            array (
                'id' => 1437,
            'city' => 'SHARIFF AGUAK (MAGANOY) (Capital)',
                'code' => 153808,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            437 => 
            array (
                'id' => 1438,
                'city' => 'SHARIFF SAYDONA MUSTAPHA',
                'code' => 153837,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            438 => 
            array (
                'id' => 1439,
                'city' => 'SIASI',
                'code' => 156612,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            439 => 
            array (
                'id' => 1440,
                'city' => 'SIATON',
                'code' => 74619,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            440 => 
            array (
                'id' => 1441,
                'city' => 'SIAY',
                'code' => 98313,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            441 => 
            array (
                'id' => 1442,
                'city' => 'SIAYAN',
                'code' => 97215,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            442 => 
            array (
                'id' => 1443,
                'city' => 'SIBAGAT',
                'code' => 160314,
                'region_code' => 16,
                'province_code' => 1603,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            443 => 
            array (
                'id' => 1444,
                'city' => 'SIBALOM',
                'code' => 60616,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            444 => 
            array (
                'id' => 1445,
                'city' => 'SIBONGA',
                'code' => 72246,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            445 => 
            array (
                'id' => 1446,
                'city' => 'SIBUCO',
                'code' => 97216,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            446 => 
            array (
                'id' => 1447,
                'city' => 'SIBULAN',
                'code' => 74620,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            447 => 
            array (
                'id' => 1448,
                'city' => 'SIBUNAG',
                'code' => 67905,
                'region_code' => 6,
                'province_code' => 679,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            448 => 
            array (
                'id' => 1449,
                'city' => 'SIBUTAD',
                'code' => 97217,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            449 => 
            array (
                'id' => 1450,
                'city' => 'SIBUTU',
                'code' => 157011,
                'region_code' => 15,
                'province_code' => 1570,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            450 => 
            array (
                'id' => 1451,
                'city' => 'SIERRA BULLONES',
                'code' => 71240,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            451 => 
            array (
                'id' => 1452,
                'city' => 'SIGAY',
                'code' => 12929,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            452 => 
            array (
                'id' => 1453,
                'city' => 'SIGMA',
                'code' => 61916,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            453 => 
            array (
                'id' => 1454,
                'city' => 'SIKATUNA',
                'code' => 71241,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            454 => 
            array (
                'id' => 1455,
                'city' => 'SILAGO',
                'code' => 86416,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            455 => 
            array (
                'id' => 1456,
                'city' => 'SILANG',
                'code' => 42118,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            456 => 
            array (
                'id' => 1457,
                'city' => 'SILAY CITY',
                'code' => 64526,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            457 => 
            array (
                'id' => 1458,
                'city' => 'SILVINO LOBOS',
                'code' => 84822,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            458 => 
            array (
                'id' => 1459,
                'city' => 'SIMUNUL',
                'code' => 157004,
                'region_code' => 15,
                'province_code' => 1570,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            459 => 
            array (
                'id' => 1460,
                'city' => 'SINACABAN',
                'code' => 104214,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            460 => 
            array (
                'id' => 1461,
                'city' => 'SINAIT',
                'code' => 12930,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            461 => 
            array (
                'id' => 1462,
                'city' => 'SINDANGAN',
                'code' => 97218,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            462 => 
            array (
                'id' => 1463,
                'city' => 'SINILOAN',
                'code' => 43429,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            463 => 
            array (
                'id' => 1464,
                'city' => 'SIOCON',
                'code' => 97219,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            464 => 
            array (
                'id' => 1465,
                'city' => 'SIPOCOT',
                'code' => 51734,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            465 => 
            array (
                'id' => 1466,
            'city' => 'SIQUIJOR (Capital)',
                'code' => 76106,
                'region_code' => 7,
                'province_code' => 761,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            466 => 
            array (
                'id' => 1467,
                'city' => 'SIRAWAI',
                'code' => 97220,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            467 => 
            array (
                'id' => 1468,
                'city' => 'SIRUMA',
                'code' => 51735,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            468 => 
            array (
                'id' => 1469,
                'city' => 'SISON',
                'code' => 166722,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            469 => 
            array (
                'id' => 1470,
                'city' => 'SISON',
                'code' => 15541,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            470 => 
            array (
                'id' => 1471,
                'city' => 'SITANGKAI',
                'code' => 157005,
                'region_code' => 15,
                'province_code' => 1570,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            471 => 
            array (
                'id' => 1472,
                'city' => 'SOCORRO',
                'code' => 166723,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            472 => 
            array (
                'id' => 1473,
                'city' => 'SOCORRO',
                'code' => 175214,
                'region_code' => 17,
                'province_code' => 1752,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            473 => 
            array (
                'id' => 1474,
                'city' => 'SOFRONIO ESPAÑOLA',
                'code' => 175324,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            474 => 
            array (
                'id' => 1475,
                'city' => 'SOGOD',
                'code' => 72247,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            475 => 
            array (
                'id' => 1476,
                'city' => 'SOGOD',
                'code' => 86417,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            476 => 
            array (
                'id' => 1477,
                'city' => 'SOLANA',
                'code' => 21527,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            477 => 
            array (
                'id' => 1478,
                'city' => 'SOLANO',
                'code' => 25013,
                'region_code' => 2,
                'province_code' => 250,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            478 => 
            array (
                'id' => 1479,
                'city' => 'SOLSONA',
                'code' => 12822,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            479 => 
            array (
                'id' => 1480,
            'city' => 'SOMINOT (DON MARIANO MARCOS)',
                'code' => 97340,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            480 => 
            array (
                'id' => 1481,
                'city' => 'SOUTH UBIAN',
                'code' => 157006,
                'region_code' => 15,
                'province_code' => 1570,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            481 => 
            array (
                'id' => 1482,
                'city' => 'SOUTH UPI',
                'code' => 153817,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            482 => 
            array (
                'id' => 1483,
                'city' => 'SUAL',
                'code' => 15542,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            483 => 
            array (
                'id' => 1484,
                'city' => 'SUBIC',
                'code' => 37114,
                'region_code' => 3,
                'province_code' => 371,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            484 => 
            array (
                'id' => 1485,
                'city' => 'SUDIPEN',
                'code' => 13319,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            485 => 
            array (
                'id' => 1486,
                'city' => 'SUGBONGCOGON',
                'code' => 104323,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            486 => 
            array (
                'id' => 1487,
                'city' => 'SUGPON',
                'code' => 12931,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            487 => 
            array (
                'id' => 1488,
                'city' => 'SULAT',
                'code' => 82622,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            488 => 
            array (
                'id' => 1489,
                'city' => 'SULOP',
                'code' => 112414,
                'region_code' => 11,
                'province_code' => 1124,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            489 => 
            array (
                'id' => 1490,
                'city' => 'SULTAN DUMALONDONG',
                'code' => 153640,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            490 => 
            array (
                'id' => 1491,
            'city' => 'SULTAN KUDARAT (NULING)',
                'code' => 153812,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            491 => 
            array (
                'id' => 1492,
                'city' => 'SULTAN MASTURA',
                'code' => 153824,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            492 => 
            array (
                'id' => 1493,
            'city' => 'SULTAN NAGA DIMAPORO (KAROMATAN)',
                'code' => 103506,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            493 => 
            array (
                'id' => 1494,
            'city' => 'SULTAN SA BARONGIS (LAMBAYONG)',
                'code' => 153813,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            494 => 
            array (
                'id' => 1495,
                'city' => 'SUMILAO',
                'code' => 101319,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            495 => 
            array (
                'id' => 1496,
                'city' => 'SUMISIP',
                'code' => 150705,
                'region_code' => 15,
                'province_code' => 1507,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            496 => 
            array (
                'id' => 1497,
                'city' => 'SURALLAH',
                'code' => 126313,
                'region_code' => 12,
                'province_code' => 1263,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            497 => 
            array (
                'id' => 1498,
            'city' => 'SURIGAO CITY (Capital)',
                'code' => 166724,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            498 => 
            array (
                'id' => 1499,
                'city' => 'SUYO',
                'code' => 12932,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            499 => 
            array (
                'id' => 1500,
                'city' => 'T\'BOLI',
                'code' => 126316,
                'region_code' => 12,
                'province_code' => 1263,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'city' => 'TAAL',
                'code' => 41029,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            1 => 
            array (
                'id' => 1502,
                'city' => 'TABANGO',
                'code' => 83745,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            2 => 
            array (
                'id' => 1503,
                'city' => 'TABINA',
                'code' => 97327,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            3 => 
            array (
                'id' => 1504,
                'city' => 'TABOGON',
                'code' => 72248,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            4 => 
            array (
                'id' => 1505,
                'city' => 'TABONTABON',
                'code' => 83746,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            5 => 
            array (
                'id' => 1506,
                'city' => 'TABUAN-LASA',
                'code' => 150713,
                'region_code' => 15,
                'province_code' => 1507,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            6 => 
            array (
                'id' => 1507,
                'city' => 'TABUELAN',
                'code' => 72249,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            7 => 
            array (
                'id' => 1508,
            'city' => 'TACLOBAN CITY (Capital)',
                'code' => 83747,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            8 => 
            array (
                'id' => 1509,
                'city' => 'TADIAN',
                'code' => 144410,
                'region_code' => 14,
                'province_code' => 1444,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            9 => 
            array (
                'id' => 1510,
                'city' => 'TAFT',
                'code' => 82623,
                'region_code' => 8,
                'province_code' => 826,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            10 => 
            array (
                'id' => 1511,
                'city' => 'TAGANA-AN',
                'code' => 166725,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            11 => 
            array (
                'id' => 1512,
                'city' => 'TAGAPUL-AN',
                'code' => 86024,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            12 => 
            array (
                'id' => 1513,
                'city' => 'TAGAYTAY CITY',
                'code' => 42119,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            13 => 
            array (
                'id' => 1514,
            'city' => 'TAGBILARAN CITY (Capital)',
                'code' => 71242,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            14 => 
            array (
                'id' => 1515,
                'city' => 'TAGBINA',
                'code' => 166817,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            15 => 
            array (
                'id' => 1516,
                'city' => 'TAGKAWAYAN',
                'code' => 45646,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            16 => 
            array (
                'id' => 1517,
                'city' => 'TAGO',
                'code' => 166818,
                'region_code' => 16,
                'province_code' => 1668,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            17 => 
            array (
                'id' => 1518,
                'city' => 'TAGOLOAN',
                'code' => 104324,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            18 => 
            array (
                'id' => 1519,
                'city' => 'TAGOLOAN',
                'code' => 103520,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            19 => 
            array (
                'id' => 1520,
                'city' => 'TAGOLOAN II',
                'code' => 153638,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            20 => 
            array (
                'id' => 1521,
                'city' => 'TAGUDIN',
                'code' => 12933,
                'region_code' => 1,
                'province_code' => 129,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            21 => 
            array (
                'id' => 1522,
                'city' => 'TAGUIG CITY',
                'code' => 137607,
                'region_code' => 13,
                'province_code' => 1376,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            22 => 
            array (
                'id' => 1523,
                'city' => 'TALACOGON',
                'code' => 160311,
                'region_code' => 16,
                'province_code' => 1603,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            23 => 
            array (
                'id' => 1524,
                'city' => 'TALAINGOD',
                'code' => 112322,
                'region_code' => 11,
                'province_code' => 1123,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            24 => 
            array (
                'id' => 1525,
                'city' => 'TALAKAG',
                'code' => 101320,
                'region_code' => 10,
                'province_code' => 1013,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            25 => 
            array (
                'id' => 1526,
                'city' => 'TALALORA',
                'code' => 86019,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            26 => 
            array (
                'id' => 1527,
                'city' => 'TALAVERA',
                'code' => 34930,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            27 => 
            array (
                'id' => 1528,
                'city' => 'TALAYAN',
                'code' => 153816,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            28 => 
            array (
                'id' => 1529,
                'city' => 'TALIBON',
                'code' => 71243,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            29 => 
            array (
                'id' => 1530,
                'city' => 'TALIPAO',
                'code' => 156613,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            30 => 
            array (
                'id' => 1531,
                'city' => 'TALISAY',
                'code' => 41030,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            31 => 
            array (
                'id' => 1532,
                'city' => 'TALISAY',
                'code' => 51611,
                'region_code' => 5,
                'province_code' => 516,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            32 => 
            array (
                'id' => 1533,
                'city' => 'TALISAYAN',
                'code' => 104325,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            33 => 
            array (
                'id' => 1534,
                'city' => 'TALITAY',
                'code' => 153821,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            34 => 
            array (
                'id' => 1535,
                'city' => 'TALUGTUG',
                'code' => 34931,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            35 => 
            array (
                'id' => 1536,
                'city' => 'TALUSAN',
                'code' => 98314,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            36 => 
            array (
                'id' => 1537,
                'city' => 'TAMBULIG',
                'code' => 97328,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            37 => 
            array (
                'id' => 1538,
                'city' => 'TAMPAKAN',
                'code' => 126314,
                'region_code' => 12,
                'province_code' => 1263,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            38 => 
            array (
                'id' => 1539,
                'city' => 'TAMPARAN',
                'code' => 153626,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            39 => 
            array (
                'id' => 1540,
                'city' => 'TAMPILISAN',
                'code' => 97221,
                'region_code' => 9,
                'province_code' => 972,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            40 => 
            array (
                'id' => 1541,
                'city' => 'TANAUAN',
                'code' => 83748,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            41 => 
            array (
                'id' => 1542,
                'city' => 'TANAY',
                'code' => 45812,
                'region_code' => 4,
                'province_code' => 458,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            42 => 
            array (
                'id' => 1543,
                'city' => 'TANDUBAS',
                'code' => 157007,
                'region_code' => 15,
                'province_code' => 1570,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            43 => 
            array (
                'id' => 1544,
                'city' => 'TANGALAN',
                'code' => 60417,
                'region_code' => 6,
                'province_code' => 604,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            44 => 
            array (
                'id' => 1545,
                'city' => 'TANGCAL',
                'code' => 103521,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            45 => 
            array (
                'id' => 1546,
                'city' => 'TANGUB CITY',
                'code' => 104215,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            46 => 
            array (
                'id' => 1547,
                'city' => 'TANTANGAN',
                'code' => 126315,
                'region_code' => 12,
                'province_code' => 1263,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            47 => 
            array (
                'id' => 1548,
                'city' => 'TANUDAN',
                'code' => 143214,
                'region_code' => 14,
                'province_code' => 1432,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            48 => 
            array (
                'id' => 1549,
                'city' => 'TANZA',
                'code' => 42120,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            49 => 
            array (
                'id' => 1550,
                'city' => 'TAPAZ',
                'code' => 61917,
                'region_code' => 6,
                'province_code' => 619,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            50 => 
            array (
                'id' => 1551,
                'city' => 'TAPUL',
                'code' => 156614,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            51 => 
            array (
                'id' => 1552,
                'city' => 'TARAKA',
                'code' => 153627,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            52 => 
            array (
                'id' => 1553,
                'city' => 'TARANGNAN',
                'code' => 86020,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            53 => 
            array (
                'id' => 1554,
                'city' => 'TARRAGONA',
                'code' => 112511,
                'region_code' => 11,
                'province_code' => 1125,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            54 => 
            array (
                'id' => 1555,
                'city' => 'TAYASAN',
                'code' => 74622,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            55 => 
            array (
                'id' => 1556,
                'city' => 'TAYSAN',
                'code' => 41032,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            56 => 
            array (
                'id' => 1557,
                'city' => 'TAYTAY',
                'code' => 175320,
                'region_code' => 17,
                'province_code' => 1753,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            57 => 
            array (
                'id' => 1558,
                'city' => 'TAYTAY',
                'code' => 45813,
                'region_code' => 4,
                'province_code' => 458,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            58 => 
            array (
                'id' => 1559,
                'city' => 'TAYUG',
                'code' => 15543,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            59 => 
            array (
                'id' => 1560,
                'city' => 'TAYUM',
                'code' => 140124,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            60 => 
            array (
                'id' => 1561,
                'city' => 'TERESA',
                'code' => 45814,
                'region_code' => 4,
                'province_code' => 458,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            61 => 
            array (
                'id' => 1562,
                'city' => 'TERNATE',
                'code' => 42121,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            62 => 
            array (
                'id' => 1563,
                'city' => 'TIAONG',
                'code' => 45648,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            63 => 
            array (
                'id' => 1564,
                'city' => 'TIBIAO',
                'code' => 60617,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            64 => 
            array (
                'id' => 1565,
                'city' => 'TIGAON',
                'code' => 51736,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            65 => 
            array (
                'id' => 1566,
                'city' => 'TIGBAO',
                'code' => 97344,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            66 => 
            array (
                'id' => 1567,
                'city' => 'TIGBAUAN',
                'code' => 63045,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            67 => 
            array (
                'id' => 1568,
                'city' => 'TINAMBAC',
                'code' => 51737,
                'region_code' => 5,
                'province_code' => 517,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            68 => 
            array (
                'id' => 1569,
                'city' => 'TINEG',
                'code' => 140125,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            69 => 
            array (
                'id' => 1570,
                'city' => 'TINGLAYAN',
                'code' => 143215,
                'region_code' => 14,
                'province_code' => 1432,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            70 => 
            array (
                'id' => 1571,
                'city' => 'TINGLOY',
                'code' => 41033,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            71 => 
            array (
                'id' => 1572,
                'city' => 'TINOC',
                'code' => 142710,
                'region_code' => 14,
                'province_code' => 1427,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            72 => 
            array (
                'id' => 1573,
                'city' => 'TIPO-TIPO',
                'code' => 150706,
                'region_code' => 15,
                'province_code' => 1507,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            73 => 
            array (
                'id' => 1574,
                'city' => 'TITAY',
                'code' => 98315,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            74 => 
            array (
                'id' => 1575,
                'city' => 'TIWI',
                'code' => 50518,
                'region_code' => 5,
                'province_code' => 505,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            75 => 
            array (
                'id' => 1576,
            'city' => 'TOBIAS FORNIER (DAO)',
                'code' => 60607,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            76 => 
            array (
                'id' => 1577,
                'city' => 'TOBOSO',
                'code' => 64529,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            77 => 
            array (
                'id' => 1578,
                'city' => 'TOLEDO CITY',
                'code' => 72251,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            78 => 
            array (
                'id' => 1579,
                'city' => 'TOLOSA',
                'code' => 83749,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            79 => 
            array (
                'id' => 1580,
                'city' => 'TOMAS OPPUS',
                'code' => 86418,
                'region_code' => 8,
                'province_code' => 864,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            80 => 
            array (
                'id' => 1581,
                'city' => 'TONDO I / II',
                'code' => 133901,
                'region_code' => 13,
                'province_code' => 1339,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            81 => 
            array (
                'id' => 1582,
                'city' => 'TONGKIL',
                'code' => 156615,
                'region_code' => 15,
                'province_code' => 1566,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            82 => 
            array (
                'id' => 1583,
                'city' => 'TORRIJOS',
                'code' => 174006,
                'region_code' => 17,
                'province_code' => 1740,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            83 => 
            array (
                'id' => 1584,
            'city' => 'TRECE MARTIRES CITY (Capital)',
                'code' => 42122,
                'region_code' => 4,
                'province_code' => 421,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            84 => 
            array (
                'id' => 1585,
                'city' => 'TRENTO',
                'code' => 160312,
                'region_code' => 16,
                'province_code' => 1603,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            85 => 
            array (
                'id' => 1586,
                'city' => 'TRINIDAD',
                'code' => 71244,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            86 => 
            array (
                'id' => 1587,
                'city' => 'TUAO',
                'code' => 21528,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            87 => 
            array (
                'id' => 1588,
                'city' => 'TUBA',
                'code' => 141113,
                'region_code' => 14,
                'province_code' => 1411,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            88 => 
            array (
                'id' => 1589,
                'city' => 'TUBAJON',
                'code' => 168507,
                'region_code' => 16,
                'province_code' => 1685,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            89 => 
            array (
                'id' => 1590,
                'city' => 'TUBAO',
                'code' => 13320,
                'region_code' => 1,
                'province_code' => 133,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            90 => 
            array (
                'id' => 1591,
                'city' => 'TUBARAN',
                'code' => 153628,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            91 => 
            array (
                'id' => 1592,
                'city' => 'TUBAY',
                'code' => 160211,
                'region_code' => 16,
                'province_code' => 1602,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            92 => 
            array (
                'id' => 1593,
                'city' => 'TUBIGON',
                'code' => 71245,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            93 => 
            array (
                'id' => 1594,
                'city' => 'TUBLAY',
                'code' => 141114,
                'region_code' => 14,
                'province_code' => 1411,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            94 => 
            array (
                'id' => 1595,
                'city' => 'TUBO',
                'code' => 140126,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            95 => 
            array (
                'id' => 1596,
                'city' => 'TUBOD',
                'code' => 166727,
                'region_code' => 16,
                'province_code' => 1667,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            96 => 
            array (
                'id' => 1597,
            'city' => 'TUBOD (Capital)',
                'code' => 103522,
                'region_code' => 10,
                'province_code' => 1035,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            97 => 
            array (
                'id' => 1598,
                'city' => 'TUBUNGAN',
                'code' => 63046,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            98 => 
            array (
                'id' => 1599,
                'city' => 'TUBURAN',
                'code' => 72252,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            99 => 
            array (
                'id' => 1600,
                'city' => 'TUBURAN',
                'code' => 150707,
                'region_code' => 15,
                'province_code' => 1507,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            100 => 
            array (
                'id' => 1601,
                'city' => 'TUDELA',
                'code' => 72253,
                'region_code' => 7,
                'province_code' => 722,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            101 => 
            array (
                'id' => 1602,
                'city' => 'TUDELA',
                'code' => 104216,
                'region_code' => 10,
                'province_code' => 1042,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            102 => 
            array (
                'id' => 1603,
                'city' => 'TUGAYA',
                'code' => 153629,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            103 => 
            array (
                'id' => 1604,
            'city' => 'TUGUEGARAO CITY (Capital)',
                'code' => 21529,
                'region_code' => 2,
                'province_code' => 215,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            104 => 
            array (
                'id' => 1605,
                'city' => 'TUKURAN',
                'code' => 97330,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            105 => 
            array (
                'id' => 1606,
                'city' => 'TULUNAN',
                'code' => 124714,
                'region_code' => 12,
                'province_code' => 1247,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            106 => 
            array (
                'id' => 1607,
                'city' => 'TUMAUINI',
                'code' => 23137,
                'region_code' => 2,
                'province_code' => 231,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            107 => 
            array (
                'id' => 1608,
                'city' => 'TUNGA',
                'code' => 83750,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            108 => 
            array (
                'id' => 1609,
                'city' => 'TUNGAWAN',
                'code' => 98316,
                'region_code' => 9,
                'province_code' => 983,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            109 => 
            array (
                'id' => 1610,
                'city' => 'TUPI',
                'code' => 126317,
                'region_code' => 12,
                'province_code' => 1263,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            110 => 
            array (
                'id' => 1611,
                'city' => 'TURTLE ISLANDS',
                'code' => 157008,
                'region_code' => 15,
                'province_code' => 1570,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            111 => 
            array (
                'id' => 1612,
                'city' => 'TUY',
                'code' => 41034,
                'region_code' => 4,
                'province_code' => 410,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            112 => 
            array (
                'id' => 1613,
                'city' => 'UBAY',
                'code' => 71246,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            113 => 
            array (
                'id' => 1614,
                'city' => 'UMINGAN',
                'code' => 15544,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            114 => 
            array (
                'id' => 1615,
                'city' => 'UNGKAYA PUKAN',
                'code' => 150711,
                'region_code' => 15,
                'province_code' => 1507,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            115 => 
            array (
                'id' => 1616,
                'city' => 'UNISAN',
                'code' => 45649,
                'region_code' => 4,
                'province_code' => 456,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            116 => 
            array (
                'id' => 1617,
                'city' => 'UPI',
                'code' => 153815,
                'region_code' => 15,
                'province_code' => 1538,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            117 => 
            array (
                'id' => 1618,
                'city' => 'URBIZTONDO',
                'code' => 15545,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            118 => 
            array (
                'id' => 1619,
                'city' => 'USON',
                'code' => 54121,
                'region_code' => 5,
                'province_code' => 541,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            119 => 
            array (
                'id' => 1620,
                'city' => 'UYUGAN',
                'code' => 20906,
                'region_code' => 2,
                'province_code' => 209,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            120 => 
            array (
                'id' => 1621,
                'city' => 'VALDERRAMA',
                'code' => 60618,
                'region_code' => 6,
                'province_code' => 606,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            121 => 
            array (
                'id' => 1622,
                'city' => 'VALENCIA',
                'code' => 71247,
                'region_code' => 7,
                'province_code' => 712,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            122 => 
            array (
                'id' => 1623,
            'city' => 'VALENCIA (LUZURRIAGA)',
                'code' => 74623,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            123 => 
            array (
                'id' => 1624,
                'city' => 'VALLADOLID',
                'code' => 64530,
                'region_code' => 6,
                'province_code' => 645,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            124 => 
            array (
                'id' => 1625,
                'city' => 'VALLEHERMOSO',
                'code' => 74624,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            125 => 
            array (
                'id' => 1626,
                'city' => 'VERUELA',
                'code' => 160313,
                'region_code' => 16,
                'province_code' => 1603,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            126 => 
            array (
                'id' => 1627,
                'city' => 'VICTORIA',
                'code' => 43430,
                'region_code' => 4,
                'province_code' => 434,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            127 => 
            array (
                'id' => 1628,
                'city' => 'VICTORIA',
                'code' => 84823,
                'region_code' => 8,
                'province_code' => 848,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            128 => 
            array (
                'id' => 1629,
                'city' => 'VICTORIA',
                'code' => 36917,
                'region_code' => 3,
                'province_code' => 369,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            129 => 
            array (
                'id' => 1630,
                'city' => 'VICTORIA',
                'code' => 175215,
                'region_code' => 17,
                'province_code' => 1752,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            130 => 
            array (
                'id' => 1631,
                'city' => 'VIGA',
                'code' => 52010,
                'region_code' => 5,
                'province_code' => 520,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            131 => 
            array (
                'id' => 1632,
                'city' => 'VILLABA',
                'code' => 83751,
                'region_code' => 8,
                'province_code' => 837,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            132 => 
            array (
                'id' => 1633,
                'city' => 'VILLANUEVA',
                'code' => 104326,
                'region_code' => 10,
                'province_code' => 1043,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            133 => 
            array (
                'id' => 1634,
                'city' => 'VILLAREAL',
                'code' => 86021,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            134 => 
            array (
                'id' => 1635,
                'city' => 'VILLASIS',
                'code' => 15547,
                'region_code' => 1,
                'province_code' => 155,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            135 => 
            array (
                'id' => 1636,
                'city' => 'VILLAVERDE',
                'code' => 25014,
                'region_code' => 2,
                'province_code' => 250,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            136 => 
            array (
                'id' => 1637,
                'city' => 'VILLAVICIOSA',
                'code' => 140127,
                'region_code' => 14,
                'province_code' => 1401,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            137 => 
            array (
                'id' => 1638,
                'city' => 'VINCENZO A. SAGUN',
                'code' => 97341,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            138 => 
            array (
                'id' => 1639,
                'city' => 'VINTAR',
                'code' => 12823,
                'region_code' => 1,
                'province_code' => 128,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            139 => 
            array (
                'id' => 1640,
                'city' => 'VINZONS',
                'code' => 51612,
                'region_code' => 5,
                'province_code' => 516,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            140 => 
            array (
                'id' => 1641,
            'city' => 'VIRAC (Capital)',
                'code' => 52011,
                'region_code' => 5,
                'province_code' => 520,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            141 => 
            array (
                'id' => 1642,
                'city' => 'WAO',
                'code' => 153630,
                'region_code' => 15,
                'province_code' => 1536,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            142 => 
            array (
                'id' => 1643,
                'city' => 'ZAMBOANGA CITY',
                'code' => 97332,
                'region_code' => 9,
                'province_code' => 973,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            143 => 
            array (
                'id' => 1644,
                'city' => 'ZAMBOANGUITA',
                'code' => 74625,
                'region_code' => 7,
                'province_code' => 746,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            144 => 
            array (
                'id' => 1645,
                'city' => 'ZARAGOZA',
                'code' => 34932,
                'region_code' => 3,
                'province_code' => 349,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            145 => 
            array (
                'id' => 1646,
                'city' => 'ZARRAGA',
                'code' => 63047,
                'region_code' => 6,
                'province_code' => 630,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
            146 => 
            array (
                'id' => 1647,
                'city' => 'ZUMARRAGA',
                'code' => 86023,
                'region_code' => 8,
                'province_code' => 860,
                'created_at' => '2021-10-13 20:36:07',
                'updated_at' => '2021-10-13 20:36:07',
            ),
        ));
        
        
    }
}