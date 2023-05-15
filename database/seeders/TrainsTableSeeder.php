<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<20;$i++)
        {
            $newTrain = new Train();
            $newTrain->Azienda = 'Italo';
            $newTrain->Stazione_di_partenza = $faker->city();
            $newTrain->Stazione_di_Arrivo = $faker->city();
            $newTrain->Orario_di_partenza = $faker->date('2024-12-31');;
            $newTrain->Orario_di_arrivo = $faker->date('2024-12-31');;
            $newTrain->In_orario = $faker->boolean();
            $newTrain->Cancellato = $faker->boolean();
            $newTrain->Codice_treno = $faker->randomNumber(5, true);
            $newTrain->save();
        }
    }
}
