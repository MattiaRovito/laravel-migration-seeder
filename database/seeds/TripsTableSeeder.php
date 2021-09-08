<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){

            // creiamo una nuova istanza
            $newtrip = new Trip(); 

            // popoliamo le righe della tabella con dei valori fake
            $newtrip->title_package = 'Pacchetto numero ' . $i;
            $newtrip->country = 'Italy';
            $newtrip->days = rand(1,7);
            $newtrip->price = rand(20000, 3200000);
            

            // salviamo la nuova istanza nella tabella
            $newtrip->save();            


         

        }
    }
}
