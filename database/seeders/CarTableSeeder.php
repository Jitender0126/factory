<?php

namespace Database\Seeders;
use App\Models\Car;
use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bmw=new Car;
        $bmw->make="BMW";
        $bmw->model="E43i";
        $bmw->year=2008;
        $bmw->mileage=12000;
        $bmw->displacement=3.2;
        $bmw->save();


        $vw=new Car;
        $vw->make="VW";
        $vw->model="Polo";
        $vw->year=2012;
        $vw->mileage=20000;
        $vw->displacement=2.2;
        $vw->save();

    }
}
