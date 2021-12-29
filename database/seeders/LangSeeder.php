<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lang')->insert([
            'lang' => 'pt',
            'codLang' => 1,
            'estado' => 1,
            'ordem' => 1
        ]);
    }
}
