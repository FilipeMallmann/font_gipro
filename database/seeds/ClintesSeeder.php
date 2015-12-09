<?php

use Illuminate\Database\Seeder;
use App\clientes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades;

class ClintesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $faker = Faker\Factory::create();

        DB::tabel('clientes')->insert([
            'nome' => $faker->name,
            'fone' => random_int(11111111,99999999),
            'Andamento' => $faker->paragraph(5)

        ]);

       /* $dummy = clientes::create([
            'nome' => 'nome fake',
            'fone' => '54646',
            'Andamento' => '34tdfdg54tgv5gvdfbd\nhfgh6hb'
        ]); */




        /*
        DB::table('clientsssses')->insert(
                [
                'nome' => $faker->name,
                'fone' => $faker->bankAccountNumber,
                'DtNascimento' => $faker->date(),
                'email' => $faker->email,
                'Andamento' => $faker->paragraph(4)


                ]
        );
        */
    }
}
