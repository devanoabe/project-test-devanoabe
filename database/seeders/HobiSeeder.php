<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hobis')->insert([
            'title' => 'Nonton',
            'slug' => 'nonton',
            'content' => 'Menonton film atau acara TV dapat memberikan banyak manfaat dan fungsinya tergantung pada jenis tontonan yang dipilih serta frekuensi menontonnya. Beberapa manfaat menonton film atau acara TV antara lain:
            Hiburan: Menonton film atau acara TV dapat memberikan hiburan dan menghilangkan kebosanan. Hal ini dapat membantu seseorang untuk bersantai dan melepas stres.
            Meningkatkan Pengetahuan: Beberapa film dan acara TV dapat membantu meningkatkan pengetahuan dan wawasan seseorang. Film dokumenter atau acara TV yang edukatif dapat membantu seseorang untuk mempelajari hal-hal baru atau memperdalam pengetahuan di bidang tertentu.',
            'draft' => 0
        ]);
    }
}

