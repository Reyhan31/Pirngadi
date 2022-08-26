<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class starterDetail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('product')->insert([
            [
                "name" => "Allen Bradley - 1502 Model - 1200 Amp - 5000 / 2400 Volt Starter",
                "category" => "Starters",
                "partModelNo" => "",
                "modelNo" => "1502",
                "partNo" => "1512-002",
                "type" => "1502",
                "UNSPSC" => "",
                "contractorType" => "",
                "brandName" => "Allen Bradley",
                "vacuumAir" => "Vacuum",
                "rollSlideFixed" => "Fixed",
                "primaryVoltage" => "5000 / 2400",
                "amps" => "1200",
                "controlVoltage" => "2300 / 120 AC",
                "desc" => 'Structure Series D, Nema Type :  1, Unit A 260 Amps Max, Unit B 300 Amps Max',
                "additionalKeywords" => "Rockwell, Centerline",
                "price" => "* please call or request quote",
                "shippingWeight" => "",
                "image" => ""
            ],
            [
                "name" => "Cutler-Hammer - 3 Amp - 120 Volt Starter",
                "category" => "Starters",
                "partModelNo" => "",
                "modelNo" => "",
                "partNo" => "EMA72",
                "type" => "MV801",
                "UNSPSC" => "",
                "contractorType" => "",
                "brandName" => "Cutler-Hammer",
                "vacuumAir" => "Solid State",
                "rollSlideFixed" => "",
                "primaryVoltage" => "120",
                "amps" => "3",
                "controlVoltage" => "24 DC",
                "desc" => 'Controller',
                "additionalKeywords" => "Intelligent Technologies",
                "price" => "* please call or request quote",
                "shippingWeight" => "",
                "image" => ""
            ],
            [
                "name" => "General Electric - 2957B104A Model - 700 Amp - 5000 Volt Starter",
                "category" => "Starters",
                "partModelNo" => "2957B104A",
                "modelNo" => "",
                "partNo" => "",
                "type" => "",
                "UNSPSC" => "",
                "contractorType" => "",
                "brandName" => "General Electric",
                "vacuumAir" => "",
                "rollSlideFixed" => "Fixed",
                "primaryVoltage" => "5000",
                "amps" => "700",
                "controlVoltage" => "",
                "desc" => 'Limitamp Substructure',
                "additionalKeywords" => "",
                "price" => "* please call or request quote",
                "shippingWeight" => "",
                "image" => ""
            ],
        ]);
    }
}
